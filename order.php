<?php 
  include('header.php'); 
  include('db_connect.php');
  $product_id = $_GET['prod_id'];
  $customer_id = $_SESSION["id"];
  $currentdate = date('Y-m-d H:i:s'); 
  $qty = 1;
    $sql = "SELECT * FROM product where id=$product_id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { 
        $price = $row['price'];
      }
    }

$total_amount = $price*$qty;

    if(isset($_POST['submit'])) {

        $sql = "INSERT INTO orders (prod_id, customer_id, order_date, price, quantity, total_amount, status) VALUES ($product_id, $customer_id, '$currentdate', $price, $qty, $total_amount,0)";

        if(mysqli_query($con, $sql)){ ?>
           <script type="text/javascript">location.href = 'success_order.php';</script>
        <?php } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
     
    }
 
?>

<br/>
<br/>
<div class="container">
  <div class="row">
    <div class="content col-sm-6">

    <form action="" method="POST">
      <input type="text" class="form-control" name="name" placeholder="Name" required=""><br>
      <input type="text" class="form-control" name="mobile" placeholder="Mobile No" required=""><br>
      <textarea class="form-control" name="address" placeholder="Address" required=""></textarea><br>
      <select class="form-control" name="payment">
        <option>Cash on Delivery</option>
      </select> <br>

      <input type="submit" class="btn btn-primary" name="submit" value="Order Now">
      
    </form>

    </div>
  </div>
</div>
<?php include('footer.php'); ?>
