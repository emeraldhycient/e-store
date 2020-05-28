<?php
      $id="";
require_once('./config.php');
if(isset($_POST['submit'])){
    if (!empty($_POST["title"]) || !empty($_FILES["photo"]) || !empty($_POST["longdesc"]) || !empty($_POST["shortdes"])
    && !empty($_POST["qty"]) || !empty($_POST["price"]) ) {
       $title = hack($_POST["title"]);
     $long =  hack($_POST["longdesc"]);
     $shot = hack($_POST["shortdes"]);
     $price = hack($_POST["price"]);
     $discount = hack($_POST["discount"]);
     $size =  hack($_POST["size"]);
     $color = hack($_POST["color"]);
     $qty =  hack($_POST["qty"]);
       $sql = "UPDATE product SET p_title='$title', shortdesc='$shot', longdesc='$long', quantity='$qty', size='$size',
        color='$color', price='$price', discount='$discount'  WHERE id='$id'";
       $query = mysqli_query($con,$sql);
       if($query){
       header("location:shopdashboard.php");
   }else{
       echo"query didnt work ".mysqli_error($con);;   
     }
 }else {
   echo"some fields are empty";
 }
    }
    
if(isset($_GET["id"])){
     $id =$_GET["id"];
     $sql = "SELECT * FROM product WHERE id={$id}";
    $query= mysqli_query($con,$sql);
    if($query){
        if($row = mysqli_fetch_object($query)){
               $out = '
               <div id="form" class="col-md-6">
            <form method="POST" action="" enctype="multipart/form-data">
                <p align="center">Edit '.$row->p_title.'... <span class="x" style="float:right;font-weight: bolder;">x</span></p>
                <input type="text" name="title" value="'.$row->p_title.'" placeholder="product full name" class="form-control"><br>
                <input type="text" name="shortdes" value="'.$row->shortdesc.'" placeholder="brief description description" class="form-control"><br>
                <input name="longdesc" value="'.$row->longdesc.'" placeholder="enter product full description" style="height:100px;width:100%"><br>
                <input type="number" name="qty" value="'.$row->quantity.'" placeholder="quantity" class="form-control"><br>
                <input type="text" name="color" value="'.$row->color.'" placeholder="color" class="form-control"><br>
                <input type="number" name="size" value="'.$row->size.'" placeholder="size" class="form-control"><br>
                <input type="number" name="price" value="'.$row->price.'" placeholder="price" class="form-control"><br>
                <input type="number" name="discount" value="'.$row->discount.'" placeholder="discount" class="form-control"><br>
                <img src="./shopphoto/'.$row->photo.'" style="width:100px;height:100px;">
                <button class="btn btn-danger" type="submit" name="submit">submit</button>
            </form>
        </div>
               ';

        }
    }else{
     echo 'query didnt work'.mysqli_error($con1);
    }
}else{
    echo ' pls go back and click on a page';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>simple shopping cart</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <style>
        body{
            background:black;
        }
     #form{
        margin-left: 4px;
        margin-top:8px;
        position: absolute;
        z-index:1; 
        background:white;
        width:97%;
        overflow:auto;
        color:rgb(32, 85, 32);
        margin-bottom:6px;
    }
    </style>
</head>
<body>
<div class="container">
<?php
    echo $out;
?>

</div>
<script src="./jquery-3.4.0.js"></script>
        <script src="./bootstrap/bootstrap.min.js"></script>
      
</body>
</html>
		
			
		
		
		
	
		