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
    <link rel="stylesheet" type="text/css" href="browse_page.css">

    <title>Browse Page</title>
</head>
<body>
    <div class="container-fluid">
        <!-- Search Bar -->
        <div class="row">
            <form id="search">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>

        <!-- Google Maps -->
        <div id="map"></div>

        <div class="row">
            <h5 class="title"> In Your Area </h5>
            
            <div class="card-deck">
                <div class="card w-100">
                    <iframe width="300" height="180" src="https://www.youtube.com/embed/x--yddOolRQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
        
                <div class="card w-100">
                    <iframe width="300" height="180" src="https://www.youtube.com/embed/-ZTsgbrdoI8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
        
                <div class="card w-100">
                    <iframe width="300" height="180" src="https://www.youtube.com/embed/Imt0q-7LAVI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <h5 class="title"> Following </h5>
          </div>
            
            <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel"></div>
                <div id="carousel-inner" class="row"> -->
                    <!-- <div class="carousel-item active"> -->
                    <div id="cards" class="row">
                      <!-- <div class="user-card col-md-3 col-lg-3">
                        <a href="frontend/profile_page.html">
                            <img class="card-img-top" alt="" src="https://res.cloudinary.com/fleetnation/image/private/c_fit,w_1120/g_south,l_text:style_gothic2:%C2%A9%20Steven%20Gill,o_20,y_10/g_center,l_watermark4,o_25,y_50/v1533400484/qqlf9urey0dlfbmjdykt.jpg" data-holder-rendered="true">
                        </a>
                        <div class="card-body">
                                <h5 class="card-title"> Mary </h5>
                        </div>
                      </div> -->
                    </div>


                    <!-- </div> -->
                
                    <!-- <div class="carousel-item active">
                        <img class="card-img-top" src="images/catimage4.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">  </h4>
                        </div>
                    </div>
            
                    <div class="carousel-item active">
                        <img class="card-img-top" src="images/catimage3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">  </h4>
                            <p class="card-text"></p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="card-img-top" src="images/catimage4.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">  </h4>
                            <p class="card-text"></p>
                        </div>
                    </div> -->

                    <!-- <a class="carousel-control-prev left" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next right" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                <!-- </div>   
            </div> -->
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