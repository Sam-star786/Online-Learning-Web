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
$sql = "DELETE FROM user WHERE id= $user_id;";
if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">
    alert("User Deleted");
    window.location = "tables.php";
 </script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>