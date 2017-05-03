<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        PAZAAR
    </title>

     <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">


</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake"></a>
                <?php
                $value=$_POST['lid'];
                echo $value;
                ?>
            </div>

            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#notification-modal">Notifications</a>
                    </li>


                    <li><a href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
                </div>
            </div>
        </div>

    </div>
    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

  
 <div class="navbar navbar-default yamm" role="navigation" id="navbar">
     <div class="container">
         <div class="navbar-header">

             <H1>PAAZAR</h1>
             <div class="navbar-buttons">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                     <span class="sr-only">Toggle navigation</span>
                     <i class="fa fa-align-justify"></i>
                 </button>
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                     <span class="sr-only">Toggle search</span>
                     <i class="fa fa-search"></i>
                 </button>
               </div>

         </div>
         <!--/.navbar-header -->

         <div class="navbar-collapse collapse" id="navigation">

             <ul class="nav navbar-nav navbar-left">
                 <li class="active"><a href="index.php">Home</a>
                 </li>
             </ul>




         </div>
         <!--/.nav-collapse -->

         <div class="navbar-buttons">




         </div>

         <div class="collapse clearfix" id="search">

             <form class="navbar-form" role="search">
                 <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search">
                     <span class="input-group-btn">

   <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

     </span>
                 </div>
             </form>

         </div>
         <!--/.nav-collapse -->

     </div>
     <!-- /.container -->
 </div>
 <div id="middle">
    <div class="container">
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><a>You can declare the winner</a></li>
				 <div class="form-group">
                                <label form="email">winner</label>
                                <input type="text" class="form-control" id="email">
                 </div>
                
            </ul>
        </div>
    </div>
            </div>
        </div>
    </div>

</div>


















<!--------------------------------------------------->



    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>