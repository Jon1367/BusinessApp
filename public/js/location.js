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



/* This pen is copyrighted by Intert 2015. All rights reserved. No reproduction authorized */

$(document).ready( function() {
  $('.cookies-used').fadeIn();
  setEvents();
});

setEvents = function() {
  $('.black-complete-background').click( function() {
    $('.password-reset-div').fadeOut();
  });
}

showPasswordForgotten = function() {
  $('.password-reset-div').fadeIn();
}

closePF = function() {
   $('.password-reset-div').fadeOut();
}