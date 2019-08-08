<body ng-controller="viewTrainingCtrl">

<div>
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
