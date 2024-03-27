<?php 
  include('header.php'); 
  include('db_connect.php');

  $userid = $_SESSION["id"];
?>
<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
  <h1>Shopping Cart</h1>
</div>
<div class="container">
  <div class="row">
   
    <div class="col-sm-12" id="content">
      <form enctype="multipart/form-data" method="post" action="#">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-center">Image</td>
                <td class="text-left">Product Name</td>
                <td class="text-left">Model</td>
                <td class="text-left">Quantity</td>
                <td class="text-right">Unit Price</td>
                <td class="text-right">Total</td>
              </tr>
            </thead>
             <tbody>
            <?php 

              $sql = "SELECT * FROM cart where customer_id='$userid'";
              $result = $con->query($sql);

              if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) { 
                $prod_id = $row['prod_id'];
                $sql2 = "SELECT * FROM product where id='$prod_id'";
                $result2 = $con->query($sql2);

                if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) {
              ?>
              <tr>
                <td class="text-center"><a href="product.php?id=<?php echo $row2['id']; ?>"><img class="img-thumbnail" title="iPhone" alt="iPhone" src="admin/upload/<?php echo $row2['image']; ?>" width="50px" height="50px"></a></td>
                <td class="text-left"><a href="product.php?id=<?php echo $row2['id']; ?>"><?php echo $row2['product_name'] ?></a></td>
                <td class="text-left">product <?php echo $row2['id'] ?></td>
                <td class="text-left"><div style="max-width: 200px;" class="input-group btn-block">
                    <input type="text" class="form-control quantity" size="1" value="1" name="quantity">
                   </div></td>

                  <!--   <button  class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove" ><i class="fa fa-times-circle"></i></button> -->
                  <!--   </div></td> -->

                           
                            
                <td class="text-right">Rs. <?php echo $row2['price'] ?></td>
                <?php 
                  $total_price = $row2['price']*1;
                ?>
                <td class="text-right">Rs. <?php echo $total_price ?></td>
                  <td>
                                <td class="text-left">
                                 <span class="input-group-btn">
                                <a href="dlt_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
                              </span></div></td></td>
              </tr>

                              
          <?php }} }} ?>
            </tbody>
          </table>
        </div>
      </form>
      <br>
      
      <div class="buttons">
        <div class="pull-left"><a class="btn btn-default" href="index.php">Continue Shopping</a></div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
