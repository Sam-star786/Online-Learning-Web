<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<?php
session_start();
require_once('../backend/conn.php');

if (isset($_POST['sub'])) {
    $em = $_POST['em'];
    $pass = $_POST['pass'];

    $sql = mysqli_query($con, "SELECT * FROM user WHERE email = '$em' AND pass = '$pass'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_array($sql);
        $_SESSION['id'] = $row['id'];

        header("location:../user profile page_/index.php");

    } else {
        echo '<script type="text/javascript">
    alert("Your Email or Password is wrong!");
    window.location = "../login/index.php";
 </script>';
    }
}




?>