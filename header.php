<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>BR TRUSTY株式会社</title>


        <!-- Icon css link -->
        <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="<?php bloginfo('template_directory'); ?>/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php bloginfo('template_directory'); ?>/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        
        <link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">

        


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
       <?php wp_head();?>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img class="toplogo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
  
                </a>
                <h3 class="toptitle">BR TRUSTY株式会社</h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo home_url( '/' ) ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo get_template_directory_uri() ?>/about-us.php">会社概要</a></li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="service.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            事業内容
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link" href="<?php echo get_template_directory_uri() ?>/service.php">事業内容</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo get_template_directory_uri() ?>/pm.php">賃貸管理について</a></li>
                              
                            </ul>
                        </li> 

                        <li class="nav-item"><a class="nav-link" href="<?php echo get_template_directory_uri() ?>/portfolio.php">マンション経営</a></li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="client.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                お客様窓口
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link" href="<?php echo get_template_directory_uri() ?>/client.php">退去申請</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo get_template_directory_uri() ?>/client2.php">購入のお問合せ</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo get_template_directory_uri() ?>/client3.php">売却のお問合せ</a></li>
                            </ul>
                        </li> 
                        
                        <li class="nav-item"><a class="nav-link" href="<?php echo get_template_directory_uri() ?>/contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->