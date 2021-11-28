<?php
if (isset($_POST['cancelled'])) {
require("search.php");
 $id = $_GET['id'];

 $deletequery = "delete from appointmenttb where id = $ids";
  
 $query = mysqli_query($con,$deletequery);
} ?>