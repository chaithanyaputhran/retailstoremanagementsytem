<?php 

  include('header.php'); 
    include('db_connect.php');
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
          <div class="row">
            <?php 
                $sql = "SELECT * FROM product";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) { 
                ?>
                <a href="">
                  <div class="col-sm-3">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td><img src="admin/upload/<?php echo $row['image'] ?>"></td>
                          </tr>
                          <tr>
                            <td>Name</td>
                          </tr>
                          <tr>
                            <td><?php echo $row['product_name']; ?></td>
                          </tr>
                          <tr>
                            <td>Rs. <?php echo $row['price']; ?></td>
                          </tr>
                        </tbody>
                      </table> 
                  </div>
                </a>
            <?php    }
              } ?>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>              
   

<?php include('footer.php'); ?>
