/*====== Angular =======*/



 var app = angular.module("businessApp", ["ngRoute"])
 .config(function($routeProvider){
      $routeProvider
    .when('/', {
        templateUrl: 'views/home.html',
        controller: 'mainController'
    }).when('/createBM', {
        templateUrl:'views/createBM.html',
        controller: 'createController'
    }).when('/search', {
        templateUrl:'views/search.html',
        controller: 'searchController'
    }).when('/inbox', {
        templateUrl:'views/inbox.html',
        controller: 'inboxController'
    }).otherwise({
        redirectTo: '/'
    });
  })

 .controller('mainController', ['$scope', function($scope){
       

 }])
 .controller('searchController', ['$scope', function($scope){
       


 }])
 .controller('createController', ['$scope', '$http', function($scope,$http){
       
   
       
        $http({
          method: 'GET',
          url: '/getUser'
        }).then(function successCallback(response) {
            // this callback will be called asynchronously
            // when the response is available
            console.log('Good :)');
            //console.log(response);

            $scope.userBM = response.data.data;

            console.log($scope.userBM )
          }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.

            console.log('Error -__-');
            console.log(response);

          });


}])
 .controller('inboxController', ['$scope', function($scope){
       


}]);

