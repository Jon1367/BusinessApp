/*====== Angular =======*/

var app = angular.module('businessApp',[]);


app.controller("searchCtrl", ["$scope", "$rootScope","$http",
  function($scope, $rootScope ,$http) {


    // on click search 
    $scope.search = function() {

      //ask for golocation
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            function (position) {
              $scope.$apply(function () {
                // console.log(position.coords.longitude);
                // console.log(position.coords.latitude);

                // Ajax call to send geolocation to the server to do google api call
               $http.get('/hello/'+ position.coords.latitude +'/'+position.coords.longitude).
                success(function(data) {
                    //$scope.data = data;
                    
                    // response from server
                    console.log(data);
                });




              });
            });
      }
    }

  
}]);