
<!--
author: fredrick oluoch 0720106420
author URL: http://blaqueyard.com
email: fred.oluoch@blaqueyard.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('images/log.png')}}" >
    <title>REVOLUTION TECHNOLOGIES | CONTACT</title>
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
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
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
<div class="banner1">
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
                <nav class="menu menu--iris"><nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a href="{{'/'}}" class="menu__link">Home</a></li>
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
    </div>
</div>
<!-- //banner -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <h2 class="w3ls_head">Quick Contact</h2>
        <p class="w3layouts_para">To get your project underway, simply contact us and an expert will get in touch with you as soon as possible. You are welcomed.</p>
        <div class="contact-right-w3-agile">
            <p name="enq" id="contact_form" method="post" action="email/" onsubmit="return validation();">

                <input type="text" name="name" placeholder="Name" required="">
                <input type="text" name="email" placeholder="Email" required="">
                <input type="text" name="subject" placeholder="Subject" required="">
                <input type="text" name="company" placeholder="Company" required="">
                <textarea name="message" placeholder="Message" required=""></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
<div class="map">
    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6315353649!2d144.49269948060635!3d-37.97123704486416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1475562983428" allowfullscreen></iframe>--}}
    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD8aUJQTpqolWkSn6-WYT2mIevdvcf4oOw&q=West+Business+center,Kaunda+Street"  allowfullscreen></iframe>
</div>
<!-- //contact -->

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
