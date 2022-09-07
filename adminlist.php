
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
	          <li class="nav-item active"><a href="#" class="nav-link">Transactions</a></li>
              <li class="nav-item "><a href="./adm.php" class="nav-link">Admin Page</a></li>
			  
	         

	        </ul>
	      </div>
		  </div>
    </nav>        
    <center>   
      <div>
      


    <?php
             
             include("connection.php");
             
             
            $sql="SELECT * FROM cart2  ";
             echo "<br><br><br><br>
             <h2>Transaction Details</h2>
             <table border='1'> 
             <tr>
             <th>Product Id</th>
             <th>Product Name</th>
             <th>Rate Per Piece</th>
             <th>Quantity</th>
             <th>Total Price</th>
             
             </tr>";
             $result=$conn->query($sql);
             if($result->num_rows>0){
while ($rows=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $rows['pid'] . "</td>";
    echo "<td>" . $rows['pname'] . "</td>";
    echo "<td>" . $rows['prate'] . "</td>";
    echo "<td>" . $rows['qty'] . "</td>";
    echo "<td>" . $rows['totalRate'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
else{
echo "<table>";
echo "<h3>No Items To Display</h3>";
//echo "error: ". $sql . "<br>" .$conn->error; 
}
$conn->close();
?><br> 
           
<div style="color: white;">

</div>
<br><br><br><br>


        </body>
</html>