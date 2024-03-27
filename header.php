<?php 
  include('db_connect.php'); 
  session_start();

  $id = $_SESSION['id'];
  $sql = "SELECT count(id) as cart FROM cart where customer_id='$id'";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
      $totl_cart = $row['cart'];
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.lionode.com/moonstore/ms02/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Aug 2020 04:16:40 GMT -->
<head>
<title>KitchenAid</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="image/favicon.png" rel="icon" type="image/png" >
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="javascript/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet"/>
<link href="css/stylesheet.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="javascript/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="javascript/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="javascript/template_js/jstree.min.js"></script>
<script type="text/javascript" src="javascript/template_js/template.js"></script>
<script type="text/javascript" src="javascript/common.js" ></script>
<script type="text/javascript" src="javascript/global.js"></script>
<script type="text/javascript" src="javascript/owl-carousel/owl.carousel.min.js" ></script>
<script type="text/javascript">
  function cartpage() {
    location.href = 'cart.php';
  }
</script>
</head>
<body class="index">
<div class="preloader loader" style="display: block;"> <img src="image/loader.gif"  alt="#"/></div>
<header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="top-left pull-left">
            
            <div class="currency">
              <form action="#" method="post" enctype="multipart/form-data" id="currency">
                <div class="btn-group">
                  <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>Welcome to our online store! </strong> <span class="caret"></span> </button>
                  <!-- <ul class="dropdown-menu">
                    <li><a href="#">Euro</a></li>
                    <li><a href="#">Pound</a></li>
                    <li><a href="#">USD</a></li>
                  </ul> -->
                </div>
              </form>
            </div>
            
          </div>
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class=" fa-user" aria-hidden="true"></i><span>My Account</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>fa
              <!--   <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart" aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-3 col-xs-3 header-left">
        <!-- <div id="logo"> <a href="index.html"><img src="image/logo.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div> -->
        <p style="font-size: 45px;">KitchenAid</p>
      </div>
      <div class="col-sm-9 col-xs-9 header-right">
        <div id="search" class="input-group">
          <input type="text" name="search" value="" placeholder="Enter your keyword ..." class="form-control input-lg" />
          <span class="input-group-btn">
          <button type="button" class="btn btn-default btn-lg"><span>Search</span></button>
          </span> </div>
        <div id="cart" class="btn-group btn-block">
          <button type="button" onclick="cartpage()" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"> <span>Shopping Cart</span><br>
          <?php echo $totl_cart ?> item(s)</span></button>
         
        </div>
      </div>
    </div>
  </div>
</header>
<nav id="menu" class="navbar">
  <div class="nav-inner">
    <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
      <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
    </div>
    <div class="navbar-collapse">
      <ul class="main-navigation">
        <li><a href="index.php"   class="parent"  >Home</a> </li>
        <li><a href="collection.php"   class="parent"  >Collection</a> </li>
       
        <li><a href="about us.php" >About us</a></li>
        <li><a href="contact.php" >Contact Us</a> </li>
      </ul>
    </div>
  </div>
</nav>