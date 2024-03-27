<?php 
  include('header.php'); 
  include('db_connect.php');
  $customer_id = $_SESSION["id"];
  $product_id = $_GET['id'];

  if(isset($_POST['submit'])) {
        $price = $_POST['pprice'];
        $currentdate = date('Y-m-d H:i:s'); 

        $sql = "INSERT INTO cart (customer_id, prod_id, cart_date, price) VALUES ($customer_id, '$product_id', '$currentdate', $price)";

        if(mysqli_query($con, $sql)){
           //echo "product added to cart successfully...";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
     
    }
?>

<br/>
<br/>
<div class="container">
  <div class="row">
    <div class="content col-sm-12">
<?php 

  $sql = "SELECT * FROM product where id=$product_id";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { 
?>
    <form action="" name="prod_form" method="POST">
      <input type="hidden" name="pprice" value="<?php echo $row['price']; ?>">
      <div class="row">
        <div class="col-sm-5">
          <div class="thumbnails">
            <div><a class="thumbnail fancybox" href="image/product/product8.jpg" title="Casual Shirt With Ruffle Hem"><img src="admin/upload/<?php echo $row['image']; ?>" title="Casual Shirt With Ruffle Hem" alt="iPod Classic" /></a></div>
            
          </div>
        </div>
        <div class="col-sm-7 prodetail">
          <h1 class="productpage-title"><?php echo $row['product_name']; ?></h1>
          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="riview"></span> </div>
          <ul class="list-unstyled productinfo-details-top">
            <li>
              <h2 class="productpage-price">Rs. <?php echo $row['price']; ?></h2>
            </li>
            <li><span class="productinfo-tax">Ex Tax: Rs.<?php echo $row['price']; ?></span></li>
          </ul>
          <hr>
          <ul class="list-unstyled product_info">
            <li>
              <label>Brand:</label>
              <span> <a href="#">prestige</a></span></li>
            <li>
              <label>Product Code:</label>
              <span> product <?php echo $row['id']; ?></span></li>
            <li>
              <label>Availability:</label>
              <span> In Stock</span></li>
          </ul>
          <hr>
          
          <div id="product">
            <div class="form-group">
              <div class="row">
                <div class="Sort-by col-md-6">
                  <label>Sort by</label>
                  <select id="select-by-size" class="selectpicker form-control">
                    <option value="#" selected="selected">Small</option>
                    <option value="#">Medium</option>
                    <option value="#">Large</option>
                  </select>
                </div>
                <div class="Color col-md-6">
                  <label>Qty</label>
                   <input id="qty" name="qty" class="form-control" placeholder="1" type="number" style="width:75px">
                </div>
              </div>
              <br>
              <button type="submit" name="submit" class="btn btn-primary" style="width:150px">ADD to Cart</button>
              <a href="order.php?prod_id=<?php echo $row['id']; ?>" class="btn btn-primary" style="width:150px">Buy Now</a>
              
            </div>
          </div>
        </div>
      </div>
      <div class="productinfo-tab">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab-description">
            <div class="cpt_product_description ">
              <div>
                <p><?php echo $row['description']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <?php } } ?>

    </div>
  </div>
</div>
<?php include('footer.php'); ?>
