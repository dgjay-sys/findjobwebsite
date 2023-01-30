<?php
session_start();
include("../../backend/dbconnection.php");
$userid = $_SESSION['user_id'];
$user_id = $_GET['id'];
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
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <?php if ($_SESSION['usertype'] == 'Corporate') { ?>
                                <a class="nav-link" href="../view/checkpost.php">Check Post</a>
                            <?php } else { ?>
                                <a class="nav-link" href="../view/checkstatus.php">Check Status</a>
                            <?php } ?>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['u_name'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../view/updateinfoform.php">Account Settings</a></li>
                                <li>
                                    <form action="./logout.php" class="dropdown-item">
                                        <button class="btn btn-sm btn-outline-secondary" id="logout">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <?php
    ?>
    <div class="container">

        <?php
        $query = "SELECT * FROM `applicant_table` where user_id = $user_id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
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
                                <li class="list-group-item">User ID: <?php echo $row['user_id'] ?></li>
                                <li class="list-group-item">User Name: <?php echo $row['user_name'] ?> </li>
                                <li class="list-group-item">User Age: <?php echo $row['user_name'] ?> </li>
                                <li class="list-group-item">User Email: <?php echo $row['user_email'] ?></li>
                                <li class="list-group-item">User Contact: <?php echo $row['user_contact'] ?></li>
                                <li class="list-group-item">User Status: <?php echo $row['user_contact'] ?></li>
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
            <?php } ?>
        <?php } else {
            echo "error";
        } ?>


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