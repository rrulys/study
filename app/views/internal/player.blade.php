<div class="row">
	<div class="small-12 medium-12 large-12 columns">
		@if (!$player) 
			<h3 style="color: #FFFFFF;">Player not found</h3>
		@else
			@include('internal._partials.user')
			@include('internal._partials.stats')
		@endif
	</div>
</div>