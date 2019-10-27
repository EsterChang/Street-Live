<?php
require('template/top.php');
head('Home', true, '/', false, array('Home' => '/'));
?>
<style>
	#map {
		width: 100%;
		height: calc(100vh - 135px);
	}
	#map img {
		position: relative;
		left: -39px;
		top: -39px;
	}
	.gif-container {
		border: 2px solid #d09fe8;
		border-radius: 130px;
		border-width: 12px;
		display: inline-block;
		width: 201px;
		overflow: hidden;
		height: 201px;
		
		position: absolute;
		top: 50%;
		left: 50%;
		-ms-transform: translate(-50%, -50%));
  		transform: translate(-50%, -50%);
	}
	.loader-container {
		margin-top: 50px;
		width: 100%;
		height: 100%;
		position: relative;
	}
	.content, .content-page, .container-fluid {
		padding: 0px;
	}
</style>

<!-- Google Maps -->
<div id="map">
	<div class="loader-container">
		<div class="gif-container">
			<img src="/assets/images/map-loader.gif"/>
		</div>
	</div>
</div>

<?php
footer(false);
?>
<script>
function initMap() {
	console.log('Map is ready');
	
	var promise = new Promise(function(resolve, reject) {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition, showError);
		} else {
			reject('Geolocation is not supported by this browser.');
		}

		function showPosition(position) {
			//console.log("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
			console.log('Map init ready');
			resolve([position.coords.latitude, position.coords.longitude]);
		}

		function showError(error) {
		  switch(error.code) {
			case error.PERMISSION_DENIED:
			  reject('User denied the request for Geolocation.');
			  break;
			case error.POSITION_UNAVAILABLE:
			  reject('Location information is unavailable.');
			  break;
			case error.TIMEOUT:
			  reject('The request to get user location timed out.');
			  break;
			case error.UNKNOWN_ERROR:
			  reject('An unknown error occurred.');
			  break;
		  }
		}
	})

	promise.catch(function(data) {
		console.error("Failed to load map", data);
	});

	promise.then(function(data) {
		var latitude = data[0];
		var longitude = data[1];
		
		console.log("Lat, Lon", latitude, longitude);
		
		var city = {lat: latitude, lng: longitude};

		var map = new google.maps.Map(
			document.getElementById('map'), {
				zoom: 16, 
				center: city,
				styles: [
				{elementType: 'geometry', stylers: [{color: '#242f3e'}]},
				{elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
				{elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
				{
				  featureType: 'administrative.locality',
				  elementType: 'labels.text.fill',
				  stylers: [{color: '#d59563'}]
				},
				{
				  featureType: 'poi',
				  elementType: 'labels.text.fill',
				  stylers: [{color: '#d5e6f7'}]
				},
				{
				  featureType: 'poi.park',
				  elementType: 'labels.text.fill',
				  stylers: [{color: '#6b9a76'}]
				},
				{
				  featureType: 'road',
				  elementType: 'geometry',
				  stylers: [{color: '#3973ad'}]
				},
				{
				  featureType: 'road',
				  elementType: 'geometry.stroke',
				  stylers: [{color: '#212a37'}]
				},
				{
				  featureType: 'road',
				  elementType: 'labels.text.fill',
				  stylers: [{color: '#9ca5b3'}]
				},
				{
				  featureType: 'road.highway',
				  elementType: 'geometry',
				  stylers: [{color: '#a989c9'}]
				},
				{
				  featureType: 'road.highway',
				  elementType: 'geometry.stroke',
				  stylers: [{color: '#1f2835'}]
				},
				{
				  featureType: 'road.highway',
				  elementType: 'labels.text.fill',
				  stylers: [{color: '#f3d19c'}]
				},
				{
				  featureType: 'transit',
				  elementType: 'geometry',
				  stylers: [{color: '#2f3948'}]
				},
				{
				  featureType: 'transit.station',
				  elementType: 'labels.text.fill',
				  stylers: [{color: '#d59563'}]
				},
				{
				  featureType: 'water',
				  elementType: 'geometry',
				  stylers: [{color: '#17263c'}]
				},
				{
				  featureType: 'water',
				  elementType: 'labels.text.fill',
				  stylers: [{color: '#515c6d'}]
				},
				{
				  featureType: 'water',
				  elementType: 'labels.text.stroke',
				  stylers: [{color: '#17263c'}]
				}
			  ]
			});

		var marker = new google.maps.Marker({
			position: city,
			map: map,
			icon: '/assets/images/map-pointer.png'
		});
		
		var contentString = '<p>Performer: <b></b> Location: </p>';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		marker.addListener('click', function() {
			infowindow.open(map, marker);
		});
		
		google.maps.event.addListener(map, "click", function(event) {
			infowindow.close();
		});
	});
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApJJg6RSH7MlCgOAMH9s5xcvbdbiiuSkw&callback=initMap"></script>