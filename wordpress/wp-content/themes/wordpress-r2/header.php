<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>


<!-- Head Tags -->
    <!-- Meta Data -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <!-- Viewport  -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>

    <!-- Favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo get_template_directory_uri(); ?>/assets/img/meta/favicon.png'>

    <!-- Meta -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">

    <!-- Wordpress Shit -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>


<!-- Head Links Libraries -->
    <!-- Alertify -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/alertify/css/alertify.core.css'>
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/alertify/css/alertify.default.css'>

    <!-- Lightbox -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/lightbox/css/lightbox.css'>

    <!-- Font Awesome -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/fontawesome/css/font-awesome.min.css'>

    <!-- Bootstrap -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.css'>

    <!-- Normalize -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/normalize/normalize.css'>

    <!-- Lince Form -->
    <link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/assets/libs/linceform/linceform.css'>

    <!-- jQuery -->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/jquery/jquery-1.11.1.min.js'></script>

    <!-- Main CSS -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/css/style.css'>
    
    <!-- Modernizr  -->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/modernizr/modernizr.js'></script>

    <!-- HTML5 Shiv -->
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/html5shiv/html5shiv.min.js'></script>


<!-- Google Fonts -->
    <!-- font-family: 'Josefin Sans', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700italic,700,600italic,600,300italic,300,100italic,100,400italic' rel='stylesheet' type='text/css'>
    <!-- font-family: 'Playfair Display', serif; -->
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

</head>

<body <?php body_class(); ?>>

<div class="loading">
    <p><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw margin-bottom"></i></p>
</div>
<div id="wrapper">
    
    <!-- RESPONSIVE MENU -->
    <header id="header">
        <div id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Alternar Navegação</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="navbar-brand" href="home">
                                    <?php if ( is_front_page() && is_home() ) : ?>
                                        <h1 class="hide"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <?php else : ?>
                                        <h2 class="hide"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                                    <?php endif; ?>
                                        <!-- Desktop Logo -->
                                        <div class="nomobile">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                                            </a>
                                        </div>
                                        <!-- Mobile Logo -->
                                        <div class="mobile">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <?php bloginfo( 'name' ); ?> Mobile
                                            </a>
                                        </div>
                                </div>
                            </div>

                            <nav class="navbar-collapse collapse">
                                <div class="menu-fixed-menu-container">
                                    <h2 class="hide">Menu Principal</h2>
                                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                        <?php
                                            wp_nav_menu( array(
                                                'theme_location' => 'primary',
                                                'menu_class'     => 'primary-menu',
                                             ) );
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
