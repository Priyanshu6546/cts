<html>
  <head>
  <title>IOB-Online services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span class=""></span>IOB<br><small>Online Services</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="#" class="nav-link">Shopping</a></li>
           
			  
	         
	         

	        </ul>
	      </div>
		  </div>
    </nav>
        <?php
        
include("connection.php");
$cid=$_POST["id"];
        $id=$_POST["pid"];
$name=$_POST["pname"];
$rate=$_POST["prate"];
$q= $_POST["qty"];
$trate= $q*$rate ;
 $sql="INSERT INTO cart(Cid,pid,pname,prate,qty,totalRate)VALUES('$cid','$id','$name','$rate','$q','$trate')";
 if($conn->query($sql) === TRUE){
     echo'<center><h1>Item added to cart Successfully!!!</h1></center>';
 }
 
 $sql1="INSERT INTO cart2(Cid,pid,pname,prate,qty,totalRate)VALUES('$cid','$id','$name','$rate','$q','$trate')";
 if($conn->query($sql1) === TRUE){
     echo'<center><h1></h1></center>';
 }
 else{
  echo "<h3>No Items To Display</h3>";
 }
 $conn->close();


?>
<center><ul  style="list-style-type:none;font-size:xx-large;text-decoration:none;color:red;">
        <!-- <li>
          <a href=""><b>|Admin  | </b></a>
        </li>
        <li>
          <a href="./cview.php"><b>| View Customers |</b></a>
        </li> -->
    </ul></center>
    </body>
</html>
