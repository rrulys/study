var current_audio = document.getElementById('soundtrack');
var regions = {
  'EUW' : ['GB','DE','DK'],
  'EUNE': ['LT','NO','SE']
};

current_audio.onended = function() {
	switch_audio();
};

function switch_audio() {
	current_audio.pause();
	current_audio.currentTime = 0;
	if (current_audio.id == 'soundtrack') {
		current_audio = document.getElementById('soundtrack2');
	} else { current_audio = document.getElementById('soundtrack'); }
	$('.fa-play').removeClass('fa-play').addClass('fa-pause');
	current_audio.play();
}

function findRegion(code) {
  current_region = false;
  $.each(regions, function(region, countries) { 
    if ($.inArray(code, countries) > -1) {
      current_region = region;
    }
  });
  return current_region;
}



$(document).ready(function() {
  $( "#search-autocomplete" ).autocomplete({
    source: Router.route('internal.autocomplete')
  });

  $('.controls').on('click', '.fa-play', function() {
  	current_audio.play();
  	$(this).removeClass('fa-play').addClass('fa-pause');
  });

  $('.controls').on('click', '.fa-pause', function() {
  	current_audio.pause();
  	$(this).removeClass('fa-pause').addClass('fa-play');
  });

  $('.fa-fast-forward').click(function() {
  	switch_audio();
  });

  $('#search').click(function() {
  	console.log('eina');
  	$("#data").load(Router.route('internal.getplayer', {player: $('#search-autocomplete').val(), region: $('#region').val()}));
  })

  $('#autoselect-region').click(function() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
          $.getJSON('http://ws.geonames.org/countryCode', {
              lat: position.coords.latitude,
              lng: position.coords.longitude,
              username: 'errant',
              type: 'JSON'
          }, function(result) {
            console.log(result);
            region = findRegion(result.countryCode);
            if (region) {
              $('#region').val(region);
            }
          });
      });
    }
  });

});

