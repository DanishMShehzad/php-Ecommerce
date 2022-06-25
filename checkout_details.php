<?php 
include('connection.php');
$fname = $_POST['fname'];
$lname= $_POST['lname'];
$phonenumber= $_POST['phonenumber'];
$st_address = $_POST['st_address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$Product_id = $_POST['Product_id'];



$stmt=$conn->prepare("INSERT INTO `checkout_detailss` (`fname`, `lname`, `phonenumber`, `st_address`,`city`,`state`,`zipcode`,`Product_id` ) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssisssii",$fname,$lname, $phonenumber ,$st_address,$city,$state,$zipcode,$Product_id);


$stmt->execute();


echo " Done Successfull";

$conn->close();

die;

?>