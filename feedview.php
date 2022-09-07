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
	          <li class="nav-item active"><a href="#" class="nav-link active">Feedback controls</a></li>
            <li class="nav-item"><a href="./allfbs.php" class="nav-link">Feedbacks</a></li>
            <li class="nav-item"><a href="./adm.php" class="nav-link">Admin page</a></li>
	         
	         

	        </ul>
	      </div>
		  </div>
    </nav>        
    <center>   
            <?php
                 include("connection.php");
                 $sql="SELECT * FROM feedbacks WHERE fstatus='not addressed' order by cid ";
                 echo "<br><br><br><br>
                 <h2>Feedbacks to be Resolved</h2>
                 <table border='1'> 
                 <tr>
                 <th>Customer Id</th>
                 <th>Name</th>
                 <th>Phone</th>
                 <th>Branch</th>
                 <th>Type</th>
                 <th>Credit Card Received?</th>
                 <th>Queries</th>
                
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
        
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
    echo "<h1>No Feedbacks to be Resolved</h1>";
    
}
$conn->close();
?>
<form action="./admfeed.php" method="post">
<div class="mb-6 mt-6" >
        <label for="id">Customer Id:</label>
        <input type="number" class="form-control" placeholder="Enter id" name="cid">
      </div>
      <input type="submit" value="Update" >
</form>
<br><br><br><br>

</center>
        </body>
</html>