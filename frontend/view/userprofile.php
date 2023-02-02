<?php
session_start();
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

    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <?php echo '<img src="../../backend/controller/uploadedprofile/' . $_SESSION['profile'] . '" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />' ?>
                                <h5>User ID: <?php echo $_SESSION['user_id'] ?> </h5>
                                <p>User Type: <?php echo $_SESSION['usertype'] ?></p>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Name:</h6>
                                            <p class="text-muted"><?php echo $_SESSION['u_name'] ?></p>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <h6>Age:</h6>
                                            <p class="text-muted"><?php echo $_SESSION['u_age'] ?></p>
                                        </div>
                                    </div>
                                    <h6>Contact</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email:</h6>
                                            <p class="text-muted"><?php echo $_SESSION['email'] ?></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Cellphone #:</h6>
                                            <p class="text-muted"><?php echo $_SESSION['contact'] ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="card" style="width: 18rem;">
        <div class="row">
            <div class="col">
                <img src="../img/png-transparent-user-profile-computer-icons-user-interface-mystique-miscellaneous-user-interface-design-smile-thumbnail.png" class="card-img-top" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <input type="" id="id_user" value="<?php echo $row['user_id'] ?>">
                <h5 class="card-title">User Information</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">User ID:</li>
                    <li class="list-group-item">User Name: <?php echo $_SESSION['u_name'] ?> </li>
                    <li class="list-group-item">User Age: <?php echo $_SESSION['user_name'] ?> </li>
                    <li class="list-group-item">User Email: <?php echo $_SESSION['user_email'] ?></li>
                    <li class="list-group-item">User Contact: <?php echo $_SESSION['user_contact'] ?></li>
                    <li class="list-group-item">User Status: <?php echo $_SESSION['user_contact'] ?></li>
                </ul>
                <div class="card-footer">
                    <label for="status">Status:</label>
                    <select name="status" id="status">
                        <option value=" <?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
                        <option value="denied">denied</option>
                        <option value="for interview">for interview</option>
                        <option value="accepted">accepted</option>
                    </select>
                    <button id="btnupstat" class="btn btn-primary mt-2">Update Status</button>
                </div>
            </div>
        </div>
    </div>



    <!-- job post wall end (code)-->
    </div>


</body>

<script>
    $(document).ready(() => {

        $("#btnupstat").click(() => {
            var appstat = $('#status').val();
            var userid = $('#id_user').val();

            $.ajax({
                type: "POST",
                url: "../../backend/controller/updatestatus.php",
                data: {
                    appstat: appstat,
                    userid: userid
                },
                success: function(response) {
                    if (response == "updated") {
                        alert('status updated');
                    }
                }
            });
        })

    })
</script>

</html>