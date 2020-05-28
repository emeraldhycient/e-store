<?php
require_once('./config.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>productview</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        #container {
            margin-top: 1px;
            margin-left: 10px;
            margin-right: 8px;
        }

        nav {
            background-color: black;
        }

        ul {
            list-style-type: none;
        }

        ul li {
            padding: 2px;
        }

        #brand {
            color: gold;
            font-size: 20px;
            font-weight: bolder;
            padding-left: 10px;
        }

        #menu-icon {
            visibility: visible;
            margin-left: 10px;
            color: whitesmoke;
            font-size: 1.6em;
            font-weight: bolder;
        }

        @media only screen and (max-width:495px) {
            #activity {
                display: none;
                background-color: black;
                color: rgb(133, 31, 133);
                height: 400px;
            }

            #md {
                display: none;
            }

            #xs {
                visibility: visible;
            }

            .form {
                display: none;
                position: fixed;
                z-index: 3;
                background: white;
                width: 70%;
                overflow: auto;
                color: grey;
                margin-left: 15%;
                margin-bottom: 6px;
                padding: 5px;
                border: 1px solid slategray;
            }
        }

        @media only screen and (min-width:495px) {
            #xs {
                display: none;
            }

            #md {
                visibility: visible;
            }

            #activity {
                visibility: visible;
                background-color: black;
                color: rgb(133, 31, 133);
            }

            #x {
                display: none;
            }

            .form {
                display: none;
                position: fixed;
                z-index: 3;
                background: white;
                width: 30%;
                overflow: auto;
                color: grey;
                margin-left: 40%;
                margin-bottom: 20%;
                padding: 5px;
                border: 1px solid slategray;
            }

        }

        img {
            width: 100%;
        }

        hr {
            height: 4px;
            background-color: red;
        }

        #form {
            display: none;
            position: absolute;
            z-index: 1;
            background: white;
            width: 97%;
            overflow: auto;
            color: grey;
            margin-bottom: 6px;
            border: 1px solid black;
        }

        button .btn bg-lg m {
            margin-left: 20px;
        }

        .bottom {
            background-color: black;
            padding: 10px;
            color: lightcyan;
            margin-top: 30px;
        }

        h6.rotate {
            position: relative;
            -webkit-transform: rotate(20deg);
            -ms-transform: rotate(20deg);
            transform: rotate(20deg);
            margin-top: 10px;
            margin-bottom: -20px;
            background-color: whitesmoke;
            width: 30px;
            color: antiquewhite;
            border-radius: 7px;
            padding: 5px;
        }

    </style>
</head>

<body>
    <header>
        <nav class="nav fixed-top">
            <h4 id="menu-icon">&#9776;</h4>
            <div id="brand">
                <h4>premium poochez</h4>
            </div>
        </nav>
    </header><br><br>
    <div class="form">
        <center>
            <h2>Contacts</h2><span class="modalhide"><b>x</b></span>
        </center>
        <hr>
        <h6 class="rotate"><img src="icons/calllogo.png" style="width:20px;height:20px;"></h6><span style="color:green;margin-left:20%;">910-709-5459</span><br>
        <h6><img src="icons/message.png" style="width:20px;height:20px;"><span style="color:red;margin-left:10%;">premiumpoochez@gmail.com</span></h6>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $id='';
            $cat='';
            if(isset($_GET['id'])){
            $id = $_GET['id'];
       $sql= "SELECT * FROM product WHERE id={$id}";
       $query = mysqli_query($con,$sql);
       if($query){
         while ($row = mysqli_fetch_object($query)) {
             $cat =$row->cat; 
           $output = '
                 <div style="margin-bottom:6px;"class="col-md-4 img-fluid">
                 <img src="./shopphoto/'.$row->photo.'">
                 </div>
                 <div class="col-md-7">
                 <h5>Name: '.$row->p_title.'</h5>
                  <p>
                  <strong>Description:</strong> '.$row->longdesc.'
                  </p>

                  <table class="table table-bordered table-hover">
                  <tr>
                   <td>
                   Price
                   </td>
                   <td>
                   Discount
                   </td>
                   <td>
                   QTY
                   </td>
                   <td>
                   weight
                   </td>
                   </tr>

                   <tr>
                   <td>
                   <strong>$</strong> '.$row->price.'
                   </td>
                   <td>
                   <strong>%</strong> '.$row->discount.'
                   </td>
                   <td>
                   '.$row->quantity.'
                   </td>
                    <td>
                   '.$row->size.'
                   </td>
                   </tr>

                  </table>
                  
                   <input type="button" style="float:right;margin-top:2px;" class="btn btn-success" id="buy" name="buy" value="contact seller">
                 </div>                
           ';
           echo $output ;
         }
       }else{
         echo " An error occured no vex!".mysqli_error($con);
       }
            }
            
            
            $sql= "SELECT * FROM product WHERE cat=".$cat;
       $query = mysqli_query($con,$sql);
       if($query){
         while ($row = mysqli_fetch_object($query)) {
             if(count($query)>1){
             if($row->id = $id){
                 continue;
             }else{
                 echo 
            '<div>
                <p>related products</p>
                <div class="img"> <img src="./shopphoto/'.$row->photo.'"></div>
                <div class="title">
                <h6>'.$row->title.'</h6>
                <p>'.$row->shortdesc.'</p>
                </div>
            </div>';
             }
         }else{
             echo '<p>related products</p>';

         }
         }
       }else{
           echo mysqli_error($con);
       }
     ?>
        </div><br><br><br><br>
         <div class="bottom">
            <center>
                <p>
                  copyrights premium poochez
                   <span class="m-2 date"></span> 
                </p>
             </center>
        <script src="./jquery-3.4.0.js"></script>
        <script src="./bootstrap/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
             var d = new Date();
            var y = d.getFullYear();
            $(".date").text(y);
            $('#buy').click(() => {
                $('.form').show();

            });
            $('.modalhide').click(function() {
                $('.form').hide();

            });
            })
        </script>
</body>

</html>
