<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>#WeWillWin- Donate</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="brand">#WeWillWin</div>
    <div class="address-bar">Let's fight together</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                <a class="navbar-brand" href="index.html">#WeWillWin</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="donate.php">Donate</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="logout.php" class="btn btn-success">Logout</a>
                    </li>
                </ul>
            </div>
          
        </div>
       
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> </h2>
	
                    <hr>
                    <h2 class="intro-text text-center">Products
                        <strong>We Serve</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/covid5.png" alt="">
                    <h2>Protection Mask
                        <br>
                        Donate@<b>100</b>
                        <h3>ID:100</h3>
                    </h2>
                    <p>This mask can be adjusted according to your length and easily washable...</p>
                    <a href="instamojo/order.php?id=100" class="btn btn-success"> Donate </a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/covid6.jpg" alt="">
                    <h2>Gloves
                        <br>
                        Donate@<b>60</b>
                        <h3>ID:101</h3>
                    </h2>
                    <p>Non itchy gloves with high quality fabric used....</p>
                    <a href="instamojo/order.php?id=101" class="btn btn-success"> Donate </a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/covid7.jpg" alt="">
                    <h2>Hand Sanitizer
                        <br>
                        Donate@<b>40</b>
                        <h3>ID:102</h3>
                    </h2>
                    <p>Highly anti-germal sanitizer and sensitive</p>
                    <a href="instamojo/order.php?id=102" class="btn btn-success"> Donate </a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/covid8.png" alt="">
                    <h2>Immunity Booster
                        <br>
                        Donate@<b>50</b>
                        <h3>ID:103</h3>
                    </h2>
                    <p>Immunity booster for old age people</p>
                    <a href="instamojo/order.php?id=103" class="btn btn-success"> Donate </a>
                    <hr>
                </div>
                
            </div>
        </div>

    </div>
    <!-- /.container -->

  <?php require_once 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
