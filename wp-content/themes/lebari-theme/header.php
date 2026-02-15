<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title(); ?></title>
<?php wp_head(); ?>


<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Glory:wght@100;300;400;500;600;700;800&family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">

	
    <!-- Main Header -->
    <header class="main-header header-style-four">
    
        <!-- Header Lower -->
        <div class="header-lower">
			<div class="lower-inner">
				<div class="outer-container">
					<div class="inner-container clearfix">
						
						<div class="pull-left">
							<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/logo.png" alt="" title="" style="max-height:70px; width:auto; background:transparent; margin: 15px"></a></div>
						</div>
						
						<div class="pull-right nav-outer clearfix">
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
							<!-- Main Menu -->
							<nav class="main-menu show navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li><a href="#">Главная</a></li>										
										<li><a href="#education">Обучение</a></li>
										<li><a href="#about">О нас</a></li>
										<li><a href="#testimonials">Отзывы</a></li>										
										<li><a href="#footer">Контакты</a></li>										
									</ul>
									
								</div>
							</nav>
							<!-- Main Menu End-->
							
							<!-- Outer Box -->
							<div class="outer-box clearfix">
								
								<!-- Login Box -->
								<ul class="login-box">
									<li><a href="https://wa.me/79682662112?text=Здрaвствуйте!%20"><span class="icon flaticon-whatsapp"></span>WhatsApp</a></li>
									<li><a href="#quiz-popup" data-fancybox class="register"><span class="icon flaticon-homework"></span>Записаться на экскурсию</a></li>
								</ul>
								
							</div>
								
						</div>
						
					</div>
				</div>
			</div>
        </div>
        <!--End Header Upper-->
        
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div><!-- End Mobile Menu -->
    
    </header>
    <!-- End Main Header -->