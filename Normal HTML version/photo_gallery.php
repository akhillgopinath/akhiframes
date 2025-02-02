<?php

// This function automatically makes an image gallery.
// You just need to call it from where you want eg: echo make_gal('path to image folder/','width','height','crop 1 or 0');
// remember to have the folder cache in your root and have the folder permissions to 755
						
function make_gal($images, $width, $height, $crop) {

if ($handle = opendir($images)) {
   while (false !== ($file = readdir($handle))) {
       if ($file != "." && $file != ".." ) {
           $files[] = $file;
       }
   }
   closedir($handle);
}
	$gal = '<ul class="photo_gallery">';
	foreach($files as $file) {
		$gal .=  '<li><a href="'.$images.$file.'" data-rel="prettyPhoto"><img src="php_helpers/timthumb.php?src=../'.$images.$file.'&amp;w='.$width.'&amp;h='.$height.'&amp;zc='.$crop.'" alt=""></a></li>';
	}
	$gal .=  '</ul>'; 
	
	return $gal;
}
?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Photo Gallery | EKHO Template</title>
<meta charset="utf-8">
<meta name="keywords" content="premium html template, unique fullscreen template" />
<meta name="description" content="EKHO is a unique premium HTML fullscreen template" />

<!-- Css Start. If you want to have compressed/minified css, comment the lines below -->
<link rel="stylesheet" href="css/base.css" type="text/css" />
<link rel="stylesheet" href="css/skeleton.css" type="text/css" />
<link rel="stylesheet" href="css/template.css" type="text/css" />
<link rel="stylesheet" href="css/custom.css" type="text/css" />

<link rel="stylesheet" href="css/social_icons.css" type="text/css" />
<link rel="stylesheet" href="css/superfish.css" type="text/css" />

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font" />
<link rel="stylesheet" href="css/style.css" type="text/css" />

<!-- COMPRESSED CSS - This will speed up the website.
<link rel="stylesheet" href="css/template.css.php?src=base-skeleton-template-custom-social_icons-superfish-style" type="text/css" />
-->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js">\x3C/script>')</script>
<script src="js/jquery.noconflict.js" type="text/javascript"></script>

<script src="js/ekho_scripts.js" type="text/javascript"></script><!-- custom scripts file -->
<script src="js/modernizr.js" type="text/javascript"></script><!-- jquery modernizr -->

<link rel="shortcut icon" href="images/favicons/favicon.png">
<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="css/fixes.css" />
<![endif]-->


<!-- Facebook OpenGraph Tags - Replace with your own-->
    <meta name="og:title" content="EKHO Template HTML"/>
    <meta name="og:type" content="website"/>
    <meta name="og:url" content="http://www.hogash.com/demo/ekho_html/"/>
    <meta name="og:image" content="http://www.hogash.com/demo/ekho_html/images/logo.png"/>
    <meta name="og:site_name" content="EkhoTemplate"/>
    <meta name="fb:app_id" content=""/> <!-- PUT HERE YOUR OWN APP ID - you could get errors if you use this one -->
    <meta name="og:description" content="This is EKHO, an awesome fullscreen template built for websites which need a fancy, out of the ordinary look."/>
<!-- END Facebook OpenGraph Tags -->

</head>

<body class="dark header-vertical">
    <!-- ADD AN APPLICATION ID !!
    If you want to know how to find out your app id, either search on google for: facebook appid, either go to http://rieglerova.net/how-to-get-a-facebook-app-id/ -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId="; // addyour appId here
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
        
    <div id="page_wrapper">
    
    	<div id="gradient"></div><!-- gradient background -->
        
        <div id="background"></div><!-- end background -->
        
        <div id="header" class="vertical" data-type="vertical">
        
        	<!-- logo -->
            <a href="index.html" title="Ekho Template" id="logo"></a>
            
            <!-- menu -->
            <div id="menu">
                <ul class="jt-menu clearfix">
                    <li>
                        <a href="index.html"><span class="spn">HOME</span></a>
                        <ul>
                            <li><a href="index.html"><span class="spn">Static Image w/ Featured boxes</span></a></li>
                            <li><a href="home_video_background_featured_boxes.html"><span class="spn">Video background w/ Featured boxes</span></a></li>
                            <li><a href="home_youtube_background_featured_boxes.html"><span class="spn">Youtube background w/ Featured boxes</span></a></li>
                            <li><a href="home_simple_slideshow_featured_boxes.html"><span class="spn">Simple slideshow w/ Featured boxes</span></a></li>
                            <li><a href="home_google_map_featured_boxes.html"><span class="spn">Google Map w/ Featured boxes</span></a></li>
                            <li><a href="home_simple_image_square_boxes.html"><span class="spn">Simple image w/ Square Boxes</span></a></li>
                            <li><a href="home_simple_image_audio_player.html"><span class="spn">Simple image with Audio Player</span></a></li>
                            <li><a href="home_simple_image_intro_article.html"><span class="spn">Intro article /w Simple image</span></a></li>
							<li><a href="home_static_image.html"><span class="spn">Static Image</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about_us.html"><span class="spn">ABOUT US</span></a></li>
                    <li><a href="#"><span class="spn">SLIDERS</span></a>
                        <ul>
                            <li><a href="#"><span class="spn">Fullscreen Sliders</span></a>
                                <ul>
                                    <li><a href="slider_ffslider.html"><span class="spn">FF Slider</span></a></li>
                                    <li><a href="slider_supersized.html"><span class="spn">Supersized Slideshow</span></a></li>
                                    <li><a href="slider_grid_gallery.html"><span class="spn">jQuery Grid Gallery</span></a></li>
                                    <li><a href="slider_sideways.html"><span class="spn">Sideways Gallery</span></a></li>
                                    <li><a href="slider_sequence.html"><span class="spn">Sequence Slider</span></a></li>
                                    <li><a href="slider_async.html"><span class="spn">Async Slider</span></a></li>
                                    <li><a href="slider_impressjs.html"><span class="spn">ImpressJs Slider</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="spn">Normal sliders</span></a>
                                <ul>
                                    <li><a href="slider_flexslider.html"><span class="spn">Flex Slider</span></a></li>
                                    <li><a href="slider_nivoslider.html"><span class="spn">Nivo Slider</span></a></li>
                                    <li><a href="slider_wowslider_blast.html" ><span class="spn">Wow Slider</span></a>
                                        <ul>
                                            <li><a href="slider_wowslider_blast.html"><span class="spn">Wow Slider - Blast</span></a></li>
                                            <li><a href="slider_wowslider_blinds.html"><span class="spn">Wow Slider - Blinds</span></a></li>
                                            <li><a href="slider_wowslider_fly.html"><span class="spn">Wow Slider - Fly</span></a></li>
                                            <li><a href="slider_wowslider_blur.html"><span class="spn">Wow Slider - Blur</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="slider_3dportfolio.html"><span class="spn">3D Portfolio carousel</span></a></li>
                                    <li><a href="slider_piecemaker.html"><span class="spn">Piecemaker 3D</span></a></li>
                                    <li><a href="slider_in_content_page.html"><span class="spn">Slider in content page</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="spn">FEATURES</span></a>
                        <ul>
                            <li><a href="#"><span class="spn">PrettyPhoto (Lightbox)</span></a>
                                <ul>
                                    <li><a class="prettyphoto_link" href="http://themeforest.net/?iframe=true&amp;width=700&amp;height=450"><span class="spn">PrettyPhoto (open iframe)</span></a></li>
                                    <li><a class="prettyphoto_link" href="images/super_cool_ad.jpg"><span class="spn">PrettyPhoto (openimage)</span></a></li>
                                    <li><a class="prettyphoto_link" href="http://www.youtube.com/watch?v=G-1HNnxb0WE"><span class="spn">PrettyPhoto (open youtube)</span></a></li>
                                    <li><a href="prettyphoto_autopopup.html"><span class="spn">Auto Pop-up</span></a></li>
                                </ul>
                            </li>
                            <li><a href="photo_gallery.php"><span class="spn">Photo Gallery</span></a></li>
                            <li><a href="grid_positions.html"><span class="spn">Grid Positions</span></a></li>
                            <li><a href="#"><span class="spn">Portfolio</span></a>
                                <ul>
                                    <li><a href="#"><span class="spn">Category Layout</span></a>
                                        <ul>
                                            <li><a href="portfolio_simple_onecolumn.html"><span class="spn">One Column</span></a></li>
                                            <li><a href="portfolio_simple_twocolumns.html"><span class="spn">Two Columns</span></a></li>
                                            <li><a href="portfolio_simple_threecolumns.html"><span class="spn">Three Columns</span></a></li>
                                            <li><a href="portfolio_simple_fourcolumns.html"><span class="spn">Four Columns</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio_sortable.html"><span class="spn">Sortable Layout</span></a></li>
                                    <li><a href="portfolio_carousels.html"><span class="spn">Carousels Layout</span></a></li>
                                 </ul>
                            </li>
                            <li><a href="blog.html"><span class="spn">Blog</span></a></li>
                            <li><a href="faq.html"><span class="spn">FAQ Page</span></a></li>
                            <li><a href="sitemap.html"><span class="spn">Sitemap</span></a></li>
                            <li><a href="start_minimized.html"><span class="spn">Start minimized</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="spn">PAGES</span></a>
                        <ul>
                            <li><a href="pages_full_width_page.html"><span class="spn">Full width page</span></a></li>
                            <li><a href="pages_left_sidebar.html"><span class="spn">Left Sidebar</span></a></li>
                            <li><a href="pages_right_sidebar.html"><span class="spn">Right Sidebar</span></a></li>
                            <li><a href="pages_historic.html"><span class="spn">Historic</span></a></li>
                            <li><a href="pages_offline.html"><span class="spn">Offline Page</span></a></li>
                            <li><a href="pages_404.html"><span class="spn">404 Error Page</span></a></li>
                            <li><a href="portfolio_item.html"><span class="spn">Portfolio Item Page</span></a></li>
                            <li><a href="blog_item.html"><span class="spn">Blog Item Page</span></a></li>
                            <li><a href="pages_product.html"><span class="spn">Product Page</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="spn">STYLES</span></a>
                        <ul>
                            <li><a href="styles_typography.html"><span class="spn">Typography</span></a></li>
                            <li><a href="styles_table_designs.html"><span class="spn">Table Designs</span></a></li>
                            <li><a href="styles_button_designs.html"><span class="spn">Button designs</span></a></li>
                            <li><a href="styles_pricing_tables.html"><span class="spn">Pricing tables</span></a></li>
                            <li><a href="styles_form_styles.html"><span class="spn">Form Styles</span></a></li>
                            <li><a href="styles_tabs_designs.html"><span class="spn">Tabs designs</span></a></li>
                            <li><a href="styles_accordions_toggles.html"><span class="spn">Accordion &amp; Toggles</span></a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html"><span class="spn">CONTACT</span></a></li>
                </ul>
            </div><!--end menu -->
            <div class="clear"></div>
            
            <!-- search -->
            <div id="search">
                <form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)" target="_blank">
                    <div class="search">
                        <input name="q" type="hidden" />
                        <input name="qfront" maxlength="20" class="inputbox" type="text" size="20" value="SEARCH ..." onblur="if (this.value=='') this.value='SEARCH ...';" onfocus="if (this.value=='SEARCH ...') this.value='';" />
                        <input type="submit" value="go" class="button"/>
                    </div>
                </form>
            </div><!-- end search -->
                        
            <!-- social icons -->
            <div id="social_icons">
                <ul class="social_icons colorWhite">
                    <li><a href="#" target="_blank" rel="nofollow" title="Facebook" class="social_iconF">F</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Twitter" class="social_iconL">L</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Dribbble" class="social_iconD">D</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Pinterest" class="social_iconPin">{</a></li>
            <!-- UNCOMMENT AN ICON BELOW -->
            <!--
                    <li><a href="#" target="_blank" rel="nofollow" title="Amazon" class="social_iconA">A</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Bebo" class="social_iconB">B</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="AppStore" class="social_iconC">C</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Behance" class="social_iconE">E</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Github" class="social_iconG">G</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Skype" class="social_iconH">H</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Linkedin" class="social_iconI">I</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Deviantart" class="social_iconJ">J</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Bing" class="social_iconK">K</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Myspace" class="social_iconM">M</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Flickr" class="social_iconN">N</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Tumblr" class="social_iconO">O</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Paypal" class="social_iconP">P</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Quora" class="social_iconQ">Q</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="RSS" class="social_iconR">R</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Stumble Upon" class="social_iconS">S</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Twitter" class="social_iconT">T</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Blogger" class="social_iconU">U</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Vimeo" class="social_iconV">V</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Wordpress" class="social_iconW">W</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Youtube" class="social_iconX">X</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Yahoo!" class="social_iconY">Y</a></li>
                    <li><a href="#" target="_blank" rel="nofollow" title="Google Plus" class="social_iconGpl">}</a></li>
            -->
                </ul>
            </div><!-- end social_icons -->
            <div class="clear"></div>

        </div><!-- end header -->
        
        <div id="main" class="container">
            <a href="#" id="mainClose" class="maximized" data-rel="tipsye" title="Minimize"></a>
            <div class="inner-container">
            	
                <div id="breadcrumbs" class="row">
                    <div class="breadcrumb ten columns omega">
                    	<div class="breadcrumbs">
                    		<a href="index.html" class="pathway isHome ">Home</a>
                            <span class="brd_separator">/</span>
                            <span>FEATURES</span>
                            <span class="brd_separator">/</span>
                            <span>PHOTO GALLERY</span>
                        </div>
                    </div><!-- end breadcrumbs -->
                    <div class="thedate six columns alpha">
                    	<span id="current-date"></span>
                    </div>
                    <div class="clear"></div>
                </div><!-- end breadcrumbs -->
                                    
                <div class="row">
                
                    <div class="sixteen noSidebars columns">
                        <div id="mainbody">
                            <div class="item-page ">
                                <h2>PHOTO GALLERY</h2>
                                
                                <h2>First gallery (dinamically created with php - only for images)</h2>
                                <p>This gallery it's generated by php, reading all (and only) the images within a certain folder you define.</p>
                                <?php
                                // make_gal('path to image folder/','width','height','crop 1 or 0');
                                
                                echo make_gal('images/gallery/first/','155','115','0');
                                ?>
                                
                                <h2>Second gallery - contains both photos and videos</h2>
                                <p>This gallery is manually created with simple html tags, but with some php helpers like timthumb (for creating thumbnails) and player.php to add iframe'd flv videos</p>
                                
                                <!-- The "addcaption" class is a trigger to captionize the thumbnails -->
                                <ul class="photo_gallery addcaption">
                                    <!-- to add a photo icon, add the class "photo" -->
                                    <!-- as you can see the image's src are added with the help of timthumb.php to create the thumbnails -->
                                    <li><a data-rel="prettyPhoto" href="images/gallery/second/1336635_63765576.jpg" title="Simple Image">
                                        <img alt="" src="php_helpers/timthumb.php?src=../images/gallery/second/1336635_63765576.jpg&amp;w=155&amp;h=115&amp;zc=0"></a></li>
                                        
                                    <!-- to add a video icon, add the class "video" -->
                                    <li><a data-rel="prettyPhoto[flash]" href="images/flv/sample.swf?width=620&amp;height=375" title="Flash Media">
                                        <img alt="" src="php_helpers/timthumb.php?src=../images/gallery/second/1336342_22583242.jpg&amp;w=155&amp;h=115&amp;zc=0"></a></li>
                                    
                                    <li><a data-rel="prettyPhoto[iframes]" href="php_helpers/player.php?video=../images/flv/animation.flv&amp;iframe=true&amp;width=620&amp;height=375" title="FLV Video">
                                        <img alt="" src="php_helpers/timthumb.php?src=../images/gallery/second/1336882_90276791.jpg&amp;w=155&amp;h=115&amp;zc=0"></a></li>
                                    
                                    <li><a data-rel="prettyPhoto" href="http://www.youtube.com/watch?v=OHUpQZIylVc" title="YouTube Video">
                                        <img alt="" src="php_helpers/timthumb.php?src=../images/gallery/second/1336633_65751997.jpg&amp;w=155&amp;h=115&amp;zc=0"></a></li>
                                        
                                    <li><a data-rel="prettyPhoto" href="http://vimeo.com/5233789" title="Vimeo Video">
                                        <img alt="" src="php_helpers/timthumb.php?src=../images/gallery/second/1336338_84064705.jpg&amp;w=155&amp;h=115&amp;zc=0"></a></li>
                                </ul>
                                
                            </div><!-- end item-page-->
                        </div><!-- end mainbody -->
                    </div>
                
                </div><!-- end row -->
            </div>
        </div><!-- end main -->
        <div class="footerFix"></div><!-- FooterFix (needed for properly rendering the #main div) -->
        
        
		<!-- social sharing -->
        <div id="social_sharing">
            <ul class="social-connect clearfix">
                <li class="fb_like_button">
                    <div class="bg_over"></div>
                    <div class="inner">
                        <div class="fb-like" data-href="http://www.hogash.com/demo/ekho_html/" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false" data-font="arial"></div>
                    </div>    
                </li><!-- end FB Like button  -->
            
                <li class="tweetme">
                    <div class="bg_over"></div>
                    <div class="inner">
                        <a href="http://twitter.com/share" class="twitter-share-button" data-text="Check out this great new #html #template" data-via="hogash" data-url="http://hogash.com/demo/ekho_html/" data-count="horizontal" >Tweet</a>
                        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                    </div>
                </li><!-- end tweet button -->
            
                <li class="gplus">
                    <div class="bg_over"></div>
                    <div class="inner">
                        <script type="text/javascript">
                        (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                        })();
                        </script>
                        <div class="g-plusone" data-size="medium"></div>
                    </div>
                </li><!-- end gplus -->
            </ul>
            <div class="clear"></div>
        </div>
        
        <!-- footer -->
        <div id="footer">
            <div id="footer1" style="" data-align="left">
                <div class="inner">
                    <div class="mod-languages">
                        <ul class="lang-inline">
                            <li>
                                <a href="#" title="German (Fake Flag link for demo purposes)" data-rel="tipsy">
                                    <img src="images/language_flags/de.gif" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" data-rel="tipsy" title="French (Fake Flag link for demo purposes)">
                                    <img src="images/language_flags/fr.gif" alt="" /> 
                                </a>
                            </li>
                            <li class="lang-active">
                                <a href="#" data-rel="tipsy" title="English (Fake Flag link for demo purposes)">
                                    <img src="images/language_flags/en.gif" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- end @footer1 -->
            
            <div id="footer2" style="" data-align="left">
                <div class="inner">
                    <div class="bghelper">
                        <div class="modulecontent copyright">
                            <div class="custom"  >
                                <p>&copy; 2012 hogash.com - EKHO Premium Template. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end #footer2 -->
            
            <div id="footer3" style="" data-align="right">
                <div class="inner">
                    <div id="newsletter_form" class="iconWidget">
                        <a href="#" class="iconWidgetIcon">JOIN OUR MAILING LIST</a>
                        <div class="iconWidgetContainer">
                            <a href="#" class="closeIconWidget"></a>
                        
                            <h4 class="title"><span>JOIN OUR MAILING LIST</span></h4>
                            <span id="result">* it really works! Mailchimp Integration.</span>
                            <form method="post" id="newsletter_subscribe" name="newsletter_form" action="">
                                <div>
                                    <label for="user_mail">Your mail*</label>
                                    <input type="text" id="user_mail" name="email" maxlength="127" size="10">
                                </div>
                                <div>
                                    <label for="user_name">Your name</label>
                                    <input type="text" id="user_name" name="yname" maxlength="127" size="10">
                                </div>
                                <div>
                                    <input type="submit" class="btn" value="Subscribe">
                                </div>
                            </form>
                        </div><!-- end iconWidgetContainer -->
                    </div><!-- end iconWidget // newsletter_form -->
                </div>
            </div><!-- end #footer3 -->
            
            <div id="footer4" style="" data-align="right">
                <div class="inner">
                    <div id="contact_details" class="iconWidget">
                        <a href="#" class="iconWidgetIcon" style="">GET IN TOUCH</a>
                        <div class="iconWidgetContainer">
                            <a href="#" class="closeIconWidget"></a>
                            <h4 class="title"><span>GET IN TOUCH</span></h4>
                            <div class="contact_details">
                                <p>Your Company LTD<br />Street nr 100, 4536534, Chicago, US<br />T (212) 555 55 00</p>
                                <p>Email:&nbsp;<a href="mailto:sales@yourwebsite.com">sales@yourwebsite.com</a><br />Skype: your.business</p>
                                <a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;sll=40.703774,-73.948932&amp;sspn=0.010454,0.032637&amp;ie=UTF8&amp;hq=&amp;spn=0.020917,0.065274&amp;t=r&amp;z=13&amp;iwloc=A&amp;output=embed?iframe=true&amp;width=640&amp;height=480" data-rel="prettyPhoto" class="hoverLink" data-type="image"><img src="images/contact_map.jpg" alt="" /></a>
                            </div><!-- end contact_details -->
                        </div><!-- end iconWidgetContainer -->
                    </div><!-- end contact_details // newsletter_form -->
                </div>
            </div><!-- end #footer4 -->
        </div>

        
        <!-- live comments panel -->
        <div id="live_comments">
            <div id="livesocial" class="livesocial">
                <ul class="triggers">
                    <li class="facebook">Facebook Live Comments</li>
                    <li class="separator"></li>
                    <li class="tweets">Tweets</li>
                </ul><!-- end triggers buttons -->
                
                <div class="liveSocialContainer">
                    <a href="#" class="closeIconWidget"></a>
                    
                    <div class="facebook_comments both">
                        <div class="fb-comments" data-href="http://www.hogash.com/demo/ekho_html/" data-num-posts="2" data-width="400" data-colorscheme="dark"></div>
                    </div><!-- fb comments -->
                
                    <div class="twitter">
                        <div class="tweets" id="twitterFeed"><small>Please wait whilst our latest tweets load</small></div>
                    </div><!-- end twitter -->
                </div><!-- end liveSocialContainer -->
            </div><!-- end livesocial -->
        </div><!-- end live comments --> 
        
        
    </div><!-- end page_wrapper -->
	
    <!-- Start Backstretch full-background code -->
    <script type = "text/javascript" src="js/jquery.backstretch.min.js"></script>
	<script type="text/javascript">
    (function($){
		// trigger the Fullscreen background
        $.backstretch("images/bg1.jpg");
    })(jQuery);
	</script><!-- End Backstretch full-background code -->
	
    <!-- Load JS Files -->
	<div id="demo"></div>

<!-- superfish menu -->
<script type = "text/javascript" src="js/superfish.min.js"></script>
<script type = "text/javascript" src="js/supersubs.min.js"></script>
<!-- end superfish menu -->
    
<!-- prettyphoto scripts & styles -->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    jQuery("a[data-rel^='prettyPhoto'], a[rel^='prettyPhoto'], .prettyphoto_link").prettyPhoto({
        theme:'pp_ekho',
		social_tools:false
    });
});
</script>
<!--end prettyphoto -->

<!-- tipsy scripts & styles -->
<link rel="stylesheet" href="css/tipsy.css" type="text/css" />
<script type="text/javascript" src="js/jquery.tipsy.min.js"></script>
<script type="text/javascript">
    (function($){ $('a[data-rel=tipsy]').tipsy({fade: true, gravity: 'sw',opacity: 0.9}); $('a[data-rel=tipsye]').tipsy({gravity: 'e',opacity: 0.9});})(jQuery);
</script>
<!--end tipsy -->
    
<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script><!-- jquery easing -->

<script src="js/twitterFetcher_v10_min.js" type="text/javascript"></script>
<!-- This is the twitter feed. Unless you know what you're doing, try leaving intact. If you don't want twitter to appear on your website, delete #twitterFeed and it's script in ekho_scripts.js at line 59  -->
	
</body>
</html>