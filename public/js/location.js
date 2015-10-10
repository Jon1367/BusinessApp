    var x = document.getElementById("demo");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
function showPosition(position) {
$.ajax({
 url: '/hello/'+ position.coords.latitude + '/'+ position.coords.longitude,
 method: 'GET',
 success: function(data){
  console.log(data);
 }
});
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;  
}