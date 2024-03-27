
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php 

  include('header.php'); 
    include('db_connect.php');
?>

<style type="text/css">
  @mixin clearfix() {
  &::after {
    display: block !important;
    content: "" !important;
    clear: both !important;
  }
}

.element {
  @include clearfix;
}

</style>

 <div class="clearfix"></div>
 <div id="center">
  <div class="container">
    <div class="row">
      <div class="content col-sm-12">
        <div class="customtab">
          <h3 class="productblock-title">Our Collection   </h3>
        </div>
        <br>
        <br>
        <div id="tab-furnitur" class="tab-content">
          <section class="text-center">
          <div class="row">
            <?php 
                $sql = "SELECT * FROM product";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) { 
                ?>
                  <div class="col-md-6 col-lg-3 mb-5">
                    <div class="">

                      <a href="product.php?id=<?php echo $row['id']; ?>">
                        <div class="view zoom overlay z-depth-2 rounded">
                          <img class="img-fluid w-100" style="height: 200px" src="admin/upload/<?php echo $row['image'] ?>" alt="Sample">
                          
                        </div>
                      </a>

                      <div class="pt-4">

                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>

                        <h5><?php echo $row['product_name']; ?></h5>
                        <h6>
                          <span class="text-danger mr-1">Rs. <?php echo $row['price']; ?></span>
                          <?php
                            $price = $row['price']+100;
                          ?>
                          <span class="text-grey"><s>Rs. <?php echo $price; ?></s></span>
                        </h6>

                      </div>
                    </div>
                  </div>
               
            <?php    }
              } ?>
         </div>
       </section>
      </div>
      </div>
    </div>
  </div>
</div>              
   

<?php include('footer.php'); ?>
