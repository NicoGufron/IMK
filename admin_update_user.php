<?php
session_start();
include 'connect.php';

$ambil = $conn->query("SELECT * FROM users where id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
   <title>MarketStore | Admin</title>
   <!--meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
   <script>
      addEventListener("load", function () {
         setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
         window.scrollTo(0, 1);
      }
   </script>
   <!--//meta tags ends here-->
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
   <!--booststrap-->
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
   <!--//booststrap end-->
   <!-- font-awesome icons -->
   <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
   <!-- //font-awesome icons -->
   <!--Shoping cart-->
   <link rel="stylesheet" href="css/shop.css" type="text/css" />
   <!--//Shoping cart-->
   <!--stylesheets-->
   <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
   <link href="admin.css" rel="stylesheet">
   <!--//stylesheets-->
   <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
   <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   
</head>

<body>
   <!--headder-->
   <div class="header-outs" id="home">
      <div class="header-bar">
         <div class="container-fluid">
            <div class="hedder-up row">
               <div class="col-lg-6 col-md-6 logo-head">
                  <h1><a class="navbar-brand" href="index.php"> <img src="Logo.png" height="60"> </a></h1>
               </div>
               <div class="col-md-8 col-lg-4">
                  <p class="invisible">WHAT'S IN HERE?</p>
               </div>
               <div class="col-lg-2 col-md-10 right-side-cart float-right">
                  <div class="cart-icons">
                     <ul>
                        <li>
                           <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
			   <a href="logout.php"> <img src="logout.png" height="43"> </a>
                        </li>
                        <li class="toyscart toyscart2 cart cart box_1">
                           <form action="#" method="post" class="last">
                              <input type="hidden" name="cmd" value="_cart">
                              <input type="hidden" name="display" value="1">
                              <button class="top_toys_cart" type="submit" name="submit" value="">
                                 
                              </button>
                           </form>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               <ul class="navbar-nav ">
                  <li class="nav-item active"></li>
                     <a class="nav-link" href="admin_kategori.php">Kategori</a>
                  </li>
                  <li class="nav-item"></li>
                     <a class="nav-link" href="admin_produk.php">Produk</a>
                  </li>
                  <li class="nav-item"></li>
                     <a class="nav-link" href="admin_users.php">Users</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
   <!--//headder-->
   
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-2"> </div>
         <div class="col-md-8">
            <br>
            <hr>
            <h2 style="text-align: center; padding-top: 150px;"> Update Pelanggan </h2>
            <hr>
            <br>
            <form method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label> Nama Pelanggan </label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>" required>
               </div>
               <div class="form-group">
                  <label> Telepon </label>
                  <input type="text" class="form-control" name="telepon" value="<?php echo $pecah['notelp']; ?>" required>
               </div>
               <div class="form-group">
                  <label> Email </label>
                  <input type="email" class="form-control" name="email" value="<?php echo $pecah['email'];?>" required>
               </div>
               <div class="form-group">
                  <label> No Kartu </label>
                  <input type="Password" name="password" id="myInput" value="<?php echo $pecah['nokartu'];?>" required>
               </div>
               <div class="form-group">
                  <input type="checkbox" onclick="myFunction()">Show No Kartu
               </div>   
               <div class="form-group">
                  <button class="btn btn-primary" name="update"> Update </button>
                  <a href="admin_users.php" class="btn btn-primary"> Back </a>
               </div>
            </form>
         </div>
         <div class="col-md-2"> </div>
      </div>
   </div>
  

   <!-- Modal 1-->
   <form method="post" action="login.php">
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>

               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="Password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                           <a href="register.html" class="btn subscrib-btnn">Register</a>
                        </div>
                     </form>
                  </div>
               </div>
   </form>
   <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   </div>
   </div>
   </div>
   </div>
   <!-- //Modal 1-->
   <!--js working-->
   <script src='js/jquery-2.2.3.min.js'></script>
   <!--//js working-->
   <!-- cart-js -->
   <script src="js/minicart.js"></script>
   <script>
      toys.render();

      toys.cart.on('toys_checkout', function (evt) {
         var items, len, i;

         if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) { }
         }
      });
   </script>
   <!-- //cart-js -->
   <!-- start-smoth-scrolling -->
   <script src="js/move-top.js"></script>
   <script src="js/easing.js"></script>
   <script>
      jQuery(document).ready(function ($) {
         $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
               scrollTop: $(this.hash).offset().top
            }, 900);
         });
      });
   </script>
   <!-- start-smoth-scrolling -->
   <!-- here stars scrolling icon -->
   <script>
      $(document).ready(function () {

         var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };


         $().UItoTop({
            easingType: 'easeOutQuart'
         });

      });
   </script>
   <!-- //here ends scrolling icon -->
   <!--bootstrap working-->
   <script src="js/bootstrap.min.js"></script>
   <!-- //bootstrap working-->
   <!-- //OnScroll-Number-Increase-JavaScript -->
</body>

</html>