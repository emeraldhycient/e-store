<?php
require_once('./config.php');
$out = "";
if(isset($_GET['buy'])){
     $id =$_GET['buy'];
     $sql = "SELECT * FROM users WHERE id={$id}";
    $query= mysqli_query($con,$sql);
    if($query){
        if($row = mysqli_fetch_object($query)){
               $out = '
               welcome
               ';
        }else{

        }
    }else{

    }
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
		
			
		
		
		
	
		