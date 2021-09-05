@extends("admintheme")
@section("content")
<section style="background-color:black;height:300vw" >

<div class="container">

<div class="row">

<div class="col col-12 col-sm-12 col-md-12 col-lg-12" >
<br>
<br>
<br>
<br>
<br>

{{csrf_field() }}
      



<table class="table table table-dark">

<tr>
<th scope="row">Id</th>
    <th scope="row">Student name</th>
    <th scope="row">phone no</th>
    <th scope="row">email</th>
    <th scope="row">course</th>
    <th scope="row">enquiry</th>
    
  
    </tr>
    
@foreach($applications as $application)

<tr class="table-primary">
   
    <td>{{$application->id}}</td>
    <td>{{$application->studentname}}</td>
    <td>{{$application->mobileno}}</td>
    <td>{{$application->email}}</td>
    <td>{{$application->course}}</td>
    <td>{{$application->comments}}</td>
    
 
</tr>

@endforeach
</table>
</div>
</div>
</section>
@endsection

