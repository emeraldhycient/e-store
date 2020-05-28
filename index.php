<?php
session_start();
require_once('./config.php');

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
            #img {
                width: 150px;
                height: 225px;
            }
            
            * {
                padding: 0;
                margin: 0;
            }
            
            body {
                background-color: rgb(150, 76, 58);
            }
            
            #container {
                margin-top: 1px;
                margin-left: 10px;
                margin-right: 8px;
            }
            
            nav {
                background-color: darkslategrey;
                height: 70px;
            }
            
            ul {
                list-style-type: none;
            }
            
            ul li {
                padding: 2px;
            }
            
            #brand {
                color: gold;
                font-size: 30px;
                font-weight: bolder;
                padding-left: 10px;
                margin-top: 15px;
            }
            
            #new {
                color: red;
                font-size: 20px;
                font-weight: bolder;
            }
            
            #menu-icon {
                visibility: visible;
                margin-left: 10px;
                color: whitesmoke;
                font-size: 1.6em;
                font-weight: bolder;
                margin-top: 15px;
            }
            
            @media only screen and (max-width:570px) {
                #activity {
                    display: block;
                    background-color: ;
                    /*color:rgb(133, 31, 133);*/
                    color: whitesmoke;
                    height: 100px;
                }
                #activity a {
                    color: grey;
                }
                #cart {
                    margin-top: -40px;
                    margin-left: 80%;
                    color: white;
                }
                /*.col-md-10 {
                display: flex;
            }*/
                #slide {
                    margin-left: 2%;
                    margin-right: 2%;
                    height: 300px;
                    width: 96%;
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
                .img-thumbnail img {
                    opacity: 0.9;
                    height: 90px;
                }
                .body {
                    position: relative;
                    margin-top: -60px;
                    padding: 10px;
                }
                .body h2 {
                    font-size: 1em;
                    color: rgba(245, 245, 245, 0.89);
                }
                .col-md-3 {
                    margin-top: 3px;
                    width: 50%;
                    float: left;
                }
            }
            
            @media only screen and (min-width:495px) {
                #activity {
                    display: block;
                    background-color: darkgray;
                    /*color:rgb(133, 31, 133);*/
                    color: whitesmoke;
                    height: 600px;
                }
                #cart {
                    margin-left: 86%;
                    color: white;
                    padding-top: 2px;
                    margin-top: -50px;
                }
                #activity a {
                    color: whitesmoke;
                }
                #x {
                    display: none;
                }
                #logo {
                    height: 400px;
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
                .col-md-3 {
                    margin-top: 30px;
                }
                .img-thumbnail a img {
                    opacity: 0.9;
                    height: 110px;
                }
                .body {
                    position: relative;
                    margin-top: -60px;
                    padding: 10px;
                }
                .body h2 {
                    font-size: 1.2em;
                    opacity: 1;
                    color: whitesmoke;
                }
            }
            
            img {
                width: 100%;
            }
            
            hr {
                height: 4px;
                background-color: skyblue;
            }
            
            a {
                color: rgb(133, 31, 133);
            }
            
            #cart a {
                color: goldenrod;
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
            
            .slide {
                margin-left: 1%;
                margin-right: 1%;
                height: 300px;
                width: 98%;
                margin-top: 10px;
            }
            
            .bottom {
                background-color: black;
                padding: 10px;
                color: lightcyan;
                margin-top: 30px;
            }
            
            .first {
                background-color: dimgray;
                padding: 10px;
                display: flex;
            }
            
            .logo {
                background-color: darkslategrey;
            }
        </style>
    </head>

    <body>
        <header>
            <nav class="nav">
                <h4 id="menu-icon">&#9776;</h4>
                <div id="brand">
                    <h4>premium poochez</h4>
                </div>
            </nav>
        </header>
        <div class="logo">
            <img src="dogs/20200215_202853.png" id="logo" width="100%" height="300px">
        </div>
        <div class="form">
            <center>
                <h2>Contacts</h2><span class="modalhide"><b>x</b></span>
            </center>
            <hr>
            <h6 class="rotate"><img src="icons/calllogo.png" style="width:20px;height:20px;"></h6><span style="color:green;margin-left:20%;">910-709-5459</span><br>
            <h6><img src="icons/message.png" style="width:20px;height:20px;"><span style="color:red;margin-left:10%;">premiumpoochez@gmail.com</span></h6>
        </div>
        <div id="container">
            <div class="row">
                <div id="activity" class="col-md-1">
                    <hr>
                    <ul>
                        <li id="x"><span style="float:right;font-weight: bolder;">x</span></li>
                        <li>
                            <a href="login2.php"><small>Dashboard </small></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-11">
                    <img name="slide" class="slide">
                    <div class="row">
                        <?php 
                     $sQL="SELECT * FROM product";
                      $qury= mysqli_query($con,$sQL);
                        if($qury){
                            while($row = mysqli_fetch_object($qury)){
                          $outp=
                       ' 
                        <div class="col-md-3">
                        <div class="img-thumbnail"> 
                        <a href="mainview.php?id='.$row->id.'"><img src="./shopphoto/'.$row->photo.'" class="rounded"></a>
                        </div>
                        <div class="text-success body">
                        <h2>'.$row->p_title.'<span class="text-white p-2">$'.$row->price.'</span></h2>
                        </div>
                        </div>';
                               echo $outp;
                            }

                        }else{
                            echo  mysqli_error($con);
                        }

                ?>

                    </div>
                </div>
            </div>
        </div><br><br><br>
        <div class="bottom">
            <center>
                <p>
                    copyrights premium poochez
                    <span class="m-2 date"></span>
                </p>
            </center>
        </div>
        <script src="./jquery-3.4.0.js"></script>
        <script src="./bootstrap/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                var d = new Date();
                var y = d.getFullYear();
                $(".date").text(y);
                let menuicon = $("#menu-icon");
                let activity = $("#activity");
                let xm = $("#x");
                let xc = $(".x");
                let form = $("#form");
                var newpost = $("#newpost");
                var menuClicked = false;
                var slideimg = [];
                slideimg[0] = 'dogs/images (6).jpeg';
                slideimg[1] = 'dogs/IMG-20200216-WA0003.jpg';
                slideimg[2] = 'dogs/IMG-20200216-WA0004.jpg';
                slideimg[3] = 'dogs/IMG-20200216-WA0002.jpg';
                var i = 0;

                change();

                function change() {
                    document.slide.src = slideimg[i];
                    if (i < slideimg.length - 1) {
                        i++;
                    } else {
                        i = 0;
                    }
                    setTimeout(change, 1000);
                }
                menuicon.click(function() {
                    if (menuClicked == false) {
                        activity.show();
                        menuClicked = true;

                    } else {
                        activity.hide();
                        menuClicked = false;
                    }

                });
                xm.click(function() {
                    activity.hide();
                    menuClicked = false;
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

                $('.rotate').click(function() {
                    $('.form').show();
                });
                $('.modalhide').click(function() {
                    $('.form').hide();

                });

            });
        </script>
    </body>

    </html>