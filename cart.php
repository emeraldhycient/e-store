<?php
require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <style>
        body{
            padding:0;
            margin:0; 
        }
        @media only screen and (max-width:495px){

        }
    </style>
</head>
<body>
    <p class="text bg-white text-danger" id="dapp"><?php echo $msg ?></p>
    <div>
           
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