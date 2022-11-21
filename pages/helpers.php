<?php
include('database.php');
session_start();
if(isset($_POST['save']))        saveTask();
 /**
  * It takes a string, removes any leading or trailing whitespace, removes any backslashes, and
  * converts any special characters to HTML entities.
  * 
  * @param data The data to be sanitized.
  * 
  * @return the value of the variable .
  */
 function checkInput($data){
   include('database.php');
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn,$data);
    return $data;
 }
 /* Fucntion add products */
 function saveTask(){
  global $conn;
  $image = checkInput($_POST['image']);
  $nameProduct = checkInput($_POST['nameProduct']);
  $description = checkInput($_POST['description']);
  $quantity =checkInput($_POST['quantity']);
  $price = checkInput($_POST['price']);
  if($image === "" || $image === null){
    echo("enter image");
  }else if($nameProduct === "" || $nameProduct === null){
    echo("enter name");
  }else if($description === "" || $description === null){
    echo("enter description");
  }else if($quantity === "" || $quantity === null){
    echo("enter quantity");
  }else if($price === "" || $price === null){
    echo("enter price");
  }else{
    $query = "INSERT INTO `products` VALUES (null,'$image','$nameProduct','$description','$quantity','$price')";
    $result = mysqli_query($conn,$query);
    $_SESSION['message'] = "product saved"; 
    header('location: dashboard.php');
  }

 }
 
 

 
