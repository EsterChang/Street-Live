<?php
require('template/top.php');
head('Home', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <script src="js/bootstrap.js"></script>
    <script src="browse_page.js"></script>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stream_page.css">

    <title>Stream Page</title>
</head>
<body>
  <div class="container">
    <div class='row'>
      <iframe width=100% height=500px></iframe>
    </div>
    <div class='row'>
      <div class="col-md-3">
        <button type="button" class="btn btn-primary btn-block">Follow</button>
      </div>
      <div class="col-md-9">
        <button type="button" class="btn btn-success btn-block">Donate</button>
      </div>
    </div>
  </div>
</body>
</html>



<?php
footer(false);
?>


<script> 

    // $('carousel').carousel();

    // $('.carousel-control-prev.left').click(function() {
    //     $('#myCarousel').carousel('prev');
    // });

    // $('.carousel-control-next.right').click(function() {
    //     $('#myCarousel').carousel('next');
    // });

function initMap() {
  
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 8, 
            center: {lat: 33.011, lng: -82.984},
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
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
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
              stylers: [{color: '#746855'}]
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
  
    var city2 = {lat: 33.248, lng: -83.441};
    var city = {lat: 33.011, lng: -82.984};
    var city3 = {lat: 32.87, lng: -84.02};
    var marker = new google.maps.Marker({position: city, map: map});
    var marker2 = new google.maps.Marker({position: city2, map: map});
    var marker3 = new google.maps.Marker({position: city3, map: map});
    var contentString1 = '<object width="425" height="344"><param name="movie" value="https://www.youtube.com/embed/x--yddOolRQ"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/UmFjNiiVk9w?fs=1" type="application/x-shockwave-flash" width="425" height="344" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
    var contentString2 = '<object width="425" height="344"><param name="movie" value="https://www.youtube.com/embed/-ZTsgbrdoI8"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/UmFjNiiVk9w?fs=1" type="application/x-shockwave-flash" width="425" height="344" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
    var contentString3 = '<object width="425" height="344"><param name="movie" value="https://www.youtube.com/embed/Imt0q-7LAVI"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/UmFjNiiVk9w?fs=1" type="application/x-shockwave-flash" width="425" height="344" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
    var infowindow = new google.maps.InfoWindow({
      content: contentString1
    });
    var infowindow2 = new google.maps.InfoWindow({
      content: contentString2
    });
    var infowindow3 = new google.maps.InfoWindow({
      content: contentString3
    });

    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });

    marker2.addListener('click', function() {
      infowindow2.open(map, marker2);
    });

    marker3.addListener('click', function() {
      infowindow3.open(map, marker3);
    });

    $.get("/libs/docs_in_collection.php", {collection: "Streams"}, function(data) {
        console.log('data');
        console.log(data);
        let streamInfo = JSON.parse(data);
        console.log(streamInfo);

        // for (stream of streamInfo) {

        // }
    }).fail(function(err) {
        console.log('error');
        console.log(err);
    });

}

</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApJJg6RSH7MlCgOAMH9s5xcvbdbiiuSkw&callback=initMap"></script>