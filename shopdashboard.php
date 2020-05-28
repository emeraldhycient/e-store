<?php

session_start();
if(!$_SESSION['idz']){
  exit(' NO DIRECT ACCESS ALLOWED ');
}
require_once('./config.php');

      

       if(isset($_GET['id'])){
       $id=  $_GET['id'];
       $sql= " DELETE FROM product WHERE id=".$id;
       $query = mysqli_query($con,$sql);
       if($query){
           echo " <script> alert('product deleted');</script>";
           header('location:shopdashboard.php');
       }else{
        echo " <script> alert('product could not be deleted');</script>";
       }
      }   

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ralddashboard</title>
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
            color: rgb(133, 31, 133);
            ;
            font-size: 20px;
            font-weight: bolder;
            padding-left: 10px;
        }

        #new {
            color: red;
            font-size: 20px;
            font-weight: bolder;
        }

        .newpostx {
            color: white;
            background: blue;
            margin-left: 70%;
            margin-top: 0.5px;
        }

        .newx {
            color: green;
            font-size: 20px;
            font-weight: bolder;
        }

        #menu-icon {
            visibility: visible;
            margin-left: 10px;
            color: rgb(133, 31, 133);
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

            .col-md-10 {
                padding-top: 35px;
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

            #form {
                margin-left: 30%;
                margin-right: 10px;
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
            padding-top: 40px;
            margin-bottom: 6px;
            border: 1px solid black;
        }

        #red {
            background: red;
            border-radius: 8px;
            margin: 5px;
            height: 40px;

        }

        #yellow {
            background: yellow;
            border-radius: 8px;
            margin: 5px;
            height: 40px;

        }

        #green {
            background: green;
            border-radius: 8px;
            margin: 5px;
            height: 40px;

        }

        button .btn bg-lg m {
            margin-left: 20px;
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
            <p class="newpostx" id="newpost"><span class="newx" id="new">+</span>New post</p>
        </nav>
    </header><br><br>
    <div id="form" class="col-md-4">
        <form method="POST" action="shopscript.php" enctype="multipart/form-data">
            <p align="center">Enter New Product... <span class="x" style="float:right;font-weight: bolder;">x</span></p>
            <input type="text" name="title" placeholder="product full name" class="form-control"><br>
            <input type="text" name="shortdes" placeholder="brief description description" class="form-control"><br>
            <textarea name="longdesc" placeholder="enter product full description" style="height:100px;width:100%"></textarea><br>
            <input type="number" name="qty" placeholder="quantity" class="form-control"><br>
            <select name="select">
               <option>A</option>
               <hr>
                <option value="Afador">Afador</option>
                <option value="Affenpinscher">Affenpinscher</option>
                <option value="Afghan hound">Afghan hound</option>
                <option value="Airedale_terrier">Airedale terrier</option>
                <option value="Akbash">Akbash</option>
                <hr><option>B</option><hr>
                <option value="Barbet">Barbet</option>
                <option value="Basenji">Basenji</option>
                <option value="watches">Bassador</option>
                <hr><option>c</option><hr>
                <option value="Canaan">Canaan</option>
                <option value="Cane_corso">Cane corso</option>
                <option value="Cairn_Terrier">Cairn Terrier</option>
                <hr><option >D</option><hr>
                <option value="Dachsadar">Dachsadar</option>
                <option value="Dachshund">Dachshund</option>
                <option value="Dalmatian">Dalmatian</option>
                <hr><option>E</option>                <hr>
                <option value="english_setter">English setter</option>
                <option value="English_foxhound">English foxhound</option>
                <option value="Eurasier">Eurasier</option>
                <hr>
                <option>f</option>
                                <hr>
                <option value="Field_spaniel">Field spaniel</option>
                <option value="Finnish_lapphund">Finnish lapphund</option>
                <option value="Finnish_spitz</">Finnish spitz</option>
                <option>more to be added</option>
            </select>
            <input type="text" name="color" placeholder="color" class="form-control"><br>
            <input type="number" name="size" placeholder="weight" class="form-control"><br>
            <input type="number" name="price" placeholder="price" class="form-control"><br>
            <input type="number" name="discount" placeholder="discount" class="form-control"><br>
            <input type="file" name="photo" >
            <button class="btn btn-danger" type="submit" name="submit">submit</button>
        </form>
    </div>
    <div id="container">
        <div class="row">
            <div id="activity" class="col-md-2">
                <hr>
                <ul>
                    <li id="x"><span style="float:right;font-weight: bolder;">x</span></li>
                    <li>
                        <p>Number Of Post<span style="background:white;border-radius:10px;color:green;margin-left:3px;padding:4px;">
                                <?php
                                       $sql= "SELECT * FROM product WHERE shop_id={$_SESSION['idz']}";
                                          $query = mysqli_query($con,$sql);
                                          if($query){
                                             echo mysqli_num_rows($query);
                                          }else{
                                            echo '0';
                                          }
                                          ?>

                            </span></p>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-2 bg-danger text-white" id="red">
                        <h6 class="">
                            live product:
                            <?php
                                       $sql= "SELECT * FROM product WHERE shop_id={$_SESSION['idz']}";
                                          $query = mysqli_query($con,$sql);
                                          if($query){
                                             echo mysqli_num_rows($query);
                                          }else{
                                            echo '0';
                                          }
                                          ?>
                        </h6>
                    </div>   
                </div>

                <center>
                    <h5>recent post</h5>
                </center>
                <?php
       $sql= "SELECT * FROM product WHERE shop_id={$_SESSION['idz']} ORDER BY id DESC";
       $query = mysqli_query($con,$sql);
       if($query){
         while ($row = mysqli_fetch_object($query)) {
           $output = '
           <div class="row">
                 <div class="col-md-3 img-fluid">
                 <img src="./shopphoto/'.$row->photo.'">
                 </div>
                 <div class="col-md-5">
                 <h5>Name: '.$row->p_title.'</h5>
                  <p>
                  <strong>Description:</strong> '.$row->longdesc.'
                  </p>
                  <small>'.$row->submitted_on.'</small>
                  </div>
                  <div class="col-md-4">
                  <table class="table table-bordered table-hover table-responsive" border="1px solid black">
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
                   Delete
                   </td>
                   <td>
                   Update
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
                   <a href="sedit.php?id='.$row->id.'"><button class="btn btn-success" id="update">update</button></a>
                   </td>
                   <td>
                   <a href="shopdashboard.php?id='.$row->id.'"><button class="btn btn-danger">delete</button></a>
                   </td>
                   </tr>

                  </table>
                 </div>                
           </div>
      <br>
           ';
           echo $output ;
         }
       }else{
         echo " An error occured no vex!".mysqli_error($con);
       }

     ?>
                <div id="xs">
                    <button class="btn bg-lg m"><a href="">Account Settings</a></button>
                    <button class="btn bg-lg m"><a href="">Support</a></button>
                </div>


            </div>

        </div>

        <script src="./jquery-3.4.0.js"></script>
        <script src="./bootstrap/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                let menuicon = $("#menu-icon");
                let activity = $("#activity");
                let xm = $("#x");
                let xc = $(".x");
                let form = $("#form");
                var newpost = $("#newpost");
                var update = $("#update");

                menuicon.click(function() {
                    activity.show();
                });
                /* update.click(function () {
                   updateform.show();
                 });*/
                xm.click(function() {
                    activity.hide();
                });

                newpost.click(function() {
                    form.show();
                });

                xc.click(function() {
                    form.hide();
                });
                window.onclick = function(e) {
                    if (e.target == form) {
                        form.hide();
                    } else if (e.target == activity) {
                        activity.hide();
                    }
                }

            });

        </script>
</body>

</html>
