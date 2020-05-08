<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location:log/login/signin.php");
}
if(isset($_POST['t'])){
    $data = json_decode($_POST['t'],true);
    $con = mysqli_connect('localhost','root','','travel');
    $user = $_SESSION['email'];
    $res = mysqli_query($con,"SELECT * FROM user_auth WHERE email='$user';");
    $row = mysqli_fetch_assoc($res);
    $pay_id = mt_rand(1000,10000);
    $booking_id = mt_rand(10000,100000);
    $price = $data['price'];
    $dest = $data['dest'];
    $tm = $data['time'];
    $q = "INSERT INTO `booking` (`id`, `booking_id`, `email`, `fname`, `pay_amt`, `pay_id`, `package`, `package_id`) 
    VALUES (NULL, '$booking_id', '$user', '".$row['fname']."', '$price', '".$pay_id."', '".$data['dest']."', '".$tm."');";
    $ress = mysqli_query($con,$q);
    echo json_encode("Success");
}

?>