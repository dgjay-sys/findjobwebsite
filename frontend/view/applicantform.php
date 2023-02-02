<?php
session_start();
include("../../backend/dbconnection.php");
$userid = $_SESSION['user_id'];
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/applicantform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <?php include("./components/navbar.php") ?>
    <?php
    ?>
    <div class="container">

        <?php
        $query = "SELECT * FROM `applicant_table` where post_id = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-lg-6 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                                <div class="row g-0">
                                    <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                        <?php echo '<img src="../../backend/controller/uploadedprofile/' . $row['u_profile'] . '" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />' ?>
                                        <h5><?php echo $row['user_name'] ?></h5>
                                        <p>Age: <?php echo $row['user_age'] ?> </p>
                                        <i class="far fa-edit mb-5"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <h6>Information</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Email</h6>
                                                    <p class="text-muted"><?php echo $row['user_email'] ?></p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Phone</h6>
                                                    <p class="text-muted"><?php echo $row['user_contact'] ?></p>
                                                </div>
                                            </div>
                                            <h6>Projects</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>resume</h6>

                                                    <?php echo '<a href="../../backend/controller/uploadedfiles/' . $row['user_resume'] . '">' . $row['user_resume'] . '</a>' ?>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <form action="../view/updatestatus.php" method="post">
                                                        <input type="" name="id_user" hidden value="<?php echo $row['user_id'] ?>">
                                                        <h6>Update Status</h6>
                                                        <label for="status">Status:</label>
                                                        <select name="status" id="status">
                                                            <option value=" <?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
                                                            <option value="denied">denied</option>
                                                            <option value="for interview">for interview</option>
                                                            <option value="accepted">accepted</option>
                                                        </select>
                                                        <button class="btn btn-primary mt-2">Update Status</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
<?php } ?>
<?php } else {
            echo "error";
        } ?>


<!-- job post wall end (code)-->
</div>

<script>
    // $(document).ready(() => {

    //     $("#btnupstat").click(() => {
    //         var appstat = $('#status').val();
    //         var userid = $('#id_user').val();

    //         $.ajax({
    //             type: "POST",
    //             url: "../../backend/controller/updatestatus.php",
    //             data: {
    //                 appstat: appstat,
    //                 userid: userid
    //             },
    //             success: function(response) {
    //                 if (response == "updated") {
    //                     alert('status updated');
    //                 }
    //             }
    //         });
    //     })

    // })
</script>
</body>

</html>