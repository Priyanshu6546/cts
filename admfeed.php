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
  <title>FEEDBACKS</title>
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
     <body style="background-color: skyblue;">
     <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span class=""></span>IOB<br><small>Online Services</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="#" class="nav-link active">Feedbacks</a></li>
            <li class="nav-item"><a href="./feedview.php" class="nav-link">Feedback controls</a></li>
        <li class="nav-item"><a href="./adm.php" class="nav-link">Admin page</a></li>
	         

	        </ul>
	      </div>
		  </div>
    </nav>   
    <?php
include("connection.php");
$id=$_POST["cid"];

$sql1="UPDATE feedbacks SET fstatus = 'Addressed' WHERE cid = $id";


// $sql1="UPDATE customers SET climit = '$cl' WHERE cid = $id";
if($conn->query($sql1) === TRUE){
    echo'<center><h1>Account Updated Successfully</h1></center>';
    
}
else{
    echo "error: ". $sql1 . "<br>" .$conn->error;
}

?><center>
<?php
                 include("connection.php");
                 $sql="SELECT * FROM feedbacks order by cid ";
                 echo "<br><br><br><br>
                 <h2>Previous Feedbacks</h2>
                 <table border='1'> 
                 <tr>
                 <th>Customer Id</th>
                 <th>Name</th>
                 <th>Phone</th>
                 <th>Branch</th>
                 <th>Type</th>
                 <th>Credit Card Received?</th>
                 <th>Queries</th>
                 <th>Status</th>
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while ($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows['cid'] . "</td>";
        echo "<td>" . $rows['cname'] . "</td>";
        echo "<td>" . $rows['phn'] . "</td>";
        echo "<td>" . $rows['branch'] . "</td>";
       
       
        echo "<td>" . $rows['ctype'] . "</td>"; 
        echo "<td>" . $rows['cr'] . "</td>"; 
        echo "<td>" . $rows['ta'] . "</td>"; 
        echo "<td>" . $rows['fstatus'] . "</td>"; 
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
$conn->close();
?></center>
    <!--  -->
<center>
        <br><br><br>
<a href="./feedview.php"><input type="submit" value="Back" style="background-color: Skyblue;"></a>
        
    </center>
 
    </body>
</html>
