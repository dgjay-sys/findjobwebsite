<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- external css -->
    <link rel="stylesheet" href="../css/registerform.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">

                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <div class="btn-groupd-grid gap-2 d-md-flex justify-content-md-center mb-4" role="group" aria-label="Basic example">
                                        <div>
                                            <button type="button" class="btn btn-secondary btn-md" id="App" checked>Applicant</button>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-secondary btn-md" id="Corp">Corporate</button>
                                        </div>
                                    </div>
                                    <!-- Applicant  Form -->
                                    <div class="mx-1 mx-md-4" id="forApplcnt">
                                        <h6>Appicant Registration</h6>

                                        <!-- app alert -->
                                        <div class="alert alert-success " role="alert" id="appalert" hidden>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="user_name" id="user_name" class="form-control " placeholder="username" required>
                                                    <label for="user_name">username</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="password" name="password" id="password" class="form-control " placeholder="password" required>
                                                    <label for="password">password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="rpass" id="appRpass" class="form-control " placeholder="Repeat Password" required>
                                                    <label for="rpass">Repeat Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="nameornname" id="nameornname" class="form-control " placeholder="Name" required>
                                                    <label for="nameornname">Desired Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="age" id="age" class="form-control " placeholder="Age" required>
                                                    <label for="age">Age</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="email" id="email" class="form-control " placeholder="Age" required>
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="user_contact" id="user_contact" class="form-control " placeholder="Age" required>
                                                    <label for="user_contact">Contact</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- app alert -->
                                        <div class="alert alert-danger " role="alert" id="appDalert" hidden>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button id="registerAppButton" class="btn btn-primary btn-lg">Register</button>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="./loginpage.php">Have an Account? Proceed To Log In </a>
                                        </div>

                                    </div>

                                    <!-- Corporate  Form -->
                                    <div class="mx-1 mx-md-4" id="forCorp">
                                        <h6>Corporate Registration</h6>

                                        <!-- corp alert -->
                                        <div class="alert alert-success " role="alert" id="corpalert" hidden>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="corpuser_name" id="corpuser_name" class="form-control " placeholder="username" required>
                                                    <label for="corpuser_name">username</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="corppassword" id="corppassword" class="form-control " placeholder="password" required>
                                                    <label for="corppassword">password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="password" name="rpass" id="corpRpass" class="form-control " placeholder="Repeat Password" required>
                                                    <label for="corpRpass">Repeat Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="corpnameornname" id="corpnameornname" class="form-control " placeholder="Corporate Name and Branch" required>
                                                    <label for="corpnameornname">Corporate Name and Branch </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="corp_contact" id="corp_contact" class="form-control " placeholder="Age" required>
                                                    <label for="corp_contact">Contact</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="address" id="address" class="form-control " placeholder="Address" required>
                                                    <label for="address">Address</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <div class="form-floating">
                                                    <input type="text" name="corpemail" id="corpemail" class="form-control form-control-sm" placeholder="email" required>
                                                    <label for="corpemail">Email</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- corp alert -->
                                        <div class="alert alert-danger " role="alert" id="corpDalert" hidden>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button id="registerCorpButton" class="btn btn-primary btn-lg">Register</button>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="./loginpage.php">Have an Account? Proceed To Log In </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="../img/960x0.jpg" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<script>
    $(document).ready(function() {
        var typeofUser = "Applicant";
        $('#forCorp').hide();
        $('#forApplcnt').show()

        $('#App').click(() => {
            $('#forCorp').hide();
            $('#forApplcnt').show()
            typeofUser = "Applicant";
        });
        $('#Corp').click(() => {
            $('#forApplcnt').hide();
            $('#forCorp').show()
            typeofUser = "Corporate";
        });



        //  applicant Controller
        $("#registerAppButton").click(() => {
            let user_username = $("#user_name").val();
            let user_password = $("#password").val();
            let user_dname = $("#nameornname").val();
            let user_age = $("#age").val();
            let user_type = typeofUser;
            let user_email = $("#email").val();
            let user_add = $("#address").val();
            let appRepass = $("#appRpass").val();
            let user_con = $("#user_contact").val();

            if (user_username == "" || user_password == "" || user_dname == "" || user_age == "" || user_age == "" || user_email == "") {
                $("#appDalert").removeAttr('hidden');
                document.getElementById("appDalert").innerHTML = "Fill the Textbox"
                $("#appDalert").fadeOut(3000, () => {
                    window.location.href = "../view/registerpage.php"
                });
            } else {

                if (appRepass == user_password) {
                    $.ajax({
                        type: "POST",
                        url: "../../backend/controller/registercontrol.php",
                        data: {
                            user_username: user_username,
                            user_password: user_password,
                            user_dname: user_dname,
                            user_age: user_age,
                            type_user: user_type,
                            user_email: user_email,
                            user_add: user_add,
                            user_con: user_con,
                        },
                        success: function(response) {
                            if (response == "inserted") {
                                $("#appalert").removeAttr('hidden');
                                document.getElementById("appalert").innerHTML = "Data Inserted"
                                $("#appalert").fadeOut(3000, () => {
                                    window.location.href = "../view/loginpage.php"
                                });
                            } else {
                                alert(response);
                            }
                        }
                    });
                } else {
                    $("#appDalert").removeAttr('hidden');
                    document.getElementById("appDalert").innerHTML = "Password and Repassword is not same"
                    $("#appDalert").fadeOut(3000, () => {
                        window.location.href = "../view/registerpage.php"
                    });
                }

            }


        });

        // corporate Controller
        $("#registerCorpButton").click(() => {
            let user_username = $("#corpuser_name").val();
            let user_password = $("#corppassword").val();
            let user_dname = $("#corpnameornname").val();
            let user_type = typeofUser;
            let user_email = $("#corpemail").val();
            let user_age = $("#age").val();
            let user_add = $("#address").val();
            let cRepPass = $("#corpRpass").val();
            let user_con = $("#corp_contact").val();
            if (user_username == "" || user_password == "" || user_dname == "" || user_add == "" || user_email == "") {
                $("#corpDalert").removeAttr('hidden');
                document.getElementById("corpDalert").innerHTML = "Fill the Textbox"
                $("#corpDalert").fadeOut(3000, () => {
                    window.location.href = "../view/registerpage.php"
                });
            } else {

                if (cRepPass == user_password) {
                    $.ajax({
                        type: "POST",
                        url: "../../backend/controller/registercontrol.php",
                        data: {
                            user_username: user_username,
                            user_password: user_password,
                            user_dname: user_dname,
                            type_user: user_type,
                            user_email: user_email,
                            user_age: user_age,
                            user_add: user_add,
                            user_con: user_con,
                        },
                        success: function(response) {
                            if (response == "inserted") {
                                $("#corpalert").removeAttr('hidden');
                                document.getElementById("corpalert").innerHTML = "Data Inserted"
                                $("#corpalert").fadeOut(3000, () => {
                                    window.location.href = "../view/loginpage.php"
                                });
                            } else {
                                alert(response);
                            }
                        }
                    });
                } else {
                    $("#corpDalert").removeAttr('hidden');
                    document.getElementById("corpDalert").innerHTML = "Password and Repassword is not same"
                    $("#corpDalert").fadeOut(3000, () => {
                        window.location.href = "../view/registerpage.php"
                    });
                }

            }

        });

    });
</script>

</html>