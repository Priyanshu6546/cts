<html>
    <head>
        <style>
        table{
            border-style:solid;
            border-width:2px;
            border-color:purple;
            background-color: aliceblue;
        }
        </style>
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
	          <li class="nav-item active"><a href="./cview.php" class="nav-link">Credit Card Details</a></li>
			 
	         

	        </ul>
	      </div>
		  </div>
    </nav>        
    <center>   
      <div style="">
      
<?php
      
                 include("connection.php");
                 $var=$_POST['cid'];
                 $cno=$_POST["cv"];
                 $sql="SELECT * FROM cusinfo where cid = $var ";
                 $res=mysqli_query($conn,$sql);
                 $data=mysqli_fetch_array($res);

if($var== $data['cid'] && $cno==$data['cvv'] ){
  echo 'Your Credit card details are valid';
  
}
else{
  //echo "<script type= 'text/javascript'> window.alert('Verify your credentials'); </script>";
 // header("Location: payverify.html");
 

  header("Location: error.html"); 
  // $message = "Username and/or Password incorrect.\\nTry again.";
  // echo "<script type='text/javascript'>alert('$message');</script>";
}
      
$conn->close();
?><br> 
    </div>

    
<br><br><br><br>
<form action="./payment.php" method="post">
<?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                <input type='hidden' name="cid" value='<?php echo "$var";?>'/> 
  <input type="submit" value="Payment">
</form>
</center>
        </body>
</html>
