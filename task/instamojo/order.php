<?php 

if(isset($_GET['id']) && $_GET['id'] == 100){

    $prd_name = "Protection Mask";
	$price = 100;

	// Price calculation with tax and fee
	$fee = 3 +($price*.02);
	$tax = $fee * .15;
	$prd_price = $fee + $tax + $price;	

	
 } 
 	else if(isset($_GET['id']) && $_GET['id'] == 101){
    $prd_name = "Gloves";
   	$price = 60;

	// Price calculation with tax and fee 
	$fee = 3 +($price*.02);
	$tax = $fee * .15;
	$prd_price = $fee+ $tax + $price;	
 } 
 	else if(isset($_GET['id']) && $_GET['id'] == 102){
    $prd_name = "Hand Sanitizer";
    $price = 40;

	// Price calculation with tax and fee
	$fee = 3 +($price*.02);
	$tax = $fee * .15;
	$prd_price = $fee+ $tax + $price;	
 } 
 else if(isset($_GET['id']) && $_GET['id'] == 103){
    $prd_name = "Immunity Booster";
    $price = 50;

	// Price calculation with tax and fee
	$fee = 3 +($price*.02);
	$tax = $fee * .15;
	$prd_price = $fee+ $tax + $price;	
 } else {

 	echo "Please select a valid donation :)";
 	exit();
 }

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Payment</title>	

 <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
   
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">

      <div class="page-header">
        <h1><a href="index.php"> Payment Portal</a></h1>
        
      </div>

		<p>
		<b>Product name :</b> <?php echo $prd_name; ?>
		</p>
		<p>
		<b>Price : </b> <?php echo $price; ?>
		</p>
		<p><b>Bank Fee : </b> <?php echo $tax + $fee ; ?> <small> (Rs:3+ 2% of fee+ 15% Service Tax)</small></p>

		<p><b>Total : </b> <?php echo $prd_price; ?></p>

		<h3>Your Payment Details </h3>
		<hr>
		<form action="pay.php" method="POST" accept-charset="utf-8">
	
		<input type="hidden" name="product_name" value="<?php echo $prd_name; ?>"> 
		<input type="hidden" name="product_price" value="<?php echo $prd_price; ?>"> 

		<div class="form-group">
    	<label>Your Name</label>
   		<input type="text" class="form-control" name="name" placeholder="Enter your name">	 <br/>
		</div>

		<div class="form-group">
    	<label>Your Phone</label>
   		<input type="text" class="form-control" name="phone" placeholder="Enter your phone number"> <br/>
		</div>


		<div class="form-group">
    	<label>Your Email</label>
   		<input type="email" class="form-control" name="email" placeholder="Enter you email"> <br/>
		</div>

	  
		<input type="submit" class="btn btn-warning btn-lg" value="Click here to Donate Rs:<?php echo $prd_price; ?> ">

		 </form>
 <br/>
  <br/>     
    </div> <!-- /container -->


  </body>
</html>
