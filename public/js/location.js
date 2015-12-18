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
    }).when('/moreInfo/:email', {
        templateUrl:'views/moreInfo.html',
        controller: 'infoController'
    }).when('/chat/:fromEmail', {
        templateUrl:'views/chat.html',
        controller: 'chatController'
    }).otherwise({
        redirectTo: '/'
    });
  })

 .controller('mainController', ['$scope', '$http', function($scope,$http){
       
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
 .controller('searchController', ['$scope', '$http', function($scope,$http){



    $scope.search = function() {

  console.log($scope.searchText);

      
       
        $http({
          method: 'GET',
          url: '/searchTitle/' + $scope.searchText 
        }).then(function successCallback(response) {
            // this callback will be called asynchronously
            // when the response is available
            console.log('Good :)');
            console.log(response);

            $scope.title = response.data.data;
        

            //console.log($scope.userBM )
          }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.

            console.log('Error -__-');
            console.log(response);

          });

    }


 }])
 .controller('createController', ['$scope', '$http', '$location', '$route' ,function($scope,$http,$location,$route){
       
    $scope.userTitle = 'Business Model Title';


       //  Get  user's Current Business Mdeal
        $http({
          method: 'GET',
          url: '/getUser'
        }).then(function successCallback(response) {
            // this callback will be called asynchronously
            // when the response is available
            console.log('Good :)');
            console.log('Get User');

            console.log(response.data.data[0]['userEmail']);

            $scope.userBM = response.data.data;

            console.log($scope.userBM);
          }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.

            console.log('Error -__-');
            console.log(response);

          });


       //  Get  user's Title
        $http({
          method: 'GET',
          url: '/getTitle'
        }).then(function successCallback(response) {
            // this callback will be called asynchronously
            // when the response is available
            console.log('Good :)');
            //console.log(response.data.data[0]);

            $scope.userTitle = response.data.data[0]['Title'];

        
          }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.

            console.log('Error -__-');
            console.log(response);

          });


          // Add to DB
          $scope.addKeyPartner = function(table){


            // console.log($scope.note);
            // console.log($scope.noteContent);
            // console.log(table);

            $http({
              method: 'GET',
              url: '/updateNote/' + $scope.noteContent + '/' + table + '/' + $scope.note 
            }).then(function successCallback(response) {

                console.log('Good :)');
                console.log(response);
               // $route.reload();


           
             
              }, function errorCallback(response) {

                console.log('Error -__-');
                console.log(response);
                ///$route.reload();



              });


                  $route.reload();

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

            $route.reload();
            

          }

          $scope.deleteNote = function(info){

           //  Get  user's Current Business Mdeal
            $http({
              method: 'GET',
              url: '/deleteNote/' + info.type + '/' + info.value 
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

            $route.reload();



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
 .controller('inboxController', ['$scope', '$http', function($scope,$http){
       
            // Get  user's Current Business Mdeal
            $http({
              method: 'GET',
              url: '/getMessages/'
            }).then(function successCallback(response) {
                // this callback will be called asynchronously
                // when the response is available
                console.log('Good :)');
                console.log(response);
  
                $scope.userList = response.data.data;


              }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.

                console.log('Error -__-');
                console.log(response);

              });   



}])
 .controller('chatController', ['$scope', '$routeParams', '$http', '$route', function($scope,$routeParams,$http,$route){
    console.log('chatController');
    console.log($routeParams.fromEmail);

            //  Get  user's Current Business Mdeafrom
            $http({
              method: 'GET',
              url: '/getUserMessages/' + $routeParams.fromEmail  
            }).then(function successCallback(response) {
                // this callback will be called asynchronously
                // when the response is available
                console.log('Good :)');
                console.log('GotUserMessages');
                console.log(response.data.data);

                $scope.userMessages = response.data.data;
   


              }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.

                console.log('Error -__-');
                console.log(response);

              }); 


            $scope.sendMessage = function(){


                        //  Get  user's Current Business Mdeal
            $http({
              method: 'GET',
              url: '/sendMessage/' + $routeParams.fromEmail + '/' + $scope.message 
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

            $route.reload();

          }
       

 }])
 .controller('infoController', ['$scope', '$routeParams', '$http' ,function($scope,$routeParams,$http){

    console.log($routeParams.email);
  
 
            //  Get  user's Current Business Mdeafrom
            $http({
              method: 'GET',
              url: '/moreInfo/' + $routeParams.email  
            }).then(function successCallback(response) {
                // this callback will be called asynchronously
                // when the response is available
                console.log('Good :)');
                console.log(response.data.data[0]['userEmail']);
                $scope.userEmail = response.data.data[0]['userEmail'];
                $scope.userTitle = response.data.data[0]['Title'];
                $scope.userBM = response.data.data;


              }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.

                console.log('Error -__-');
                console.log(response);

              });    




          $scope.sendMessage = function(toEmail){

            console.log('sendMessage model');
            console.log(toEmail);
            console.log($scope.message);


                        //  Get  user's Current Business Mdeal
            $http({
              method: 'GET',
              url: '/sendMessage/' + toEmail + '/' + $scope.message 
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

}]);

