      function initMap() {
	  
		var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
		
	
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
			
			var marker = new google.maps.Marker({
				position: pos,
				map: map,
				title: 'Hello World!'
			});
			
			var myLatLng = {lat: -20.2262 , lng: 57.4712};
			
			var marker2 = new google.maps.Marker({
				position: myLatLng,
				map: map
			});
			
			var myLatLng2 = {lat: -20.4262 , lng: 57.2712};
			
			var marker3 = new google.maps.Marker({
				position: myLatLng2,
				map: map
			});
			
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        };
		
		/* Marker
		
		var myLatLng = {lat: -25.363, lng: 131.044};

		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'Hello World!'
		});
		
		// end of merker */
		
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
	  /*
	  function initMap() {
        var uluru = {lat: -20.363, lng: 57.464};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: -20.26, lng: 57.464}
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }*/