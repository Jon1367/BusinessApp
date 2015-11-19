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

          // Add to DB
          $scope.addKeyPartner = function(){

            var table = 'Key Partners';

            console.log($scope.keyPartner);

            $http({
              method: 'GET',
              url: '/updateUserBM/'+ $scope.keyPartner +'/' + table
            }).then(function successCallback(response) {

                console.log('Good :)');
                console.log(response);



                console.log($scope.userBM )
              }, function errorCallback(response) {

                console.log('Error -__-');
                console.log(response);

              });

          }

          $scope.filterKey = function(info)
          {

            // console.log('Filter');
            // console.log(info);

            if(info.type === 'Key Partners'){

              return true;

            }else{

              return false;

            }

          }
            
          $scope.filterActivities = function(info)
          {

            // console.log('Filter');
            // console.log(info);

            if(info.type === 'Key Activities'){

              return true;

            }else{

              return false;

            }
            
          }


}])
 .controller('inboxController', ['$scope', function($scope){
       


}]);

