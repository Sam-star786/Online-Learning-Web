<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("location:../login/index.php");
}
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
}
if(isset($_GET['coin'])){
    $coin = $_GET['coin'];
    
}
// Selecting total coins
require_once('../backend/conn.php');
// $result = mysqli_query($con, "SELECT * FROM video WHERE user_key = {$_SESSION['id']}");
// $rows = mysqli_num_rows($result);

if($coin < '0'){
    echo '<script type="text/javascript">
    alert("Your coins are less than 50");
    window.location = "../redeem coins/index.php";
 </script>';
}else{
    $pay = $coin * '0.001';
    // Insert payment into db
    $sql = "INSERT INTO `payment`(`user_key`, `pay`, `stat`) VALUES ('$user_id', '$pay', 'pending')";

if ($con->query($sql) === TRUE) {
    // If first query done then second will be work
    $sql = "UPDATE `video` SET `coin`= '0' WHERE user_key = {$_SESSION['id']}";

if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript">
    alert("Your payment is = '.$pay.' Your coins redeem succefully you will be informed from admin when payment is ready");
    window.location = "../redeem coins/index.php";
 </script>';
} else {
  echo "Error updating record: " . $conn->error;
}
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>
