<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">



        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-app" id="App" checked>Applicant</button>
            <button type="button" class="btn btn-corp" id="Corp">Corporate</button>

        </div>


        <div id="forApplcnt">
            <div>
                <label for="user_name">Desired Username</label>
                <input type="text" id="user_name" name="username">
            </div>
            <div>
                <label for="password">Desired Password</label>
                <input type="text" id="password" name="password">
            </div>
            <div>
                <label for="password">Desired Name or Nickname</label>
                <input type="text" id="nameornname" name="nameornname">
            </div>
            <div>
                <label for="password">Age</label>
                <input type="text" id="age" name="age">
            </div>
            <div>
                <label for="email">email</label>
                <input type="text" id="email" name="email">
            </div>
            <button id="registerAppButton">Create new user</button>
        </div>

        <div id="forCorp">
            <div>
                <label for="user_name">Desired Username</label>
                <input type="text" id="user_name" name="username">
            </div>
            <div>
                <label for="password">Desired Password</label>
                <input type="text" id="password" name="password">
            </div>
            <div>
                <label for="password">Corporate Name and Branch</label>
                <input type="text" id="nameornname" name="nameornname">
            </div>
            <div>
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
            </div>
            <div>
                <label for="email">email</label>
                <input type="text" id="email" name="email">
            </div>
            <button id="registerCorpButton">Create new user</button>
        </div>


        <!-- <div class="form-check">
            <input class="form-check-input" type="radio" value="Applicant" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                For Applicant
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" value="Corporate" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                For Corporate
            </label>
        </div> -->


        <h6 id="checker"></h6>



    </div>

</body>

</html>
<script>
    $(document).ready(function() {
        var typeofUser = "Applicant";
        $('#forCorp').hide();

        $('#App').click(() => {
            $('#forCorp').hide();
            $('#forApplcnt').show()
        });
        $('#Corp').click(() => {
            $('#forApplcnt').hide();
            $('#forCorp').show()
            user_type = "corporate";
        });




        $("#registerAppButton").click(() => {
            let user_username = $("#user_name").val();
            let user_password = $("#password").val();
            let user_dname = $("#nameornname").val();
            let user_age = $("#age").val();
            let user_type = typeofUser;
            let user_email = $("#email").val();

            $.ajax({
                type: "POST",
                url: "../../backend/controller/registercontrol.php",
                data: {
                    user_username: user_username,
                    user_password: user_password,
                    user_dname: user_dname,
                    user_age: user_age,
                    type_user: user_type,
                    user_email: user_email
                },
                success: function(response) {
                    if (response == "inserted") {
                        $("#checker").text("data inserted");
                        $("#checker").fadeOut(2000);
                    } else {
                        alert(response);
                    }
                }
            });
        });

        $("#registerCorpButton").click(() => {
            let user_username = $("#user_name").val();
            let user_password = $("#password").val();
            let user_dname = $("#nameornname").val();
            let user_age = $("#age").val();
            let user_type = typeofUser;

            $.ajax({
                type: "POST",
                url: "../../backend/controller/registercontrol.php",
                data: {
                    user_username: user_username,
                    user_password: user_password,
                    user_dname: user_dname,
                    user_age: user_age,
                    type_user: user_type
                },
                success: function(response) {
                    if (response == "inserted") {
                        $("#checker").text("data inserted");
                        $("#checker").fadeOut(2000);
                    } else {
                        alert(response);
                    }
                }
            });
        });




    });
</script>