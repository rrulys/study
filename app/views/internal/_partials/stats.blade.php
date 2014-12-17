@if ($stats)
	@foreach($stats['playerStatSummaries'] as $stat)
		<table width="100%">
		<tr><th class="text-left">Type</th><th class="text-right">Wins</th></tr>
		<tr><td class="text-left">{{ $stat['playerStatSummaryType'] }}</td><td class="text-right">{{ $stat['wins'] }}</td></tr>
		@if (count($stat['aggregatedStats']) > 0)
			<tr><th class="text-left">Name</th><th class="text-right">Count</th></tr>
			@foreach($stat['aggregatedStats'] as $key => $details)
				<tr><td class="text-left"><b>{{$key}}</b></td><td class="text-right">{{$details}}</td></tr>
			@endforeach
		@endif
		</td></tr>
		</table>

	@endforeach
@endif

