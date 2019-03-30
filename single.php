<?php
session_start();
include 'connect.php';

$id_produk = $_GET['id'];

$ambil = $conn->query("SELECT * FROM barang WHERE id='$id_produk'");
$detail = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>MarketShop | Quickview</title>
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
      <!--booststrap-->
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
      <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <style type="text/css">
    /*--footer--*/
    footer{
    background-color: #515151;
    color: #d5d5d5;
    padding-top: 32px;
   }
   footer img{
      width: 100px;
      height: 100px;
   }
   hr.light{
      border-top: 1px solid #d5d5d5;
      width: 75%;
      margin-top: 13px;
      margin-bottom: 16px;
   }
   footer a{
      color: #d5d5d5;
   }
    hr.light-100{
      border-top: 1px solid #d5d5d5;
      width: 100%;
      margin-top: 13px;
      margin-bottom: 16px;
   }
   /*--footer--*/
   </style>
   <body>
      <!--headder-->
      <div class="header-outs" id="home">
      <div class="header-bar">
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-6 col-md-6 logo-head">
                        <h1><a class="navbar-brand" href="index.php"> <img src="Logo.png" height="80"> </a></h1>
                    </div>
                    <div class ="col-md-8 col-lg-4">
                        <p class = "invisible">WHAT'S IN HERE?</p>
                    </div>
                  <div class="col-lg-2 col-md-10 right-side-cart float-right">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                           </li>
                           <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               <ul class="navbar-nav ">
                   <li class="nav-item">
                     <a href="index.php" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                     <a href="kategori.php" class="nav-link">Items</a>
                  </li>
                  <li class="nav-item">
                     <a href="about.php" class="nav-link">About</a>
                  </li>
                  <li class="nav-item">
                     <a href="service.php" class="nav-link">How to Use</a>
                  </li>
                  <li class="nav-item">
                     <a href="contact.php" class="nav-link">Contact</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
	  </div>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>Detail Product</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--//banner -->
      <!--/shop-->
      <section class="konten">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <br> 
                  <img style="width: 85%; height: 95%; padding-left: 5px; margin-left: 50px;" src="images/<?php echo $detail['gambar']; ?>">
               </div>
               <div class="col-md-5">
                  <br>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-2"> </div>
                        
                     </div>
                  </div>
                  <form method="post">
                     <h2> <?php echo $detail['nama']; ?> </h2>
                     

                                 <hr class="my-4" style="border-top: 2px solid; border-color: red;">
                                 <h5 style="text-align: left"> Deskripsi : </h3>
                                 <br>
                                 <h6 style="text-align: left;"> <?php echo $detail['deskripsi_produk']; ?> </h6>
                                 <hr class="my-4" style="border-top: 2px solid; border-color: red;">
                                 <h5> Kuantitas : <?php echo $detail['kuantitas']; ?> </h5>
                                 <h5> <input type="hidden" name="harga" value="<?php echo $detail['harga'] ?>"> IDR <?php echo number_format($detail['harga']); ?> </h5>
                                 <br>
                                 <div class="form-group">
                                    <div class="input-group">
                                       <h5> Quantity &nbsp; </h5>
                                       <input type="number" min ="1" max="100" class="form-control" name="jumlah" required>
                                       <div class="input-group-btn">
                                          &nbsp; &nbsp;<button class="btn btn-primary" name="beli"><img src ="icon/svg/si-glyph-trolley-arrow-down.svg" width=20 height=20></button>
                                       </div>
                                    </div>
                                 </div>
                                 
                              <a href="product.php?id=<?php echo $detail['id_kategori']; ?>" class="btn btn-primary"> Back </a> 

                           </div>
                        </div>
                     </div>
                  </section>
      <!-- footer -->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="icon/svg/si-glyph-info.svg">
                    <hr class="light">
                    <h5> Visit Us </h5>
                    <hr class="light">
                    <p> 031-123456 </p>
                    <p> marketshop@gmail.com </p>
                </div>
                <div class="col-md-4">
                    <img src="icon/svg/si-glyph-clock.svg">
                    <hr class="light">
                    <h5> Our Hours </h5>
                    <hr class="light">
                    <p> Monday : 8 am - 8 pm </p>
                    <p> Saturday : 8am - 6 pm </p>
                    <p> Sunday : Closed </p>
                </div>
                <div class="col-md-4">
                    <img src="icon/svg/si-glyph-pin-location-2.svg">
                    <hr class="light">
                    <h5> Store Locations </h5>
                    <hr class="light">
                    <p> Jl. Siwalankerto </p>
                    <p> Surabaya, Indonesia </p>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <h5> Copyright &copy 2018 MarketShop</h5>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                           <a href = "register.html" class="btn subscrib-btnn">Register</a>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--jQuery-->
      <script src="js/jquery-2.2.3.min.js"></script>
      <!-- newsletter modal -->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!-- price range (top products) -->
      <script src="js/jquery-ui.js"></script>
      <script>
         //<![CDATA[ 
         $(window).load(function () {
         	$("#slider-range").slider({
         		range: true,
         		min: 0,
         		max: 9000,
         		values: [50, 6000],
         		slide: function (event, ui) {
         			$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
         		}
         	});
         	$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
         
         }); //]]>
      </script>
      <!-- //price range (top products) -->
      <!-- single -->
      <script src="js/imagezoom.js"></script>
      <!-- single -->
      <!-- script for responsive tabs -->
      <script src="js/easy-responsive-tabs.js"></script>
      <script>
         $(document).ready(function () {
         	$('#horizontalTab').easyResponsiveTabs({
         		type: 'default', //Types: default, vertical, accordion           
         		width: 'auto', //auto or any width like 600px
         		fit: true, // 100% fit in a container
         		closed: 'accordion', // Start closed if in accordion view
         		activate: function (event) { // Callback function if tab is switched
         			var $tab = $(this);
         			var $info = $('#tabInfo');
         			var $name = $('span', $info);
         			$name.text($tab.text());
         			$info.show();
         		}
         	});
         	$('#verticalTab').easyResponsiveTabs({
         		type: 'vertical',
         		width: 'auto',
         		fit: true
         	});
         });
      </script>
      <!-- FlexSlider -->
      <script src="js/jquery.flexslider.js"></script>
      <script>
         // Can also be used with $(document).ready()
         $(window).load(function () {
         	$('.flexslider1').flexslider({
         		animation: "slide",
         		controlNav: "thumbnails"
         	});
         });
      </script>
      <!-- //FlexSlider-->
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
      <!-- //smooth-scrolling-of-move-up -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working--> 
   </body>
</html>