
<body ng-controller="CtrlviewOrder">
<h2> عرض الطلبات </h2> 
  <div class="container">
  <div class="panel-heading mat-elevation-z8">
           
            </div>
            <!-- <div class="panel-heading">
                <h5 class="panel-title" style="direction: rtl;"> عرض الطلبات  </h5>
            </div>
            <h2> عرض الطلبات </h2> -->

        <table mat-table class=table table-hover table-bordered>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"> نوع الطلب </th>
                    <th scope="col">  الرقم</th>  
                    <th scope="col">  التاريخ</th>  
                    <th scope="col">  الاسم رباعي</th>
                    <th scope="col">  المحافظه   </th>
                    <th scope="col">  المدينه   </th>
                    <th scope="col">  الحي   </th>
                    <th scope="col">  تفاصيل العنوان </th>
                    <th scope="col">  رقم الهاتف   </th>
                    <th scope="col">  رقم الجوال   </th>
                    <th scope="col">  البريد الالكتروني </th>
                    <th scope="col">  الوظيفه المطلوبه   </th>
                    <th scope="col">  # </th>


                </tr>
            </thead>
            <tbody>
          
         
          <tr ng-repeat="post in data" class="w-25">
          
              <td>{{post.id}}</td>
              <td>{{post.Order}} </td>
              <td>{{post.Number}}</td>
              <td>{{post.Date}}</td>
              <td>{{post.Full_Name}}</td>
              <td>{{post.Governorate}}</td>
              <td>{{post.City}}</td>
              <td>{{post.Neighborhood}}</td>
              <td>{{post.Address}}</td>
              <td>{{post.The_Phone}}</td>
              <td>{{post.Call_Phone}}</td>
              <td>{{post.Email}}</td>
              <td>{{post.Occupation}}</td>
              <td>
              <a href="#!edit/{{post.id}} " class="btn btn-primary btn-sm ">
                 <i >تعديل</i></a>

                  <button type="button" class="btn btn-danger btn-sm" ng-click="confirmDelete(post.id)">
                    <i>حذف</i></button>
              </td>

              </tr>
              </tbody>
            </table>
    </div>
</div>

</body>
</html>


