<html>
	<head>
		<title>Application</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/normalize.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/foundation.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/jquery-ui.min.css') }}">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/custom.css') }}">
	</head>
	<body>


	<audio loop id="soundtrack2">
	  <source src="{{ asset('assets/media/League of Legends - Summoner\'s Rift Music - Background.mp3') }}" type="audio/mp3">
	</audio>
	<audio autoplay loop id="soundtrack">
	  <source src="{{ asset('assets/media/New Summoner\'s Rift Theme Song (League of Legends).mp3') }}" type="audio/mp3">
	</audio>

	<div class="container">
		<div class="row header">
			<div class="small-12 medium-12 large-12 columns">
				<div class="header-banner">		
					<div class="controls">
						<i class="fa fa-pause"></i>
						<i class="fa fa-fast-forward"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
			 	@yield('content')
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/javascript/jquery.js') }}"></script>
	<script src="{{ asset('assets/javascript/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/javascript/foundation.min.js') }}"></script>
	<script src="{{ asset('assets/javascript/routes.js') }}"></script>
	<script src="{{ asset('assets/javascript/common.js') }}"></script>
	<script>$(document).foundation()</script>
	</body>
</html>