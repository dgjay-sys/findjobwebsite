<?php 
    session_start();
    include("../dbconnection.php");
   
    if(isset($_POST["Uname"])){
        $username = $_POST["Uname"];
        $password = md5($_POST["Pword"]);

        
        if(!empty($username) && !empty($password)){
            $query = "SELECT * FROM `user_accounts` WHERE u_user = '$username' and u_pass = '$password' ";
            $result = mysqli_query($conn, $query);
            if($result){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        $_SESSION['user_id'] = $row[0];
                        $_SESSION['u_name'] = $row[3];
                        $_SESSION['userType'] = $row[7];
                    }
                    echo "Success";
                    mysqli_free_result($result);
                }else{
                 echo "error";
                }
            }
        }
    }else{
        echo "error";
    }
