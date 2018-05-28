<?php
/**
 * @package Anila
 *
 */
 
/* ========================
 * Header Template Page 
 * ========================
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if( is_singular() && pings_open( get_queried_object() ) ):?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <header class="header">
        <?php get_option( 'anila_activate_sidebar' ) == ('1') ? $withSide = 'with-side' : $withSide = '' ;?>
        <?php if ( ! empty ( get_option( 'anila_header_type' ) )) {
            $header = key( get_option( 'anila_header_type' ));
            //require(locate_template('template-parts/header-'.$header.'.php'));
            get_template_part( 'template-parts/header-'.$header.'', get_post_format() );

            } else {

            echo 'Choose Header type from the Theme Settings';

            }
        ?>
        <?php get_option( 'anila_activate_sidebar' ) == ('1') ? get_template_part( 'template-parts/sidebar', get_post_format() ) : print(''); ?>
        <!-- @TODO create field image or color for the background -->
        <!-- <div class="jumbotron jumbotron-fluid table <?php echo $withSide ;?>" style="<?php $withSide ? print 'background-size: calc(100% - 6rem);' : print ''; ?> background-image: url(<?php has_post_thumbnail() ? the_post_thumbnail_url() : print get_option( 'anila_header_image' ) ;  ?>)"
            data-type="background" data-speed="2">
            <div class="container table-cell">
                <h1 class="display-3 text-uppercase text-center" data-type="content">
                    <?php get_option( 'anila_header_title' ) ? print get_the_title(get_post_thumbnail_id()) : print the_title(); ?>
                </h1>
            </div> 
            

        </div> -->
        <div class="slider <?php echo $withSide ;?>">

            <div class="Kenburns">

                <div class="home-slider">


                    <div class="slider-item">
                        <div class="slider-img" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/images/6725.png');"></div>
                        <div class="table">
                            <div class="table-cell">
                                <h1 class="text-uppercase text-center">
                                    <?php get_option( 'anila_header_title' ) ? print get_the_title(get_post_thumbnail_id()) : print the_title(); ?>
                                </h1>
                                <p class="lead">This is the first slide</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/images/6726.png');"></div>
                        <div class="table">
                            <div class="table-cell">
                                <h1 class="text-uppercase text-center">
                                    Nice title for the second Slide
                                </h1>
                                <p class="lead text-center">and a cool subtile</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/images/6727.png');"></div>
                        <div class="table">
                            <div class="table-cell">
                                <h1 class="text-uppercase text-center">
                                    Maybe here lives a litle icon
                                </h1>
                                <p class="lead">and life goes on..</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/images/6728.png');"></div>
                        <div class="table">
                            <div class="table-cell">
                                <h1 class="text-uppercase text-center">
                                    Last one
                                </h1>
                                <p class="lead text-center">i thought this was last</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-controls">
                    <span class="simple-svg s-control slick-prev" data-icon="typcn-arrow-up-outline" data-inline="false"></span>
                    <span class="simple-svg s-control slick-next" data-icon="typcn-arrow-down-outline" data-inline="false"></span>
                </div>
            </div>

        </div>


    </header>