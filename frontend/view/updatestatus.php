<?php
include("../../backend/dbconnection.php");
if (isset($_POST['id_user'])) {

    $userid = $_POST['id_user'];
    $appstat = $_POST['status'];


    $query = "UPDATE `applicant_table` SET `status`='$appstat' WHERE `user_id`='$userid'";
    $result = mysqli_query($conn, $query);

    if ($result == 1) {
        header('Location: checkpost.php');
    }
}
