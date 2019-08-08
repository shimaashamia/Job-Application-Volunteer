<body ng-controller="viewCtrl">

<div>
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
</body>
</html>
