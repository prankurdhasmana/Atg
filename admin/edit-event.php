<?php  session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Edit Events/Projects | ATG TUFF</title>
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
 
if(!empty($_GET['id'])){
    
    
    $id = $_GET['id'];
    
    
}
  
 extract($_POST);
 
 if(isset($edit))
 {
   

        if (mysqli_query($con,"update events set event_name='$ename',event_key='$event_key',event_desc='$event_desc' where id='$id'"))
	    {
	        
		  echo "<script>alert('Data updated successfully')</script>";
		   echo "<script>window.location.replace('add-event.php');</script>";
		  
		}
		else
		{
		    echo "<script>alert('Something wrong..')</script>";   
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
                                            <li><span class="bread-blod">Edit Events or Projects</span>
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
                                <li class="active"><a href="#description">Edit Events/Projects</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <?php
                                                    
                                                    $sel = mysqli_query($con,"select * from events where id='".$_GET['id']."'");
                                                    $arr = mysqli_fetch_assoc($sel);
                                                    ?>
                                                    <form action="" method="post"  enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                               <div class="form-group">
                                                                    <input type="text" placeholder="Event/Project Name" name="ename" value="<?= $arr['event_name'] ?>" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <Select name="event_key" class="form-control">
                                                                        <?php
                                                                        if($arr['event_key'] == "project")
                                                                        {
                                                                        ?>
                                                                        <option  selected value="<?= $arr['event_key'] ?>"><?= $arr['event_key'] ?></option>
                                                                        <option>event</option>
                                                                        <option value="technology">Technology</option>
                                                                        <?php
                                                                        }
                                                                        elseif($arr['event_key'] == "event")
                                                                        {
                                                                        ?>
                                                                        <option  selected value="<?= $arr['event_key'] ?>"><?= $arr['event_key'] ?></option>
                                                                        <option>project</option>
                                                                        <option value="technology">Technology</option>
                                                                        <?php
                                                                        }
                                                                        elseif($arr['event_key'] == "technology")
                                                                        {
                                                                        ?>
                                                                        <option  selected value="<?= $arr['event_key'] ?>"><?= $arr['event_key'] ?></option>
                                                                        <option>project</option>
                                                                        <option>event</option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </Select>
                                                                </div>
                                                               <div class="form-group">
                                                                    <textarea name="event_desc" placeholder="Content..."  class="form-control" rows="1" ><?= $arr['event_desc'] ?></textarea>
                                                                </div>
                                                                
                                                                
                                                                <div class="form-group">
                                                                    <button name="edit" type="submit" class="btn btn-primary waves-effect waves-light">Edit /Events/Projects</button>
                                                                </div>
                                                            
                                                            </div>
                                                           
                                                        </div>
                                                       
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
      <?php include 'include/footer.php' ?>