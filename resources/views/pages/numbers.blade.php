<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>


<style>
body{
    background-color:#fbf9f8;
    direction:rtl;
    padding:80px;
}
form{
    text-align:center; 
}




</style>
        <title>Laravel</title>
        </head>

<body ng-controller="myCtrl">
<div class="container">
    <!-- <div class="panel-body">
    <div class="row"> -->

  <form action="/numbers" method="POST"> 
  {{ csrf_field() }}
  <div class="form-group">
  <label for="Inputnumder">  رقم الهويه</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="Inputnumder" ng-model="Inputnumder">
    </div>
  </div>
  

  <!-- <button type="button" id="subm" class="btn btn-primary" ng-click="FindData(Inputnumder)">فحص</button> -->
  <button type="submit" id="subm" class="btn btn-primary" >فحص</button>

  </form>
 
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