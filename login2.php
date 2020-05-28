<?php
define("main",true);
require_once('./config.php');
 session_start();
 $msg="";
 if(isset($_SESSION['usernamez']) && isset($_SESSION['idz'])){
    header('location:shopdashboard.php');
}elseif(isset($_POST["login"])){
        if(!empty($_POST["con"]) && !empty($_POST["pass"]) ){
            $con1 = hack($_POST['con']);
            $pass= hack($_POST['pass']);
            $sql = "SELECT * FROM merchants WHERE email='$con1' AND pass='$pass' ";
            $query=mysqli_query($con,$sql);
            if($query){
                if($row = mysqli_fetch_object($query)){
                    $_SESSION['idz']= $row->shop_id;
                    $_SESSION['usernamez']=$row->username;
                    header('location:shopdashboard.php');
                }
            }else{
                $msg=" query could not be executed".mysqli_error($con1);
            }
     }else{
        $msg="please fill the fields";
     }

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <style>
        body{
            padding:0;
            margin:0; 
            background: whitesmoke;
        }
        .container{
            background:rgb(2, 1, 14);
            padding:10px;
            margin-top:100px;
            margin-left:50%;
            width:80%;
        }
        .container input {
            background: whitesmoke;
            color:white;
        }
        .btn{
            background:rgb(6, 26, 6); 
        }
        @media only screen and (max-width:495px){
            .container{
            background:rgb(2, 1, 14);
            padding:5px;
            margin-top:5px;
            margin-left:10%;
            width:80%;
        }
        }

    </style>
</head>
<body>
    <p></p>
    <div class="row">
            <div class="col-md-6"> 
    <div class="container">
    <p class="text bg-white text-danger" id="dapp"><?php echo $msg ?></p>
                    <form method="POST">
                            <input class="form-control" type="text" placeholder="phone username or email" name="con"><br>  
                            <input class="form-control" type="password" placeholder="enter password" name="pass"><br> 
                            <button type="submit" class="btn btn-primary" style="float:right;" name="login">login</button>
                        </form>
                    <p></p>
                    <p class="btn btn-warning"><a href="register2.php">register</a></p>
            </div>
        </div>
           
    </div>
<script src="./jquery-3.4.0.js"></script>
<script src="./bootstrap/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
   setInterval(() => {
        hid();
    }, 3000);
    function hid(){
        var dapp = $("#dapp");
         dapp.hide();
    }
});
</script>
</body>
</html>