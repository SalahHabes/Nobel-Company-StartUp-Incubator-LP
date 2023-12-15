<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="TemplateMo">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <title>Nobel Company Incubator Startup</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">

        <link rel="stylesheet" href="/css/owl-carousel.css">

        <link rel="stylesheet" href="/css/templatemo-lava.css">

    </head>

    <body>

        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->


        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">
                                Lava
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                                <li class="scroll-to-section"><a href="#about" class="menu-item">About</a></li>
                                <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimonials</a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:;">Drop Down</a>
                                    <ul>
                                        <li><a href="" class="menu-item">About Us</a></li>
                                        <li><a href="" class="menu-item">Features</a></li>
                                        <li><a href="" class="menu-item">FAQ's</a></li>
                                        <li><a href="" class="menu-item">Blog</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a></li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

        {{$slot}}
        
        <!-- ***** Footer Start ***** -->
        <section id="contact-us">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <!-- ***** Contact Form Start ***** -->
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="contact-form">
                                <form id="contact" action="" method="post">
                                    <div class="column">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="name" type="text" id="name" placeholder="Full Name" required=""
                                                    style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                                    required="" style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" id="message" placeholder="Your Message"
                                                    required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button">Send Message
                                                    Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- ***** Contact Form End ***** -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Footer End ***** -->

        <!-- ***** Footer Start ***** -->
        <footer id="contact-us">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <!-- ***** Contact Form Start ***** -->
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="contact-form" style="visibility: hidden;">
                                <form id="contact" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="name" type="text" id="name" placeholder="Full Name" required=""
                                                    style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                                    required="" style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" id="message" placeholder="Your Message"
                                                    required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button">Send Message
                                                    Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- ***** Contact Form End ***** -->
                        <div class="right-content col-lg-6 col-md-12 col-sm-12">
                            <h2>More About <em>Lava</em></h2>
                            <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                                Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                                <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                    rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> page
                                for more detail.</p>
                            <ul class="social">
                                <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sub-footer">
                            <p>Copyright &copy; 2020 Lava Landing Page

                            | Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ***** Footer End ***** -->

        <!-- jQuery -->
        <script src="/js/jquery-2.1.0.min.js"></script>

        <!-- Bootstrap -->
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <!-- Plugins -->
        <script src="/js/owl-carousel.js"></script>
        <script src="/js/scrollreveal.min.js"></script>
        <script src="/js/waypoints.min.js"></script>
        <script src="/js/jquery.counterup.min.js"></script>
        <script src="/js/imgfix.min.js"></script>

        <!-- Global Init -->
        <script src="/js/custom.js"></script>

    </body>
</html>