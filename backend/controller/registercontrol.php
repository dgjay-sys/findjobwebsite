<?php
    include("../dbconnection.php");
    if(isset($_POST['user_username'])){
        $username = $_POST['user_username'];
        $password = md5($_POST['user_password']);
        $nname = $_POST['user_dname'];
        $age = $_POST['user_age']; 
        $userType = $_POST['type_user'];
        $email = $_POST['user_email'];
        $address = $_POST['user_add'];
        $contact = $_POST['user_con'];

        
        $query = "INSERT INTO `user_accounts`(`user_id`, `u_user`, `u_pass`, `u_name`, `u_age`, `email`, `address` , `contact`, `userType`) VALUES ('','$username','$password','$nname','$age' , '$email', '$address', '$contact' ,'$userType')";
        $result = mysqli_query($conn, $query);

        if($result == 1){
            echo "inserted";
        }else{
            echo "error";
        }
    }
?>
