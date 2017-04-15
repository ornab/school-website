<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Themee
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


    <div class="header-area">
        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                    <div class="site-logo">
                       
                       <h2> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php bloginfo( 'name' ); ?> </a> </h2>
                       
                   </div>
                    
               </div>
               
                 <div class="col-md-9">
                     
                     <div class="header-right-content">
                         <a href="mailto:contact@themee.com" class="themee-contact-box">
                             <i class="fa fa-envelope"></i>
                             Send us an email
                             <h3>contact@themee.com</h3>
                             
                         </a>
                            
                          <div class="themee-contact-box">
                             <i class="fa fa-phone"></i>
                             Give us a call
                             <h3>+014-345-0234</h3>
                             
                         </div>
                         
                         <!-- <a href="mailto:contact@themee.com" class="themee-contact-box">
                             <i class="fa fa-map-marker"></i>
                             Send us an email
                             <h3>contact@themee.com</h3>
                             
                         </a>
                         -->
                        
                        <a href="http://www.hzamil.theme-e.com" target="_blank" class="btn btn-primary btn-lg" role="button"> <span class="themee-btn"></span> Login</a>
                        
              <!--  <a href="" class="themee-cart"><i class="fa fa-shopping-cart"></i><span class="themee-cart-count"></span>3</a>  -->
                     </div>
                 </div>
                
            </div>
            
            <div class="row">
                
                <div class="col-md-12">
                    
                    <div class="mainmenu">
                        
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>





 