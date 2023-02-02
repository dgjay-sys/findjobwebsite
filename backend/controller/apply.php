<?php
include("../dbconnection.php");
//$filename = $_POST["filename"];

$target_directory = "./uploadedfiles/";
$target_file = $target_directory . basename($_FILES["file"]["name"]);
$filetype = pathinfo($target_file,  PATHINFO_EXTENSION);
$filename = $_FILES["file"]["name"];

// move_uploaded_file($_FILES["file"]["tmp_name"], $newfilename);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    if (isset($_POST["user_name"])) {
        $user_name = $_POST["user_name"];
        $user_age =  $_POST["user_age"];
        $user_email =  $_POST["user_email"];
        $userid =  $_POST["userid"];
        $postid =  $_POST["postid"];
        $user_con = $_POST["user_con"];
        $u_profile = $_POST["u_profile"];

        $query = "INSERT INTO `applicant_table`(`post_id`, `user_id`, `user_name`, `user_age`, `user_email` , `user_contact` , `status`, `user_resume` , `u_profile`) VALUES ('$postid','$userid','$user_name','$user_age','$user_email' , '$user_con' , 'pending', '$filename', '$u_profile' )";
        $result = mysqli_query($conn, $query);

        if ($result == 1) {
            echo "inserted";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
} else {
    echo 1;
}
