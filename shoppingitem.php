<!DOCTYPE html>
<html lang="en">
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
             
              <li class="nav-item"><a href="./form.html" class="nav-link">Apply</a></li>
              <li class="nav-item"><a href="./cview.php" class="nav-link">Credit card</a></li>
              <li class="nav-item active"><a href="#" class="nav-link">Shopping items</a></li>
              <li class="nav-item"><a href="./paymentidgetting.html" class="nav-link">Shopping cart</a></li>
              <li class="nav-item"><a href="./history.html" class="nav-link">Orders</a></li>
              <li class="nav-item"><a href="./index.html" class="nav-link">Home</a></li>
             

            </ul>
          </div>
          </div>
      </nav>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4"  id="s1">Our Products</h2>
        <p>Are you searching for a long dress for a special formal event? Shop Simply Dresses' assortment of long formal gowns 
            and full-length evening dresses. Here you will find long formal evening gowns, long prom dresses, 
            floor-length pageant gowns, and long dresses for bridesmaids, wedding guests, and mothers of the bride or groom.
             Shopping on a budget for long dresses? No worries! This assortment offers many cheap long dresses, 
             affordable evening dresses, and inexpensive formal gowns by the top formal-wear designers.
              Find long dresses in every size, from junior-size dresses to plus-sized women’s formal dresses and everything in between.
        </p>
      </div>
    </div>
    </div>
    <div class="container-wrap">
        <div class="row no-gutters d-flex">
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img" style="background-image: url(images/dress1.jpg);"></a>
                    <div class="text p-4">
                        <h3>Long Maxi Dress</h3>
                        <p>CLOSURE: Back Zipper, Hook and Eye
                            DETAILS:    Faux Buttons, Tied Waist, Faux Wrap, Floral Print, Lined, Boning
                            FABRIC: Print Chiffon
                            LENGTH: Hollow to Hem 62"
                            NECKLINE:   V-Neck
                            WAISTLINE:  Natural </p>
                         <p class="price">
                            <!-- <span>Rs.990/-</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Add to cart</a></p> -->
                            <script>
                                var r=document.getElementsByName('cid').value;
                                document.getElementById('i').innerHTML=r;
                            </script>
    <form action="./cart.php" method="post">
    
    
      <?php 
             
include("connection.php");

   if(isset($_POST['cid'])) $var=$_POST['cid'];

      ?>
   <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
  Product Name: <br><input type="text" value="Long Maxi Dress" name="pname" readonly><br>
  Rate : <br> <input type="number" value="990" name="prate" readonly> <br>
  Product Id: <br><input type="number" value="1" name="pid" readonly> <br>
  Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
  <input type="submit" value="Add to cart" style="background-color: cyan;">
</form>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img" style="background-image: url(images/dress2.jpg);"></a>
                    <div class="text p-4">
                        <h3>Long formal gowns</h3>
                        <p>CLOSURE: Back Zipper, Clasp
                            DETAILS:    Embroidered Bodice, Beaded Waistline, A-Line Skirt, Keyhole Back
                            FABRIC: Chiffon
                            LENGTH: Floor
                            NECKLINE:   Bateau
                            WAISTLINE:  Natural</p>
                        <!-- <p class="price"><span>Rs.750/-</span></p> -->
                        <form action="./cart.php" method="post">
                            
      <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                            Product Name: <br><input type="text" value="Long formal gowns" name="pname" readonly><br>
                            Rate : <br> <input type="number" value="750" name="prate" readonly> <br>
                            Product Id: <br><input type="number" value="2" name="pid" readonly> <br>
                            Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                            <input type="submit" value="Add to cart" style="background-color: cyan;">
                         </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img" style="background-image: url(images/dress3.jpg);"></a>
                    <div class="text p-4">
                        <h3>Long Mermaid Prom Dress with Sequin Floral Design</h3>
                        <p>CLOSURE: Back Zipper, Corset
                            DETAILS:    Mermaid Silhouette, Sequins, Adjustable Lace-Up Back
                            FABRIC: Embroidered Tulle
                            LENGTH: Floor
                            NECKLINE:   V-Neck
                            WAISTLINE:  Natural</p>
                        <!-- <p class="price"><span>Rs.1580/-</span></p> -->
                        <form action="./cart.php" method="post">
      <?php 
             
include("connection.php");

   if(isset($_POST['cid'])) $var=$_POST['cid'];

      ?>
   <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                            Product Name: <br><input type="text" value="Long Mermaid Prom Dress with Sequin Floral Design" name="pname" readonly><br>
                            Rate : <br> <input type="number" value="1580" name="prate" readonly> <br>
                            Product Id: <br><input type="number" value="3" name="pid" readonly> <br>
                            Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                            <input type="submit" value="Add to cart" style="background-color: cyan;">
                         </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img order-lg-last" style="background-image: url(images/dress4.jpg);"></a>
                    <div class="text p-4">
                        <h3>Long Formal Chiffon Gown with Lace Bodice</h3>
                        <p>CLOSURE: Back Zipper
                            DETAILS:    Embroidered Top, Open Scoop Back, Bra Cups
                            FABRIC: 100% Polyester, Chiffon
                            LENGTH: Floor
                            NECKLINE:   V-Neck
                            WAISTLINE:  Natural </p>
                        <!-- <p class="price"><span>Rs.1220/-</span></p> -->
                        <form action="./cart.php" method="post">
                            
      <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                            Product Name: <br><input type="text" value="Long Formal Chiffon Gown with Lace Bodice" name="pname" readonly><br>
                            Rate : <br> <input type="number" value="1220" name="prate" readonly> <br>
                            Product Id: <br><input type="number" value="4" name="pid" readonly> <br>
                            Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                            <input type="submit" value="Add to cart" style="background-color: cyan;">
                         </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img order-lg-last" style="background-image: url(images/dress5.jpg);"></a>
                    <div class="text p-4">
                        <h3>Cold-Shoulder Long Chiffon A-Line Bridesmaid Dress</h3>
                        <p>CLOSURE: Back Zipper
                            DETAILS:    Cold Shoulder, Flutter Sleeves, Gathered Bodice, Bra Cups
                            FABRIC: Chiffon
                            LENGTH: Hollow to Hem 61"
                            NECKLINE:   V-Neck, Cold Shoulder
                            WAISTLINE:  Natural</p>
                        <!-- <p class="price"><span>Rs.1300/-</span></p> -->
                        <form action="./cart.php" method="post">
                        <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                            <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                            Product Name: <br><input type="text" value="Cold-Shoulder Long Chiffon A-Line Bridesmaid Dress" name="pname" readonly><br>
                            Rate : <br> <input type="number" value="1300" name="prate" readonly> <br>
                            Product Id: <br><input type="number" value="5" name="pid" readonly> <br>
                            Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                            <input type="submit" value="Add to cart" style="background-color: cyan;">
                         </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img order-lg-last" style="background-image: url(images/dress6.webp);"></a>
                    <div class="text p-4">
                        <h3>Beaded Long Prom Dress with Cape</h3>
                        <p>CLOSURE: Back Zipper
                            DETAILS:    Form Fitting, One Shoulder Cape, Scattered Embellishments, Open Back, Skirt Slit
                            LENGTH: Floor
                            NECKLINE: Shoulder
                            WAISTLINE:  Natural</p>
                        <!-- <p class="price"><span>Rs.1890/-</span></p> -->
                        <form action="./cart.php" method="post">
                        <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                            <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                            Product Name: <br><input type="text" value="Beaded Long Prom Dress with Cape " name="pname" readonly><br>
                            Rate : <br> <input type="number" value="1890" name="prate" readonly> <br>
                            Product Id: <br><input type="number" value="6" name="pid" readonly> <br>
                            Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                            <input type="submit" value="Add to cart" style="background-color: cyan;">
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

            
</section>

<section class="ftco-menu">
    <div class="container-fluid">
        <div class="row d-md-flex">
            <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/dress10.jpg);">
            </div>
            <div class="col-lg-8 ftco-animate p-md-5">
                <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Baby</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Men's</a>

                  <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">women’s</a>

                  <!-- <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a> -->
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">
                
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/dress7.webp);"></a>
                                <div class="text">
                                    <h3><a href="#">New Born Baby Summer Wear Baby Clothes</a></h3>
                                    <p>Pack of: 5
                                        Ideal For: Baby Boys & Baby Girls
                                        Age Group: 1 Month - 6 Month
                                        Nappy, Bibs & Infant Clothing Combo</p>
                                    <!-- <p class="price"><span>Rs.590/-</span></p> -->
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                        <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                        Product Name: <br><input type="text" value="New Born Baby Summer Wear Baby Clothes" name="pname" readonly><br>
                                        Rate : <br> <input type="number" value="690" name="prate" readonly> <br>
                                        Product Id: <br><input type="number" value="7" name="pid" readonly> <br>
                                        Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                                        <input type="submit" value="Add to cart" style="background-color: cyan;">
                                     </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/dress8.jpg);"></a>
                                <div class="text">
                                    <h3><a href="#">Warm new born baby winter clothing</a></h3>
                                    <p>Ideal For: Baby Boys & Baby Girls
                                        Age Group: 1 Month - 6 Month
                                        Nappy, Bibs & Infant Clothing Combo</p>
                                  
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                        <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                        Product Name: <br><input type="text" value="Warm new born baby winter clothing" name="pname" readonly><br>
                                        Rate : <br> <input type="number" value="1500" name="prate" readonly> <br>
                                        Product Id: <br><input type="number" value="8" name="pid" readonly> <br>
                                        Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                                        <input type="submit" value="Add to cart" style="background-color: cyan;">
                                     </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/dress9.jpg);"></a>
                                <div class="text">
                                    <h3><a href="#">Baby boys clothing set winter newborn baby cotton</a></h3>
                                    <p>Brand Name: BibiCola
                                        Material: Cotton
                                        Age Range: 7-12m
                                        Origin: CN(Origin)
                                        Gender: Unisex
                                        </p>
                                    
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                        <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                        Product Name: <br><input type="text" value="Baby boys clothing set winter newborn baby cotton" name="pname" readonly><br>
                                        Rate : <br> <input type="number" value="780" name="prate" readonly> <br>
                            Product Id: <br><input type="number" value="9" name="pid" readonly> <br>
                            Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                                        <input type="submit" value="Add to cart" style="background-color: cyan;">
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/men2.webp);"></a>
                                <div class="text">
                                    <h3><a href="#">Men Blue Printed Casual Sustainable Shirt</a></h3>
                                    <p>Sleeve Length: Long Sleeves
                                        Collar: Mandarin Collar
                                        Fit :   Regular Fit
                                        Print or Pattern Type: Solid
                                        Occasion:Casual
                                        Length: Regular
                                        </p>
                                    
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                        <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                        Product Name: <br><input type="text" value="Men Blue Printed Casual Sustainable Shirt" name="pname" readonly><br>
                                        Rate : <br> <input type="number" value="1990" name="prate" readonly> <br>
                                        Product Id: <br><input type="number" value="10" name="pid" readonly> <br>
                                        Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                                        <input type="submit" value="Add to cart" style="background-color: cyan;">
                                     </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/men4.webp);"></a>
                                <div class="text">
                                    <h3><a href="#">Men Black & Grey Checked Pure Cotton Casual Shirt</a></h3>
                                    <p>Sleeve Length:Long Sleeves
                                        Collar: Spread Collar
                                        Fit:    Regular Fit
                                        Print or Pattern Type :Other Checks
                                        Occasion:Casual
                                        Length: Regular</p>
                                   
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                        <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                        Product Name: <br><input type="text" value="Men Black & Grey Checked Pure Cotton Casual Shirt"  name="pname" readonly><br>
                                        Rate : <br> <input type="number" value="1500" name="prate" readonly> <br>
                                        Product Id: <br><input type="number" value="11" name="pid" readonly> <br>
                                        Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                                        <input type="submit" value="Add to cart" style="background-color: cyan;">
                                     </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/men5.webp.crdownload);"></a>
                                <div class="text">
                                    <h3><a href="#">Men Black Pure Cotton Sustainable Casual Shirt</a></h3>
                                    <p>Sleeve Length:long Sleeves
                                        Collar: Spread Collar
                                        Fit:    Regular Fit
                                        Print or Pattern Type:Solid
                                        Occasion:Casual
                                        Length: Regular</p>
                                   
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                        <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                        Product Name: <br><input type="text" value="Men Black Pure Cotton Sustainable Casual Shirt"  name="pname" readonly><br>
                                        Rate : <br> <input type="number" value="1600" name="prate" readonly> <br>
                                        Product Id: <br><input type="number" value="12" name="pid" readonly> <br>
                                        Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                                        <input type="submit" value="Add to cart" style="background-color: cyan;">
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/women1.webp);"></a>
                                <div class="text">
                                    <h3><a href="#">PEACHY FLORAL DRESS</a></h3>
                                    <p>Shape: A-line
                                        Neck: Wide neck for the dress. Deep V for the shrug.
                                        Sleeve Length: Short Sleeve. Sleeveless (Inner Dress)
                                        Sleeve Style: Smocked Sleeve end
                                        Waist: Straight
                                        Length: Midi (44")</p>
                                    
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                        <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                        Product Name: <br><input type="text" value="PEACHY FLORAL DRESS"  name="pname" readonly><br>
                                        Rate : <br> <input type="number" value="1550" name="prate" readonly> <br>
                            Product Id: <br><input type="number" value="13" name="pid" readonly> <br>
                            Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                                        <input type="submit" value="Add to cart" style="background-color: cyan;">
                                     </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/women2.webp);"></a>
                                <div class="text">
                                    <h3><a href="#">ZESTY DRESS</a></h3>
                                    <p>Shape: A-line
                                        Neck: Chinese Collar
                                        Sleeve Length: Short Sleeve
                                        Sleeve Style: Cap Sleeve
                                        Waist: Fitted
                                        Hem: Tiered & Flared
                                        Length: Midi (46")
                                        
                                </p>
                                    <!-- <p class="price"><span>Rs.2400/-</span></p> -->
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                        <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                        Product Name: <br><input type="text" value="ZESTY DRESS"  name="pname" readonly><br>
                                        Rate : <br> <input type="number" value="2400" name="prate" readonly> <br>
                                        Product Id: <br><input type="number" value="14" name="pid" readonly> <br>
                                        Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                                        <input type="submit" value="Add to cart" style="background-color: cyan;">
                                     </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/women3.webp);"></a>
                                <div class="text">
                                    <h3><a href="#">CHROMA STRIPED DRESS</a></h3>
                                    <p>Shape: A-line
                                        Neck: V Neck
                                        Sleeve Length: Short Sleeve
                                        Sleeve Style: Flutter Sleeves 
                                        Waist: Fitted & Pleated
                                        Hem: Flared & Gathered
                                        Length: Midi (48")</p>
                                        <p class="price"><span>Rs.1480/-</span></p>
                                        <form action="./cart.php" method="post">
                                        <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                            <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                            Product Name: <br><input type="text" value="CHROMA STRIPED DRESS"  name="pname" readonly><br>
                                            Rate : <br> <input type="number" value="1480" name="prate" readonly> <br>
                                            Product Id: <br><input type="number" value="15" name="pid" readonly> <br>
                                            Quantity: <br> <input type="number" value="1" name="qty"> <br> <br>
                                            <input type="submit" value="Add to cart" style="background-color: cyan;">
                                         </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-1.jpg);"></a>
                                <div class="text">
                                    <h3><a href="#">Itallian Pizza</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                    <p class="price"><span>$2.90</span></p>
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                                        <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                                        Product Name: <br><input type="text" value=""><br>
                            Product Id:<input type="number" value="1" name="pid" readonly>
                            Quantity: <input type="number" value="1" name="qty"> <br> <br>
                            <input type="submit" value="Add to cart" style="background-color: cyan;">
                         </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-2.jpg);"></a>
                                <div class="text">
                                    <h3><a href="#">Itallian Pizza</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                    <p class="price"><span>$2.90</span></p>
                                    <form action="./cart.php" method="post">
                            Product Id:<input type="number" value="17" name="pid" readonly>
                            Quantity: <input type="number" value="1" name="qty"> <br> <br>
                            <input type="submit" value="Add to cart" style="background-color: cyan;">
                         </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="menu-wrap">
                                <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-3.jpg);"></a>
                                <div class="text">
                                    <h3><a href="#">Itallian Pizza</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                    <p class="price"><span>$2.90</span></p>
                                    <form action="./cart.php" method="post">
                                    <?php 
             
             include("connection.php");
             
                if(isset($_POST['cid'])) $var=$_POST['cid'];
             
                   ?>
                            <input type='hidden' name="id" value='<?php echo "$var";?>'/>  
                            Product Id:<input type="number" value="1" name="pid" readonly>
                            Quantity: <input type="number" value="1" name="qty"> <br> <br>
                            <input type="submit" value="Add to cart" style="background-color: cyan;">
                         </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
  <div class="container">
    <div class="row mb-12">
      <div class="col-lg-12 ">
        <div class="ftco-footer-widget mb-12">
          <h2 class="ftco-heading-2">About Us</h2>
          <p>LOOKING FOR A BRIGHT-COLORED LONG DRESS OR PRINTED FORMAL GOWN?
            Find a long dress in your favorite shade, floral print, or geometric design here at Simply Dresses. 
            Choose an elegant lace dress for your formal occasion, or showcase an alluring feminine silhouette with a dramatic open-back evening dress or illusion cut-out long dress. 
            If you're looking for a modest, classy style, try a long-sleeve dress for formals or a long dress with a high-collar neckline. 
            For a bolder style, you’ll be sure to turn heads with a backless formal gown, a deep v-neck evening dress, or long formal gown with sheer lace.
             Want a unique style for prom? Among the long classic prom gowns, you will also find chic two-piece long formal dresses,
              contemporary off-the-shoulder evening dresses, charming high-low styles, 
              and delicate long lace formal evening gowns with corset backs.<br>
            
            Bring out your personal style in a long dress from Simply Dresses. 
            Dazzle the crowd in a sequin or jewel-embellished long dress accentuated with a v-neckline. 
            Dress to impress with a fitted mermaid dress, or feel regal in a flowing empire-waist evening dress or a-line formal dress. 
            Paint a picture of pure grace as you channel your inner celebrity style with the sleek, 
            tailored look of a long strapless jersey dress. Be the belle of the ball in a floor-length ball gown for prom.
             You can even look sophisticated and trendy in a jumpsuit for your next formal event.
              Whatever your body type or personal style, there is a long dress for formals here for you.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <br>
      <br><br><br><br><br><br><br><br>
   
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
