<?php
 
 /**
  * It takes a string, removes any leading or trailing whitespace, removes any backslashes, and
  * converts any special characters to HTML entities.
  * 
  * @param data The data to be sanitized.
  * 
  * @return the value of the variable .
  */
 function checkInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }