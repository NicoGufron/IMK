<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>MarketShop</title>
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
    <!-- For Clients slider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
    <!--flexs slider-->
    <link href="css/JiSlider.css" rel="stylesheet">
    <!--Shoping cart-->
    <link rel="stylesheet" href="css/shop.css" type="text/css" />
    <!--//Shoping cart-->
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
    <div class="header-outs" id="home">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="hedder-up row">
                    <div class="col-lg-6 col-md-6 logo-head">
                        <h1><a class="navbar-brand" href="index.php"> <img src="Logo.png" height="80"> </a></h1>
                        <?php 
                        if(isset($_SESSION['users'])){
                            echo "Welcome, ".$_SESSION['users'];
                        }
                        else{
                            echo "";
                        }
                        ?>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                        <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item ">
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
        <!-- Slideshow 4 -->
        <div class="slider text-center">
            <div class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <div class="slider-img one-img">
                            <div class="container">
                                <div class="slider-info ">
                                    <h5 style="font-family: 'Lobster', cursive;">Selamat Datang di<br>MarketShop</h5>
                                    <div class="bottom-info">
                                       <!--  <p>Menyediakan barang dari anda untuk anda</p> -->
                                    </div>
                                    <div class="outs_more-buttn">
                                        <a href="about.php">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img two-img">
                            <div class="container">
                                <div class="slider-info ">
                                    <h5 style="font-family: 'Lobster', cursive;">Selamat Datang di<br>MarketShop</h5>
                                    <div class="bottom-info">
                                    </div>
                                    <div class="outs_more-buttn">
                                        <a href="about.php">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img three-img">
                            <div class="container">
                                <div class="slider-info">
                                    <h5 style="font-family: 'Lobster', cursive;">Selamat Datang di<br>MarketShop</h5>
                                    <div class="bottom-info">
                                    </div>
                                    <div class="outs_more-buttn">
                                        <a href="about.php">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Product-about-->
    <!-- <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h1 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Selamat Datang!</h1>
            <div class="about-products-w3layouts">
                <p>Market yang menjual berbagai barang dari anda untuk anda :)</p>
            </div>
        </div>
    </section> -->

    <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
            <div class="icons mt-4 text-center">
                <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                </ul>
                <p class="my-3">
                    <b>MarketShop siap untuk melayani anda</b>
                </p>
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
                                    <input type="text" placeholder="Name" name="name" required="">
                                </div>
                                <div class="styled-input">
                                    <input type="password" placeholder="No Kartu" name="password" required="">
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
</form>
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
    <!--responsiveslides banner-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 900,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--// responsiveslides banner-->
    <!--slider flexisel -->
    <script src="js/jquery.flexisel.js"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 3,
                animationSpeed: 3000,
                autoPlay: true,
                autoPlaySpeed: 2000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            });

        });
    </script>
    <!-- //slider flexisel -->
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
</body>

</html>