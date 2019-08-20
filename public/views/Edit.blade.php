
<body ng-controller="CtrlEdit">
<div class="tab">
<button class="tablinks" onclick="openCity(event, 'Data')"id="defaultOpen">تعيئه البيانات</button>
  <button class="tablinks" onclick="openCity(event, 'Academic')">  تعديل التحصيل الآكاديمي</button>
  <button class="tablinks" onclick="openCity(event, 'Expertise')"> تعديل الخبرات العلميه</button>
  <button class="tablinks" onclick="openCity(event, 'Training')"> تعديل الدورات التدريبيه</button>
</div>
<div id="Data" class="tabcontent">
<form method="post">
<input  type="hidden" name="_method" value="put">
  <!-- @csrf -->
  <!-- {{ csrf_field() }}    -->

        <div class="form-group row">
        <label for="Order" class="col-sm-2 col-form-label"> نوع الطلب</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Order" ng-model="data.Order">
          </div>
        </div>

  <div class="form-group row">
  <label for="Number" class="col-sm-2 col-form-label"> الرقم </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Number" ng-model="data.Number">
    </div>
  </div>

        <div class="form-group row">
        <label for="Date" class="col-sm-2 col-form-label"> التاريخ </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Date" ng-model="data.Date">
          </div>
        </div>

  <div class="form-group row">
  <label for="Full_Name" class="col-sm-2 col-form-label"> الاسم رباعي </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Full_Name" ng-model="data.Full_Name">
    </div>
  </div>

        <div class="form-group row">
        <label for="Governorate" class="col-sm-2 col-form-label"> المحافظه </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Governorate" ng-model="data.Governorate">
          </div>
        </div>

  <div class="form-group row">
  <label for="City" class="col-sm-2 col-form-label"> المدينه </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="City" ng-model="data.City">
    </div>
  </div>


        <div class="form-group row">
        <label for="Neighborhood" class="col-sm-2 col-form-label"> الحي </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Neighborhood" ng-model="data.Neighborhood">
          </div>
        </div>

  <div class="form-group row">
  <label for="Address" class="col-sm-2 col-form-label"> تفاصيل العنوان</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Address" ng-model="data.Address">
    </div>
  </div>


        <div class="form-group row">
        <label for="The_Phone" class="col-sm-2 col-form-label"> رقم الهاتف </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="The_Phone" ng-model="data.The_Phone">
          </div>
        </div>


  <div class="form-group row">
  <label for="Call_Phone" class="col-sm-2 col-form-label">رقم الجوال</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Call_Phone" ng-model="data.Call_Phone">
    </div>
  </div>


        <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">البريد الالكتروني</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Email" ng-model="data.Email">
          </div>
        </div>


  <div class="form-group row">
  <label for="Occupation" class="col-sm-2 col-form-label">الوظيفه المطلوب العمل بها</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Occupation" ng-model="data.Occupation">
    </div>
  </div>
 
 <!-- <button ng-disabled="frm.$invalid" type="submit" class="btn btn-success btn-lg" id="btnShow" >حفظ</button> -->
 <div class="text-center">
<button type="submit" class="btn btn-primary ml-5" ng-click="update(data.id)">حفظ</button>
<!-- <a href="#!/" class="btn btn-danger ">رجوع</a> -->
 </div>

  </form>

</div>

<div id="Academic" class="tabcontent">
  <!-- <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>London</h3>
  <p>London is the capital city of England.</p> -->
  <form>
  <input  type="hidden" name="_method" value="put">


  <h4 class="modal-title">الآكاديمي التحصيل</h4>


  <div class="form-group row">
        <!-- <tr ng-repeat="post in data"> -->
        <!-- dd(post); -->
        <!-- <label for="University" class="col-sm-4 col-form-label">  الجامعه</label> -->
          <div class="col-sm-8">
         
          <input type="hidden"  name="academic_id" ng-model="academic.academic_id" value="put">
          </div>
          <!-- </tr> -->
        </div>

        
        <div class="form-group row">
        <label for="University" class="col-sm-2 col-form-label"> الجامعه</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="University" ng-model="academic.University" [(ngModel)]="University" formControlName="University">
          </div>
        </div>

  <div class="form-group row">
  <label for="Specialization" class="col-sm-2 col-form-label"> التخصص </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Specialization" ng-model="academic.Specialization" [(ngModel)]="Specialization" formControlName="Specialization">
    </div>
  </div>

        <div class="form-group row">
        <label for="average" class="col-sm-2 col-form-label"> المعدل </label>
          <div class="col-sm-10">
          <input type="number" class="form-control" name="average" ng-model="academic.average" [(ngModel)]="average" formControlName="average"> 
          </div>
        </div>

  <div class="form-group row">
  <label for="Graduation_Year" class="col-sm-2 col-form-label"> سنه التخرج </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Graduation_Year" ng-model="academic.Graduation_Year" [(ngModel)]="Graduation_Year" formControlName="Graduation_Year">
    </div>
  </div>

  <div>
          <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
          <!-- <button type="submit" ng-click="addAcademic()" class="btn btn-primary" data-dismiss="modal" id="btnAcad">save</button> -->
          <!-- <button ng-disabled="frm.$invalid" type="submit" class="btn btn-success btn-lg" id="btnShow">حفظ</button> -->
          <button type="submit" class="btn btn-primary ml-5" ng-click="updateAcademic(academic.id)">حفظ</button>
        </div>

  </form>
 

  <div class="container">
            <div class="panel-heading" style="text-align: initial;">
                <h3 class="panel-title">الآكاديمي التحصيل </h3>
            </div>

        <table class=table table-hover table-bordered>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الجامعه</th>
                    <th scope="col"> التخصص</th>  
                    <th scope="col"> المعدل</th>
                    <th scope="col"> سنه التخرج </th>
                    <th scope="col">  # </th>
                </tr>
            </thead>
            <tbody>
          
         
          <tr ng-repeat="postAc in data.academic">
          
              <td>{{postAc.id}}</td>
              <td>{{postAc.University}} </td>
              <td>{{postAc.Specialization}}</td>
              <td>{{postAc.average}}</td>
              <td>{{postAc.Graduation_Year}}</td>
              <td>
              <button type="button" class="btn btn-primary btn-sm" ng-click="academicedit(postAc.id)">
                    <i>تعديل</i></button>
              <!-- <a href="#!edit/{{academic.id}} " class="btn btn-primary btn-sm ">
                 <i >تعديل</i></a> -->

                  <button type="button" class="btn btn-danger btn-sm" ng-click="confirmAcademicDelete(postAc.id)">
                    <i>حذف</i></button>
              </td>
              </tr>
            </table>
    </div>
   
</div>

<div id="Expertise" class="tabcontent">
<form method="post">
<input  type="hidden" name="_method" value="put">


<h4 class="modal-title">الخبرات العلميه</h4>


<div class="form-group row">
      <!-- <tr ng-repeat="post in data"> -->
      <!-- dd(post); -->
      <!-- <label for="University" class="col-sm-4 col-form-label">  الجامعه</label> -->
        <div class="col-sm-8">
        <input type="hidden"  name="expertise_id" ng-model="expertise.expertise_id">
        </div>
        <!-- </tr> -->
      </div>

      
      <div class="form-group row">
      <label for="Workplace" class="col-sm-2 col-form-label">مكان العمل</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="Workplace" ng-model="expertise.Workplace">
        </div>
      </div>

<div class="form-group row">
<label for="Start_Date" class="col-sm-2 col-form-label">تاريخ البدايه </label>
  <div class="col-sm-10">
  <input type="text" class="form-control" name="Start_Date" ng-model="expertise.Start_Date">
  </div>
</div>

      <div class="form-group row">
      <label for="Expiry_date" class="col-sm-2 col-form-label">تاريخ النهايه </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="Expiry_date" ng-model="expertise.Expiry_date">
        </div>
      </div>

<div class="form-group row">
<label for="Occupationn" class="col-sm-2 col-form-label">  الوظيفه </label>
  <div class="col-sm-10">
  <input type="text" class="form-control" name="Occupationn" ng-model="expertise.Occupationn">
  </div>
</div>

<div>
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
        <!-- <button type="submit" ng-click="addAcademic()" class="btn btn-primary" data-dismiss="modal" id="btnAcad">save</button> -->
        <button type="submit" class="btn btn-primary ml-5" ng-click="updateExpertise(expertise.id)">حفظ</button>

        <!-- <button ng-disabled="frm.$invalid" type="submit" class="btn btn-success btn-lg" id="btnShow">حفظ</button> -->

      </div>

</form>


<div class="container">
          <div class="panel-heading">
              <h5 class="panel-title" style="text-align: initial;"> الخبرات العلميه </h5>
          </div>

      <table class=table table-hover table-bordered>
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col"> مكان العمل</th>
                  <th scope="col"> تاريخ البدايه</th>  
                  <th scope="col"> تاريخ النهايه</th>
                  <th scope="col">  الوظيفه </th>
                  <th scope="col">   #  </th>
              </tr>
          </thead>
          <tbody>
        
       
        <tr ng-repeat="postEx in data.expertise">
        
            <td>{{postEx.id}}</td>
            <td>{{postEx.Workplace}} </td>
            <td>{{postEx.Start_Date}}</td>
            <td>{{postEx.Expiry_date}}</td>
            <td>{{postEx.Occupationn}}</td>
            
            <td>

            <button type="button" class="btn btn-primary btn-sm" ng-click="expertiseedit(postEx.id)">
                    <i>تعديل</i></button>
              <!-- <a href="#!edit/{{post.id}} " class="btn btn-primary btn-sm ">
                 <i >تعديل</i></a> -->

                  <button type="button" class="btn btn-danger btn-sm" ng-click="confirmExpertiseDelete(postEx.id)">
                    <i>حذف</i></button>
              </td>
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

  <form method="post">
  <input  type="hidden" name="_method" value="put">


  <h4 class="modal-title" >الدورات التدريبيه</h4>


  <div class="form-group row">
        <!-- <tr ng-repeat="post in data"> -->
        <!-- dd(post); -->
        <!-- <label for="University" class="col-sm-4 col-form-label">  الجامعه</label> -->
          <div class="col-sm-8">
          <input type="hidden"  name="training_id" ng-model="training.training_id">
          </div>
          <!-- </tr> -->
        </div>

        
        <div class="form-group row">
        <label for="name_course" class="col-sm-2 col-form-label">اسم الدوره</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="name_course" ng-model="training.name_course">
          </div>
        </div>

  <div class="form-group row">
  <label for="Place_get" class="col-sm-2 col-form-label">مكان الحصول عليها </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Place_get" ng-model="training.Place_get">
    </div>
  </div>

        <div class="form-group row">
        <label for="Date_get" class="col-sm-2 col-form-label">تاريخ الحصول </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="Date_get" ng-model="training.Date_get">
          </div>
        </div>

  <div class="form-group row">
  <label for="number_hours" class="col-sm-2 col-form-label">  عدد الساعات </label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="number_hours" ng-model="training.number_hours">
    </div>
  </div>

  <div>
          <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
          <!-- <button type="submit" ng-click="addAcademic()" class="btn btn-primary" data-dismiss="modal" id="btnAcad">save</button> -->
          <button type="submit" class="btn btn-primary ml-5" ng-click="updateTraining(training.id)">حفظ</button>

        </div>

  </form>
 

  <div class="container">
            <div class="panel-heading">
                <h5 class="panel-title" style="text-align: initial;"> الدورات التدريبيه </h5>
            </div>

        <table class=table table-hover table-bordered>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"> اسم الدوره</th>
                    <th scope="col">  مكان الحصول عليها</th>  
                    <th scope="col"> تاريخ الحصول</th>
                    <th scope="col">  عدد الساعات  </th>
                    <th scope="col">   #  </th>
                </tr>
            </thead>
            <tbody>
          
         
          <tr ng-repeat="postTra in data.training">
          
              <td>{{postTra.id}}</td>
              <td>{{postTra.name_course}} </td>
              <td>{{postTra.Place_get}}</td>
              <td>{{postTra.Date_get}}</td>
              <td>{{postTra.number_hours}}</td>
              <td>
              <button type="button" class="btn btn-primary btn-sm" ng-click="trainingedit(postTra.id)">
                    <i>تعديل</i></button>
              <!-- <a href="#!edit/{{post.id}} " class="btn btn-primary btn-sm " >
                 <i >تعديل</i></a> -->

                  <button type="button" class="btn btn-danger btn-sm" ng-click="confirmTrainingDelete(postTra.id)">
                    <i>حذف</i></button>
              </td>
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
 
    alert("done ");
});
$("#btnAcad").click(function(){
    alert("done  Academic");
   
});
$("#btnExpe").click(function(){
    alert("done  Expertisec");
   
});
$("#btnTrain").click(function(){
  // data: { 
  //       'name_course': 'name_course',
  //       'Place_get': 'Place_get',
  //       'Date_get': 'Date_get', 
  //       'number_hours': 'number_hours',
  //       body:'', _token:'{{csrf_token()}}'
  //     },
    alert("done  Training");
   
});
});
 </script>


