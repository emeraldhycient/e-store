<?php
session_start();
require_once('./config.php');
 
  if(isset($_POST['submit'])){
     if (!empty($_POST["title"]) || !empty($_FILES["photo"]) && !empty($_POST["longdesc"]) && !empty($_POST["shortdes"])
     && !empty($_POST["qty"]) && !empty($_POST["price"]) ) {
        $title = hack($_POST["title"]);
      $long =  hack($_POST["longdesc"]);
      $select = hack($_POST["select"]);
      $shot = hack($_POST["shortdes"]);
      $price = hack($_POST["price"]);
      $discount = hack($_POST["discount"]);
      $size =  hack($_POST["size"]);
      $color = hack($_POST["color"]);
      $qty =  hack($_POST["qty"]);
      $imgz = $_FILES["photo"]["name"];
      $photopath = "./shopphoto/".basename($_FILES["photo"]["name"]);
        $sql = " INSERT INTO product(p_title,photo,longdesc,shortdesc,quantity,color,size,price,discount,shop_id,cat) VALUES
         ('$title','$imgz','$long','$shot','$qty','$color','$size','$price','$discount',{$_SESSION['idz']},'$select') ";
        $query = mysqli_query($con,$sql);
         if (move_uploaded_file($_FILES["photo"]["tmp_name"],$photopath)){
                     if($query){
           echo "submitted";
                          }else{
        echo"query didnt work".mysqli_error($con);;   
      }
      }else{
        echo"img move failed".mysqli_error($con);
      }
           
  }else {
    echo"some fields are empty";
  
       }
             }
     
  
?>
