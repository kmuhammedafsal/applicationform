@extends("admintheme")
@section("content")
<body style="background-color:powderblue;">



<div class="container">
<div class="row">
<div class="col col-12 col-sm-10 col-md-10 col-lg-10">


<form action="/applicationstore" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<table class="table table-borderless">
<tr>
<br>
<br>
<br>
<br>
<h1 style="color:black"><b>Admission Enquiry Form</b></h1>
<br>
<br>
 <tr>  <td style="color:black"><b>Student Name</b></td><tr>
   
  <td><input type="text" class="form-control" placeholder="Student Name" name="studentname" required></td>
</tr>
<tr>
 <tr>  <td style="color:black"><b>Mobile </b></td></tr>
   <td><input type="number" class="form-control"  placeholder="Mobile no" name="mobileno" required></td>
   <span class="text-danger">@error('mobileno'){{$message}} @enderror  </span>
    <tr> <td style="color:black"><b>Email</b></td></tr>
   <td><input type="email" class="form-control"  placeholder="Email Address" name="email" required></td>
</tr>
<tr>
 <tr><td style="color:black"><b>Course</b></td></tr>

<td> <select name="course" class="form-control" placeholder="Select" required>
    <option value="" required>select</option>
    @foreach($bgenre as $bgenre)
              <option>{{$bgenre->coursename }}</option>
              @endforeach
              </select></td>
  
</tr>
<tr>
 <tr>  <td style="color:black"><b>Your Enquiry</b></td></tr>
<tr> <td class="form-group">
 <textarea name="comments" class="form-control" placeholder="Your Enquiry Details" style="width: 100%; height: 150px;" required></textarea>
                         
</td></tr>
</tr>



<tr>
  
  <td><center> <button class="btn btn-success">SUBMIT</button></center></td>
</tr>
</table>
</form>

</div>

</div>
</div>
</div>
@endsection
