

<body ng-controller="myCtrl">
<div class="container">

<!-- <form> -->

    <div class="input-group row">
        <input type="text" class="form-control col-sm-10" name="id_number" ng-model="id_number"
            placeholder="Search users"> <span class="input-group-btn">
            <div>
            <button  type="submit" class="btn btn-primary" ng-click="search()">فحص</button> 
            </div>
            <!-- <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button> -->
        <!-- </span> -->
    </div>
<!-- </form> -->
    <!-- <div class="panel-body">
    <div class="row"> -->

  <!-- <form  method="POST">  -->
  <!-- <div class="form-group"> -->
  <!-- {{ csrf_field() }} -->

  <!-- <label for="id_number">  رقم الهويه</label>
  <tr ng-repeat="(key , post) in number">
  
  <td ng-if="post.id_number == id_number ">
  <div class="col-sm-10">
    <input type="text" class="form-control" name="id_number" ng-model="id_number"/>
    </div>
  </td> -->

  <!-- <td ng-if="post.id_number == null ">
                       
   <span>
      تم الايقاف
   </span>  -->
        <!-- </div> -->
          <!-- </td>
  </div>
  
  <button type="button" class="btn btn-primary" ng-click="FindData(id_number)">فحص</button>  -->

  <!-- <button type="button" ng-click="FindData(Inputder)">فحص</button>  -->


<!-- <button type="button" id="subm" class="btn btn-primary" ng-click="FindData(Inputnumder)">فحص</button>  -->
  <!-- <button type="button" id="subm" class="btn btn-primary">فحص</button> -->

  <!-- </form> -->
 
</div>

</body>
</html>


<!-- <script>
$(document).ready(function(){
  $(".subm").click(function() {
    console.log( "ready!" );

      // var val = $(this).parent().find('.utd').val();
        $.ajax ({
            url: "/numbers/" + val,
            method:"POST",
            data:{body:'', _token:'{{csrf_token()}}'},
            success: function( result ) {
                alert("  تم الايقاف بنجاح");
                window.location.reload()
               
            }
        });
    });

    // $("#subm").click(function(){
    // alert("done add");
 // $(".alert").hide().show('medium');
});
        // $('#subm').click(function () {
        //     var id = '1'
        //     var age = '14'
        //     var list = [id]
        //     $.ajax({
        //         url: '{{route('ajax.library.check')}}',
        //         method: 'POST',
        //         data: {body: list, _token: '{{csrf_token()}}'}
        //     }).success(function (response) {
        //         console.log(response)
        //     }).error(function (error) {
        //     })
        // }) -->