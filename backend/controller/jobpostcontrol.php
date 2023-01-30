<?php
include("../dbconnection.php");

if (isset($_POST['corpName'])) {
   $jobDesc = $_POST['jobDesc'];
   $jobPos = $_POST['jobPos'];
   $corpName = $_POST['corpName'];
   $corpEmail = $_POST['corpEmail'];
   $corpAdd = $_POST['corpAdd'];
   $corpid = $_POST['corpId'];

   $query = "INSERT INTO `job_table`(`user_id`, `company_name`, `description`, `position`, `email`, `address`) VALUES ('$corpid','$corpName','$jobDesc','$jobPos','$corpEmail','$corpAdd')";
   $result = mysqli_query($conn, $query);

   if ($result == 1) {
      echo "Success";
   } else {
      echo "error";
   }
}
