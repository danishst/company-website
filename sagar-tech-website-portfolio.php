<?php
include("admin/dbconfig/dbcon.php");
?>
<!doctype html>
<html lang="en">


<head>
    <title>Sagar Tech - Website Designer in Mumbai - Our Work</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- ADD-ONS CSS FILES -->
    <link href="revolution/css/revolution.addon.particles.css" rel="stylesheet" type="text/css">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187254498-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-187254498-1');
    </script>
</head>
<style>
    .visitbtn {
        margin: 29px 50px 0px 0px;

    }

    .iq-grid-item {
        padding: 0 10px 70px 10px !important;
    }

    @media only screen and (min-width: 0px) and (max-width: 767px) {

        /* For mobile phones: */
        .wraps {
            width: 100% !important;
            margin-bottom: 30px;
        }

        .iq-grid-item {
            padding: 0 !important;
        }

        .visitbtn {
            margin: 12px 5px 0px 0px;
        }

        section.overview-block-ptb.chdjy {
            padding-top: 0px;
        }
    }

    @media only screen and (min-width: 993px) and (max-width: 1199px) {

        /* For general iPad layouts */
        .wraps {
            width: 100% !important;
        }



        /*.visitbtn {*/
        /*    margin: 29px 80px 10px 100px;*/
        /*}*/
    }

    .card__title {
        font-size: 1.5rem;
        font-weight: 300;
        margin: 0 0 0.5rem;
        text-align: center;
    }

    .card__image {

        /*height: 200px;*/
        margin-bottom: 0.5rem;
        overflow: hidden;
        width: 100%;
    }

    .card__image img {
        object-fit: cover;
        overflow: hidden;
        /* transition duration is less than the one on hover */
        /* so img returns faster to its original position */
        transition: transform 1s ease-in-out;
        width: 100%;
    }

    .card__image:hover img {
        transform: translateY(calc(-100% + 240px));
        transition: transform 5s ease-in-out;
    }

    .wraps {
        width: 100%;
        height: 240px;
        padding: 0;
        overflow: hidden;
        float: left;
        border-radius: 10px 10px 0 0;
        box-shadow: 0 0 20px 0 rgb(0 0 0);
    }

    .wraps:hover {
        border-radius: 0px;
    }

    .frame {
        width: 1280px;
        height: 786px;
    }
</style>

<body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1">
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="images/logoonly.jpg" alt="loder">
        </div>
    </div>

    <!-- HEADER  -->
    <?php
    $page = 'portfolio';
    include("include/trialh.php");
    //include('include/header1.php');
    ?>
    <!-- /HEADER END -->

    <!--======= Breadcrumb Left With BG Image =======-->
    <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/portfolio-slider-page.jpeg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <h2 class="iq-font-white" style="font-weight: bold;text-align: left;">Portfolio</h2>
                    <ol class="breadcrumb" style="margin-left: -10px;margin-top: 10px;">
                        <li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--======= Breadcrumb Left With BG Image =======-->


    <!--=================================
        Main Content -->
    <div class="main-content popup-gallery">
        <!--==================portfolio================= -->
        <section class="overview-block-ptb chdjy">
            <div class="container-fluid iq-hide">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="margin-top: 20px;">
                        <style type="text/css">
                            .iq-portfolio-05 .hoverdir {
                                background: rgba(255, 8, 8, 0.8) !important;
                            }
                        </style>

                        <div class="isotope iq-columns-3">
                            <?php
                            $get = mysqli_query($con, "SELECT * FROM portfolio");
                            while ($res = mysqli_fetch_assoc($get)) {
                            ?>
                                <div class="iq-grid-item illustration wow flipInX" data-wow-duration="1.0s">
                                    <div class="wraps">
                                        <div class="card__image">
                                            <img src="./admin/upload/portfolio/<?php echo $res['portfolio_image']; ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!--=================================
            portfolio -->
        <!--=================================
              Action Box -->
        <div class="iq-action-blog black-bg particles-bg iq-ptb-40">
            <canvas id="canvas"></canvas>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 iq-font-white">
                        <img style="border-radius:10px" class="card-img-top img-fluid" src="images/bg/e-commerce-portfolio.png" alt="Card image cap">
                    </div>
                    <div class="col-lg-6 iq-font-white">
                        <h1 class="iq-font-white iq-fw-4 iq-pb-10" style="font-weight: 500;">ECommerce Website
                            Developers in Mumbai.<strong class="iq-font-black"></strong></h1>
                        <div style="text-align:justify">
                            <p>
                                We develop E-Commerce websites using <b><a href="https://woocommerce.com" target="_blank"></a></b>Woocommerce platform built on Wordpress.
                                <b><a href="https://bit.ly/3lVXn28" target="_blank">WordPress</a></b> is very SEO
                                friendly and there are large numbers of plugins available which makes SEO
                                optimization so easy for you.
                                We also design and develop E-Commerce websites using <b><a href="https://en.wikipedia.org/wiki/React_Native">React Native</a></b> in
                                the frontend and <b><a href="https://laravel.com">Laravel</a></b> for databse
                                connectivity.
                                We are one of the best wordpress developers in Mumbai and use <b><a href="https://elementor.com/pro/" target="_blank">Elementor Pro</a></b>
                                which is the most advanced website builder plugin for WordPress, allowing you to
                                visually design forms, posts, WooCommerce, slides and more.
                                We provide you with a complete Business Solution starting from design and
                                development of your website, Local SEO, SEO and help you to scale your Busines to
                                next level of Excellence at affordable price.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================================
              Action Box -->
        </div>
    </div>
    <!--=================================
            Main Content -->
    <!--=================================
            Footer -->
    <?php
    include("include/faqaccordian.html");
    include("include/footer.php");
    ?>
    <!--=================================
        Footer -->

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- back-to-top End -->


    <!--================ Jquery =================-->
    <!-- Jquery  -->
    <script src="js/jquery.min.js"></script>
    <!-- popper  -->
    <script src="js/popper.min.js"></script>
    <!--  bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Google captcha code Js -->
    <script src='../../../../www.google.com/recaptcha/api.js'></script>
    <!-- Mega Menu -->
    <script src="js/mega-menu/mega_menu.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- price_range_script -->
    <script src="js/price_range_script.js"></script>
    <!-- modernizr.custom -->
    <script src="js/modernizr.custom.js"></script>
    <!-- jquerypp.custom -->
    <script src="js/jquerypp.custom.js"></script>
    <!-- bookblock -->
    <script src="js/jquery.bookblock.js"></script>
    <!-- style-customizer-->
    <script src="js/style-customizer.js"></script>
    <!-- Custom -->
    <script src="js/custom.js"></script>
    <script src="js/notcopyable.js"></script>

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+919820133303", // WhatsApp number
                email: "info@sagartech.co.in",
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->

    <!-- <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog  modal-md">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Request a quote</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal add_mainarea_form" action="sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">Full Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname" aria-describedby="emailHelp" placeholder="Enter full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email1">Email address</label>
                                    <input type="email" class="form-control" id="email1" name="email1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">Your information is safe with
                                        us.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile">Contact Number</label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" max-length="10" aria-describedby="emailHelp" placeholder="Enter Contact Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="services">Requested Service</label>
                                    <input name="service" id="services" list="service"> <datalist id="service">
                                        <option>Website Development</option>
                                        <option>Digital Marketing</option>
                                        <option>Bulk SMS</option>
                                        <option>Graphic Design</option>
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service">Adittional Words</label>
                                    <textarea class="form-control" rows="5" id="words" name="addwords"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" name="quote_submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script>
        $(function() {
            var myform = $(".add_mainarea_form");
            var completed = '0%';
            $(myform).ajaxForm({

                complete: function() {
                    $('#largeModal').modal('hide')
                    setTimeout(
                        $('.bd-example-modal-sm').modal('show'), 3000);
                }
            });


        });
        $(document).ready(function() {

            $('body').bind('cut copy paste', function(e) {
                e.preventDefault();
            });

            function doAnimation() {
                $("#buttonbounce").effect("bounce", {
                    times: 3
                }, 1000, doAnimation);
            }

            doAnimation();

        });
    </script>
    <!-- <div class="modal fade bd-example-modal-sm text-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content text-center">
                <div class="modal-header text-center">
                    <h4 class="modal-title" id="myModalLabel">SAGAR TECH</h4>
                </div>
                <div class="modal-body tex-center">
                    <h5>Request submitted</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade iq-login-from" tabindex="-1" role="dialog" id="form" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title iq-tw-5">Login</h4>
                    <a class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times; </span>
                    </a>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="recipient-name" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="recipient-password" placeholder="Password">
                        </div>
                        <a class="button iq-mtb-10" href="#">Login</a>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div> Don't Have an Account? <a href="#" class="iq-font-yellow">Register Now</a></div>
                    <ul class="iq-media-blog iq-mt-20">
                        <li><a href="https://twitter.com/SagarTech2"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="https://www.facebook.com/Sagar-Tech-223839251868625/"><i class="fa fa-facebook "></i></a></li>
                        <li><a href="https://www.linkedin.com/in/sagar-tech-151800177/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="# "><i class="fa fa-github "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
</body>


<!-- Mirrored from iqonicthemes.com/themes/qwilo/qwilo/full-classic-4-portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 14:24:27 GMT -->

</html>