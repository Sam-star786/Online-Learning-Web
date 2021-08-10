<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:../login/index.php");
}
require_once '../backend/conn.php';
if (isset($_GET['edit_id'])) {
    $user_id = $_GET['edit_id'];
}
if (isset($_GET['name'])) {
    $user_name = $_GET['name'];
}

// Fetching data for coin
$sql = "SELECT * FROM `user` WHERE id = {$_SESSION['id']}";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $point = $row['point'];
        $coin = $point + 1;
    }
} else {
    echo "0 results";
}

// Uploading video
if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $cat = $_POST['cat'];
    $question = $_POST['question'];
    $opt1 = $_POST['opt1'];
    $opt2 = $_POST['opt2'];
    $opt3 = $_POST['opt3'];
    $opt4 = $_POST['opt4'];
    $copt = $_POST['copt'];
    // Second question
    $question_2 = $_POST['question_2'];
    $opt1_2 = $_POST['opt1_2'];
    $opt2_2 = $_POST['opt2_2'];
    $opt3_2 = $_POST['opt3_2'];
    $opt4_2 = $_POST['opt4_2'];
    $copt_2 = $_POST['copt_2'];
    // Third question
    $question_3 = $_POST['question_3'];
    $opt1_3 = $_POST['opt1_3'];
    $opt2_3 = $_POST['opt2_3'];
    $opt3_3 = $_POST['opt3_3'];
    $opt4_3 = $_POST['opt4_3'];
    $copt_3 = $_POST['copt_3'];
    // Fourth question
    $question_4 = $_POST['question_4'];
    $opt1_4 = $_POST['opt1_4'];
    $opt2_4 = $_POST['opt2_4'];
    $opt3_4 = $_POST['opt3_4'];
    $opt4_4 = $_POST['opt4_4'];
    $copt_4 = $_POST['copt_4'];

    $file_name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_destination = "../image/" . $file_name;

    if (move_uploaded_file($temp_name, $file_destination)) {
        $sql = "INSERT INTO video (user_key, username, video, title, descript, category, stat, question, opt1, opt2, opt3, opt4, copt, question_2, opt1_2, opt2_2, opt3_2, opt4_2, copt_2, question_3, opt1_3, opt2_3, opt3_3, opt4_3, copt_3, question_4, opt1_4, opt2_4, opt3_4, opt4_4, copt_4) VALUES ('$user_id', '$user_name', '$file_name', '$title', '$desc', '$cat',  'pending', '$question', '$opt1', '$opt2', '$opt3', '$opt4', '$copt', '$question_2', '$opt1_2', '$opt2_2', '$opt3_2', '$opt4_2', '$copt_2', '$question_3', '$opt1_3', '$opt2_3', '$opt3_3', '$opt4_3', '$copt_3', '$question_4', '$opt1_4', '$opt2_4', '$opt3_4', '$opt4_4', '$copt_4')";

        if (mysqli_query($con, $sql)) {

            $sql = "UPDATE `user` SET `point`= '$coin' WHERE id = {$_SESSION['id']}";

            if ($con->query($sql) === true) {
                
    echo '<script type="text/javascript">
    alert("Video Uploaded");
    window.location = "../user profile page_/index.php";
 </script>';
            } else {
                echo "Error updating record: " . $con->error;
            }

        } else {
            echo 'Video Not Uploded';
        }
    } else {
        echo 'Please Select a Video';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Profile Photo | Upload</title>
    <style>
        body {
            background-color: lavender;
        }

        .img-box {
            width: 100%;
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="img-box">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <h2 style="text-align: center;">Upload Video</h2><br>
                        <input type="text" name="title" placeholder="Video Title" class="form-control"><br>
                        <input type="text" name="desc" placeholder="Video Description" class="form-control"><br>
                        <select name="cat" id="" class="form-control">
                            <option>UI & UX</option>
                            <option>C</option>
                            <option>C++</option>
                            <option>HTML 5, CSS 3, Bootstrap</option>
                            <option>javaScript</option>
                            <option>PHP</option>
                            <option>MySql</option>
                            <option>Laravel</option>
                            <option>Java</option>
                            <option>Graphic Designing</option>
                            <option>Android , IOS Development</option>
                        </select><br>
                        <input type="file" class="form-control" name="file">
                        <center>Quizz Section</center>
                        <div class="input-group">
                            <input type="text" name="question" value="" placeholder="Question" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt1" value="" placeholder="Option 1" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt2" value="" placeholder="Option 2" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt3" value="" placeholder="Option 3" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt4" value="" placeholder="Option 4" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="copt" value="" placeholder="Correct Answer" class="form-control">
                        </div><br>
                        <!-- second question -->
                        <center>Second Question</center>
                        <div class="input-group">
                            <input type="text" name="question_2" value="" placeholder="Question" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt1_2" value="" placeholder="Option 1" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt2_2" value="" placeholder="Option 2" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt3_2" value="" placeholder="Option 3" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt4_2" value="" placeholder="Option 4" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="copt_2" value="" placeholder="Correct Answer" class="form-control">
                        </div><br>
                        <!-- Third question -->
                        <center>Third Question</center>
                        <div class="input-group">
                            <input type="text" name="question_3" value="" placeholder="Question" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt1_3" value="" placeholder="Option 1" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt2_3" value="" placeholder="Option 2" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt3_3" value="" placeholder="Option 3" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt4_3" value="" placeholder="Option 4" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="copt_3" value="" placeholder="Correct Answer" class="form-control">
                        </div><br>
                        <!-- Fourth question -->
                        <center>Fourth Question</center>
                        <div class="input-group">
                            <input type="text" name="question_4" value="" placeholder="Question" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt1_4" value="" placeholder="Option 1" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt2_4" value="" placeholder="Option 2" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt3_4" value="" placeholder="Option 3" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="opt4_4" value="" placeholder="Option 4" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="text" name="copt_4" value="" placeholder="Correct Answer" class="form-control">
                        </div><br>

                        <input style="margin-top:10px" class="btn btn-outline-success btn btn-block" type="submit" name="upload" value="Upload">


                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>
