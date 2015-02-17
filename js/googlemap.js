var map;
var markers = [];

function initialize() {
            
  //getLocation();

  var mapOptions = {
    center: new google.maps.LatLng(0.0,0.0),
    zoom: 2
  };

  map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
  
  //add markers
  addMarkers();
}
/*
function getLocation(){
  if(navigator.geolocation){
     navigator.geolocation.getCurrentPosition(showPosition);
   }
  else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position){

  var lat = position.coords.latitude;
  var lng = position.coords.longitude;

  //set the center to user's current location
  map.setCenter(new google.maps.LatLng(lat, lng));
}
*/
function addMarkers(locations){

  if(locations===undefined){
    return;
  }

  //clear the map and the markers array
  for(var i=0;i<markers.length;i++){
    markers[i].setMap(null);
  }

  markers = [];

  //test marker HPO lat: 7.066503 and long: 125.614515
  for(var i=0;i<locations.length;i++){

    var coordinates = locations[i].geometry.coordinates;

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(coordinates[1],coordinates[0]),
      title: locations[i].properties.title
    });

    markers.push(marker); 

    // To add the marker to the map, call setMap();
    marker.setMap(map);
  }    
}

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp?key=AIzaSyDGZ1I2a745WICZVj2M4jSwV6-QtU5ndCM' + '&signed_in=true&callback=initialize';
  document.body.appendChild(script);
}

window.onload = loadScript;

//native javascript version
function getServerData(url){

  //clear the map first
  var xmlhttp;
  if(window.XMLHttpRequest){
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else {
    // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      //parse the JSON text to object
      var response = JSON.parse(xmlhttp.responseText);

      var locations = [];

      //get all locations
      for(var i=0;i<response.features.length;i++){
        var earthquakeProp = response.features[i];
        locations.push(earthquakeProp);
      }

      //console.log(locations.length);
      addMarkers(locations);
    }
  }

  xmlhttp.open("GET",url,true);
  xmlhttp.send();

}