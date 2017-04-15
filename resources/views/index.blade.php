
<!--
author: fredrick oluoch 0720106420
author URL: http://blaqueyard.com
email: fred.oluoch@blaqueyard.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>REVOLUTION TECHNOLOGIES | HOME</title>
    <link rel="icon" href="{{ asset('images/log.png')}}" >
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="microsoft server, sharepoint, software development, active directory ,ad ,AD, westlands, Cloud Solutions – Microsoft Office 365, Microsoft Azure,
Design & Architecture, Outsourced IT, Managed Services, Technology Assessments, Licensing, Network Security, monitoring and Management, security , networking,revolution, revolution technologies,
revolutiontechnologies, revtech, rev tech" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    {{--<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />--}}
    <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
    <!-- js -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js')}}"></script>
    <!-- //js -->
    <!-- font-awesome icons -->
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="agile-header">
            <div class="agileits-contact-info text-right">
                <ul>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@revolutiontechnologieslimited.com">info@revolutiontechnologieslimited.com</a></li>
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+254700381030</li>
                </ul>
            </div>
            <div class="w3_agileits_social_media">
                <ul>
                    <li class="agileinfo_share">Share On</li>
                    <li><a href="#" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="{{url('/')}}"> <img src="{{ asset('images/log.png')}}" class="img-responsive" alt=""/></a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--iris">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item menu__item--current"><a href="{{url('/')}}" class="menu__link">Home</a></li>
                        <li class="menu__item"><a href="{{url('about')}}" class="menu__link">About</a></li>
                        <li class="menu__item"><a href="{{url('portfolio')}}" class="menu__link">Portfolio</a></li>
                        <li class="menu__item"><a href="{{url('services')}}" class="menu__link">Services</a></li>
                        {{--<li class="dropdown menu__item">--}}
                            {{--<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Short Codes <b class="caret"></b></a>--}}
                            {{--<ul class="dropdown-menu agile_short_dropdown">--}}
                                {{--<li><a href="icons.html">Icons</a></li>--}}
                                {{--<li><a href="typography.html">Typography</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li class="menu__item"><a href="{{url('contact')}}" class="menu__link">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
        <div class="w3l_banner_info">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>WE DELIVER</h4>
                                <h3>We always hit our target on time. </h3>
                                {{--<h5>classical Latin</h5>--}}
                            </div>
                        </li>
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>TOP NOTCH SOLUTIONS</h4>
                                <h3>We offer the best solution for your needs.</h3>
                                {{--<h5>classical Latin</h5>--}}
                            </div>
                        </li>
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>CLOUD COMPUTING</h4>
                                <h3>We take care of your needs in Microsoft azure Cloud.</h3>
                                {{--<h5>classical Latin</h5>--}}
                            </div>
                        </li>
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>INNOVATORS</h4>
                                <h3>We are game changers, we are simply Unique.</h3>
                                {{--<h5>classical Latin</h5>--}}
                            </div>
                        </li>
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>AGILE</h4>
                                <h3>We engage our clients throught the project's lifecycle.</h3>
                                {{--<h5>classical Latin</h5>--}}
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- flexSlider -->
            <script defer src="{{ asset('js/jquery.flexslider.js')}}"></script>
            <script type="text/javascript">
                $(window).load(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- //flexSlider -->
        </div>
    </div>
</div>
<!-- //banner -->

<!-- welcome -->
<div class="welcome">
    <div class="container">
        <div class="welcome-top">
            <h2 class="w3ls_head">Welcome</h2>

            <p>Technology is only proven if it supports the business outcome. We work exclusively with
                technology providers that have mature, enterprise-class products and solutions that deliver
                quantifiable results. The net result is drastically reduced cost, reduced development time,
                increased revenues, improved productivity and increased time-to-market.
                We dedicate quality time and effort to understand business, how it works and what matters.</p>
        </div>
        <div class="charitys">
            <div class="col-md-4 chrt_grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                <div class="chrty">
                    <figure class="icon">
                        <span class="glyphicon-icon glyphicon-heart" aria-hidden="true"></span>
                    </figure>
                    <h3>Cloud Solutions</h3>
                    <p>We provide clients with the right space and context to think and then execute a
                        far more coherent solution. We help both the large and medium sized
                        enterprise with alternative solutions from those being sold by the last
                        generation of technology manufacturers.</p>
                </div>
            </div>
            <div class="col-md-4 chrt_grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                <div class="chrty">
                    <figure class="icon">
                        <span class="glyphicon-icon glyphicon-asterisk" aria-hidden="true"></span>
                    </figure>
                    <h3>Design & Architecture</h3>
                    <p>We learn and gather information and use it to model a solution vision that
                        defines the IT systems, business processes and reusable services for a
                        specific organizations, spanning across business and technology architectures.</p>
                </div>
            </div>
            <div class="col-md-4 chrt_grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                <div class="chrty">
                    <figure class="icon">
                        <span class="glyphicon-icon glyphicon-flag" aria-hidden="true"></span>
                    </figure>
                    <h3>Outsourced IT</h3>
                    <p>Our 24/7/365 service desk function delivers first, second and third line support
                        to Enterprise customers and end users from our operation center in Nairobi,
                        Kenya.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="banner-grids">
            <div class="col-md-8 banner-grid1">

                <h5>Technology Solutions.</h5>
                <p>Most companies today rely heavily on technology to keep their businesses running.
                    Rev tech clients are no exception, but they do have a distinct advantage: We ensure
                    that their technology drives their business success. As a professional and
                    experienced IT company, we understand their business, and we understand
                    technology. Combined, our knowledge enables us to customize and deliver sound,
                    strategic IT solutions that function as part of our clients' long-term business strategy.</p>
            </div>
            <div class="col-md-4 banner-grid">
                <img src="{{ asset('images/1.jpg')}}" alt=" " class="img-responsive">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //welcome -->

<!--client-->
<div class="client">
    <div class="container">
        <h3 class="w3ls_head">Client Says</h3>
        <p class="w3l">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
            corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
        <!--screen-gallery-->
        <div class="sreen-gallery-cursual">
            <!-- required-js-files-->
            <link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet">
            <script src="{{ asset('js/owl.carousel.js')}}"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        items :1,
                        lazyLoad : true,
                        autoPlay : true,
                        navigation :true,
                        navigationText :  false,
                        pagination : true,
                    });
                });
            </script>
            <!--//required-js-files-->
            <div id="owl-demo" class="owl-carousel">
                <div class="item-owl">
                    <div class="customer-say">
                        <div class="col-md-6 customer-grid">
                            <div class="de_testi">
                                <div class="quotes"><img src="{{ asset('images/team1.jpg')}}" alt=""></div>
                                <div class="de_testi_by">
                                    <p>Revolution Team offered me a solution in a professional way, i'd recommended anyone to work with them..</p>
                                    <a href="#">Maria </a>, Customer
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 customer-grid">
                            <div class="de_testi">
                                <div class="quotes"><img src="{{ asset('images/team2.jpg')}}" alt=""></div>
                                <div class="de_testi_by">
                                    <p>  They deployed my solution on the cloud and I haven't gotten any issue since then..</p>
                                    <a href="#">John </a>, Customer
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="item-owl">--}}
                    {{--<div class="customer-say">--}}
                        {{--<div class="col-md-6 customer-grid">--}}
                            {{--<div class="de_testi">--}}
                                {{--<div class="quotes"><img src="{{ asset('images/team3.jpg')}}" alt=""></div>--}}
                                {{--<div class="de_testi_by">--}}
                                    {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>--}}
                                    {{--<a href="#">Michael </a>, Customer--}}
                                {{--</div>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 customer-grid">--}}
                            {{--<div class="de_testi">--}}
                                {{--<div class="quotes"><img src="{{ asset('images/team4.jpg')}}" alt=""></div>--}}
                                {{--<div class="de_testi_by">--}}
                                    {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>--}}
                                    {{--<a href="#">John </a>, Customer--}}
                                {{--</div>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="item-owl">--}}
                    {{--<div class="customer-say">--}}
                        {{--<div class="col-md-6 customer-grid">--}}
                            {{--<div class="de_testi">--}}
                                {{--<div class="quotes"><img src="{{ asset('images/team4.jpg')}}" alt=""></div>--}}
                                {{--<div class="de_testi_by">--}}
                                    {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>--}}
                                    {{--<a href="#">Michael </a>, Customer--}}
                                {{--</div>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 customer-grid">--}}
                            {{--<div class="de_testi">--}}
                                {{--<div class="quotes"><img src="{{ asset('images/team1.jpg')}}" alt=""></div>--}}
                                {{--<div class="de_testi_by">--}}
                                    {{--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>--}}
                                    {{--<a href="#">John </a>, Customer--}}
                                {{--</div>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
        <!--//screen-gallery-->
    </div>
</div>
<!--//client-->
<!-- what -->
<br class="what-w3ls">
    <p class="container">
        <h3 class="w3ls_head">Work Process</h3>
        <p class="w3agile">Since as early as 2008, Scrum has increasingly become our methodology of choice for the vast majority of projects. We now heavily favor Scrum to successfully cope with loosely defined or constantly changing requirements, or critical time to market demands.

            Over the years, we have accumulated deep Scrum expertise and take pride in employing some of the best Scrum Masters out there who not only effectively lead projects but also constantly contribute to the company’s body of Scrum knowledge.

            We also have worked hard to hone our process to specifically address the challenges of outsourced development — and it has paid off tremendously when delivering products for some of the world’s most recognizable brands.</p></p></p></br>
    </p>
        <h3 class="w3ls_head">Scrum at a Glance</h3>
        <h1>Scrum is an iterative and incremental software development methodology designed to build products faster. Scrum uses short timeboxed development cycles (called sprints), with each sprint resulting in potentially shippable functionality delivered.</h1>
        <div class="what-grids">
            <div class="col-md-6 what-grid">
                <img src="{{ asset('images/images.png')}}" class="img-responsive" alt=""/>
                <div class="what-agile-info">
                    <h4>Experience</h4>
                    <p>Experience of nearly seventeen years working with a wide cross section of sectors in a vast range of technologies.</p>
                </div>
            </div>
            <div class="col-md-6 what-grid1">
                <div class="what-top">
                    <div class="what-left">
                        <i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Transparency</h4>
                        <p>Our experts walk you through each step of solution development</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="what-top1">
                    <div class="what-left">
                        <i class="glyphicon glyphicon-flash" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Trust</h4>
                        <p>We place the greatest emphasis on being a reliable & trusted partner to our clients</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="what-top1">
                    <div class="what-left">
                        <i class="glyphicon glyphicon-fire" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Client Focus</h4>
                        <p>Share feedback and suggestions for strategic improvements. Stay Informed with uninterupted communication via reporting and telecom</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //what -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-w3layouts">
            <div class="col-md-3 footer-agileits">
                <h3>Specialized</h3>
                <ul>
                    <li>Business Apps</li>
                    <li>Productivity</li>
                    <li>Collaboration</li>
                    <li>Communications</li>

                    <li>Desktop Management</li>
                    <li>Identity</li>
                    <li>Database</li>
                    <li>Platform</li>
                </ul>
            </div>
            <div class="col-md-3 footer-wthree">
                <h3>Partners</h3>
                <ul>
                    <li>Oracle</li>
                    <li>Fortinet</li>
                    <li>Microsoft</li>
                    <li>Polycop</li>
                    <li>Tripwire</li>
                    <li>Ocedo</li>
                    <li>Sophos</li>
                    <li>Secuna</li>
                </ul>
            </div>
            <div class="col-md-3 footer-w3-agileits">
                <h3>Consultation</h3>
                <ul>
                    <li>Cloud Solutions.</li>
                    <li>Design and Architechture</li>
                    <li>Outsourced IT</li>
                    <li>Managed Services</li>
                    <li>Technology Assessments</li>
                    <li>Licensing</li>
                    <li>Network Security</li>
                </ul>
            </div>
            <div class="col-md-3 footer-agileits-w3layouts">
                <h3>Our Links</h3>
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="footer-w3-agile">
            <div class="col-md-6 w3l-footer-top">
                <h3>Newsletter</h3>
                <form action="#" method="post" class="newsletter">
                    <input class="email" type="email" placeholder="Your email..." required="">
                    <input type="submit" class="submit"  value="">
                </form>
                <div class="footer-agile">
                    <div class="col-md-6 footer-w3-1">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                        <p> West business center 5 th Floor,  </p>
                        <p> Kaunda Street, Nairobi.</p>
                    </div>
                    <div class="col-md-6 footer-w3l-1">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                        <p> +254700381030</p>
                        <p> +254786887923</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 w3ls-social-icons">
                <h3>Follow Us</h3>
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="copy-right-agile">
            <p>All rights reserved &copy; <?php echo date('Y', strtotime('+8 HOURS'))?> | Design by <a href="http://blaqueyard.com/">blaqueyard.com</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="{{ asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>