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
      <div>
      
<?php
      
                 include("connection.php");
                 $var=$_POST['cid'];
                 $sql="SELECT * FROM cusinfo where cid=$var ";
                 echo "<br><br><br><br>
                 <h2>Customer Details</h2>
                 <table border='1'> 
                 <tr>
                 <th>Customer Id</th>
                 <th>Customer Name</th>
                 
                 
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while ($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows['cid'] . "</td>";
        echo "<td>" . $rows['cname'] . "</td>";
       
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
   // echo "error: ". $sql . "<br>" .$conn->error; 
}
$conn->close();
?><br> 
    </div>

    <?php
             
             include("connection.php");
             $a=$_POST['cid'];
             
            $sql="SELECT * FROM cart WHERE Cid= $a ";
             echo "<br><br><br><br>
             <h2>Product Details</h2>
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
<?php
 

                 include("connection.php");
                 $b=$_POST['cid'];
                 
                 $query="SELECT SUM(totalRate) As mtotal FROM cart WHERE Cid= $b ";
                 $res=mysqli_query($conn, $query);
                 $data=mysqli_fetch_array($res);

                
                  echo "Total:".$data['mtotal']."<br>";
$conn->close();
?>
</div>
<br><br><br><br>
<form action="./payverify.html" >
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