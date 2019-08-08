<body ng-controller="viewExpertiseCtrl">

<div>
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
    <input type="text" class="form-control" name="Start_Date" ng-model="Start_Date">
    </div>
  </div>

        <div class="form-group row">
        <label for="Expiry_date" class="col-sm-2 col-form-label">تاريخ النهايه </label>
          <div class="col-sm-10">
          <input type="number" class="form-control" name="Expiry_date" ng-model="Expiry_date">
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
   
</div>
</body>
</html>
