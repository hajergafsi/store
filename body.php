<?php
require_once('php/CreateDb.php');
require_once('./php/component.php');

//create instance of createDb class
$database = new CreateDb("Productdb", "Producttb");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>body</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php //include 'header.php'; 
  ?> <style>
    <?php include 'css/index.css'; ?>
  </style>
  <?php //include 'header.php'; 
  ?> <style>
    <?php include 'css/component.css'; ?>
  </style>
  <?php //include 'header.php'; 
  ?> <style>
    <?php include 'css/body.css'; ?>
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script src="js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <style>
    .cbp-hrmenu>ul>li.ic.cbp-hropen {
      background: none;
      border-left: none;
      border-right: none;
    }
  </style>


  <!--font awesome icons--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
</head>

<body>
  <div class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="header" style="height: 70px;">
    <div class="navbar-header  mx-auto">
      <a href="index.php" class="navbar-brand">STORE</a>
    </div>
  </div>

  <div class="container-fluid navbar-expand-lg" style="margin-top:70px;">
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
          <li><a href="#" class="nav-link">TOOLS</a>
            <!--    <div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
                                </div>
                            </div>  -->
          </li>
          <li><a href="#" class="nav-link">PACKS & BUNDLES</a>
            <!--     <div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
                                </div> 
                            </div> -->
          </li>
          <li><a href="#" class="nav-link">LOOKS</a>
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

  <div class="firstrow">
    <img src="images/horizontal.jpg" alt="img">
  </div>

  <div class="secondrow">
    <div class="row text-center py-5">
      <?php
      $tb = 'bodyproducts';
      $result = $database->getData($tb);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        component($row['product_name'], $row['product_price'], $row['old_price'], $row['product_image'], "./product.php?id=$id&tableName=$tb");
      }
      ?>
    </div>

  </div>
  <hr>

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
  <script src="js/cbpHorizontalMenu.min.js"></script>
  <script>
    $(function() {
      cbpHorizontalMenu.init();
    });
  </script>

</body>

</html>