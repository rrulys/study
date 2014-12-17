@extends('layout')

@section('content')
	  <div class="row">
	    <div class="small-12 medium-12 large-12 columns">
	      <div class="row collapse postfix-radius">
	      	<div class="small-2 medium-2 large-2 columns">
						<select style="margin: 0px;" id="region" name="region">

							<option value="" disabled selected>Select region</option>
							<option value="BR">Brazil</option>
							<option value="EUNE">EU Nordic &amp; East</option>
							<option value="EUW">EU West</option>
							<option value="KR">Korea</option>
							<option value="LAN">Latin America North</option>
							<option value="LAS">Latin America South</option>
							<option value="NA">North America</option>
							<option value="OCE">Oceania</option>
							<option value="RU">Russia</option>
							<option value="TR">Turkey</option>
						</select>
						<a style="font-size: 11px;" href="javascript:;" id="autoselect-region">Autoselect</a>
	      	</div>
	        <div class="small-8 medium-8 large-8 columns">
	          <input id="search-autocomplete" class="radius" type="text" name="nickname" placeholder="Enter summoner name">
	        </div>
	        <div class="small-2 medium-2 large-2 columns" >
	         <button type="button" class="button postfix" id="search">Search</button>
	        </div>
	      </div>
	    </div>
	  </div>

	  <div class="row">
	  	<div class="small-12 medium-12 large-12 columns">
	  		<div id="data"></div>
	  	</div>
	  </div>

@stop()