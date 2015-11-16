/*====== Angular =======*/


// angular.module('businessApp"', ['ngRoute'])
// .config(function($routeProvider){
//     $routeProvider
//     .when('/', {
//         templateUrl: 'views/home.html',
//         controller: 'mainController'
//     }).otherwise({
//         redirectTo: '/'
//     });// redirect Closing tag

// })

// .controller('mainController', ['$scope', function($scope){
       


// }]);

 var app = angular.module("businessApp", ["ngRoute"])
 .config(function($routeProvider){
      $routeProvider
    .when('/', {
        templateUrl: 'views/home.html',
        controller: 'mainController'
    }).when('/createBM', {
        templateUrl:'views/createBM.html',
        controller: 'createController'
    }).otherwise({
        redirectTo: '/'
    });
  })

 .controller('mainController', ['$scope', function($scope){
       


}])

  .controller('createController', ['$scope', function($scope){
       


}]);

 // }]);
