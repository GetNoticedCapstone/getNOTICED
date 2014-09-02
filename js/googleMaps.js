/* 
This jquery function has been created to work with google map api inorder to 
create custom google map with pinpoint of the school address. 
 */

function configMap(){
    var settings = {
        zoom: 15,
        center: new google.maps.LatLng(41.66154119999999,-71.51745410000001),
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var googleMap = document.getElementById('googleMap');
    
    var map = new google.maps.Map(googleMap, settings);
    google.maps.event.addListenerOnce(map, 'idle', function() {
    google.maps.event.trigger(map, 'resize');
    map.setCenter(marker.getPosition());
    });
    var markerCoords = new google.maps.LatLng(41.66154119999999,-71.51745410000001);
    var marker = new google.maps.Marker({
        position: markerCoords,
        map: map,
        title: "address"
    });
    var markerContent = '1 New England Tech Blvd, East Greenwich, RI 02816';
    var infoWindow = new google.maps.InfoWindow({
       content: markerContent 
    });
    google.maps.event.addListener(marker , 'click' , function(){
        infoWindow.open(map,marker);
    });
}
 google.maps.event.addDomListener(window, 'load', configMap);
