<?php
session_start();
include("../../backend/dbconnection.php");
$userid = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php include("./components/navbar.php") ?>
    <?php
    ?>
    <div class="container">



        <?php

        $query = "SELECT * FROM `job_table` where user_id = $userid";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { # 
        ?>
                <div class="card">
                    <h5 class="card-header"><?php echo  $row['position'] ?></h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['company_name'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <small class="text-muted">location: <?php echo $row['address'] ?> </small>
                    </div>
                    <?php echo '<a class="btn btn-primary" href="../view/applicantform.php?id=' . $row['post_id'] . '">View applicant</a> ' ?>
                </div>
            <?php } ?>
        <?php } ?>


    </div>


</body>

</html>