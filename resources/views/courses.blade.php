@extends("admintheme")
@section("content")
<style>

 .bgnew
{
background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(https://images.unsplash.com/photo-1618221941443-9ca819da798c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80);

height:100vh;
-webkit-background-size:cover;
background-size: cover;
background-position:center center;
}
</style>



<div class="bgnew">

<div class="container">
<div class="row">
<div class="col col-12 col-sm-8 col-md-8 col-lg-8">
<br>
<br>
<br>

<table class="table table table-dark">
<tr><th scope="row">COURSE ID</th>
    <th scope="row">COURSE NAME</th>
    <th></th><th></th>
   </tr>
   @foreach($courses as $course)

<tr class="table-primary">
   
    <td>{{$course->id}}</td>
  
    <td>{{$course->coursename}}</td>
    <td><a class="btn btn-danger"  href={{"/coursedelete/".$course->id}}>DELETE</a></td>
</tr>

@endforeach

</table>
</div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4">
<form action="/coursestore" method="post">
{{csrf_field()}}
<table class="table table-borderless">
<tr>
<br>
<br>
<br>
<br>
<center><h1 style="color:white"><b>ADD COURSE</b></h1></center>
<br>
<br>
   
<tr>
    <td style="color:white"><b>COURSE NAME</b></td>
    <td><input type="text" class="form-control" name="coursename" required></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success">SUBMIT</button></td>
</tr>
</table>

</form>
</div>

</div>
</div>
</div>


@endsection