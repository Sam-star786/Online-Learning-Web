
<?php
require_once('../backend/conn.php');
if (isset($_POST['sub'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ph = $_POST['ph'];
    $em = $_POST['em'];
    $pass = $_POST['pass'];
    $add = $_POST['add'];
    $web = $_POST['web'];
    $fb = $_POST['fb'];
    $git = $_POST['git'];
    $insta = $_POST['insta'];
    $tw = $_POST['tw'];
    $course = $_POST['course'];
    // $img = $_POST['img'];



    $sql="select * from user where email='$em';";
    $res=mysqli_query($con,$sql);
    if (mysqli_num_rows($res) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($res);
    if($em==$row['email'])
    {
        echo '<script type="text/javascript">
        alert("oops Email Already Exsits");
        window.location = "../register/index.php";
     </script>';
    }
}else { //here you need to add else condition
    $sql = "INSERT INTO `user`(`first_name`, `last_name`, `phone`, `email`, `pass`, `address`, `facebook`, `instagram`, `twitter`, `github`, `website`, `course`) VALUES ('$fname', '$lname', '$ph', '$em', '$pass', '$add', '$fb', '$insta', '$tw', '$git', '$web', '$course')";
    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">
    alert("Registerd Successfully");
    window.location = "../login/index.php";
 </script>';
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}

}
?>