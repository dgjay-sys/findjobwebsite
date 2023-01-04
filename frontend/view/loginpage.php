
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="alert alert-danger" role="alert" id="alert" hidden>
            A simple danger alert—check it out!
        </div>
        <div>
            <label for="username">username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>


        <button id="login" name="login">Sign In</button>


        <a href="./registerpage.php"> <button id="register" name="register"> register </button></a>
    </div>



</body>


<script>
    var xample = "xample";
    $(document).ready(function() {
      
        $('#login').click(() => {
            var Uname = $("#username").val();
            var Pword = $("#password").val();
            $.ajax({
                type: "POST",
                url: "../../backend/controller/homecontrol.php",
                data: {
                    Uname: Uname,
                    Pword: Pword,
                },
                success: function(response) {
                    if (response == "Success") {
                        alert("Success");
                        window.location.href = "./homepage.php"
                    } else {
                        $("#login").attr('style', 'background-color: red');
                        $("#alert").removeAttr('hidden');
                        $("#alert").fadeOut(1500, () => {
                            window.location.reload(true);
                        });

                    }
                }
            });

        })
    });
</script>


</html>