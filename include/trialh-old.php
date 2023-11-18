<header class="header-01 re-none" style="background-color:rgba(1, 1, 1, 0.3)">
    <!-- menu start -->
    <nav id="menu-1" class="mega-menu">
        <!-- menu list items container -->
        <section class="menu-list-items">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                            <li>
                                <a href="https://sagartech.co.in/">
                                    <img id="logo_img" src="images/sagartech.png" class="rounded" alt="logo" style="background: white; padding: 5px; margin: 10px;">
                                </a>
                            </li>
                        </ul>
                        <style>
                            .paymentBtn {
                                -webkit-animation-name: color-transition;
                                animation-name: color-transition;
                                -webkit-animation-duration: 1s;
                                animation-duration: 1s;
                                -webkit-animation-direction: alternate;
                                animation-direction: alternate;
                                -webkit-animation-iteration-count: infinite;
                                animation-iteration-count: infinite;
                            }


                            @keyframes color-transition {
                                0% {
                                    background-color: transparent;
                                    border-color: #4C6085;
                                }

                                100% {
                                    background-color: red;
                                    border-color: #4C6085;
                                }
                            }
                        </style>
                        <!-- menu links -->
                        <ul class="menu-links">
                            <!-- active class -->
                            <li <?php echo ($page == 'home') ? 'class=active' : ''; ?>><a href="https://sagartech.co.in/">Home</a></li>
                            <li <?php echo ($page == 'services') ? 'class=active' : ''; ?>><a href="digital-marketing-and-web-development-service">Services</a></li>
                            <li <?php echo ($page == 'packages') ? 'class=active' : ''; ?>><a href="packages">Packages</a></li>
                            <li <?php echo ($page == 'portfolio') ? 'class=active' : ''; ?>><a href="portfolio">Portfolio</a></li>
                            <li <?php echo ($page == 'about') ? 'class=active' : ''; ?>><a href="about">About Us</a></li>
                            <li <?php echo ($page == 'contact') ? 'class=active' : ''; ?>><a href="contact">Contact Us</a></li>
                            <!--<li <?php //echo ($page == 'careers') ? 'class=active' : ''; ?>><a href="careers">Careers</a></li>-->
                            <!--<li <?php //echo ($page == 'support') ? 'class=active' : ''; ?>><a href="https://sagartech.raiseaticket.com/support/#/newticket">Support</a></li>-->
                            <li <?php echo ($page == 'blogs') ? 'class=active' : ''; ?>><a href="https://sagartech.co.in/blogs/">Blogs</a></li>
                            <li class="active"><a href="#" data-toggle="modal" data-target="#largeModal">Request Quote!</a></i>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </nav>
</header>

<!--
<header class="header-01 re-none" style="background-color: white;">
    <style>
                            #title{
                                color:black;
                            }
                            #li:hover #title, #title:hover{
                                color:white;
                            }
                           .active #title{
                                color:white;
                            }
                        </style>

-->

            <div class="modal fade" id="bootstrap-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                                <?php echo 'Course Details'; ?>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="demo-modal">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
                                    <input type="text" class="form-control" name="fname" id="fname"
                                        aria-describedby="emailHelp" placeholder="Enter full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email1">Email address</label>
                                    <input type="email" class="form-control" id="email1" name="email1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">Your information is safe with
                                        us.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile">Contact Number</label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" min-length="10" max-length="10"
                                        aria-describedby="emailHelp" placeholder="Enter Contact Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="services">Requested Service</label>
                                    <input name="service" id="services" list="service" placeholder="Select Service"> <datalist id="service">
                                        <option>Website Development</option>
                                        <option>Digital Marketing</option>
                                        <option>Bulk SMS</option>
                                        <option>Graphic Design</option>
                                        <option>App Development</option>
                                        <option>ISO Consulting</option>
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
    </div>
    <div class="modal fade bd-example-modal-sm text-center" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                        <li><a href="https://www.facebook.com/Sagar-Tech-223839251868625/"><i
                                    class="fa fa-facebook "></i></a></li>
                        <li><a href="https://www.linkedin.com/in/sagar-tech-151800177/"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a href="# "><i class="fa fa-github "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            // Gets the video src from the data-src on each button
            var $imageSrc;
            $('.gallery img').click(function () {
                $imageSrc = $(this).data('bigimage');
            });
            console.log($imageSrc);



            // when the modal is opened autoplay it  
            $('#myModal').on('shown.bs.modal', function (e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get

                $("#image").attr('src', $imageSrc);
            })


            // reset the modal image
            $('#myModal').on('hide.bs.modal', function (e) {
                // a poor man's stop video
                $("#image").attr('src', '');
            })






            // document ready  
        });
    </script>
