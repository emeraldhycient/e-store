<?php
 session_start();
require_once('./config.php');
     $msg="";
 if(isset($_POST['register'])){
           if(!empty($_POST['email'] ) && !empty($_POST['pass'] ) && !empty($_POST['tel1'] ) && !empty($_POST['address1']) 
       &&  !empty($_POST['username'] ) && !empty($_FILES["avatar"])){
    $path ="./shopphoto/".basename($_FILES['avatar']['name']);
    $avatar = $_FILES['avatar']['name'];
    $username = hack($_POST['username']);
    $pass = hack($_POST['pass']);
    $cpass = hack($_POST['cpass']);
    $address1 = hack($_POST['address1']);
    $address2 = hack($_POST['address2']);
    $tel1 = hack($_POST['tel1']);
    $tel2 = hack($_POST['tel1']);
    $email = hack($_POST['email']);
    if($pass = $cpass ){
        $sql = "INSERT INTO merchants(shopusername,pass,phone1,phone2,address1,address2,email,logo)
         VALUES('$username','$pass','$tel1','$tel2','$address1','$address2','$email','$avatar') ";
         $query = mysqli_query($con,$sql);
         if($query){
             $move = move_uploaded_file($_FILES["avatar"]["tmp_name"],$path);
             if($move){
                $_SESSION['idz']= $con->insert_id;
                 $_SESSION['usernamez']=$username;
               $msg = "submitted"; 
               header('location:shopdashboard.php');
             }else{
                $msg = "image couldnot be submitted".mysqli_error($con);
             }
         }else{
             $msg = "form couldnot be submitted".mysqli_error($con);
         }
    }else{
            $msg = " passwords doesnt match";
        }
     }else{
        $msg = "some fields are empty"; 
     }
    
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>become a rald merchant</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <style>
        body{
            padding:0;
            margin:0; 
            background: rgb(19, 17, 17);
        }
        .container{
            background:rgb(2, 1, 14);
            padding:5px;
            margin-top:20px;
            margin-left:50%;
            width:80%;
        }
        .container input {
            background: whitesmoke;
            color:grey;
        }
        .btn{
            background:rgb(6, 26, 6);
        }
        input.btn{
            background:rgb(6, 26, 6);
            color:red; 
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
    <p class="text bg-white text-danger" id="dapp"><?php echo $msg ?></p>
    <div class="row">
            <div class="col-md-6"> 
    <div class="container">
                <p><center style="color:purple;"> Become a seller</center></p>
                    <form method="POST" action="register2.php" enctype="multipart/form-data">
                    <div class="hidecon1"> 
                            <input class="form-control" type="text" name="username" placeholder="username"><br> 
                            <input class="form-control" type="text"name="address1" placeholder="office address"><br>  
                            <input class="form-control" type="text"name="address2" placeholder="other address"> <br> 
                            <input class="form-control" type="number" name="tel1"placeholder="office line"> <br> 
                            <input class="form-control" type="number" name="tel2"placeholder="secondary contact"> <br> 
                            </div>
                            <div class="hidecon"> 
                            <input class="form-control" type="email" name="email"placeholder="email"><br>  
                            <input class="form-control" type="file" name="avatar"placeholder="logo"><br> 
                            <input class="form-control" type="password" name="pass"placeholder="password"><br> 
                            <input class="form-control" type="password" name="cpass" placeholder="comfirm password"><br> 
                    <input type="submit" name="register" class="btn btn-primary" style="float:right;" value="register">
                    </div>
                    </form>
                    <p></p>
                    <p class="btn btn-warning"><a href="login2.php">login</a></p>
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

 /*   var hidecon = $('.hidecon');
    var hidecon1 = $('.hidecon1');
    var hid = $('#hide1');

    hidecon.hide();
   hid.on('click',function() {
    hidecon.show();
    hidecon1.hide();
   });*/
   
});
</script>
</body>
</html>