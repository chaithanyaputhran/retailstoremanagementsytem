<?php 

  include('header.php'); 
    include('db_connect.php');
?>

<div class="container">

  <div class="main-form">
    <h3 class="contactus-title">Contact Us</h3>
    <div class="row">
      <form name="contactform" method="POST" action="">
        <div class="col-sm-6">
          <input type="text" required name="name" placeholder="Name" required="">
        </div>
        <div class="col-sm-6 ">
          <input type="email" required name="email" placeholder="Email" required="">
        </div>
        <div class="col-sm-6 ">
          <input type="text" required name="phone" placeholder="Phone Number" required="">
        </div>
        <div class="col-sm-6 ">
          <input type="text" required name="subject" placeholder="Subject" required="">
        </div>
        <div class="col-xs-12 ">
          <textarea required name="message" placeholder="Message" rows="3" cols="30" required=""></textarea>
        </div>
        <div class="col-xs-12  text-center">
          <div class="commun-btn">
            <button type="submit" name="submit" class="btn">   <a href="success_contact.php">Submit</button>
            <a href="success_contact.php">
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
<?php include('footer.php'); ?>
