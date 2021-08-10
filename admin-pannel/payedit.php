<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("location:index.php");
}
if(isset($_GET['pay_id'])){
    $pay_id = $_GET['pay_id'];
    
}
//Delete data from DB
require_once('conn.php');
$sql = "UPDATE `payment` SET `stat`= 'Paid' WHERE id = $pay_id";
if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">
    alert("Payment Approved");
    window.location = "payment.php";
 </script>';
} else {
    echo "Error updating status record: " . mysqli_error($conn);
}
?>