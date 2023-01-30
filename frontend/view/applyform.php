<?php
session_start();
$id = $_GET['id'];
include("../../backend/dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/appinfoapply.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <!-- job post wall (code) -->
        <?php
        $query = "SELECT * FROM `job_table` where post_id = $id";
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
                        <div class="appinfo">
                            <h5 class="card-header">Your Information</h5>
                            <input type="text" id="postid" name="postid" value=<?php echo $row['post_id']  ?>>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">User Id: </span>
                                <input type="text" name="userid" id="userid" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['user_id'] ?>" hidden>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['user_id'] ?>" disabled>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Name: </span>
                                <input type="text" name="user_name" id="user_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['u_name'] ?>" hidden>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['u_name'] ?>" disabled>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Age: </span>
                                <input type="text" name="user_age" id="user_age" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['u_age'] ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Email: </span>
                                <input type="text" name="user_email" id="user_email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['email'] ?>">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Contact Number: </span>
                                <input type="text" name="user_contact" id="user_contact" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Resume</span>
                                <!-- <input type="text" placeholder="input file name" id="filename"> -->
                                <input type="file" name="user_resume" id="user_resume" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <button class="btn btn-sm btn-outline-primary" onclick="uploadfile()">Apply</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
        <!-- job post wall end (code)-->

    </div>

    <script>
        // $('#user_resume').on('change', function() {
        //     myfile = $(this).val();
        //     var ext = myfile.split('.').pop();
        //     if (ext == "pdf" || ext == "docx" || ext == "doc") {
        //         alert(ext);
        //     } else {
        //         alert(ext);
        //     }
        // });
        // $("#applybtn").click(() => {
        //     let user_name = $('#user_name').val();
        //     let user_age = $('#user_age').val();
        //     let user_email = $('#user_email').val();
        //     let userid = $('#userid').val();
        //     let postid = $('#postid').val();
        //     let user_con = $('#user_contact').val()
        //     let resume = $('#user_resume').prop("files")[0];

        //     $.ajax({
        //         type: "post",
        //         url: "../../backend/controller/apply.php",
        //         data: {
        //             user_name: user_name,
        //             user_age: user_age,
        //             user_email: user_email,
        //             userid: userid,
        //             postid: postid,
        //             user_con: user_con,
        //             resume: resume,
        //         },
        //         success: function(response) {
        //             if (response == "inserted") {
        //                 alert('data inserted')
        //             }
        //         }
        //     });
        // })

        function uploadfile() {
            let user_name = $('#user_name').val();
            let user_age = $('#user_age').val();
            let user_email = $('#user_email').val();
            let userid = $('#userid').val();
            let postid = $('#postid').val();
            let user_con = $('#user_contact').val()
            let resume = $('#user_resume').prop("files")[0];
            
            var form_Data = new FormData();
            form_Data.append("file", resume);
            form_Data.append("user_name", user_name);
            form_Data.append("user_age", user_age);
            form_Data.append("user_email", user_email);
            form_Data.append("user_con", user_con);
            form_Data.append("userid", userid);
            form_Data.append("postid", postid);
        
         

            $.ajax({
                type: "post",
                url: "../../backend/controller/apply.php",
                data: form_Data,
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
        }
    </script>

</body>

</html>