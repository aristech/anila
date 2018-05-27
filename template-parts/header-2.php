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
<?php get_option( 'anila_activate_sidebar' ) == ('1') ? $withSide = 'with-side' : $withSide = '' ;?>
<?php get_option( 'anila_shade_menu' ) == ('1') ? $shade = 'light' : $shade = 'dark' ;?>
<?php get_option( 'anila_sticky' ) == ('1') ? $sticky = 'sticky' : $sticky =  '' ;?>
<div class="mainmenu-area <?php echo $sticky . ' ' . $withSide ;?>">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-<?php echo $shade ?> pt-0" data-spy="affix" data-offset-top="100">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            if (has_nav_menu( 'primary' )) { 
                wp_nav_menu( array(
                    'theme_location'    =>  'primary',
                    'container'         =>  'nav',
                    'container_class'   =>  'collapse navbar-collapse',
                    'container_id'      =>  'primary-menu',
                    'menu_class'        =>  'navbar-nav mr-auto',
                    'walker'            =>  new Walker_Nav_Primary()
                    

                ) );
                } else {
                    echo '<h1>Please create a menu in Dashboard/Appearence/Menus</h1>';
                }
                
            ?>
                <div id="marker"></div>
            <a class="navbar-brand mx-auto text-center" href="<?php echo get_site_url(); ?>">
                <?php if ( ! empty ( get_option( 'logo' ) )) { ?>

                <img class="img-fluid" style="max-width: <?php echo get_option( 'logosize' ); ?>" src="<?php echo get_option( 'logo' ); ?>"
                    alt="logo">

                <?php } else {

                                    bloginfo();

                            } ?>

            </a>
            <?php
            if (has_nav_menu( 'secondary' )) { 
                wp_nav_menu( array(
                    'theme_location'    =>  'secondary',
                    'container'         =>  'nav',
                    'container_class'   =>  'collapse navbar-collapse',
                    'container_id'      =>  'secondary-menu',
                    'menu_class'        =>  'navbar-nav ml-auto',
                    'walker'            =>  new Walker_Nav_Primary()
                    

                ) );
                } else {
                    echo '<h1>Please create a menu in Dashboard/Appearence/Menus</h1>';
                }
            ?>
            <div id="marker2"></div> 
        </nav>
    </div>
    <!--Mainmenu-area-2/-->
</div>