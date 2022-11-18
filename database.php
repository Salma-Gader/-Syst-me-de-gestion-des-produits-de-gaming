<?php

define ('DB_SERVER','localhost');
define ('DB_USERNAME','root');
define ('DB_PASSWORD','1969195s');
define ('DB_NAME','gaming_products');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if ($conn==false){
    die ("database not connected".
    mysqli_connect_error());
    
}else die("database connected");