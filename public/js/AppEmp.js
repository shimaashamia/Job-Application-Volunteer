
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
      .when("/viewOrder", {
        templateUrl : "views/viewOrder.blade.php",
        controller: "CtrlOrder",
      })
      .when("/view",{
        templateUrl : "views/viewOrder.blade.php",
        controller: "CtrlOrder"
    })
    .when("/edit/:id",{
      templateUrl : "views/Edit.blade.php",
      controller: "CtrlEdit"
    })
    // .when("/editac/:id",{
    //   templateUrl : "views/Edit.blade.php",
    //   controller: "CtrlEdit"
    // })
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
            Date:$filter('date')(new Date($scope.Date),'yyyy-MM-dd'),
            Full_Name:$scope.Full_Name,
            Governorate:$scope.Governorate,
            City:$scope.City,
            Neighborhood:$scope.Neighborhood,
            Address:$scope.Address,
            The_Phone:$scope.The_Phone,
            Call_Phone:$scope.Call_Phone,
            Email:$scope.Email,
            Occupation:$scope.Occupation,
            // ident_id:$scope.ident_id,
            // academic_id:$scope.academic_id,
            // expertise_id:$scope.expertise_id,
            // training_id:$scope.training_id,
        },
        dataType:'json',
    }).then(function success(e){
         alert(e.data);
            console.log(e);
           // $scope.id=e.data.id;
            //$scope.data=e.academic_id.id,
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


app.controller("CtrlOrder", function($scope,$http) {

  $scope.loadTasks = function () {
    $http.get('/data')
        .then(function success(e) {
         // alert(e.data);
           console.log(e.data);
             $scope.data = e.data.data;
             
            
        });
  };
  $scope.loadTasks();

  $scope.confirmDelete = function(id) {

    var isConfirmDelete = confirm('Are you sure you want Delete this record?');
    if (isConfirmDelete) {
        var url='/data/' + id;
        $http.delete(url).then(function (data) {
            // console.log(data);
                location.reload();
            // $scope.loadUsers();
        }, function (e) {
            // console.log(data);
            alert('Unable to delete');
        });
    } else {
        return false;
    }
  };

});


app.controller("CtrlEdit", function($scope,$http,$routeParams,$filter) {

  // $scope.loadTasks = function () {
  //   $http.get('/data')
  //       .then(function success(e) {
        
  //            $scope.academic = e.data.academic;
  //            $scope.expertise = e.data.expertise;
  //            $scope.training = e.data.training;
  //       });
  // };
  // $scope.loadTasks();
  //$scope.loadTasks();

  

$scope.loadTasks = function () {
  $http.get('/data')
      .then(function success(e) {
       // alert(e.data);
         //console.log(e.data.academic);
           $scope.academic = e.data.academic;
           $scope.expertise = e.data.expertise;
           $scope.training = e.data.training;
      });
};
$scope.loadTasks();
//   $scope.loadTasks();


  $scope.edit = function (id) {
    $http.get('/data/' + $routeParams.id + '/edit')
        .then(function success(e) {
            $scope.data = e.data.data;
        }); 
}
$scope.edit();

$scope.academicedit = function (id) {
 // alert(id);
  $http.get('/academic/' +id + '/edit')
      .then(function success(e) {
       // console.log(e.data);
          $scope.academic = e.data.academic;
      });
}
//$scope.academicedit();

$scope.expertiseedit = function (id) {
  $http.get('/expertise/' + id + '/edit')
      .then(function success(e) {
      //  console.log(e.data);
          $scope.expertise = e.data.expertise;
      });
}
//$scope.expertiseedit();


$scope.trainingedit = function (id) {
  $http.get('/training/' + id + '/edit')
      .then(function success(e) {
     //    console.log(e.data);
          $scope.training = e.data.training;
      });
}
//$scope.trainingedit();


$scope.update = function (id) {
    $http.put('/data/' + $scope.data.id, {

        Order: $scope.data.Order,
        Number: $scope.data.Number,
        Date: $filter('date')(new Date($scope.Date),'yyyy-MM-dd'),
        Full_Name: $scope.data.Full_Name,
        Governorate: $scope.data.Governorate,
        City: $scope.data.City,
        Neighborhood: $scope.data.Neighborhood,
        Address: $scope.data.Address,
        The_Phone: $scope.data.The_Phone,
        Call_Phone: $scope.data.Call_Phone,
        Email: $scope.data.Email,
        Occupation: $scope.data.Occupation,


    }).then(function success(e) {
            console.log(e);
            //$window.location.href = '#!/viewOrder';
            alert('done update');
            $scope.academic.academic_id = e.data.data.id;
            $scope.expertise.expertise_id = e.data.data.id;
            $scope.training.training_id = e.data.data.id;

        }, function error(e) {
            console.log(e);
            alert('Submit Error');
        }
    );
};




$scope.updateAcademic = function (id) {
  $http.put('/academic/' +id, {
       
    academic_id:$scope.academic.academic_id,
    University:$scope.academic.University,
    Specialization:$scope.academic.Specialization,
    average:$scope.academic.average,
    Graduation_Year:$scope.academic.Graduation_Year,  

  }).then(function success(e) {
    alert('done update Academic');
  //  $window.location ='#!/academic';
         // console.log(e);
         // location.reload();
        //  $scope.loadTasks();

      }, function error(e) {
          console.log(e);
          alert('Submit Error');
      }
  );
};


$scope.updateExpertise = function (id) {
  $http.put('/expertise/' +id, {
       
    expertise_id:$scope.expertise.expertise_id,
    Workplace:$scope.expertise.Workplace,
    Start_Date:$filter('date')(new Date($scope.expertise.Start_Date),'yyyy-MM-dd'),
    Expiry_date:$filter('date')(new Date($scope.expertise.Expiry_date),'yyyy-MM-dd'),
    Occupationn:$scope.expertise.Occupationn,  

  }).then(function success(e) {
    alert('done update Expertise');
       //   console.log(e);
      //    location.reload();
      }, function error(e) {
          console.log(e);
          alert('Submit Error');
      }
  );
};


$scope.updateTraining = function (id) {
  $http.put('/training/' +id, {
                training_id:$scope.training.training_id,
                name_course:$scope.training.name_course,
                Place_get:$scope.training.Place_get,
               Date_get:$filter('date')(new Date($scope.training.Date_get),'yyyy-MM-dd'),
                number_hours:$scope.training.number_hours,   
  }).then(function success(e) {
    alert('done update Training ');
        //  console.log(e);
       //   location.reload();
      }, function error(e) {
          console.log(e);
          alert('Submit Error');
      }
  );
};



$scope.confirmAcademicDelete = function(id) {

  var isConfirmDelete = confirm('Are you sure you want Delete this record?');
  if (isConfirmDelete) {
      var url='/academic/' + id;
      $http.delete(url).then(function (data) {
          // console.log(data);
              location.reload();
          // $scope.loadUsers();
      }, function (e) {
          // console.log(data);
          alert('Unable to delete');
      });
  } else {
      return false;
  }
};


$scope.confirmTrainingDelete = function(id) {

  var isConfirmDelete = confirm('Are you sure you want Delete this record?');
  if (isConfirmDelete) {
      var url='/training/' + id;
      $http.delete(url).then(function (data) {
          // console.log(data);
              location.reload();
          // $scope.loadUsers();
      }, function (e) {
          // console.log(data);
          alert('Unable to delete');
      });
  } else {
      return false;
  }
};


$scope.confirmExpertiseDelete = function(id) {

  var isConfirmDelete = confirm('Are you sure you want Delete this record?');
  if (isConfirmDelete) {
      var url='/expertise/' + id;
      $http.delete(url).then(function (data) {
          // console.log(data);
              location.reload();
          // $scope.loadUsers();
      }, function (e) {
          // console.log(data);
          alert('Unable to delete');
      });
  } else {
      return false;
  }
};
});


