<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("location:index.php");
}
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    
}
//Delete data from DB
require_once('conn.php');
$sql = "UPDATE `video` SET `stat`= 'approved' WHERE id = $user_id";
if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">
    alert("Video Approved");
    window.location = "typography.php";
 </script>';
} else {
    echo "Error updating status record: " . mysqli_error($conn);
}
?>