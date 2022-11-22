<?php
include('database.php');
session_start();
if(isset($_POST['save']))  saveProduct();
if (isset($_GET['del']))  deletProduct();
if (isset($_POST['update']))   saveUpdet();

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
 function saveProduct(){
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
  }else if/* A variable that is used to store the value of the quantity of the product. */
  ($quantity === "" || $quantity === null){
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
 /*fuction update*/
 function updateProduct(){
  global $conn;
  if(isset($_GET['edit'])){
  $id=$_GET['edit'];
  $_SESSION['idedit'] = $_GET['edit'] ;
  $result =mysqli_query($conn,"SELECT * FROM products WHERE ID=$id");
  if(mysqli_num_rows($result) === 1){
     $info = $result->fetch_assoc();
    return $info ;
   }else {
    die('This Product Not Found');
   }
  }
}
/*fuction save update */
function saveUpdet(){
  global $conn;
  $id=$_POST['id'];
  $image = checkInput($_POST['image']);
  $nameProduct = checkInput($_POST['nameProduct']);
  $description = checkInput($_POST['description']);
  $quantity =checkInput($_POST['quantity']);
  $price = checkInput($_POST['price']);
  $query= "UPDATE `products` SET `image`='$image',`name`='$nameProduct',`description`='$description',`quantity`='$quantity',`price`='$price' WHERE id= $id";
  if(mysqli_query($conn, $query)){
    $_SESSION['message'] = "Task has been updated successfully !";
    header('location: dashboard.php');
  }
}

/*function delet products*/
function deletProduct(){
 global $conn;
 $id = $_GET['del'];
 $qry = "DELETE FROM products WHERE ID=$id ";
 mysqli_query($conn,$qry);
}

 