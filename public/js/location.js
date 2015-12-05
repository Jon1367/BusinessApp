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
 .controller('searchController', ['$scope', '$http', function($scope,$http){
       
        $http({
          method: 'GET',
          url: '/getContent'
        }).then(function successCallback(response) {
            // this callback will be called asynchronously
            // when the response is available
            console.log('Good :)');
            console.log(response);

            $scope.usersContent = response.data.data;

            //console.log($scope.userBM )
          }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.

            console.log('Error -__-');
            console.log(response);

          });

 }])
 .controller('createController', ['$scope', '$http', function($scope,$http){
       

       //  Get  user's Current Business Mdeal
        $http({
          method: 'GET',
          url: '/getUser'
        }).then(function successCallback(response) {
            // this callback will be called asynchronously
            // when the response is available
            console.log('Good :)');
            //console.log(response);

            $scope.userBM = response.data.data;

            console.log($scope.userBM);
          }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.

            console.log('Error -__-');
            console.log(response);

          });

          // Add to DB
          $scope.addKeyPartner = function(table){


            console.log($scope.note);
            console.log($scope.noteContent);
            console.log(table);

            $http({
              method: 'GET',
              url: '/updateNote/' + $scope.noteContent + '/' + table + '/' + $scope.note 
            }).then(function successCallback(response) {

                console.log('Good :)');
                console.log(response);


             
              }, function errorCallback(response) {

                console.log('Error -__-');
                console.log(response);

              });

          }

          // Save Title
          $scope.saveTitle = function(){

            console.log($scope.title);

           // Get  user's Current Business Mdeal
            $http({
              method: 'GET',
              url: '/addTitle/' + $scope.title
            }).then(function successCallback(response) {
                // this callback will be called asynchronously
                // when the response is available
                console.log('Good :)');
                console.log(response);

              }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.

                console.log('Error -__-');
                console.log(response);

              });

          }

          $scope.deleteNote = function(info){



           //  Get  user's Current Business Mdeal
            $http({
              method: 'GET',
              url: '/updateNote/' + info.type + '/' + info.value 
            }).then(function successCallback(response) {
                // this callback will be called asynchronously
                // when the response is available
                console.log('Good :)');
                console.log(response);

              }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.

                console.log('Error -__-');
                console.log(response);

              });


          }
          // =====================  Filters ===========================
          $scope.filterKey = function(info)
          {

            // console.log('Filter');
            // console.log(info);

            if(info.type === 'keyPartners'){

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


          $scope.filterVp = function(info)
          {

            // console.log('Filter');
            // console.log(info);

            if(info.type === 'Value Propositions'){

              return true;

            }else{

              return false;

            }

          }

          $scope.filterCR = function(info)
          {

            // console.log('Filter');
            // console.log(info);

            if(info.type === 'Customer Relationships'){

              return true;

            }else{

              return false;

            }

          }
          $scope.filterCS = function(info)
          {

            // console.log('Filter');
            // console.log(info);

            if(info.type === 'Customer Segments'){

              return true;

            }else{

              return false;

            }

          }
          
          $scope.filterCStr = function(info)
          {

            // console.log('Filter');
            // console.log(info);

            if(info.type === 'Cost Structure'){

              return true;

            }else{

              return false;

            }

          }
          $scope.filterRS = function(info)
          {

            // console.log('Filter');
            // console.log(info);

            if(info.type === 'Revenue Streams'){

              return true;

            }else{

              return false;

            }

          }
}])
 .controller('inboxController', ['$scope', function($scope){
       


}]);

