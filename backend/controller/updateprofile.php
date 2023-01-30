<?php
include("../dbconnection.php");


$target_directory = "./uploadedprofile/";
$target_file = $target_directory . basename($_FILES["file"]["name"]);
$filetype = pathinfo($target_file,  PATHINFO_EXTENSION);
$filename = $_FILES["file"]["name"];



if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    if (isset($_POST['userid'])) {
        $userid = $_POST['userid'];

        $query = "UPDATE `user_accounts` SET `profile`='$filename' WHERE user_id = '$userid' ";
        $result = mysqli_query($conn, $query);

        if ($result == 1) { 
            echo "inserted";
        } else {
            echo "error";
        }
    }
} else {
    echo 1;
}
