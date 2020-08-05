<?php
require_once('php/CreateDb.php');
require_once('./php/component.php');

//create instance of createDb class
$database = new CreateDb("Productdb", "Producttb");

?>
<!DOCTYPE html>
<html>

<head>
  <title>store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php //include 'header.php'; 
  ?> <style>
    <?php include './css/index.css'; ?>
  </style>.
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/modernizr.custom.js"></script>


  <!--font awesome icons--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js" integrity="sha256-+Q/z/qVOexByW1Wpv81lTLvntnZQVYppIL1lBdhtIq0=" crossorigin="anonymous">
  </script>
  <style>
    .carousel-control {
      background: none;
    }

    .carousel {
      min-height: 425px;
      background: none;
      box-shadow: none;
    }

    .carousel-indicators {
      margin-top: 10px;
      margin-left: 220px;
      height: 0px;
    }

    .carousel-indicators ol {
      width: 100%;
      margin-left: 100px;
    }


    .carousel-indicators li {

      width: 25%;
      background-color: black;
      border-right: none;
      border-left: none;
    }

    .carousel-indicators .active {

      width: 10px;
      margin-left: 2px;
      margin-right: 2px;
      margin-top: 1px;
      background-color: black;
    }

    @font-face {
      font-family: 'EagleLake-Regular';
      src: url('fonts/EagleLake-Regular.ttf');
    }

    .cbp-hrmenu>ul>li.ic.cbp-hropen {
      background: none;
      border-left: none;
      border-right: none;
    }
  </style>
  <script>
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll > 0) {
        $("#header").addClass("active");
      } else {
        $("#header").removeClass("active");
      }
    });
  </script>
</head>

<body>

  <!---store name------>
  <div class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="header" style="max-height: 100px;">
    <div class="navbar-header  mx-auto">
      <a href="index.php" class="navbar-brand">STORE</a>
    </div>
  </div>

  <!---selective menu-->
  <div class="container-fluid navbar-expand-lg" style="margin-top:50px;">
    <div class="collapse navbar-collapse menu">
      <!---will put the menu in a row-->
      <nav class="navbar-nav mx-auto stroke cbp-hrmenu" id="cbp-hrmenu">
        <ul style="list-style-type: none;">
          <li class="sub" style="list-style-type: none;"><a href="#" class="nav-link">NEW</a>
            <div class="cbp-hrsub">
              <div class="cbp-hrsub-inner">
                <div>
                  <ul style="text-align: justify; font-size: 9px;font-family: 'EagleLake-Regular';margin-top: 20px;">
                    <li><a href="#" style="background:none ; text-align:justify; border:none">CLASSIC II</a></li><br>
                    <li><a href="#" style="background:none; text-align:justify; border:none">CELESTIAL SKIES</a></li><br>
                    <li><a href="#" style="background:none; text-align:justify; border:none">GLITZ & GLAM</a></li><br>
                    <li><a href="#" style="background:none; text-align:justify; border:none">BACK IN STOCK</a></li>
                    <!-- ... -->
                  </ul>
                </div>

                <div>
                  <!-- ... -->
                </div>
              </div><!-- /cbp-hrsub-inner -->
            </div><!-- /cbp-hrsub -->
          </li>


          <li class="sub"><a href="#" class="nav-link">COLLECTION</a>
            <div class="cbp-hrsub">
              <div class="cbp-hrsub-inner">
                <div>
                  <ul style="text-align: justify; font-size: 9px;font-family: 'EagleLake-Regular';margin-top: 20px;">
                    <li><a href="#" style="background:none; border:none">CLASSIC II</a></li><br>
                    <li><a href="#" style="background:none; border:none">MRS. WEST</a></li><br>
                    <li><a href="#" style="background:none; border:none">CELESTIAL SKIES</a></li><br>
                    <li><a href="#" style="background:none; border:none">GLITZ & GLAM</a></li><br>
                    <li><a href="#" style="background:none; border:none">KKW X MARIO: THE ARTIST & MUSE</a></li>
                    <li><a href="#" style="background:none; border:none">KKW X WINNIE</a></li><br>
                    <li><a href="#" style="background:none; border:none">90'S MATTES</a></li><br>
                    <li><a href="#" style="background:none; border:none">SOOO FIRE</a></li> <br>
                    <li><a href="#" style="background:none; border:none">BODY</a></li><br>
                    <li><a href="#" style="background:none; border:none">NUDE LIPS</a></li>

                  </ul>
                </div>
                <div>
                  <ul style="text-align: justify; font-size: 9px;font-family: 'EagleLake-Regular';margin-top: 20px;">
                    <li><a href="#" style="background:none; border:none">CONTOUR & HIGHLIGHT</a></li>
                    <li><a href="#" style="background:none;border:none">CONCEAL BAKE BRIGHTEN</a></li>
                    <li><a href="#" style="background:none;border:none">GLAM BIBLE</a></li><br>
                    <li><a href="#" style="background:none; border:none">BEST OF SETS</a></li><br>
                    <li><a href="#" style="background:none; border:none">CLASSIC RED</a></li><br>
                    <li><a href="#" style="background:none; border:none">KKW X KYLIE</a></li><br>
                    <li><a href="#" style="background:none; border:none">CLASSIC BLOSSOM</a></li><br>
                    <li><a href="#" style="background:none; border:none">CLASSIC</a></li><br>
                    <li><a href="#" style="background:none; border:none">FLASHING LIGHTS</a></li>
                    <li><a href="#" style="background:none; border:none">ULTRALIGHT BEAMS</a></li>

                  </ul>
                </div>

              </div><!-- /cbp-hrsub-inner -->
            </div><!-- /cbp-hrsub -->
          </li>

          <li><a href="#" class="nav-link"><button class="GFG" onclick="window.location.href = 'body.php';">BODY</button></a>
            <!--         <div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
                                </div>
                            </div>-->
          </li>
          <li class="sub"><a href="#" class="nav-link">LIPS</a>
            <div class="cbp-hrsub">
              <div class="cbp-hrsub-inner">
                <div>
                  <ul style="text-align: justify; font-size: 9px;font-family: 'EagleLake-Regular';margin-top: 20px;">
                    <li><a href="#" style="background:none; border:none">GLOSS</a></li><br>
                    <li><a href="#" style="background:none; border:none">LIPSTICK</a></li><br>
                    <li><a href="#" style="background:none; border:none">LIP LINER</a></li><br>
                    <li><a href="#" style="background:none; border:none">LIP CRAYON</a></li>
                    <li><a href="#" style="background:none; border:none">KKW BY KYLIE COSMETICS</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="sub"><a href="#" class="nav-link">EYES</a>
            <div class="cbp-hrsub">
              <div class="cbp-hrsub-inner">
                <div>
                  <ul style="text-align: justify; font-size: 9px;font-family: 'EagleLake-Regular';margin-top: 20px;">
                    <li><a href="#" style="background:none; border:none">EYESHADOW</a></li><br>
                    <li><a href="#" style="background:none; border:none">EYELINER</a></li><br>
                    <li><a href="#" style="background:none; border:none">MASCARA</a></li>
                    <li><a href="#" style="background:none; border:none">LOOSE POWDER PIGMENTS</a></li>
                    <li><a href="#" style="background:none; border:none">PRESSED POWDER PIGMENTS</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="sub"><a href="#" class="nav-link">FACE</a>
            <div class="cbp-hrsub">
              <div class="cbp-hrsub-inner">
                <div>
                  <ul style="text-align: justify; font-size: 9px;font-family: 'EagleLake-Regular';margin-top: 20px;">
                    <li><a href="#" style="background:none; border:none"> BLUSH</a></li><br>
                    <li><a href="#" style="background:none; border:none">CONCEALER</a></li><br>
                    <li><a href="#" style="background:none; border:none"> BAKING & BRIGHTENING POWDERS</a></li>
                    <li><a href="#" style="background:none; border:none"> CONTOUR</a></li><br>
                    <li><a href="#" style="background:none; border:none"> HIGHLIGHTER</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li><a href="#" class="nav-link"><button class="GFG" onclick="window.location.href = 'body.php';">TOOLS</button></a>
            <!--    <div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
                                </div>
                            </div>  -->
          </li>
          <li><a href="#" class="nav-link"><button class="GFG" onclick="window.location.href = 'body.php';">PACKS & BUNDLES</button></a>
            <!--     <div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
                                </div> 
                            </div> -->
          </li>
          <li><a href="#" class="nav-link"><button class="GFG" onclick="window.location.href = 'body.php';">LOOKS</button></a>
            <!--  <div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
                                </div>
                            </div> -->
          </li>

          <li style="margin-left:-20px;float:right" class="ic sub"><a href="#" class="nav-link "><img src="images/loupe.png" style="max-width:22px;"></a>
            <div class="cbp-hrsub icon" style="width: 20%; float: right; margin-left: 80%;    height: 30px;">
              <div class="cbp-hrsub-inner ic">

                <form>
                  <input name="search" type="text" class="srch" placeholder="Enter your search here...">
                </form>
              </div>
            </div>
          </li>
          <li class="ic sub" style="margin-left:-20px;float:right"><a href="#" class="nav-link ic"><img src="images/user.png" style="max-width:22px;"></a>
            <div class="cbp-hrsub icon" style="width: 20%; float: right; margin-left: 80%;">
              <div class="cbp-hrsub-inner ic">
                <form class="form-login" action="includes/login.inc.php" method="post"><br>
                  <div class="email-box">
                    <img src="images/social%20(1).png" style="max-width: 20px;">
                    <input type="text" name="mailuid" placeholder="E-mail"><br>
                  </div>
                  <div class="pwd-box">
                    <img src="images/lock%20(1).png" style="max-width: 20px;">
                    <input type="password" name="pwd" placeholder="Password"><br>
                  </div>
                  <a href="#" style="color: #460606; text-shadow:none; margin-bottom: 15px;">forgot your password ?</a>
                  <div class="sumbit-box">
                    <button type="submit" name="login-submit" onclick="">Login</button>
                  </div>
                  <p style="margin-top:15px;">Don't have an account ?</p>
                  <div class="sumbit-box">
                    <button type="submit" name="login-submit" onclick="">Signup</button>
                  </div>
                </form>
              </div>
            </div>
          </li>
          <li class="ic sub" style="float:right"><a href="#" class="nav-link"><img src="images/shopping-bag.png" style="max-width:22px;"></a>
            <div class="cbp-hrsub icon" style="width: 30%; float: right; margin-left: 70%;">
              <div class="cbp-hrsub-inner ic">
              </div>
            </div>
          </li>

          <!--
                         <div class="nav-icons" style="float:right;">
                        <table style="margin-top:10px;">
                          <td><img src="images/loupe.png"  style="max-width:22px;"></td>
                          <td><img src="images/user.png" style="max-width:22px;margin-left:13px;"></td>
                          <td><img src="images/shopping-bag.png" style="max-width:22px;margin-left:13px;"></td>
                        </table>
                      </div>

                    -->
        </ul>

      </nav>
    </div>

  </div>
  <!---selective menu end--->

  <!---body content start---->
  <div class="wrapper">
    <div class="child1">
      <div class="title1">
        <a href="#">RODO BEAUTY COLLECTION</a>
        <a href="#">
          <h4>RODO's FAVOURITES</h4>
        </a>
        <a href="#">
          <p>GET KIM'S EFFORTLESS,CLASSIC LOOK WITH HER GO-TO PRODUCTS</p>
        </a>
        <a href="#">RODO BEAUTY COLLECTION</a>
      </div>
    </div>

    <table class="slide1">
      <td style="padding-left: 50px; max-width: 200px;">
        <h1 class="slider-text"> COMING SOON: CLASSIC II </h1>

      </td>
      <td>
        <div class="container" style="padding-top:50px; width:100%">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">



            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active " style="margin-left: 100px; min-width:1100px; text-align: center;">
                <?php
                $tb = 'producttb';
                $result = $database->getData($tb);
                $ind = 1;
                while (($row = mysqli_fetch_assoc($result)) && ($ind <= 3)) {
                  $id = $row['id'];
                  component($row['product_name'], $row['product_price'], $row['old_price'], $row['product_image'], "./product.php?id=$id&tableName=$tb");
                  $ind++;
                }
                ?>
              </div>

              <div class="item " style="margin-left: 300px; min-width:1100px; text-align: center;">
                <?php
                $tb = 'producttb';
                $result = $database->getData($tb);
                while ($row = mysqli_fetch_assoc($result)) {
                  if (($row['id'] > 3) && ($row['id'] <= 5)) {
                    $id = $row['id'];
                    component($row['product_name'], $row['product_price'], $row['old_price'], $row['product_image'], "./product.php?id=$id&tableName=$tb");
                  }
                }

                ?>
              </div>

              <div class="item " style="margin-left: 300px; min-width:1100px; text-align: center;">
                <?php
                $tb = 'producttb';
                $result = $database->getData($tb);
                while ($row = mysqli_fetch_assoc($result)) {
                  if (($row['id'] > 5) && ($row['id'] <= 7)) {
                    $id = $row['id'];
                    component($row['product_name'], $row['product_price'], $row['old_price'], $row['product_image'], "./product.php?id=$id&tableName=$tb");
                  }
                }
                ?>
              </div>
            </div>


            <!-- Left and right controls  -->

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>


            <!-- Indicators -->

            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active" style="  width: 15px; height: 15px; border-radius: 100%;"></li>
              <li data-target="#myCarousel" data-slide-to="1" style="  width: 15px; height: 15px; border-radius: 100%; "></li>
              <li data-target="#myCarousel" data-slide-to="2" style="  width: 15px; height: 15px; border-radius: 100%;"></li>
            </ol>






            <!--<div class="container">
  <div class="row text-center py-5">

  </div>
</div> -->


          </div>
        </div>
      </td>
    </table>

    <div class="child1">
      <div class="title2">
        <a href="#">RODO BEAUTY COLLECTION</a>
        <a href="#">
          <h4>RODO's FAVOURITES</h4>
        </a>
        <a href="#">
          <p>GET KIM'S EFFORTLESS,CLASSIC LOOK WITH HER GO-TO PRODUCTS</p>
        </a>
        <a href="#">RODO BEAUTY COLLECTION</a>
      </div>
    </div>
    <table class="slide1">
      <td style="padding-left: 50px; max-width: 200px">
        <h1 class="slider-text"> BEST SELLERS </h1>

      </td>
      <td>
        <div class="container" style="padding-top:50px;  width:100%">
          <div id="myCarousel2" class="carousel slide" data-ride="carousel">



            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active " style="margin-left: 100px; min-width:1100px; text-align: center;">
                <?php
                $tb = 'producttb';
                $result = $database->getData('producttb');
                $ind = 1;
                while (($row = mysqli_fetch_assoc($result)) && ($ind <= 3)) {
                  $id = $row['id'];
                  component($row['product_name'], $row['product_price'], $row['old_price'], $row['product_image'], "./product.php?id=$id&tableName=$tb");
                  $ind++;
                }
                ?>
              </div>

              <div class="item " style="margin-left: 300px; min-width:1100px; text-align: center;">
                <?php
                $tb = 'producttb';
                $result = $database->getData('producttb');
                while ($row = mysqli_fetch_assoc($result)) {
                  if (($row['id'] > 3) && ($row['id'] <= 5)) {
                    $id = $row['id'];
                    component($row['product_name'], $row['product_price'], $row['old_price'], $row['product_image'], "./product.php?id=$id&tableName=$tb");
                  }
                }

                ?>
              </div>

              <div class="item " style="margin-left: 300px; min-width:1100px; text-align: center;">
                <?php
                $tb = 'producttb';
                $result = $database->getData('producttb');
                while ($row = mysqli_fetch_assoc($result)) {
                  if (($row['id'] > 5) && ($row['id'] <= 7)) {
                    $id = $row['id'];
                    component($row['product_name'], $row['product_price'], $row['old_price'], $row['product_image'], "./product.php?id=$id&tableName=$tb");
                  }
                }
                ?>
              </div>
            </div>


            <!-- Left and right controls  -->

            <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>


            <!-- Indicators -->

            <ol class="carousel-indicators">
              <li data-target="#myCarousel2" data-slide-to="0" class="active" style="  width: 15px; height: 15px; border-radius: 100%;"></li>
              <li data-target="#myCarousel2" data-slide-to="1" style="  width: 15px; height: 15px; border-radius: 100%; "></li>
              <li data-target="#myCarousel2" data-slide-to="2" style="  width: 15px; height: 15px; border-radius: 100%;"></li>
            </ol>






            <!--<div class="container">
  <div class="row text-center py-5">

  </div>
</div> -->


          </div>
        </div>
      </td>
    </table>


    <div id="carouselExample2" class="carousel slide" data-ride="carousel" style="width: 100%; max-height: 600px;">

      <div class="carousel-inner">
        <div class="item active">
          <img class="d-block w-100" src="images/wom1.png" style="max-height: 670px;">
          <div class="carousel-caption first" style="  bottom: 25%; right: 40%; z-index: 10; color: aliceblue;">
            <h4 style="text-align: left; font-size:24px"> <a href="#">NATURING DIFFERENT SKIN COLOR</a> </h4>
            <p style="text-align: left;"> <a href="#">With different skin color</a> </p>
            <p style="text-align: left;"> <a href="#">Comes different cream care</a> </p>
            <p style="text-align: left;"> <a href="#">Inspired by</a> </p>
            <p style="text-align: left;"> <a href="#">Different weather textures</a> </p>
            <form class="shop" action="looks.php" method="post">
              <button type="button" name="shopnow" class="bttn-pill bttn-md bttn-primary" style="float: left;">SHOP NOW <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
            </form>
          </div>
        </div>
        <div class="item">
          <img class="d-block w-100" src="images/wom2.png" style="max-height: 670px;">
          <div class="carousel-caption second" style="  bottom: 30%">
            <h4 style="text-align: left;font-size:24px"> <a href="#">NATURING DIFFERENT SKIN COLOR</a> </h4>
            <p style="text-align: left;"> <a href="#">With different skin color</a> </p>
            <p style="text-align: left;"> <a href="#">Comes different cream care</a> </p>
            <p style="text-align: left;"> <a href="#">Inspired by</a> </p>
            <p style="text-align: left;"> <a href="#">Different weather textures</a> </p>
            <form class="shop" action="looks.php" method="post">
              <button type="button" name="shopnow" class="bttn-pill bttn-md bttn-primary" style="float: left;">SHOP NOW <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
            </form>
          </div>
        </div>
        <div class="item">
          <img class="d-block w-100" src="images/d05817f7-53a7-4d6d-b53c-41728a6920d7.jpg" style="max-height: 670px;">
          <div class="carousel-caption third" style="  bottom: 40%;">
            <div style="  bottom: 40%;left: 5%">
              <h4 style="font-size:24px;text-align: right;"> <a href="#">NATURING DIFFERENT SKIN COLOR</a> </h4>
              <p style="text-align: right;"> <a href="#">With different skin color</a> </p>
              <p style="text-align: right;"> <a href="#">Comes different cream care</a> </p>
              <p style="text-align: right;"> <a href="#">Inspired by</a> </p>
              <p style="text-align: right;"> <a href="#">Different weather textures</a> </p>
            </div>
            <div style="float: right">
              <form class="shop" action="looks.php" method="post">
                <button type="button" name="shopnow" class="bttn-pill bttn-md bttn-primary last">SHOP NOW <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators">
        <li data-target="#carouselExample2" data-slide-to="0" class="active" style="  width: 7px; height: 7px;"></li>
        <li data-target="#carouselExample2" data-slide-to="1" style="  width: 7px; height: 7px; "></li>
        <li data-target="#carouselExample2" data-slide-to="2" style="  width: 7px; height: 7px;"></li>
      </ol>
    </div>

    <div class="jumbotron">

    </div>


    <div class="page-footer">
      <div class="content1">
        <table>
          <td class="register">
            <h1>Stay in the know</h1>
            <h3>Subscribe to our newsletter now</h3>
            <h4>and get 15% off your first order</h4>
          </td>
          <td>
            <form class="subscribe-form">
              <input type="text" name="e-mail-sub" placeholder="Enter your e-mail address here" style="margin-left:20px">
              <button type="submit" name="subscribe-submit" onclick=""><img src="images/email2.png" style="max-width:30px;"></button>
            </form>
          </td>
        </table>

      </div>
      <hr>
      <h2 style="margin-left: 10px">Follow us on social media</h2>
      <table class="contact">
        <td><a href="#"><img src="images/facebook.png"></a></td>
        <td><a href="#"><img src="images/instagram.png"></a></td>
        <td><a href="#"><img src="images/pinterest.png"></a></td>
        <td><a href="#"><img src="images/twitter.png"></a></td>
      </table>

      <div class="footer-list1" style="float: left;">
        <ul style="list-style-type: none;">
          <li><a href="#">About</a></li>
          <li><a href="#">Customer Service</a></li>
          <li><a href="#">Find a Store</a></li>
          <li><a href="#">Supplier Relations</a></li>
          <li><a href="#">FAQ</a></li>

        </ul>
      </div>
      <div>

      </div>
      <div class="footer-list2">
        <ul style="list-style-type: none;">
          <table class="footer-list">
            <td>
              <li><a href="#">Privacy Policy</a></li>
            </td>
            <td>
              <li><a href="#">Interest-Based Ads</a></li>
            </td>
            <td>
              <li><a href="#">Do Not Sell My Personal Information</a></li>
            </td>
            <td>
              <li><a href="#">Terms of Use</a></li>
            </td>
            <td>
              <li><a href="#">Accessibility</a></li>
            </td>
          </table>
        </ul>
      </div>



    </div>



  </div>


  <script src="js/cbpHorizontalMenu.min.js"></script>
  <script>
    $(function() {
      cbpHorizontalMenu.init();
    });
  </script>


</body>


</html>