<?php
session_start();
$con=mysqli_connect("localhost","root","archit2000","hmsdb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("Location:admin-panel.php");
	}
	else
		header("Location:error.php");
}
//if(isset($_POST['update_data']))
//{
//	$contact=$_POST['contact'];
//	$status=$_POST['status'];
//	$query="update appointmenttb set payment='$status' where contact='$contact';";
//	$result=mysqli_query($con,$query);
//	if($result)
//		header("Location:updated.php");
//}
//function display_docs()
//{
//	global $con;
//	$query="select * from doctb";
//	$result=mysqli_query($con,$query);
//	while($row=mysqli_fetch_array($result))
//	{
//		$name=$row['name'];
//		echo '<option value="'.$name.'">'.$name.'</option>';
//	}
//}
//if(isset($_POST['doc_sub']))
//{
//	$name=$_POST['name'];
//	$query="insert into doctb(name)values('$name')";
//	$result=mysqli_query($con,$query);
//	if($result)
//		header("Location:adddoc.php");
//}
function display_admin_panel(){
	echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Wave Hospital</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter contact number" aria-label="Search" name="contact">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
    </form>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
  <div class="jumbotron" id="ab1"></div>
    <div class="container-fluid" style="margin-top:50px;">
    <div class="row">
    <div class="col-md-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Appointment</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Tests</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Payment Status</a>
      <a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="#list-attend" role="tab" aria-controls="settings">Print Recipt</a>
    </div><br>
    </div>
  <div class="col-md-8">
    <div class="tab-content" id="nav-tabContent">
    
    <!-- card 1 -->
    
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <center><h4>Create an appointment</h4></center><br>
              <form class="form-group" method="post" action="appointment.php">
                <div class="row">
                  <div class="col-md-4"><label>First Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="fname" required=true></div><br><br>
                  <div class="col-md-4"><label>Last Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="lname" required=true></div><br><br>
                  <div class="col-md-4"><label>Gender:</label></div>
                  <div class="col-md-8">
                  <select name="gender" class="form-control" required=true >
                     <option>Choose Gender </option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="others">Others</option>
                      </select>
                      </div><br><br>
                  <div class="col-md-4"><label>Contact Number:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="contact" required=true></div><br><br>
                  <div class="col-md-4"><label>Doctor:</label></div>
                  <div class="col-md-8">
                   <select name="doctor" class="form-control" required=true >
                      <option>select doctor</option>
                      <option value="Dr. Punam Shaw">Dr. Punam Shaw</option>
                      <option value="Dr. Ashok Goyal">Dr. Ashok Goyal</option> 
                   </select>
                  </div><br><br>
                  <div class="col-md-4"><label>Appointment Date:</label></div>
                  <div class="col-md-8">
                   <input type="date" name="appointmentdate" class="form-control" required=true>
                  </div><br><br>
                  <div class="col-md-4"><label>Consultation Fee:</label></div>
                  <div class="col-md-8">
                      <input type="text" name="payment"  value=" Rs 300/-"  disabled="true">
                  </div><br><br><br>
                  <div class="col-md-4">
                    <input type="submit" name="entry_submit" value="Create new entry" class="btn btn-primary" id="inputbtn">
                  </div>
                  <div class="col-md-8"></div>                  
                </div>
              </form>
            </div>
          </div>
        </div><br>
      </div>
      

       <!-- card 2 -->
      
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <center><h4>Create an appointment for test</h4></center><br>
              <form class="form-group" method="post" action="appointment.php">
                <div class="row">
                  <div class="col-md-4"><label>First Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="fname" required=true></div><br><br>
                  <div class="col-md-4"><label>Last Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="lname" required=true></div><br><br>
                  <div class="col-md-4"><label>Gender:</label></div>
                  <div class="col-md-8">
                  <select name="gender" class="form-control" required=true >
                     <option>Choose Gender </option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="others">Others</option>
                      </select>
                      </div><br><br>
                  <div class="col-md-4"><label>Contact Number:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="contact" required=true></div><br><br>
                  <div class="col-md-4"><label>Test:</label></div>
                  <div class="col-md-8">
                   <select name="test" class="form-control" required=true >
                     <option>Choose Test </option>
                      <option value="bp">BP</option>
                      <option value="sugar">Sugar</option>
                      <option value="blood_test">Blood Test</option>
                      <option value="urine_test">Urine Test</option>
                      <option value="covid_test">Covid-19 Test</option>
                      <option value="ultrasound">Ultrasound</option>
                    </select>
                  </div><br><br>
                  <div class="col-md-4"><label>Test Date:</label></div>
                  <div class="col-md-8">
                   <input type="date" name="testdate" class="form-control" required=true>
                  </div><br><br>
                  
                  <div class="col-md-4"><label>Test Fee:</label></div>
                  <div class="col-md-8">
                   <select name="tpayment" class="form-control" required=true >
                     <option>fee</option>
                      <option value="Rs-20">Rs-20  bp</option>
                      <option value="Rs-50">Rs-50  sugar</option>
                      <option value="Rs-50">Rs-50  bt</option>
                      <option value="Rs-100">Rs-100  Urt</option>
                      <option value="Rs-200">Rs-200  Co-19</option>
                      <option value="Rs-800">Rs-800  Ults</option>
                    </select>
                    </div><br><br><br>
                  <div class="col-md-4">
                    <input type="submit" name="test_submit" value="submit" class="btn btn-primary" id="inputbtn">
                  </div>
                  <div class="col-md-8"></div>                  
                </div>
              </form>
            </div>
          </div>
        </div><br>
        </div>
      
      <!-- card 3 -->
      
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div class="card">
          <div class="card-body">
            <form class="form-group" method="post" action="func.php">
              <input type="text" name="contact" class="form-control" placeholder="enter contact"><br>
              <select name="status" class="form-control">
                <option value="paid">paid</option>
                <option value="pay later">pay later</option>
              </select><br><hr>
              <input type="submit" value="update" name="update_data" class="btn btn-primary">
            </form>
          </div>
        </div><br><br>
      </div>
      
     
        
        <!-- card 4 -->
        
       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">.....</div>
    </div>
  </div>
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!--Sweet alert js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>';  
}
?>