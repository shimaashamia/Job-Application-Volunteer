
var app = angular.module("storeList", ["ngRoute"]); 
app.config(function($routeProvider) {
    $routeProvider
    
    .when("/numbers", {
      templateUrl : "views/id.blade.php",
      controller: "myCtrl",
    })
      .when("/data", {
        templateUrl : "views/index.blade.php",
        controller: "CtrlAdd",
      })
      .when("/academic", {
        templateUrl : "views/index.blade.php",
        controller: "CtrlAdd",
      })
      .when("/expertise", {
        templateUrl : "views/index.blade.php",
        controller: "CtrlAdd",
      })
      .when("/training", {
        templateUrl : "views/index.blade.php",
        controller: "CtrlAdd",
      })
      .otherwise({
        redirectTo: '/'
      })
    });
// });
// app.controller("viewCtrl", function($scope,$http) {
//  // $scope.academic=[];

// $scope.loadTasks = function () {
//   $http.get('/academic')
//       .then(function success(e) {
//          console.log(e.data.academic);
//       //    console.log(e.data.driver_list);
//            $scope.academic = e.data.academic;
//          //  $scope.academic_id = e.data.data.id;
//           // $scope.driver_list = e.data.driver_list;
//           // $scope.info_driver = e.data.info_driver;
//       });
// };
// $scope.loadTasks();

// $scope.addAcademic = function () {
//   $http({
//       method:'POST',
//       url:'/academic',
//       data:{
//       academic_id:$scope.academic_id,
//       University:$scope.University,
//       Specialization:$scope.Specialization,
//       average:$scope.average,
//       Graduation_Year:$scope.Graduation_Year,          
//   },
//   dataType:'json',
// }).then(function success(e){
//       alert('succfull');
//   }, function error(e) {
//       alert('Error');
//   });

// }
// });


// app.controller("viewExpertiseCtrl", function($scope,$http) {
//   // $scope.academic=[];
 
//  $scope.loadTasks = function () {
//    $http.get('/expertise')
//        .then(function success(e) {
//           console.log(e.data.expertise);
//        //    console.log(e.data.driver_list);
//             $scope.expertise = e.data.expertise;
//            // $scope.driver_list = e.data.driver_list;
//            // $scope.info_driver = e.data.info_driver;
//        });
//  };
//  $scope.loadTasks();
 
//  $scope.addExpertisec = function () {
//   $http({
//       method:'POST',
//       url:'/expertise',
//       data:{
//           expertise_id:$scope.expertise_id,
//           Workplace:$scope.Workplace,
//           Start_Date:$filter('date')(new Date($scope.Start_Date),'yyyy-MM-dd'),
//           Expiry_date:$filter('date')(new Date($scope.Expiry_date),'yyyy-MM-dd'),
//           Occupationn:$scope.Occupationn,          
//   },
//   dataType:'json',
// }).then(function success(e){
//       alert('succfull');
     
//   }, function error(e) {
//       alert('Error');
//   });

// }
//  });

//  app.controller("viewTrainingCtrl", function($scope,$http) {
//   // $scope.academic=[];
 
//  $scope.loadTasks = function () {
//    $http.get('/training')
//        .then(function success(e) {
//           console.log(e.data.training);
//        //    console.log(e.data.driver_list);
//             $scope.training = e.data.training;
//            // $scope.driver_list = e.data.driver_list;
//            // $scope.info_driver = e.data.info_driver;
//        });
//  };
//  $scope.loadTasks();
//  $scope.addTraining = function () {
//   $http({
//       method:'POST',
//       url:'/training',
//       data:{
//         training_id:$scope.training_id,
//           name_course:$scope.name_course,
//           Place_get:$scope.Place_get,
//           Date_get:$scope.Date_get,
//           number_hours:$scope.number_hours,          
//   },
//   dataType:'json',
// }).then(function success(e){
//       alert('succfull');
     
//   }, function error(e) {
//       alert('Error');
//   });

// }
//  });
 

app.controller("myCtrl", function($scope,$http,$window) {

  $scope.search = function () {
    alert('id_number');
    $http({
         method:'POST',
         url:'/numbers/search',
         data:{
         id_number:$scope.id_number,
         
     },
     dataType:'json',
   
    }).
    then(function success(e){
            console.log(e);
           // $scope.loadTasks();
            alert('sucssfulll');
            $window.location ='#!/data';
        }, function error(e) {
            console.log(e);
            alert('identify Error,Try to search again ');
        });   
    } 
});

app.controller("CtrlAdd", function($scope,$http,$filter) {

$scope.loadTasks = function () {
  $http.get('/data')
      .then(function success(e) {
       // alert(e.data);
         console.log(e.data.academic);
           $scope.academic = e.data.academic;
           $scope.expertise = e.data.expertise;
           $scope.training = e.data.training;
      });
};
$scope.loadTasks();

    $scope.addItem = function () {
        $http({
            method:'POST',
            url:'/data',
           // _token:"{{csrf_token()}}",
            data:{
              //  data:token,
            //body:'', _token:'{{csrf_token()}}',
            Order:$scope.Order,
            Number:$scope.Number,
            Date:$scope.Date,
            Full_Name:$scope.Full_Name,
            Governorate:$scope.Governorate,
            City:$scope.City,
            Neighborhood:$scope.Neighborhood,
            Address:$scope.Address,
            The_Phone:$scope.The_Phone,
            Call_Phone:$scope.Call_Phone,
            Email:$scope.Email,
            Occupation:$scope.Occupation,
            //headers: {'Content-Type': 'application/json'},
            //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            //_token:"{{csrf_token()}}",

        },
       // data:{body:'', _token:'{{csrf_token()}}'},
       //_token:"{{csrf_token()}}",
        dataType:'json',
    }).then(function success(e){
         alert(e.data);
            console.log(e);
           // $scope.id=e.data.id;
            $scope.academic_id = e.data.data.id;
            $scope.expertise_id = e.data.data.id;
            $scope.training_id = e.data.data.id;
            
           // $scope.loadTasks();
            alert('succfull');
         //   $window.location ='#!/academic';
        }, function error(e) {
          //  alert(e.data);
            console.log(e);
            alert('Error');
        });
     
    }


    $scope.addAcademic = function () {
        $http({
            method:'POST',
            url:'/academic',
            data:{
            academic_id:$scope.academic_id,
            University:$scope.University,
            Specialization:$scope.Specialization,
            average:$scope.average,
            Graduation_Year:$scope.Graduation_Year,          
        },
        dataType:'json',
    }).then(function success(e){
    
        // alert(e.data);
          //  console.log(e);
           // $scope.loadTasks();
            alert('succfull');
            $scope.loadTasks();

        }, function error(e) {
          //  alert(e.data);
           // console.log(e);
            alert('Error');
        });
     
    }

    $scope.addExpertisec = function () {
        $http({
            method:'POST',
            url:'/expertise',
            data:{
                expertise_id:$scope.expertise_id,
                Workplace:$scope.Workplace,
                Start_Date:$filter('date')(new Date($scope.Start_Date),'yyyy-MM-dd'),
                Expiry_date:$filter('date')(new Date($scope.Expiry_date),'yyyy-MM-dd'),
                Occupationn:$scope.Occupationn,          
        },
        dataType:'json',
    }).then(function success(e){
        // alert(e.data);
          //  console.log(e);
           // $scope.loadTasks();
            alert('succfull');
            $scope.loadTasks();
           
        }, function error(e) {
          //  alert(e.data);
           // console.log(e);
            alert('Error');
        });
     
    }


    $scope.addTraining = function () {
        $http({
            method:'POST',
            url:'/training',
            data:{
                training_id:$scope.training_id,
                name_course:$scope.name_course,
                Place_get:$scope.Place_get,
               // Date_get:$scope.Date_get,
               Date_get:$filter('date')(new Date($scope.Date_get),'yyyy-MM-dd'),
                number_hours:$scope.number_hours,          
        },
        dataType:'json',
    }).then(function success(e){
        // alert(e.data);
          //  console.log(e);
           // $scope.loadTasks();
            alert('succfull');
            $scope.loadTasks();
           
        }, function error(e) {
          //  alert(e.data);
        //    console.log(e);
            alert('Error');
        });
     
    }

});
