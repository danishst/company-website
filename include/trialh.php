<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="html, css bootstrap, mega menu, navbar, large dropdown, menu CSS examples" />
    <meta name="description" content="Bootstrap 5 navbar megamenu examples with simple css demo code" />

    <!-- <title>Demo - Bootstrap navbar megamenu dropdown. html code example </title> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <style type="text/css">
        button:focus {
            outline: none !important;
        }

        .form-control {

            border: 1px solid #ced4da !important;

        }

        .navbar .megamenu {
            padding: 1rem;
        }

        /* a {
            color: #ff0809;
            text-decoration: none;
        }

        a:hover {
            color: black;
        } */

        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {

            .navbar .has-megamenu {
                position: static !important;
            }

            .navbar .megamenu {
                left: 0;
                right: 0;
                width: 100%;
                margin-top: 0;
            }

        }

        /* ============ desktop view .end// ============ */


        /* ============ mobile view ============ */
        @media(max-width: 991px) {

            .navbar.fixed-top .navbar-collapse,
            .navbar.sticky-top .navbar-collapse {
                overflow-y: auto;
                max-height: 90vh;
                margin-top: 10px;
            }
        }

        @media screen and (min-width: 0px) and (max-width: 991px) {
            ul.navbar-nav {
                line-height: 35px !important;
                background: white;
            }

            ul.navbar-nav li.active,
            li.nav-item:hover {
                border-radius: 0px !important;
                width: 100%;
                color: white !important;
            }

            a.nav-link {
                color: black !important;
            }

            ul.navbar-nav li.active a.nav-link,
            a.nav-link:hover {
                color: white !important;
            }

            ul.navbar-nav li.active.fvgdgt {
                line-height: 2.5 !important;
            }

            i.dropdown-toggle {
                color: black;
            }

            ul.navbar-nav li {
                border-bottom: 1px solid #e8e8e8;
                width: 100%;
            }

            .dropdown-menu.megamenu.show {
                margin: 46px 0 0 -77px;
            }

            i.dropdown-toggle.dgeg.show {
                position: absolute;
                right: 0;
                margin-right: 11px;
            }

            /* 
            nav#menu-1 {
                background: #00000052 !important;
            } */
        }

        @media screen and (min-width: 992px) and (max-width: 99999px) {
            li.nav-item {
                display: flex;
                align-items: center;
            }

            ul.navbar-nav li.active,
            li.nav-item:hover {
                display: flex;
                align-items: center;
            }

            li.nav-item.dropdown.has-megamenu:hover .megamenu,
            .megamenu:hover .megamenu {
                display: block;
            }

            ul.navbar-nav li.active:hover .megamenu,
            .megamenu:hover .megamenu {
                display: block;
            }

            li.nav-item.dropdown.has-megamenu:hover {
                margin-bottom: -40px;
            }

            ul.navbar-nav li.active:nth-child(2):hover {
                margin-bottom: -40px;
            }

            li.active:hover .dropdown-toggle {
                color: white !important;
            }

            li.nav-item.dropdown.has-megamenu:hover .dropdown-toggle {
                color: white;
            }

            li.active .dropdown-toggle {
                color: white;
            }

            a.gfrsyy {
                font-weight: bold;
            }

            /*ul.list-display.list-checkmarks.dgdg li.wow.fadeInUp.fdyet.gfhdfg {*/
            /*    margin-bottom: 25px;*/
            /*}*/

            /* li.nav-item.dropdown.has-megamenu:hover i.dropdown-toggle.dgeg,
            li.nav-item.dropdown.has-megamenu:hover a.nav-link.dgeg {
                margin-bottom: 40px;
            } */

        }

        @media screen and (min-width: 992px) and (max-width: 1165px) {
            a.nav-link {
                font-size: 14px !important;
            }

            ul.navbar-nav {
                line-height: 1.3;
            }

            li.nav-item {
                padding: 5px 7px !important;
                margin-right: 5px !important;
            }

            img#logo_img {
                height: 45px !important;
            }
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }



        ul.menu-logo {
            padding: 0;
            margin: 10px 0;
        }

        ul li.nav-item {
            padding: 6px 10px;
            margin-right: 10px;
            border-radius: 5px;
            /* background: #ff0808; */
        }

        ul li a.nav-link {
            padding: 0px !important;
            font-weight: 400;
            font-size: 16px;
            color: white;
            text-transform: uppercase;
        }

        ul.navbar-nav li.active,
        li.nav-item:hover {
            padding: 6px 10px !important;
            margin-right: 8px;
            border-radius: 5px;
            background: #ff0808;
            /* display: flex;
            align-items: center; */
        }

        ul.navbar-nav li.active.fvgdgt {
            padding: 6px;
            background: #ff0808;
            line-height: 4px;
            display: flex;
            align-items: center;
            padding: 0 22px;
            border-radius: 5px;
        }

        ul.list-display.list-checkmarks.dgdg li.fdyet {
            margin-bottom: .4rem;
            font-size: 14px;
            font-weight: bold;
            color: #696969;
            padding: 0;
        }


        ul.list-display.list-checkmarks.dgdg li.fdyet {
            list-style-type: none;
            padding-left: .9rem;
        }

        ul.list-display.list-checkmarks.dgdg li.fdyet:before {
            font-family: 'FontAwesome';
            content: "\f00c";
            margin: 0 10px 0 -28px;
            color: #ff0808;
        }

        .dropdown-menu {
            background-color: #0000008f;
        }




        .web-link-item a {
            display: flex;
            align-items: center;
            color: white;
        }

        /* ============ mobile view .end// ============ */
        ul.navbar-nav li.active,
        li.nav-item:hover {
            padding: 6px 10px !important;
            margin-right: 8px;
            border-radius: 5px;
            background: #ff0808;
            height: fit-content;
        }

        .dropdown-menu.megamenu {
            top: 73px;
            padding-top: 50px;
            /* z-index: -10; */
        }

        ul.list-display.list-checkmarks.dgdg li.wow.fadeInUp.fdyet a {
            color: white;
        }
    </style>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            })
        });
        // DOMContentLoaded  end
    </script>

</head>

<body>
    <!-- ============= COMPONENT ============== -->
    <nav id="menu-1" class="navbar navbar-expand-lg megaMenus" style="background-color: #000000f0;position: relative; z-index: 1;width: 100%;">
        <div class="container-fluid">
            <!-- menu logo -->
            <ul class="menu-logo">
                <li style="list-style: none;">
                    <a href="https://sagartech.co.in/">
                        <img id="logo_img" src="images/sagartech.png" class="rounded" alt="logo" style="background: white; padding: 5px; margin: 10px;width: auto;height: 55px;position: relative;z-index: 1111;">
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span style="color: white;" class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav" style="margin-left: auto;">
                    <li <?php echo ($page == 'home') ? 'class=active' : ''; ?> class="nav-item"> <a class="nav-link" href="https://sagartech.co.in/">Home </a> </li>
                    <li style="display: inline-flex;color: white;" <?php echo ($page == 'services') ? 'class=active' : ''; ?> class="nav-item dropdown has-megamenu">
                        <a class="nav-link dgeg" href="digital-marketing-and-web-development-service">Services</a>
                        &nbsp;&nbsp;
                        <!-- <i class="none fa fa-caret-down" style="font-size:24px"></i> -->
                        <i class="dropdown-toggle dgeg" data-bs-toggle="dropdown" style="font-size:24px;margin-left: auto;display: block;"></i>
                        <div class="dropdown-menu megamenu" role="menu" style="width:100%;">
                            <div class="row g-3">
                                <div class="col-lg-2 col-md-12 col-12 mb-2">
                                    <div class="col-megamenu">
                                        <div class="web-link-item" style="display:flex"><i class="fa fa-file-code-o" aria-hidden="true" style="padding: 10px 15px;font-size: 25px;border: 2px solid;border-radius: 100%;"></i>&nbsp; &nbsp; <h6 style="display: flex;align-items: center;" class="title"><a style="font-weight: bold;" href="web-design-company-mumbai">Web Development</a></h6>
                                        </div>
                                        <ul class="list-display list-checkmarks dgdg" data-transition="random" data-slotamount="7" data-masterspeed="300" style="padding-left: 1.5rem;text-align: left;margin: 25px 0;">
                                            <li class="wow fadeInUp fdyet" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><a href="domain-registration">Domain Registration</a></li>
                                            <li class="wow fadeInUp fdyet" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><a href="web-hosting-service">Web Hosting</li>
                                            <li class="wow fadeInUp fdyet" data-wow-delay="2s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;"><a href="web-development-company-mumbai">Static Website</a></li>
                                            <li class="wow fadeInUp fdyet" data-wow-delay="3s" style="visibility: visible; animation-delay: 3s; animation-name: fadeInUp;"><a href="dynamic-website-development">Dynamic Website</a></li>
                                            <li class="wow fadeInUp fdyet" data-wow-delay="4s" style="visibility: visible; animation-delay: 4s; animation-name: fadeInUp;"><a href="Ecommerce-Website-Design-Service">E-commerce Website</a></li>
                                            <li class="wow fadeInUp fdyet" data-wow-delay="5s" style="visibility: visible; animation-delay: 5s; animation-name: fadeInUp;"><a href="blog-website-development">Blog Website</a></li>
                                        </ul>
                                        <!--<h6 style="display: flex;align-items: center;margin: -12px 0 12px;font-weight: bold;" class="title">CMS</h6>-->
                                        <!--<ul class="list-display list-checkmarks dgdg" data-transition="random" data-slotamount="7" data-masterspeed="300" style="padding-left: 1.5rem;text-align: left;margin: 0px;">-->
                                        <!--    <li class="wow fadeInUp fdyet" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><a href="">WP Development</a></li>-->
                                        <!--    <li class="wow fadeInUp fdyet" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><a href="">PHP Development</a></li>-->
                                        <!--    <li class="wow fadeInUp fdyet" data-wow-delay="2s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;">E-commerce Website</li>-->
                                        <!--    <li class="wow fadeInUp fdyet" data-wow-delay="3s" style="visibility: visible; animation-delay: 3s; animation-name: fadeInUp;">Blog Website</li>-->
                                        <!--</ul>-->
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-2 col-md-12 col-12 mb-2">
                                    <div class="col-megamenu">
                                        <div class="web-link-item" style="display:flex"><i class="fas fa-bullhorn" aria-hidden="true" style="padding: 11px;font-size: 25px;border: 2px solid;border-radius: 100%;"></i>&nbsp; &nbsp; <h6 style="display: flex;align-items: center;" class="title"><a style="font-weight: bold;" href="digital-marketing-service">Digital Marketing</a></h6>
                                        </div>
                                        <ul class="list-display list-checkmarks dgdg" data-transition="random" data-slotamount="7" data-masterspeed="300" style="padding-left: 1.5rem;text-align: left;margin: 25px 0;">
                                            <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><a href="seo-service-india">SEO</a></li>
                                            <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><a href="social-media-agency-india">SMO</li>
                                            <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="2s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;"><a href="local-seo-service-india">Local SEO</a></li>
                                            <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="3s" style="visibility: visible; animation-delay: 3s; animation-name: fadeInUp;"><a href="google-ads-service">Google Adwords</li>
                                            <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="4s" style="visibility: visible; animation-delay: 4s; animation-name: fadeInUp;"><a href="social-media-marketing-service">SMM</li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-2 col-md-12 col-12 mb-2">
                                    <div class="col-megamenu">
                                        <div class="web-link-item" style="display:flex"><i class="far fa-comment-dots" aria-hidden="true" style="padding: 12px;font-size: 25px;border: 2px solid;border-radius: 100%;"></i>&nbsp; &nbsp; <h6 style="display: flex;align-items: center;" class="title"><a style="font-weight: bold;" href="bulk-sms-service">Bulk SMS</a></h6>
                                        </div>
                                        <!--<ul class="list-display list-checkmarks dgdg" data-transition="random" data-slotamount="7" data-masterspeed="300" style="padding-left: 1.5rem;text-align: left;margin: 25px 0;">-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><a href="">SEO</a></li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><a href="">SMO</li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="2s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;"><a href="web-development-company-mumbai">Local SEO</a></li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="3s" style="visibility: visible; animation-delay: 3s; animation-name: fadeInUp;"><a href="dynamic-website-development">Google Adwords</li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="4s" style="visibility: visible; animation-delay: 4s; animation-name: fadeInUp;"><a href="Ecommerce-Website-Design-Service">SMM</li>-->
                                        <!--</ul>-->
                                    </div> <!-- col-megamenu.// -->
                                </div>
                                <div class="col-lg-2 col-md-12 col-12 mb-2">
                                    <div class="col-megamenu">
                                        <div class="web-link-item" style="display:flex"><i class="far fa-object-group" aria-hidden="true" style="padding: 12px;font-size: 25px;border: 2px solid;border-radius: 100%;"></i>&nbsp; &nbsp; <h6 style="display: flex;align-items: center;" class="title"><a style="font-weight: bold;" href="graphic-design-service">Graphic Designing</a></h6>
                                        </div>
                                        <ul class="list-display list-checkmarks dgdg" data-transition="random" data-slotamount="7" data-masterspeed="300" style="padding-left: 1.5rem;text-align: left;margin: 25px 0;">
                                            <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><a href="logo-design-service">Logo Designing</a></li>
                                            <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><a href="brochure-designing">Brochure Designing</li>
                                            <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="2s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;"><a href="post-design">Post Designing</a></li>
                                            <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="3s" style="visibility: visible; animation-delay: 3s; animation-name: fadeInUp;"><a href="banner-design-company">Banner Designing</li>
                                            <!--<li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="4s" style="visibility: visible; animation-delay: 4s; animation-name: fadeInUp;"><a href="Ecommerce-Website-Design-Service">SMM</li>-->
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-2 col-md-12 col-12 mb-2">
                                    <div class="col-megamenu">
                                        <div class="web-link-item" style="display:flex"><i class="fas fa-mobile-alt" aria-hidden="true" style="padding: 12px 16px;font-size: 25px;border: 2px solid;border-radius: 100%;"></i>&nbsp; &nbsp; <h6 style="display: flex;align-items: center;" class="title"><a style="font-weight: bold;" href="">APP Development</a></h6>
                                        </div>
                                        <!--<ul class="list-display list-checkmarks dgdg" data-transition="random" data-slotamount="7" data-masterspeed="300" style="padding-left: 1.5rem;text-align: left;margin: 25px 0;">-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><a href="">SEO</a></li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><a href="">SMO</li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="2s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;"><a href="web-development-company-mumbai">Local SEO</a></li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="3s" style="visibility: visible; animation-delay: 3s; animation-name: fadeInUp;"><a href="dynamic-website-development">Google Adwords</li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="4s" style="visibility: visible; animation-delay: 4s; animation-name: fadeInUp;"><a href="Ecommerce-Website-Design-Service">SMM</li>-->
                                        <!--</ul>-->
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-2 col-md-12 col-12 mb-2">
                                    <div class="col-megamenu">
                                        <div class="web-link-item" style="display:flex"><i class="fa fa-pencil-square-o" aria-hidden="true" style="padding: 12px;font-size: 25px;border: 2px solid;border-radius: 100%;"></i>&nbsp; &nbsp; <h6 style="display: flex;align-items: center;" class="title"><a style="font-weight: bold;" href="">ISO Consulting</a></h6>
                                        </div>
                                        <!--<ul class="list-display list-checkmarks dgdg" data-transition="random" data-slotamount="7" data-masterspeed="300" style="padding-left: 1.5rem;text-align: left;margin: 25px 0;">-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><a href="">SEO</a></li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;"><a href="">SMO</li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="2s" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;"><a href="web-development-company-mumbai">Local SEO</a></li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="3s" style="visibility: visible; animation-delay: 3s; animation-name: fadeInUp;"><a href="dynamic-website-development">Google Adwords</li>-->
                                        <!--    <li class="wow fadeInUp fdyet gfhdfg" data-wow-delay="4s" style="visibility: visible; animation-delay: 4s; animation-name: fadeInUp;"><a href="Ecommerce-Website-Design-Service">SMM</li>-->
                                        <!--</ul>-->
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                    <li <?php echo ($page == 'packages') ? 'class=active' : ''; ?> class="nav-item"><a class="nav-link" href="digital-marketing-agency-mumbai-packages"> Packages </a></li>
                    <li <?php echo ($page == 'portfolio') ? 'class=active' : ''; ?> class="nav-item"><a class="nav-link" href="sagar-tech-website-portfolio">Portfolio</a></li>
                    <li <?php echo ($page == 'about') ? 'class=active' : ''; ?> class="nav-item"><a class="nav-link" href="about">About Us</a></li>
                    <li <?php echo ($page == 'contact') ? 'class=active' : ''; ?> class="nav-item"><a class="nav-link" href="contact"> Contact Us </a></li>
                    <li <?php echo ($page == 'blogs') ? 'class=active' : ''; ?> class="nav-item"><a class="nav-link" href="https://sagartech.co.in/blogs/">Blogs</a></li>
                    <li class="active fvgdgt" style="height: 35px;"><a class="gfrsyy" style="text-decoration: none;color:white;text-transform:uppercase;" href="#" data-toggle="modal" data-target="#largeModal">Request Quote!</a></i>
                </ul>
            </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
    </nav>
    <!-- ============= COMPONENT END// ============== -->












    <div class="modal fade" id="bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <h6 class="modal-title" id="myModalLabel">Request a quote</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal add_mainarea_form" action="sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-left">
                                    <label for="fname">Full Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname" aria-describedby="emailHelp" placeholder="Enter full name" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-left">
                                    <label for="email1">Email address</label>
                                    <input type="email" class="form-control" id="email1" name="email1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with
                                        us.</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-left">
                                    <label for="mobile">Contact Number</label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" min-length="10" max-length="10" aria-describedby="emailHelp" placeholder="Enter Contact Number" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-left">
                                    <label for="services">Requested Service</label>
                                    <select class="form-control" name="service" id="services" list="service" placeholder="Select Service" required>
                                        <datalist id="service">
                                            <option>Website Development</option>
                                            <option>Digital Marketing</option>
                                            <option>Bulk SMS</option>
                                            <option>Graphic Design</option>
                                            <option>App Development</option>
                                            <option>ISO Consulting</option>
                                        </datalist>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-left">
                                    <label for="service">Adittional Words</label>
                                    <textarea class="form-control" rows="3" id="words" name="addwords" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- <button class="g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>Submit</button> -->
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" name="quote_submit" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-sm text-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content text-center">
                <div class="modal-header text-center">
                    <h4 class="modal-title" id="myModalLabel">SAGAR TECH</h4>
                </div>
                <div class="modal-body tex-center">
                    <h5>Request submitted</h5>
                </div>
                <!--<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>-->
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
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            // Gets the video src from the data-src on each button
            var $imageSrc;
            $('.gallery img').click(function() {
                $imageSrc = $(this).data('bigimage');
            });
            console.log($imageSrc);



            // when the modal is opened autoplay it  
            $('#myModal').on('shown.bs.modal', function(e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get

                $("#image").attr('src', $imageSrc);
            })


            // reset the modal image
            $('#myModal').on('hide.bs.modal', function(e) {
                // a poor man's stop video
                $("#image").attr('src', '');
            })






            // document ready  
        });
    </script>




</body>

</html>