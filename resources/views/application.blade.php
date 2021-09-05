<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application form</title>
</head>
<body style="background-color:powderblue;">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex">
      
       <button class="btn btn-outline-success" type="submit"><a href="/courses">details</a></button>
      </form>
    </div>
  </div>
</nav>


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
   <td><input type="text" class="form-control"  placeholder="Mobile no" name="mobileno" required></td>

    <tr> <td style="color:black"><b>Email</b></td></tr>
   <td><input type="text" class="form-control"  placeholder="Email Address" name="email" required></td>
</tr>
<tr>
 <tr><td style="color:black"><b>Course</b></td></tr>

<td> <select name="course" class="form-control" placeholder="Select" >
    @foreach($bgenre as $bgenre)
              <option>{{$bgenre->coursename }}</option>
              @endforeach
              </select></td>
  
</tr>
<tr>
 <tr>  <td style="color:black"><b>Your Enquiry</b></td></tr>
<tr> <td class="form-group">
                            <textarea name="comments" class="form-control" placeholder="Your Enquiry Details" style="width: 100%; height: 150px;"></textarea>
                         
</td></tr>
</tr>



<tr>
  
  <td><center> <button class="btn btn-success">SUBMIT</button></center></td>
</tr>
</table>
</form>

</div>
<div class="col"></div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>