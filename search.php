<?php
$con=mysqli_connect("localhost","root","archit2000","hmsdb");
if(isset($_POST['search_submit'])){
  $contact=$_POST['contact'];
 $query="select * from appointmenttb where contact='$contact';";
 $result=mysqli_query($con,$query);
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3>Search Results</h3></center><br>
  <center><h4>Appointment Result</h4></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Doctor</th>
      <th>Appointment Date</th>
      <th>Payment</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
';
  while($row=mysqli_fetch_array($result)){
    $fname=$row['fname'];
    $lname=$row['lname'];
    $gender=$row['gender'];
    $contact=$row['contact'];
    $doctor=$row['doctor'];
    $appointmentdate=$row['appointmentdate'];
    $payment=$row['payment'];
    echo '<tr>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$gender.'</td>
      <td>'.$contact.'</td>
      <td>'.$doctor.'</td>
      <td>'.$appointmentdate.'</td>
      <td>'.$payment.'</td>
          <td><div class="col-md-4">
          <input type="submit" name="cancel" value="cancel" class="btn btn-primary" id="inputbtn">
          </div>
      </td>
    </tr>';
    
  }
echo '</tbody></table></div>';}?>
    <?php
 if(isset($_POST['search_submit'])){
  $contact=$_POST['contact'];
 $query="select * from testtb where contact='$contact';";
 $result=mysqli_query($con,$query);
 echo
'<div class="container" style="text-align:left;">
  <center><h4> Test Appointment Result</h4></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Contact</th>
      <th>Test</th>
      <th>Test Date</th>
      <th>Payment</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    $fname=$row['fname'];
    $lname=$row['lname'];
    $gender=$row['gender'];
    $contact=$row['contact'];
    $test=$row['test'];
    $testdate=$row['testdate'];
    $payment=$row['tpayment'];
    echo '<tr>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$gender.'</td>
      <td>'.$contact.'</td>
      <td>'.$test.'</td>
      <td>'.$testdate.'</td>
      <td>'.$payment.'</td>
          <td><div class="col-md-4">
                <input type="submit" name="cancel" value="cancel" class="btn btn-primary" id="inputbtn">
          </div>
      </td>
    </tr>';
  }
echo '</tbody></table></div>
    
</body>
</html>';
}?>
