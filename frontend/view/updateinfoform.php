<?php
session_start();
include("../../backend/dbconnection.php");
$user_id = $_SESSION["user_id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <?php include("./components/navbar.php") ?>
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }

            #password,
            #username {
                width: 400px;
                height: 50px;
            }

            .container {
                margin-top: 10%;
            }

            body {
                background: radial-gradient(circle at 18.7% 37.8%, rgb(250, 250, 250) 0%, rgb(225, 234, 238) 90%);
            }
        </style>


        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                        <div class="card-body p-5 shadow-5 text-center mx-auto">
                            <h2 class="fw-bold mb-5">Update Information</h2>
                            <div class="alert alert-danger" role="alert" id="alert" hidden>

                            </div>

                            <!-- Email input -->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Current Name:</span>
                                <input type="text" name="userid" id="userid" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['u_name'] ?>">
                                <span class="input-group-text" id="inputGroup-sizing-sm">New Name: </span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

                                <button class="btn btn-primary">Update</button>
                            </div>

                            <!-- Password input -->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Current Email: </span>
                                <input type="text" name="user_age" id="user_age" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['email'] ?>">
                                <span class="input-group-text" id="inputGroup-sizing-sm">New Email: </span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

                                <button class="btn btn-primary">Update</button>
                            </div>


                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Email: </span>
                                <input type="text" name="user_email" id="user_email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['email'] ?>">
                            </div>

                            <h2 class="fw-bold mt-5">Update Profile </h2>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" id="iduser" value="<?php echo $user_id ?>">
                                <input type="file" name="user_profile" id="user_profile" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                <button class="btn btn-primary" id="updateprofile">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="../img/5f886024e0f788ec824937e3_10tips.jpg" class="w-100 rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
    </div>



    <script>
        $(document).ready(() => {

            $("#updateprofile").click(() => {
                let profilepic = $('#user_profile').prop("files")[0];
                let userid = $('#iduser').val();
                var formdata = new FormData();
                formdata.append('file', profilepic)
                formdata.append('userid', userid)

                console.log(userid)
                $.ajax({
                    type: "post",
                    url: "../../backend/controller/updateprofile.php",
                    data: formdata,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response == "inserted") {
                            alert(response)
                        } else {
                            alert(response)
                        }
                    }
                });
            })

        })
    </script>

</body>

</html>