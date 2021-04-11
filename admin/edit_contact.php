<?php  session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Page | ATG TUFF</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<?php   
  
 
 
  if(empty($_SESSION['email']))
  {
      header('location:index.php');
  }
 
//   include 'include/header.php' ;
  include 'include/sidebar.php';
  include 'include/navbar.php';
  include 'include/mobile-menu.php';
  include 'include/connection.php';
 
 
 if(!empty($_GET['id']))
 {
     $cid = $_GET['id'];
 }
 
 
 extract($_POST);
 
 if(isset($add))
 {
     if(mysqli_query($con,"update contact_page set p1='$p1',p2='$p2',p3='$p3',p4='$p4',p5='$p5',p6='$p6' where id='$cid'"))
     {
    ?>
    <script>alert('Data updated successfully')</script>
    <script>window.location.replace("contact_page.php");</script>
    <?php
     }
     else
     {
    ?>
    <script>alert("something wrong");</script>
    <?php
     }
 }
 
 
 
 
 
 
 
?>
            
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <!--<div class="breadcome-heading">-->
                                        <!--    <form role="search" class="sr-input-func">-->
                                        <!--        <input type="text" placeholder="Search..." class="search-int form-control">-->
                                        <!--        <a href="#"><i class="fa fa-search"></i></a>-->
                                        <!--    </form>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Edit Contact Page</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Contact Page Information</a></li>
                              
                            </ul>
                            <div style="margin-top:15px;">
                               <?php
                               
                               $q1 = mysqli_query($con,"select * from contact_page where id='$cid'");
                               $row1 = mysqli_fetch_assoc($q1);
                               
                               ?>
                                <form action="" method="post">
                                     <h3 style="margin-bottom:15px;padding-left:20px;">Edit Content</h3>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p1" placeholder="Contact us" value="<?= $row1['p1'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p2" placeholder="Get direction" value="<?= $row1['p2'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p3" placeholder="Compony number" value="<?= $row1['p3'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p4" placeholder="Address" value="<?= $row1['p4'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p5" placeholder="E-mail" value="<?= $row1['p5'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <input type="text" name="p6" placeholder="Phone number" value="<?= $row1['p6'] ?>" class="form-control " required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                            <button type="submit" name="add" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div id="myTabContent" class="tab-content custom-product-edit">

                                <div class="container-fluid">

                                </div>
        
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php include 'include/footer.php' ?>