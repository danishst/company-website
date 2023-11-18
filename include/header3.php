<header class="header-01 re-none">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="topbar-left">
                        <ul class="list-inline">
                            <!--Mobile disable<li class="list-inline-item"><i class="fa fa-phone text-blue"></i> +91 9820388810</li>-->
                            <li class="list-inline-item"><i class="fa fa-envelope"> </i> info@sagartech.co.in</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="pull-right">
                        <ul class="list-inline">
                            <a href="https://m.facebook.com/sagartechsolns/" target="_blank"><li class="list-inline-item"><i class="fa fa-facebook-official text-white"></i></li></a>
                            <a href="https://www.instagram.com/sagartech_solutions/" target="_blank"><li class="list-inline-item"><i class="fa fa-instagram text-white"></i></li></a>
                            <a href="https://www.youtube.com/channel/UCRVxoCbFJAQdqo6U5bgFxog" target="_blank"><li class="list-inline-item"><i class="fa fa-youtube text-white"></i></li></a>
                            <a href="https://www.linkedin.com/company/sagar-tech-technical-solutions" target="_blank"><li class="list-inline-item"><i class="fa fa-linkedin text-white"></i></li></a>
                            <a href="https://jsdl.in/DT-43E6EYMMME2" target="_blank"><li class="list-inline-item"><i class="text-white"></i><img src="images/justdial1.png"></li></a>
                            <a href="https://www.sulekha.com/sagar-tech-technical-solutions-mumbai-central-mumbai-contact-address" target="_blank"><li class="list-inline-item"><i class="text-white"></i><img src="images/sule2.png"></li></a>
                            <a href="https://sagartechsoln.blogspot.com/" target="_blank"><li class="list-inline-item"><i class="text-white"></i><img src="images/blogspot1.png"></li></a>
                            <a href="https://twitter.com/SagarTechSoln?s=08" target="_blank"><li class="list-inline-item"><i class="text-white"></i><img src="images/twitters.png"></li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <a href="index">
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
                        <style>
                        .open > .dropdown-menu {
                          -webkit-transform: scale(1, 1);
                          transform: scale(1, 1);  
                          opacity:1;
                        }
                          
                        .dropdown-menu {
                          opacity:0.9;
                          -webkit-transform-origin: bottom;
                          transform-origin: bottom;
                          -webkit-animation-fill-mode: backward;  
                          animation-fill-mode: backward; 
                          -webkit-transform: scale(1, 0);
                          transition: all 0.5s linear;
                          -webkit-transition: all 0.5s linear;
                          -webkit-animation-iteration-count: infinite;
                                animation-iteration-count: infinite;
                        }
                        
                        .caret-up {
                            width: 0; 
                            height: 0; 
                            border-left: 4px solid rgba(0, 0, 0, 0);
                            border-right: 4px solid rgba(0, 0, 0, 0);
                            border-bottom: 4px solid;
                            
                            display: inline-block;
                            margin-left: 2px;
                            vertical-align: middle;
                        }
                        
                        </style>

                        <!-- menu links -->
                        <ul class="menu-links">
                            <!-- active class -->
                            <li <?php echo ($page == 'home') ? 'class=active' : ''; ?>><a href="index">Home</a>
                            </li>
                            <!--<li <?php //echo ($page == 'about') ? 'class=active' : ''; ?>><a href="about">About Us</a></li>-->
                            <li <?php echo ($page == 'services') ? 'class=active' : ''; ?>><a href="service">Services</a></li>
                            <li <?php echo ($page == 'portfolio') ? 'class=active' : ''; ?>><a href="portfolio">Portfolio</a></li>
                            <!--<li <?php echo ($page == 'about') ? 'class=active' : ''; ?>><a href="about">About Us</a></li>-->
                            <li <?php echo ($page == 'contact') ? 'class=active' : ''; ?>><a href="contact">Contact Us</a></li>
                            <li <?php echo ($page == 'support') ? 'class=active' : ''; ?>><a href="https://sagartech.raiseaticket.com/support/#/newticket">Support</a>
                            </li>
                            <li class="active"><a href="#" data-toggle="modal" data-target="#largeModal">Request Quote!</a></i>
                            <li class="dropdown "><a href="#" id="drop1" data-toggle="dropdown" class="dropdown-toggle" role="button">Music <b class="caret"></b></a>
                                <ul role="menu" class="dropdown-menu" aria-labelledby="drop1">
                                    <li role="presentation"><a href="#" role="menuitem">Grones</a></li>
                                    <li role="presentation"><a href="#" role="menuitem">Nach</a></li>
                                    <li role="presentation"><a href="#" role="menuitem">Zpu</a></li>
                                    <li role="presentation"><a href="#" role="menuitem">Madnass</a></li>
                                </ul>
                            </li>    
                        </ul>
                        <script>
                            $(function(){
                            $(".dropdown").hover(            
                                    function() {
                                        $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                                        $(this).toggleClass('open');
                                        $('b', this).toggleClass("caret caret-up");                
                                    },
                                    function() {
                                        $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                                        $(this).toggleClass('open');
                                        $('b', this).toggleClass("caret caret-up");                
                                    });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </nav>
</header>