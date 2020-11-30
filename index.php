
<!DOCTYPE html>
<html>


<head>
<style> 
        .gfg { 
            margin: 0%; 
            position: relative; 
        } 
  
        
  
    </style> 

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
    
    
	<title>Automicrouas</title>
	<meta name="description" content=" add description  ... ">
    
    <!-- /// Favicons ////////  -->
    <link rel="icon" type="image/png" href="favicon.png">
	<meta name="msapplication-TileColor" content="#232323">
	<meta name="theme-color" content="#232323">
	
	
	<!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    
    <!-- /// FontAwesome Icons 4.3.0 ////////  -->
	<link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    
    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="assets/fonts/iconfontcustom/icon-font-custom.css">  
    
	<!-- /// Plugins CSS ////////  -->
	<link rel="stylesheet" href="assets/vendors/revolutionslider/css/settings.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="assets/vendors/magnificpopup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/animations/animate.min.css">
	<link rel="stylesheet" href="assets/vendors/itplayer/css/YTPlayer.css">
	
	<!-- /// Template CSS ////////  -->
    <link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/elements.css">
	<link rel="stylesheet" href="assets/css/layout.css">
	<link rel="stylesheet" href="assets/css/components.css">
	<link rel="stylesheet" href="assets/css/wordpress.css">
    
	<!-- /// Boxed layout ////////  -->
	<!-- <link rel="stylesheet" href="assets/css/boxed.css"> -->
    <link rel="stylesheet" href="css/templatemo-style.css">
 	<!-- /// Style Switcher CSS ////////  -->
 	<link rel="stylesheet" href="assets/css/wide.css" id="quantum-layout">
	<link rel="stylesheet" href="assets/vendors/switcher/switcher.css">
    <script type="text/javascript" src="assets/js/jssor.js"></script>
    <script type="text/javascript" src="assets/js/jssor.slider.js"></script>
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 0,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 4,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 3000,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 130,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 100,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 7,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 1200));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);


            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            }

            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //}
            //responsive code end
        };
    </script>
    
</head>
<body class="sticky-header" style="overflow-x:hidden">
	

<div id="video">
    <div class="preloader">
    <img src="assets/images/logo-footer.png" alt="Automicrouas" style=" margin-left:20px">
        <div class="preloader-bounce">
        
        <span></span>
        <span></span>
        <span></span>
    </div>
    </div>
    </div>

    	
	<!--[if lte IE 8]>
         <div class="modern-browser-required">
        	You are using an <strong>outdated</strong> browser. Please 
        	<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">upgrade your browser</a> 
            to improve your experience.
		</div>
    <![endif]-->

	<div id="wrap">

		<div id="header">
        
        <!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="container">
                <div class="row">
                    <div class="span3">
                    
                        <!-- // Logo // -->
                        <div id="logo" style="padding: 0px 0 4px 0">
                            <a href="index.php">
                                <img src="assets/images/logo-footer.png" alt="Automicrouas" style=" margin-top: -9px;">
                            </a>
                        </div>
                    
                    </div><!-- end .span3 -->
                    <div class="span9">
                    
                        <!-- // Mobile menu trigger // -->
                        
                        <a href="#" id="mobile-menu-trigger">
                            <i class="fa fa-bars"></i>
                        </a>
                        
                        <!-- // Custom search // -->                                        

                        <!-- // Menu // -->
                        
                       <nav>
                            <ul class="sf-menu fixed" id="menu" style="position:fixed;z-index:1000;">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">about us</a></li>                                
                                 <li><a href="product.php">Products</a>
                                    <div class="sf-mega sf-mega-4-col img-menu">
                                        <div class="sf-mega-section">
                                            <ul>
                                            	<li><a href="smart-signage-tv.php">
                                                      	<img src="img/A200-Drone.png" width="100"/>
                                                    </a>
                                                </li>
                                                <li>                                        	
                                                    <a href="access.php">
                                                     	<img src="img/A400-Drone.png" width="100"/>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sf-mega-section">
                                            <ul>
                                            	<li><a href="eas.php">
                                                      	<img src="img/A400MaxDrone.png" width="100"/>
                                                    </a>
                                                </li>
                                                <li>                                        	
                                                    <a href="pos-system.php">
                                                     	<img src="img/A410-column.png" width="100"/>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="sf-mega-section">
                                            <ul>
                                            	<li><a href="barcode.php">
                                                      	<img src="img/AT-15.png" width="100"/>
                                                    </a>
                                                </li>
                                                <li>                                        	
                                                    <a href="currency.php">
                                                     	<img src="img/cygnus.png" width="100"/>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sf-mega-section">
                                            <ul>
                                            	<!--<li><a href="#">
                                                      	<img src="content/menu/menu/smart-card.png" width="100"/>
                                                    </a>
                                                </li> -->
                                                <a href="currency.php">
                                                     	<img src="img/cygnus.png" width="100"/>
                                                    </a>
                                                </li>
                                                <a href="currency.php">
                                                     	<img src="img/A200-Drone.png" width="100"/>
                                                    </a>
                                                </li>
                                                
                                                <!--<li>                                        	
                                                    <a href="#">
                                                        <img src="content/menu/menu/scanners.png" width="100"/>
                                                    </a>
                                                </li> -->
                                                <!--<li>                                        	
                                                    <a href="#">
                                                     	<img src="content/menu/menu/antinna.png" width="100"/>
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </div>
                                        
                                      
                                        
                                    </div>
                                </li>
                                <li><a href="advertising.php">Services</a></li>
                                <li><a href="solution.php">Careers</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="careers.php">Contact</a></li>
						
                                								
                            </ul>
                        </nav>	
                    </div><!-- end .span9 -->
                </div><!-- end .row -->		
            </div><!-- end .container -->
        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        </div><!-- end #header -->
		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	   
        <div class="gfg" style="background-color:black; "> 
        <video autoplay muted loop id="myVideo" style="width:100%;height:100%;opacity:0.4">
          <source src="img/video2.mp4" type="video/mp4" >
          </video>

	    				<h2 class='h2first animate' style="color: white;font-weight: 700">Automicrouas</h2>
                        <p class='pfirst animate'>Capture memories with us</p>
	    				
	    				
        
        
    </div> 
        
            </div><!-- fullwidthbanner-container -->
            


            
                      
            <!----------------------------------------------------------------------------------------------------------------------------------------->
            
            
            <?php include 'aboutus.php';?>
            
            
            
            
            
            
            <!--------------------------------------------------------------------------------------------------------------------------------------------------->
            
            
            <div class="container">
            	<div class="row">
                	<div class="span12">
                    
                        <div class="portfolio-filter">
                    
                            
                            
                        </div><!-- end .portfolio-filter -->
                        
                    </div><!-- end .span12 -->                        
                </div><!-- end .row -->
            </div><!-- end .container -->
            
            
            
            
            
            
                     <?php include 'product.php';?>
                     <?php include 'ourteam.php';?>
                     
                     
            
            
            
            <!-- end .contaner -->
            
            <!-- end .contaner -->
            
            
            
                        <div class="container">
                            <div class="row">
                                <div class="span12">
                                    
                                    <div class="clients-slider">
                                        
                                       <marquee  loop="true">
                                        
                                                <img id="scroll" src="img/A200-Drone.png" alt="Logo">
                                            
                                                <img id="scroll" src="img/A400-Drone.png"  alt="Logo">
                                            
                                                <img id="scroll" src=" img/A400MaxDrone.png"  alt="Logo">
                                           
                                                <img id="scroll" src="img/A410-column.png " alt="Logo">
                                            
                                                <img id="scroll" src=" img/AT-15.png"  alt="Logo">
                                            
                                                <img id="scroll" src="img/cygnus.png "  alt="Logo">
                                            
                                                
                                         </marquee>
                                        
                                    </div>
                                    
                                </div><!-- end .span12 -->
                            </div><!-- end .row -->
                        </div><!-- end .container -->
            
            	</div><!-- end .fullwidth-section -->
                	
            </div><!-- end .fullwidth-section-content -->
        
            
            
            
            
            <?php include 'contact.php';?>
            <?php include 'footer.php';?>
		
		
            
		<!-- /// FOOTER-TOP     ///////////////////////////////////////////////////////////////////////////////////////////////// -->	
		
			
    
    <a id="back-to-top" href="#">
    	<i class="ifc-up4"></i>
    </a>


<script type="text/javascript">
    $(window).load(function () {
        $("#s1").endlessScroll({ 
		width: '100%', 
		height: '100px', 
		steps: -2, speed: 40, 
		mousestop: true });
        $("#s2").endlessScroll({ 
		width: '700px', 
		height: '26px', 
		steps: -2, 
		speed: 40, 
		mousestop: false });
    });
</script>

    <!-- /// jQuery ////////  -->
	<script src="assets/vendors/jquery-2.1.3.min.js"></script>

    <!-- /// ViewPort ////////  -->
	<script src="assets/vendors/viewport/jquery.viewport.js"></script>
    
    <!-- /// Easing ////////  -->
	<script src="assets/vendors/easing/jquery.easing.1.3.js"></script>

    <!-- /// SimplePlaceholder ////////  -->
	<script src="assets/vendors/simpleplaceholder/jquery.simpleplaceholder.js"></script>

    <!-- /// Fitvids ////////  -->
    <script src="assets/vendors/fitvids/jquery.fitvids.js"></script>
    
    <!-- /// Animations ////////  -->
    <script src="assets/vendors/animations/animate.js"></script>
     
    <!-- /// Superfish Menu ////////  -->
	<script src="assets/vendors/superfish/hoverIntent.js"></script>
    <script src="assets/vendors/superfish/superfish.js"></script>
    
    <!-- /// Revolution Slider ////////  -->
    <script src="assets/vendors/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/vendors/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- /// bxSlider ////////  -->
	<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    
   	<!-- /// Magnific Popup ////////  -->
	<script src="assets/vendors/magnificpopup/jquery.magnific-popup.min.js"></script>
    
    <!-- /// Isotope ////////  -->
	<script src="assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    
    <!-- /// Parallax ////////  -->
	<script src="assets/vendors/parallax/jquery.parallax.min.js"></script>

	<!-- /// EasyPieChart ////////  -->
	<script src="assets/vendors/easypiechart/jquery.easypiechart.min.js"></script>
    
	<!-- /// YTPlayer ////////  -->
	<script src="assets/vendors/itplayer/jquery.mb.YTPlayer.js"></script>
	
    <!-- /// Easy Tabs ////////  -->
    <script src="assets/vendors/easytabs/jquery.easytabs.min.js"></script>	
    
    <!-- /// Form validate ////////  -->
    <script src="assets/vendors/jqueryvalidate/jquery.validate.min.js"></script>
    
	<!-- /// Form submit ////////  -->
    <script src="assets/vendors/jqueryform/jquery.form.min.js"></script>
    
    <!-- /// gMap ////////  -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="assets/vendors/gmap/jquery.gmap.min.js"></script>

	
	
	<!-- /// Custom JS ////////  -->
    <script src="assets/js/main.js"></script>	
    
    <script src="js/custom.js"></script>	
    
    <!-- /// Style Switcher ////////  -->
   

</body>


</html>