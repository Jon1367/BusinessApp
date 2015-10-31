




//     var x = document.getElementById("demo");
//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(showPosition);
//     } else { 
//         x.innerHTML = "Geolocation is not supported by this browser.";
//     }
// function showPosition(position) {
// $.ajax({
//  url: '/hello/'+ position.coords.latitude + '/'+ position.coords.longitude,
//  method: 'GET',
//  success: function(data){
//   console.log(data);
//  }
// });

//}


var app = angular.module('businessApp',[]);
    console.log('hello Angular');

app.controller("searchCtrl", ["$scope", "$rootScope",
  function($scope, $rootScope ,$firebaseObject ,$firebaseAuth) {

    console.log('helloCtrl');

    $scope.search = function() {
      console.log('hello');


    };

  }
]);