<?php
require_once('../backend/conn.php');

if(isset($_POST['sub'])){
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

    echo $fname;
}
?>