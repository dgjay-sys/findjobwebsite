<?php
session_start();
include("../../backend/dbconnection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <?php include("./components/navbar.php")?>

    <div class="container">

        <!-- job post -->
        <?php if ($_SESSION['usertype'] == 'Corporate') { ?>
            <input type="text" id="corpid" hidden value=<?php echo $_SESSION['user_id'] ?>>
            <input type="text" id="corpname" hidden value=<?php echo $_SESSION['u_name'] ?>>
            <input type="text" id="corpemail" hidden value=<?php echo $_SESSION['email'] ?>>
            <input type="text" id="corpadd" hidden value=<?php echo $_SESSION['address'] ?>>

            <div>
                <label for="jobposition">job position</label>
                <input type="text" id="jobposition" name="jobposition">
            </div>
            <div>
                <label for="corpdescription">job description</label>
                <textarea name="corpdescription" id="corpdescription" name="corpdescription" cols="50" rows="5" maxlength="225"></textarea>
            </div>
            <button id="post" class="btn btn-primary">post</button>
        <?php } ?>





        <!-- job post wall (code) -->
        <?php
        $query = "SELECT * FROM `job_table`";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <div class="card">
                    <h5 class="card-header"><?php echo  $row['position'] ?></h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['company_name'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <small class="text-muted">location: <?php echo $row['address'] ?> </small>
                    </div>
                    <div class="card-footer">
                        <?php echo '<a class="btn btn-primary" href="../view/applyform.php?id=' . $row['post_id'] . '">Apply</a> ' ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
        <!-- job post wall end (code)-->
    </div>








    <p id="example"></p>
    </div>


    <script>
        $(document).ready(() => {

            $("#post").click(() => {
                let jobDesc = $('#corpdescription').val();
                let jobPos = $('#jobposition').val();
                let corpName = $('#corpname').val();
                let corpEmail = $('#corpemail').val();
                let corpAdd = $('#corpadd').val();
                let corpId = $('#corpid').val();


                $.ajax({
                    type: "post",
                    url: "../../backend/controller/jobpostcontrol.php",
                    data: {
                        jobDesc: jobDesc,
                        jobPos: jobPos,
                        corpName: corpName,
                        corpEmail: corpEmail,
                        corpAdd: corpAdd,
                        corpId: corpId
                    },
                    success: function(response) {
                        if (response == "Success") {
                            alert('data inserted')
                            window.location.reload(true)
                        }
                    }
                });
            })


            $("#checker").click(() => {
                let id = $("#corpid").val();
                console.log(id)
            })

        })
    </script>

</html>