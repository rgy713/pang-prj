<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
	<?php echo GetHeader(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
<!--    font change (modified panda)-->
    <link rel="stylesheet" href="css/font-Poppins.css">

    <link rel="stylesheet" href="css/jquery.easy-pie-chart.css">
    <link rel="stylesheet" href="css/styles.css" title="mainStyle">
	<link rel="stylesheet" id="avada-stylesheet-css" href="css/style.min.css?ver=5.4.2" type="text/css" media="all">
    <link rel='stylesheet' id='fusion-dynamic-css-css'  href='css/fusion-460.css?timestamp=1524097648&#038;ver=4.9.5' type='text/css' media='all' />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
 <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.custom.32033.js"></script>
   <script src="js/modernizr.custom.32033.js"></script>
    <!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   
    <!-- Wrap all page content here -->
    <div id="wrap" class="home">



		
		
				<header class="fusion-header-wrapper">
				<div class="fusion-header-v1 fusion-logo-left fusion-sticky-menu-1 fusion-sticky-logo-1 fusion-mobile-logo-  fusion-mobile-menu-design-modern" style="background:none">
				<div class="fusion-header-sticky-height" style="height: 118px; display: none; overflow: visible;"></div>
				<div class="fusion-header" style="height: 118px; overflow: visible;background:none">
				<div class="fusion-row" style="padding-top: 0px; padding-bottom: 0px;">
				<div class="fusion-logo" data-margin-top="31px" data-margin-bottom="31px" data-margin-left="0px" data-margin-right="0px" style="margin-top: 31px; margin-bottom: 31px;">
				<a class="fusion-logo-link" href="#">

						<!-- standard logo -->
			<img src="templates/default/images/logo-jae.png" srcset="templates/default/images/logo-jae.png" width="128" height="128" alt="HashPets Logo" retina_logo_url="" class="fusion-standard-logo">

			
					</a>
		</div>		
		

		<nav class="fusion-main-menu" aria-label="Main Menu" id="main_nav">
		<ul role="menubar" id="menu-main-menu" class="fusion-menu">
		<?php $dosql->Execute("SELECT * FROM `#@__nav` WHERE parentid=1");
				while($rownav = $dosql->GetArray())
				{
					?>
		<li role="menuitem" id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81">
            <a href="<?php echo $rownav['linkurl']; ?>" class="fusion-bar-highlight" style="line-height: 104px; height: 107px;">
                <!--    the font bigger in the menu     (modified by panda)     		-->
                <span class="menu-text" style="font-size: 18px;"><?php echo $rownav['classname']; ?></span>
            </a>
        </li>
				<?php
				}
				?>



</ul></nav>
<!--
<nav class="fusion-main-menu fusion-sticky-menu" aria-label="Main Menu Sticky"><ul role="menubar" id="menu-main-menu-1" class="fusion-menu"><li role="menuitem" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a href="#Overview" class="fusion-bar-highlight" style="line-height: 104px; height: 107px;"><span class="menu-text">Atonomi Overview</span></a></li><li role="menuitem" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-83"><a href="#Solution" class="fusion-bar-highlight" style="line-height: 104px; height: 107px;"><span class="menu-text">Our Solution</span></a></li><li role="menuitem" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82"><a href="#About-Us" class="fusion-bar-highlight" style="line-height: 104px; height: 107px;"><span class="menu-text">Leadership</span></a></li><li role="menuitem" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-753"><a href="https://atonomi.io/news/" class="fusion-bar-highlight" style="line-height: 104px; height: 107px;"><span class="menu-text">News</span></a></li><li role="menuitem" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-958"><a href="https://atonomi.io/sign-up/" class="fusion-bar-highlight" style="line-height: 104px; height: 107px;"><span class="menu-text">Contact Us</span></a></li><li class="fusion-custom-menu-item fusion-main-menu-search fusion-last-menu-item"><a class="fusion-main-menu-icon fusion-bar-highlight" href="#" aria-hidden="true" aria-label="Search" data-title="Search" title="Search" style="line-height: 104px; height: 107px;"></a><div class="fusion-custom-menu-item-contents"><form role="search" class="searchform" method="get" action="https://atonomi.io/">
	<div class="search-table">
		<div class="search-field">
			<input type="text" value="" name="s" class="s" placeholder="Search ..." required="" aria-required="true" aria-label="Search ...">
		</div>
		<div class="search-button">
			<input type="submit" class="searchsubmit" value="">
		</div>
	</div>
</form>
</div></li></ul></nav>		
-->

		<div class="fusion-mobile-menu-icons">
		<a href="#" class="fusion-icon fusion-icon-bars" aria-label="Toggle mobile menu" id="but"></a>
		</div>


		<nav class="fusion-mobile-nav-holder fusion-mobile-menu-text-align-left" id="exPara">
		<ul role="menubar" id="mobile-menu-main-menu" class="fusion-menu">
		<?php $dosql->Execute("SELECT * FROM `#@__nav` WHERE parentid=1");
				while($rownav = $dosql->GetArray())
				{
					?>
		<?php //$rownav = $dosql->GetOne("SELECT * FROM `#@__nav` WHERE  `parentid`=1");?>
	

		<li role="menuitem" id="mobile-menu-item-81" class="fusion-mobile-nav-item" style=""><a href="<?php echo $rownav['linkurl']; ?>" class="fusion-bar-highlight"><span class="menu-text"><?php echo $rownav['classname']; ?></span></a></li>
				<?php
				}
				?>		
		</ul>
		</nav>
		
		<script>
$("#but").click(function(){  
            if($("#exPara").css("display")=="none"){  
                $("#exPara").show();  
            }else{  
                $("#exPara").hide();  
            }  
        });  
		
</script>
		
		</div>
		</div>
		</div>
		<div class="fusion-clearfix"></div>
		</header>
			
				
				
		<div id="videoHeightControl" class="fusion-fullwidth fullwidth-box fusion-blend-mode video-background hundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color: rgba(45,62,72,0.5);background-position: center top;background-repeat: no-repeat;">
		<div class="fullwidth-video-image" style="background-image:url(/uploads/image/CENTRI_hero-video_mobile-2.jpg);background-position:center;background-size: cover;background-repeat: no-repeat;"></div>
		<div class="fullwidth-video">
         <!--4 video trimmed correct (modified by panda)-->
		 <video preload="auto" autoplay="" loop="" muted=""><source src="/uploads/image/landing_page_video.mp4" type="video/mp4"></video>
		</div>
		
		<div class="fullwidth-overlay" style="background-color:rgba(45,62,72,0.5);"></div>
		<div class="fusion-builder-row fusion-row ">
		<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-last 1_1" style="margin-top:0px;margin-bottom:20px;">
					<div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
						<div class="fusion-menu-anchor" id="Atonomi"></div>
						<div class="fusion-clearfix"></div>

					</div>
				</div>
				
		 <div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-firstest fusion-column-last 1_1" style="margin-top:200px;margin-bottom:0px;">
		<div class="fusion-column-wrapper" style="padding: 50px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
		<div class="fusion-text"><h2 style="text-align: center; color: #ffffff; font-size: 50px; margin-bottom: 10px;"><?php echo $cfg_seotitle; ?></h2>
		<h2 class="smalltitle" style="text-align: center; color: #ffffff; font-size: 33px; margin-bottom: 40px;"><?php echo $cfg_keyword; ?> </h2>
		</div>

		<div class="fusion-builder-row fusion-builder-row-inner fusion-row "><div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_4  fusion-one-fourth fusion-column-first 1_4" style="margin-top: 0px;margin-bottom: 20px;width:25%;width:calc(25% - ( ( 4% + 4% + 4% ) * 0.25 ) );margin-right:4%;">
		<div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
		</div>
		</div>
				
		<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_4  fusion-one-fourth 1_4" style="margin-top: 0px;margin-bottom: 25px;width:25%;width:calc(25% - ( ( 4% + 4% + 4% ) * 0.25 ) );margin-right:4%;">
		<div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
		
		<div class="fusion-button-wrapper fusion-alignright">
		<style type="text/css" scoped="scoped">
		.fusion-button.button-1 .fusion-button-text, .fusion-button.button-1 i {color:#fff;}.fusion-button.button-1 {border-width:2px;border-color:#fff;}.fusion-button.button-1 .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-1:hover .fusion-button-text, .fusion-button.button-1:hover i,.fusion-button.button-1:focus .fusion-button-text, .fusion-button.button-1:focus i,.fusion-button.button-1:active .fusion-button-text, .fusion-button.button-1:active{color:#ffffff;}.fusion-button.button-1:hover, .fusion-button.button-1:focus, .fusion-button.button-1:active{border-width:2px;border-color:#ffffff;}.fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:active .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-1{background: rgba(45,62,72,0.15);
		background-image: -webkit-gradient( linear, left bottom, left top, from( rgba(45,62,72,0.5) ), to( rgba(45,62,72,0.15) ) );
		background-image: -webkit-linear-gradient( bottom, rgba(45,62,72,0.5), rgba(45,62,72,0.15) );
		background-image:   -moz-linear-gradient( bottom, rgba(45,62,72,0.5), rgba(45,62,72,0.15) );
		background-image:     -o-linear-gradient( bottom, rgba(45,62,72,0.5), rgba(45,62,72,0.15) );
		background-image: linear-gradient( to top, rgba(45,62,72,0.5), rgba(45,62,72,0.15) );}.fusion-button.button-1:hover,.button-1:focus,.fusion-button.button-1:active{background: rgba(45,62,72,0.5);
		background-image: -webkit-gradient( linear, left bottom, left top, from( rgba(45,62,72,0.66) ), to( rgba(45,62,72,0.5) ) );
		background-image: -webkit-linear-gradient( bottom, rgba(45,62,72,0.66), rgba(45,62,72,0.5) );
		background-image:   -moz-linear-gradient( bottom, rgba(45,62,72,0.66), rgba(45,62,72,0.5) );
		background-image:     -o-linear-gradient( bottom, rgba(45,62,72,0.66), rgba(45,62,72,0.5) );
		background-image: linear-gradient( to top, rgba(45,62,72,0.66), rgba(45,62,72,0.5) );}.fusion-button.button-1{width:auto;}
		</style>
		<a class="fusion-button button-flat fusion-button-pill button-large button-custom button-1" target="_self" href="https://goo.gl/forms/XFUQbJSCLWZn3vWT2"><span class="fusion-button-text" style="white-space: nowrap;">Join WhiteList</span></a>
		</div>

		</div>
		</div>
		
		<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_4  fusion-one-fourth 1_4" style="margin-top: 0px;margin-bottom: 25px;width:25%;width:calc(25% - ( ( 4% + 4% + 4% ) * 0.25 ) );margin-right:4%;">
		<div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
		<div class="fusion-button-wrapper fusion-alignleft">
		<style type="text/css" scoped="scoped">.fusion-button.button-2 .fusion-button-text, .fusion-button.button-2 i {color:#ffffff;}.fusion-button.button-2 {border-width:2px;border-color:#ffffff;}.fusion-button.button-2 .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-2:hover .fusion-button-text, .fusion-button.button-2:hover i,.fusion-button.button-2:focus .fusion-button-text, .fusion-button.button-2:focus i,.fusion-button.button-2:active .fusion-button-text, .fusion-button.button-2:active{color:#ffffff;}.fusion-button.button-2:hover, .fusion-button.button-2:focus, .fusion-button.button-2:active{border-width:2px;border-color:#ffffff;}.fusion-button.button-2:hover .fusion-button-icon-divider, .fusion-button.button-2:hover .fusion-button-icon-divider, .fusion-button.button-2:active .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-2{background: rgba(45,62,72,0.15);
		background-image: -webkit-gradient( linear, left bottom, left top, from( rgba(45,62,72,0.5) ), to( rgba(45,62,72,0.15) ) );
		background-image: -webkit-linear-gradient( bottom, rgba(45,62,72,0.5), rgba(45,62,72,0.15) );
		background-image:   -moz-linear-gradient( bottom, rgba(45,62,72,0.5), rgba(45,62,72,0.15) );
		background-image:     -o-linear-gradient( bottom, rgba(45,62,72,0.5), rgba(45,62,72,0.15) );
		background-image: linear-gradient( to top, rgba(45,62,72,0.5), rgba(45,62,72,0.15) );}.fusion-button.button-2:hover,.button-2:focus,.fusion-button.button-2:active{background: rgba(45,62,72,0.5);
		background-image: -webkit-gradient( linear, left bottom, left top, from( rgba(45,62,72,0.66) ), to( rgba(45,62,72,0.5) ) );
		background-image: -webkit-linear-gradient( bottom, rgba(45,62,72,0.66), rgba(45,62,72,0.5) );
		background-image:   -moz-linear-gradient( bottom, rgba(45,62,72,0.66), rgba(45,62,72,0.5) );
		background-image:     -o-linear-gradient( bottom, rgba(45,62,72,0.66), rgba(45,62,72,0.5) );
		background-image: linear-gradient( to top, rgba(45,62,72,0.66), rgba(45,62,72,0.5) );}.fusion-button.button-2{width:auto;}
		</style>
		
		<a class="fusion-button button-flat fusion-button-pill button-large button-custom button-2" target="_blank" rel="noopener noreferrer"  href="whitepaper.pdf"><span class="fusion-button-text">whitepaper</span></a>
		
		</div>

		</div>
		</div>
		
		<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_4  fusion-one-fourth fusion-column-last 1_4" style="margin-top: 0px;margin-bottom: 20px;width:25%;width:calc(25% - ( ( 4% + 4% + 4% ) * 0.25 ) );">
		
		<div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
		</div>
		</div>
			</div>
		  <div class="social-icons" style="text-align:center">
		 
		 <a href="https://t.me/joinchat/GkISYUWffCRmOTJ3jXpbXg" target="_blank" class="social-link w-inline-block"><img src="uploads/image/socials/telegram.png" width="30"></a>
		 <a href="https://twitter.com/HashpetsO" target="_blank" class="social-link w-inline-block"><img src="uploads/image/socials/twitter.png" width="30"></a>
		 <a href="mailto:hi@hashpets.ai" target="_blank" class="social-link w-inline-block"><img src="uploads/image/socials/email.png" width="30"></a>
         <a href="https://www.facebook.com/Hashpetsai-1024584531029124/" target="_blank" class="social-link w-inline-block"><img src="uploads/image/socials/facebook.png" width="30"></a>
         <a href="https://www.linkedin.com/company/hashpets/" target="_blank" class="social-link w-inline-block"><img src="uploads/image/socials/linkedin.png" width="30"></a>
		 
		 
		 </div>
		
	
		
       
		
		
		
		<div class="fusion-clearfix"></div>
		</div>
		</div>
		
		<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_4  fusion-one-fourth fusion-column-first 1_4" style="margin-top:0px;margin-bottom:20px;width:25%;width:calc(25% - ( ( 4% + 4% ) * 0.25 ) );margin-right: 4%;">
		
		<div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
		
		<div class="fusion-clearfix"></div>

		</div>
		</div>
		
		<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_2  fusion-one-half 1_2" style="margin-top:0px;margin-bottom:20px;width:50%;width:calc(50% - ( ( 4% + 4% ) * 0.5 ) );margin-right: 4%;">
		
		<div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
		<div class="fusion-clearfix"></div>

		</div>
		</div>
				
		<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_4  fusion-one-fourth fusion-column-last 1_4" style="margin-top:0px;margin-bottom:20px;width:25%;width:calc(25% - ( ( 4% + 4% ) * 0.25 ) );">
		<div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
		<div class="fusion-clearfix"></div>
		</div>
		</div>
		
		<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-lastest fusion-column-last 1_1" style="margin-top:300px;margin-bottom:0px;">
		
		</div>
		</div>
		</div>
				
		<?php $row1 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=1  AND checkinfo=true");?>	
        		<section id="services"  <?php if(!isset($row1['checkinfo']) || $row1['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container">
                <div class="row">
				
				 <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
				
				
                            <h1><?php echo $row1['classname'];?></h1>
                            <h4><?php echo $row1['description'];?></h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
      <div class="section-heading scrollpoint sp-effect3" <?php if(!isset($row1['checkinfo']) || $row1['checkinfo']==false){ ?>style="display:none" <?php }?>>
						<img src="img/bjxk.jpg">
						</div> 
	   
	   
	   <?php $row2 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=2  AND checkinfo=true");?>	
		<section id="services"  <?php if(!isset($row2['checkinfo']) || $row2['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container">
                <div class="row">
				
	
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
					
                            <h1><?php echo $row2['classname'];?></h1>
                            <h4><?php echo $row2['description'];?></h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
				<?php
				  $row19 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=19");
				  $row18 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=18");
				  $row17 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=17");
				  $row16 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=16");
				  ?>
						
                            <div class="col-md-6">
							
                                <div class="media media-services right scrollpoint sp-effect1">
                                    <a class="pull-right" href="#">
                                        <i class="media-object fa fa-ban fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $row19['title'];?></h4>
                                        <p><?php echo $row19['description'];?></p>
                                    </div>
                                </div>
								
                                <div class="media media-services right scrollpoint sp-effect2">
                                    <a class="pull-right" href="#">
                                        <i class="media-object fa fa-link fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $row18['title'];?></h4>
                                        <p><?php echo $row18['description'];?></p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="media media-services scrollpoint sp-effect2">
                                    <a class="pull-left" href="#">
                                        <i class="media-object fa fa-shopping-cart fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $row17['title'];?></h4>
                                        <p><?php echo $row17['description'];?></p>
                                    </div>
                                </div>
                                <div class="media media-services scrollpoint sp-effect1">
                                    <a class="pull-left" href="#">
                                        <i class="media-object fa fa-unlink fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $row16['title'];?></h4>
                                        <p><?php echo $row16['description'];?></p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
			<?php $row4 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=4  AND checkinfo=true");?>
		    <section id="whoWeAre"  <?php if(!isset($row4['checkinfo']) || $row4['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container">
                <div class="row">
				
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1><?php echo $row4['classname'];?><span></span>
                            </h1>
                            <h4><?php echo $row4['description'];?></h4>
                            <span class="divider"></span>
                        </div>
                    </div>
					
				<?php
				  $row15 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=15");
				  $row14 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=14");
				  $row13 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=13");
				  $row12 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=12");
				  ?>	
					
                    <div class="col-md-6">
                        <div class="media scrollpoint sp-effect2">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-umbrella fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row15['title'];?></h4>
                                <p><?php echo $row15['description'];?></p>
                            </div>
                        </div>
                        <div class="media scrollpoint sp-effect2">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-support fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row14['title'];?></h4>
                                <p><?php echo $row14['description'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media right scrollpoint sp-effect1">
                            <a class="pull-right" href="#">
                                <i class="media-object fa fa-send fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row13['title'];?></h4>
                                <p><?php echo $row13['description'];?></p>
                            </div>
                        </div>
                        <div class="media right scrollpoint sp-effect1">
                            <a class="pull-right" href="#">
                                <i class="media-object fa fa-recycle fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row12['title'];?></h4>
                                <p><?php echo $row12['description'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		

		<?php $row5 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=5  AND checkinfo=true");?>
		<section id="buyNow"    <?php if($row5['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 scrollpoint sp-effect2">
                        <img src="img/samples/macbook-bl.png" alt="" class="img-responsive macbook-image img-center">
                    </div>
                    <div class="col-md-5 scrollpoint sp-effect1">
				
					
                        <h1><?php echo $row5['classname'];?><span></span>
                        </h1>
                        <p><?php echo $row5['description'];?></p>
                      
                    </div>
                </div>
            </div>
        </section>
		
		
			<?php $row6 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=6  AND checkinfo=true");?>
	        <section id="about"   <?php if($row6['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
					
                            <h1><?php echo $row6['classname'];?><span></span>
                            </h1>
                             <h4><?php echo $row6['description'];?></h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
					<!--
                        <div class="row">
                            <div class="col-md-12 scrollpoint sp-effect4">
                                <img src="img/samples/imac.png" class="img-responsive img-center" alt="">
                            </div>
                        </div>
						-->
                        <div class="row">
						<?php
				  $row11 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=11");
				  $row10 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=10");
				  $row9 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=9");
				  $row8 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=8");
				  ?>	
						
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <!--5 cancel the click funcWon a]ached to the icons (modified by panda)-->
                                    <a>
                                        <!--5 change the icons (modified by panda)-->
                                        <i class="media-object fa fa-sitemap fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $row11['title'];?></h4>
                                        <p><?php echo $row11['description'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <!--5 cancel the click funcWon a]ached to the icons (modified by panda)-->
                                    <a>
                                        <!--5 change the icons (modified by panda)-->
                                        <i class="media-object fa fa-briefcase fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $row10['title'];?></h4>
                                        <p><?php echo $row10['description'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <!--5 cancel the click funcWon a]ached to the icons (modified by panda)-->
                                    <a>
                                        <!--5 change the icons (modified by panda)-->
                                        <i class="media-object fa fa-refresh fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $row9['title'];?></h4>
                                        <p><?php echo $row9['description'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <!--5 cancel the click funcWon a]ached to the icons (modified by panda)-->
                                    <a>
                                        <!--5 change the icons (modified by panda)-->
                                        <i class="media-object fa fa-shopping-cart fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $row8['title'];?></h4>
                                        <p><?php echo $row8['description'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--8 insert image (modified by panda)-->
        <section id="financial">
            <img src="uploads/image/financialManagmentSystem.jpg">
            <img src="uploads/image/ecosystemStructure.png" style="width: 100%;background-color: #000000;">
        </section>


        <?php $row08 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=8  AND checkinfo=true");?>
        <section id="skills"   <?php if($row08['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">

                            <h1><?php echo $row08['classname'];?></h1>

                            <h4><?php echo $row08['description'];?></h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="fusion-fullwidth fullwidth-box nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:30px;padding-bottom:0px;padding-left:30px;">
                        <div class="fusion-builder-row fusion-row ">

                            <div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third fusion-column-first 1_3" style="margin-top:40px;margin-bottom:40px;width:33.33%;width:calc(33.33% - ( ( 4% ) * 0.3333 ) );margin-right: 4%;">
                                <div class="fusion-column-wrapper" style="padding: 40px 0px 40px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
                                    <div class="imageframe-align-center"><span class="fusion-imageframe imageframe-none imageframe-7 hover-type-none"><img src="<?php echo $row08['picurl'];?>" width="200" height="200" alt="" title="icons_global-significance_slate" class="img-responsive wp-image-717"></span></div><div class="fusion-clearfix"></div>

                                </div>
                            </div>
                            <div class="fusion-layout-column fusion_builder_column fusion_builder_column_2_3  fusion-two-third fusion-column-last 2_3" style="width:66.66%;width:calc(66.66% - ( ( 4% ) * 0.6666 ) );">
                                <div class="fusion-column-wrapper" style="padding: 40px 0px 40px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
                                    <div class="fusion-text">
                                        <p><?php echo Info(8); ?></p>
                                    </div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                            <!--7 white box remove (modified by panda)-->
                            <?php $row006 = $dosql->GetOne("SELECT * FROM `#@__info` WHERE `id`=6");?>
                            <div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-last 1_1" style="margin-top:0px;<?php if($row006['picurl']==false){ ?> display:none;<?php }?>">
                                <div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
                                    <div class="imageframe-align-center">
						<span class="fusion-imageframe imageframe-none imageframe-8 hover-type-none">


						<img src="<?php echo $row006['picurl'];?>" width="800" height="481" alt="" title="atonomi-network-functional-flow" class="img-responsive wp-image-915" srcset="<?php echo $row006['picurl'];?> 200w, <?php echo $row006['picurl'];?> 400w, <?php echo $row006['picurl'];?> 600w, <?php echo $row006['picurl'];?> 800w, <?php echo $row006['picurl'];?> 1100w" sizes="(max-width: 800px) 100vw, 800px">

						</span>
                                    </div>
                                    <div class="fusion-clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </section>



		<?php $row7 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=7  AND checkinfo=true");?>
        <section id="highlights"   <?php if($row7['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators vertical">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/samples/600-300/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="img/samples/600-300/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="img/samples/600-300/1.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
						
						
                        <h4><?php echo $row7['classname'];?></h4>
                      
                        <ul>
                            <li><?php echo $row7['description'];?>
						</li>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </section>

		<?php $row09 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=9  AND checkinfo=true");?>
        <section id="features"   <?php if(!isset($row09['checkinfo']) || $row09['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container" style="padding-bottom: 50px;">
                <div class="row">
                    <div class="col-md-5 scrollpoint sp-effect1">
                        <img src="img/samples/ipad-bl.png" class="img-responsive ipad-image img-center" alt="">
                    </div>
                    <div class="col-md-7 scrollpoint sp-effect2">
					
                        <h1><?php echo $row09['classname'];?><span></span>
                        </h1>
						<?php
				  $row22 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=22");
				  $row23 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=23");
				  $row24 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=24");
				  $row25 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=25");
				   $row26 = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=26");
				  ?>	
						
						
                        <div class="media media-circle">
                            <!--6 make  cancel the click function (modified by panda)-->
                            <a class="pull-left">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row22['title'];?></h4>
                                <p><?php echo $row22['description'];?></p>
                            </div>
                        </div>
                        <div class="media media-circle">
                            <!--6 make  cancel the click function (modified by panda)-->
                            <a class="pull-left">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row23['title'];?></h4>
                                <p><?php echo $row23['description'];?></p>
                            </div>
                        </div>
                        <div class="media media-circle">
                            <!--6 make  cancel the click function (modified by panda)-->
                            <a class="pull-left">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row24['title'];?></h4>
                                <p><?php echo $row24['description'];?></p>
                            </div>
                        </div>
						
						 <div class="media media-circle">
                             <!--6 make  cancel the click function (modified by panda)-->
                            <a class="pull-left">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row25['title'];?></h4>
                                <p><?php echo $row25['description'];?></p>
                            </div>
                        </div>
						
						 <div class="media media-circle">
                            <!--6 make  cancel the click function (modified by panda)-->
                            <a class="pull-left">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row26['title'];?></h4>
                                <p><?php echo $row26['description'];?></p>
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
        </section>





	
		<?php $row010 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=16  AND checkinfo=true");?>
		    <section id="portfolio"  <?php if(!isset($row010['checkinfo']) || $row010['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container" >
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
						
                            <h1><?php echo $row010['classname'];?></h1>
							
							 <h4><?php echo $row010['description'];?></h4>
							 
                           
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
				<div class="col-md-6">
				 <div id="chart_div" style="text-align:center"></div></div>
				   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
				
		<div class="col-md-6"> <div id="top_x_div" style="width: 300px; height: 300px;text-align:center"></div>	</div>	
		<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          ["King's pawn (e4)", 44],
          ["Queen's pawn (d4)", 31],
          ["Knight to King 3 (Nf3)", 12],
          ["Queen's bishop pawn (c4)", 10],
          ['Other', 3]
        ]);

        var options = {
          width: 300,
          legend: { position: 'none' },
          chart: {
            title: 'Chess opening moves',
            subtitle: 'popularity by percentage' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>		
				 
                </div>
            </div>
        </section>
		
		
		
        <?php $row010 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=10  AND checkinfo=true");?>

        <section id="advisors"   <?php if(!isset($row010['checkinfo']) || $row010['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
						<?php $row010 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=10  AND checkinfo=true");?>
                            <h1><?php echo $row010['classname'];?></h1>
							
							 <h4><?php echo $row010['description'];?></h4>
                          <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
				
				<?php
				$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE (classid=10 OR parentstr LIKE '%,10,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,8");
				while($row100 = $dosql->GetArray())
				{
					//获取链接地址
					if($row100['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'productshow.php?cid='.$row100['classid'].'&id='.$row100['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'productshow-'.$row100['classid'].'-'.$row100['id'].'-1.html';
					else
						$gourl = $row100['linkurl'];

					//获取缩略图地址
					if($row100['picurl']!='')
						$picurl = $row100['picurl'];
					else
						$picurl = 'templates/default/images/nofoundpic.gif';
				?>
				
				
				  <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect5">

                                <?php if(isset($row100['linkurl']) && $row100['linkurl'] != ''){
                                    echo '<a href="'.$row100['linkurl'].'" target="_blank">';
                                }?>

                                <div class="member-image">
                                    <img src="<?php echo $row100['picurl']; ?>" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                       
                                       
                                        <p><?php echo $row100['description']; ?></p>
                                    </div>
                                </div>

                                <?php if(isset($row100['linkurl']) && $row100['linkurl'] != ''){
                                    echo '</a>';
                                }?>

                                <div class="member-name">
                                    <h4><?php echo $row100['title']; ?></h4>
                                    <p><?php echo $row100['keywords']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
					
				
				
				
				
				
				<?php
				}
				?>
				
				
				
                  
					
                    
					
                </div>
            </div>
        </section>

        <?php $row011 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=11  AND checkinfo=true");?>
        
        <section id="team"   <?php if($row011['checkinfo']==false){ ?>style="display:none" <?php }?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
						<?php $row011 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=11  AND checkinfo=true");?>
                            <h1><?php echo $row011['classname'];?></h1>
							
							 <h4><?php echo $row011['description'];?></h4>
                          <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
				
				<?php
				$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE (classid=11 OR parentstr LIKE '%,11,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,8");
				while($row110 = $dosql->GetArray())
				{
					//获取链接地址
					if($row110['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'productshow.php?cid='.$row110['classid'].'&id='.$row110['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'productshow-'.$row110['classid'].'-'.$row110['id'].'-1.html';
					else
						$gourl = $row110['linkurl'];

					//获取缩略图地址
					if($row100['picurl']!='')
						$picurl = $row110['picurl'];
					else
						$picurl = 'templates/default/images/nofoundpic.gif';
				?>

				  <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect5">

                                <?php if(isset($row110['linkurl']) && $row110['linkurl'] != ''){
                                    echo '<a href="'.$row110['linkurl'].'" target="_blank">';
                                }?>
                                <div class="member-image">
                                    <img src="<?php echo $row110['picurl']; ?>" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                       
                                       
                                        <p><?php echo $row110['description']; ?></p>
                                    </div>
                                </div>
                                <?php if(isset($row110['linkurl']) && $row110['linkurl'] != ''){
                                    echo '</a>';
                                }?>

                                <div class="member-name">
                                    <h4><?php echo $row110['title']; ?></h4>
                                    <p><?php echo $row110['keywords']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
					
				
				
				
				
				
				<?php
				}
				?>
				
				
				
                  
					
                    
					
                </div>
            </div>
        </section>









        

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <span class="divider grey"></span>
					<?php $row010 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=11");?>
                    <h4> <?php echo $cfg_webname; ?>.</h4>
                    <h5><a> <?php echo $cfg_copyright;?></a>
                    </h5>
                    <a href="#" class="scroll-top">
                        <img src="img/top.png" alt="" class="top">
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <!--/wrap-->

   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>

    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="js/waypoints.min.js"></script>

    
    <script src="js/script.js"></script>

    <script>
    $(document).ready(function() {
        appMaster.preLoader();
        appMaster.smoothScroll();
        appMaster.animateScript();
        appMaster.navSpy();
        appMaster.revSlider();
        appMaster.stellar();
        appMaster.skillsChart();
        
        appMaster.isoTop();
        appMaster.canvasHack();
    });
    </script>

</body>

</html>
