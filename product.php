<?php
session_start();
require_once('php/CreateDb.php');
require_once('./php/component.php');
$pdo = pdo_connect_mysql();
//create instance of createDb class
$database = new CreateDb("Productdb", "Producttb");

// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
  if (isset($_GET['tableName'])) {
    $tb = $_GET['tableName'];
    $stmt = $pdo->prepare("SELECT * FROM . $tb  WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)

    if (!$product) {
      // Simple error to display if the id for the product doesn't exists (array is empty)
      die('Product does not exist!' . $tb . $product);
    }
  } else {
    die('Category does not exist!');
  }
} else {
  // Simple error to display if the id wasn't specified
  die('Product does not exist!');
}



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
  <style>
    <?php include './css/product.css'; ?>
  </style>.
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/product.css">
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

  <div class="product-page">
    <table>
      <td class="pr-slider">
        <!--Carousel Wrapper-->
        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="d-block w-100" src=<?= $product['product_image'] ?> alt="First slide" style="">
            </div>
            <div class="item">
              <img class="d-block w-100" src=<?= $product['image2'] ?> alt="Second slide" style="">
            </div>
            <div class="item">
              <img class="d-block w-100" src=<?= $product['image3'] ?> alt="Third slide" style="">
            </div>
            <div class="item">
              <img class="d-block w-100" src=<?= $product['image4'] ?> alt="Third slide" style="">
            </div>
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->

          <ol class="carousel-indicators" style="">
            <li data-target="#carousel-thumb" data-slide-to="0" class="active">
              <img src=<?= $product['product_image'] ?>>
            </li>
            <li data-target="#carousel-thumb" data-slide-to="1">
              <img src=<?= $product['image2'] ?>>
            </li>
            <li data-target="#carousel-thumb" data-slide-to="2">
              <img src=<?= $product['image3'] ?>>
            </li>
            <li data-target="#carousel-thumb" data-slide-to="3">
              <img src=<?= $product['image4'] ?>>
            </li>
          </ol>


        </div>
        <!--/.Carousel Wrapper-->


      </td>


      <td class="description ">
        <h4><?= $product['product_name'] ?></h4>
        <h4><?= $product['product_price'] ?>£</h4>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <a href="#">5 reviews</a>
        </div>
      </td>

    </table>

  </div>

  <script src="js/cbpHorizontalMenu.min.js"></script>
  <script>
    $(function() {
      cbpHorizontalMenu.init();
    });

    document.documentElement.setAttribute("lang", "en");
    document.documentElement.removeAttribute("class");

    axe.run(function(err, results) {
      console.log(results.violations);
    });
  </script>
</body>

</html>