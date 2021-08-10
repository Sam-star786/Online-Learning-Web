<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:../login/index.php");
}
if(isset($_GET['card'])){
    $card = $_GET['card'];
    
}
if(isset($_GET['card_coin'])){
    $card_coin = $_GET['card_coin'];
   
}

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    
}
if(isset($_GET['user_coin'])){
    $user_coin = $_GET['user_coin'];
   
}

if(isset($_GET['code'])){
    $code = $_GET['code'];
   
}
// if($user_coin < '0'){
//     echo '<script type="text/javascript">
//     alert("Your coins are less than 50 You cannot redeem them");
//     window.location = "../redeem coins/index.php";
//  </script>';
// }

$new_coin = $user_coin - $card_coin; 

require_once('../backend/conn.php');

if($user_coin >= $card_coin){
    $sql = "UPDATE `user` SET `point`= '$new_coin' WHERE id = {$_SESSION['id']}";

if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript">
    alert("Your coupon code is '.$code.'");
    window.location = "../redeem coins/index.php";
 </script>';
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
}else{
    echo '<script type="text/javascript">
    alert("You not have enough coins for purchase this card");
    window.location = "../giftcard/index.php";
 </script>';
}




?>