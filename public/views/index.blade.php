
<body ng-controller="CtrlAdd">
<div class="tab">
<button class="tablinks" onclick="openCity(event, 'Data')"id="defaultOpen">تعيئه البيانات</button>
  <button class="tablinks" onclick="openCity(event, 'Academic')"> التحصيل الآكاديمي</button>
  <button class="tablinks" onclick="openCity(event, 'Expertise')">الخبرات العلميه</button>
  <button class="tablinks" onclick="openCity(event, 'Training')">الدورات التدريبيه</button>
</div>
<div id="Data" class="tabcontent">

  <form name="frm" ng-submit="addItem()">
  <!-- @csrf -->
  <!-- {{ csrf_field() }}    -->

        <div class="form-group row">
        <label for="Order" class="col-sm-2 col-form-label"> نوع الطلب</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Order" ng-model="Order">
          </div>
        </div>

  <div class="form-group row">
  <label for="Number" class="col-sm-2 col-form-label"> الرقم </label>
    <div class="col-sm-10">
    <input type="number" class="form-control" name="Number" ng-model="Number">
    </div>
  </div>

        <div class="form-group row">
        <label for="Date" class="col-sm-2 col-form-label"> التاريخ </label>
          <div class="col-sm-10">
          <input type="Date" class="form-control" name="Date" ng-model="Date">
          </div>
        </div>

  <div class="form-group row">
  <label for="Full_Name" class="col-sm-2 col-form-label"> الاسم رباعي </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Full_Name" ng-model="Full_Name">
    </div>
  </div>

        <div class="form-group row">
        <label for="Governorate" class="col-sm-2 col-form-label"> المحافظه </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Governorate" ng-model="Governorate">
          </div>
        </div>

  <div class="form-group row">
  <label for="City" class="col-sm-2 col-form-label"> المدينه </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="City" ng-model="City">
    </div>
  </div>


        <div class="form-group row">
        <label for="Neighborhood" class="col-sm-2 col-form-label"> الحي </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Neighborhood" ng-model="Neighborhood">
          </div>
        </div>

  <div class="form-group row">
  <label for="Address" class="col-sm-2 col-form-label"> تفاصيل العنوان</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Address" ng-model="Address">
    </div>
  </div>


        <div class="form-group row">
        <label for="The_Phone" class="col-sm-2 col-form-label"> رقم الهاتف </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="The_Phone" ng-model="The_Phone">
          </div>
        </div>


  <div class="form-group row">
  <label for="Call_Phone" class="col-sm-2 col-form-label">رقم الجوال</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Call_Phone" ng-model="Call_Phone">
    </div>
  </div>


        <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">البريد الالكتروني</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Email" ng-model="Email">
          </div>
        </div>


  <div class="form-group row">
  <label for="Occupation" class="col-sm-2 col-form-label">الوظيفه المطلوب العمل بها</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Occupation" ng-model="Occupation">
    </div>
  </div>
  <!-- <button type="button" name="Academic" class="btn btn-info viewAcademic" id="btnAcademic"> التحصيل الآكاديمي</button>  -->
  <!-- <button type="button" name="Expertise" class="btn btn-info viewExpertise" id="btnExpertise"> الخبرات العلميه </button>  -->
  <!-- <button type="button" name="Training" class="btn btn-info viewTraining" id="btnTraining"> الدورات التدريبيه</button>  -->

  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">الآكاديمي التحصيل</button>
  
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myExpertise">الخبرات العلميه</button>

  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myTraining">الدورات التدريبيه</button> -->

  <!-- <button type="button" class="btn btn-success succ" id="btnShow"> اعتماد</button> -->

  <!-- <button type="button" class="btn btn-success succ" id="btnShow"> اعتماد</button>  -->

  <button ng-disabled="frm.$invalid" type="submit" class="btn btn-success btn-lg" id="btnShow" >حفظ</button>
  </form>
</div>


<div id="Academic" class="tabcontent">
  <!-- <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>London</h3>
  <p>London is the capital city of England.</p> -->
  <form name="frm" ng-submit="addAcademic()">

  <h4 class="modal-title">الآكاديمي التحصيل</h4>


  <div class="form-group row">
        <!-- <tr ng-repeat="post in data"> -->
        <!-- dd(post); -->
        <!-- <label for="University" class="col-sm-4 col-form-label">  الجامعه</label> -->
          <div class="col-sm-8">
          <input type="hidden"  name="academic_id" ng-model="academic_id">
          </div>
          <!-- </tr> -->
        </div>

        
        <div class="form-group row">
        <label for="University" class="col-sm-2 col-form-label"> الجامعه</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="University" ng-model="University">
          </div>
        </div>

  <div class="form-group row">
  <label for="Specialization" class="col-sm-2 col-form-label"> التخصص </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Specialization" ng-model="Specialization">
    </div>
  </div>

        <div class="form-group row">
        <label for="average" class="col-sm-2 col-form-label"> المعدل </label>
          <div class="col-sm-10">
          <input type="number" class="form-control" name="average" ng-model="average">
          </div>
        </div>

  <div class="form-group row">
  <label for="Graduation_Year" class="col-sm-2 col-form-label"> سنه التخرج </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Graduation_Year" ng-model="Graduation_Year">
    </div>
  </div>

  <div>
          <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
          <!-- <button type="submit" ng-click="addAcademic()" class="btn btn-primary" data-dismiss="modal" id="btnAcad">save</button> -->
          <button ng-disabled="frm.$invalid" type="submit" class="btn btn-success btn-lg" id="btnShow">حفظ</button>

        </div>

  </form>
 

  <div class="container">
            <div class="panel-heading">
                <h5 class="panel-title">الآكاديمي التحصيل </h5>
            </div>

        <table class=table table-hover table-bordered>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الجامعه</th>
                    <th scope="col"> التخصص</th>  
                    <th scope="col"> المعدل</th>
                    <th scope="col"> سنه التخرج </th>
                </tr>
            </thead>
            <tbody>
          
         
          <tr ng-repeat="post in academic">
          
              <td>{{post.id}}</td>
              <td>{{post.University}} </td>
              <td>{{post.Specialization}}</td>
              <td>{{post.average}}</td>
              <td>{{post.Graduation_Year}}</td>

              </tr>
            </table>
    </div>
   
</div>

<div id="Expertise" class="tabcontent">
<form name="frm" ng-submit="addExpertisec()">

<h4 class="modal-title">الخبرات العلميه</h4>


<div class="form-group row">
      <!-- <tr ng-repeat="post in data"> -->
      <!-- dd(post); -->
      <!-- <label for="University" class="col-sm-4 col-form-label">  الجامعه</label> -->
        <div class="col-sm-8">
        <input type="hidden"  name="expertise_id" ng-model="expertise_id">
        </div>
        <!-- </tr> -->
      </div>

      
      <div class="form-group row">
      <label for="Workplace" class="col-sm-2 col-form-label">مكان العمل</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="Workplace" ng-model="Workplace">
        </div>
      </div>

<div class="form-group row">
<label for="Start_Date" class="col-sm-2 col-form-label">تاريخ البدايه </label>
  <div class="col-sm-10">
  <input type="date" class="form-control" name="Start_Date" ng-model="Start_Date">
  </div>
</div>

      <div class="form-group row">
      <label for="Expiry_date" class="col-sm-2 col-form-label">تاريخ النهايه </label>
        <div class="col-sm-10">
        <input type="date" class="form-control" name="Expiry_date" ng-model="Expiry_date">
        </div>
      </div>

<div class="form-group row">
<label for="Occupationn" class="col-sm-2 col-form-label">  الوظيفه </label>
  <div class="col-sm-10">
  <input type="text" class="form-control" name="Occupationn" ng-model="Occupationn">
  </div>
</div>

<div>
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
        <!-- <button type="submit" ng-click="addAcademic()" class="btn btn-primary" data-dismiss="modal" id="btnAcad">save</button> -->
        <button ng-disabled="frm.$invalid" type="submit" class="btn btn-success btn-lg" id="btnShow">حفظ</button>

      </div>

</form>


<div class="container">
          <div class="panel-heading">
              <h5 class="panel-title"> الخبرات العلميه </h5>
          </div>

      <table class=table table-hover table-bordered>
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col"> مكان العمل</th>
                  <th scope="col"> تاريخ البدايه</th>  
                  <th scope="col"> تاريخ النهايه</th>
                  <th scope="col">  الوظيفه </th>
              </tr>
          </thead>
          <tbody>
        
       
        <tr ng-repeat="post in expertise">
        
            <td>{{post.id}}</td>
            <td>{{post.Workplace}} </td>
            <td>{{post.Start_Date}}</td>
            <td>{{post.Expiry_date}}</td>
            <td>{{post.Occupationn}}</td>

            </tr>
          </table>
  </div>
 
  <!-- <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p>  -->
</div>

<div id="Training" class="tabcontent">
  <!-- <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p> -->

  <form name="frm" ng-submit="addTraining()">

  <h4 class="modal-title">الدورات التدريبيه</h4>


  <div class="form-group row">
        <!-- <tr ng-repeat="post in data"> -->
        <!-- dd(post); -->
        <!-- <label for="University" class="col-sm-4 col-form-label">  الجامعه</label> -->
          <div class="col-sm-8">
          <input type="hidden"  name="training_id" ng-model="training_id">
          </div>
          <!-- </tr> -->
        </div>

        
        <div class="form-group row">
        <label for="name_course" class="col-sm-2 col-form-label">اسم الدوره</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="name_course" ng-model="name_course">
          </div>
        </div>

  <div class="form-group row">
  <label for="Place_get" class="col-sm-2 col-form-label">مكان الحصول عليها </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Place_get" ng-model="Place_get">
    </div>
  </div>

        <div class="form-group row">
        <label for="Date_get" class="col-sm-2 col-form-label">تاريخ الحصول </label>
          <div class="col-sm-10">
          <input type="date" class="form-control" name="Date_get" ng-model="Date_get">
          </div>
        </div>

  <div class="form-group row">
  <label for="number_hours" class="col-sm-2 col-form-label">  عدد الساعات </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="number_hours" ng-model="number_hours">
    </div>
  </div>

  <div>
          <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
          <!-- <button type="submit" ng-click="addAcademic()" class="btn btn-primary" data-dismiss="modal" id="btnAcad">save</button> -->
          <button ng-disabled="frm.$invalid" type="submit" class="btn btn-success btn-lg" id="btnShow">حفظ</button>

        </div>

  </form>
 

  <div class="container">
            <div class="panel-heading">
                <h5 class="panel-title"> الخبرات العلميه </h5>
            </div>

        <table class=table table-hover table-bordered>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"> اسم الدوره</th>
                    <th scope="col">  مكان الحصول عليها</th>  
                    <th scope="col"> تاريخ الحصول</th>
                    <th scope="col">  عدد الساعات  </th>
                </tr>
            </thead>
            <tbody>
          
         
          <tr ng-repeat="post in training">
          
              <td>{{post.id}}</td>
              <td>{{post.name_course}} </td>
              <td>{{post.Place_get}}</td>
              <td>{{post.Date_get}}</td>
              <td>{{post.number_hours}}</td>

              </tr>
            </table>
    </div>
</div>

</body>
</html>



<script>

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

//$(document).ready(function(){
//   $(".viewAcademic").click(function() {
//     alert("done");
//      $.ajax({
//        url:"/data",
//        method:"Post",
//        data:{},
//         success:function(data){
        
//         }
//      })
//   });
    // $(".stauts_update").click(function() {
    //     var val = $(this).parent().find('.utd').val();
    //     $.ajax ({
    //         url: "/driver/" + val,
    //         method:"PUT",
    //         data:{body:'', _token:'{{csrf_token()}}'},
    //         success: function( result ) {
    //             alert("  تم الايقاف بنجاح");
    //             window.location.reload()
    //         }
    //     });
    // });
//});

$(document).ready(function(){
$("#btnShow").click(function(){
 
    alert("done add");
});
$("#btnAcad").click(function(){
    alert("done add Academic");
   
});
$("#btnExpe").click(function(){
    alert("done add Expertisec");
   
});
$("#btnTrain").click(function(){
  // data: { 
  //       'name_course': 'name_course',
  //       'Place_get': 'Place_get',
  //       'Date_get': 'Date_get', 
  //       'number_hours': 'number_hours',
  //       body:'', _token:'{{csrf_token()}}'
  //     },
    alert("done add Training");
   
});
});
 </script>
