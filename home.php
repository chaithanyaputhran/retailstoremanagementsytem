<?php 

  include('header.php'); 
    include('db_connect.php');
?>

<div class="mainbanner">
  <div id="main-banner" class="owl-carousel home-slider">
    <div class="item"> <a href="#"><img src="image/banners/Main-Banner1.jpg" alt="main-banner1" class="img-responsive" /></a> </div>
    <div class="item"> <a href="#"><img src="image/banners/Main-Banner2.jpg" alt="main-banner2" class="img-responsive" /></a> </div>
    <div class="item"> <a href="#"><img src="image/banners/Main-Banner3.jpg" alt="main-banner3" class="img-responsive" /></a> </div>
  </div>
</div>

<div id="center">
  <div class="container">
    <div class="row">
      <div class="content col-sm-12">
        <div class="customtab">
          <h3 class="productblock-title">Our Collection   </h3>
        </div>
        <br>
        <br>
        <!-- tab-furniture-->
        <div id="tab-furnitur" class="tab-content">
      <?php 
        $sql = "SELECT * FROM product limit 8";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) { 
          ?>
          <form method="post" action="">
            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product.php?id=<?php echo $row['id']; ?>"> <img src="admin/upload/<?php echo $row['image']; ?>" alt="iPod Classic" title="iPod Classic" class="img-responsive" width="200"/> <img src="admin/upload/<?php echo $row['image']; ?>" alt="iPod Classic" title="iPod Classic" class="img-responsive" width="200" /> </a>
                  </div>
                  <div class="caption product-detail">
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem"><?php echo $row['product_name']; ?></a></h4>
                    <p class="price product-price">Rs. <?php echo $row['price']; ?><span class="price-tax"></span></p>
                  </div>
                </div>
              </div>
            </div>
          </form>
      <?php    }
        } ?>
            
            <div class="viewmore">
              <a class="btn" href="collection.php">View More All Products</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<div class="mainbanner">
  <div id="main-banner" class="owl-carousel home-slider">
    <div class="item"> <img src="image/banners/Main-Banner1.jpg" alt="main-banner1" class="img-responsive" /></div>
  </div>
</div>

<?php include('footer.php'); ?>