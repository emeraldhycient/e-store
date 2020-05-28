<?php

$con = new mysqli('localhost','root','','ecommerce') or die($con->error());
$db = new mysqli('localhost','root','','ecommerce') or die($con->error());
function hack($hackvar){
      $hackvar = trim($hackvar);
      $hackvar = stripslashes($hackvar);
      $hackvar =htmlspecialchars($hackvar);
             return $hackvar; 
      }
?>