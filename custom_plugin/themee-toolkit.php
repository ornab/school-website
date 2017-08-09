<?php

/*
Plugin Name: Themee Toolkit
*/

//Exit if accesses directly

if(!defined('ABSPATH')){
    exit;
}

//Define

define('THEMEE_ACC_URL', WP_PLUGIN_URL . '/'. plugin_basename(dirname(__FILE__)). '/');
define('THEMEE_ACC_PATH',plugin_dir_path(__FILE__));

// slider list

    function themee_toolkit_get_slide_as_list(){

        $args = wp_parse_args(array(
            'post_type' => 'slide',
            'posts_per_page' => -1,
        ) );

        //get all slide list
        $posts = get_posts(  $args );

        $slide_options = array(esc_html__('-- Select slide --', 'themee-toolkit')=>'');

        if($posts){

            foreach($posts as $post){

                $slide_options[ $post->post_title ] = $post->ID;

            } //end foreach

        } //end if

        return $slide_options;

    }

// page list

    function themee_toolkit_get_page_as_list(){

        $args = wp_parse_args(array(
            'post_type' => 'page',
            'posts_per_page' => -1,
        ) );

        //get all slide list
        $posts = get_posts(  $args );

        $post_options = array(esc_html__('-- Select page --', 'themee-toolkit')=>'');

        if($posts){

            foreach($posts as $post){

                $post_options[ $post->post_title ] = $post->ID;

            } //end foreach

        } //end if

        return $post_options;

    }

//Register custom post type

add_action( 'init', 'themee_custom_post' );
function themee_custom_post() {
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => __( 'Slides' ),
                'singular_name' => __( 'Slide' )

            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui'=> true,
            'menu_icon'   => 'dashicons-admin-customizer',
        )
    );



}


//Toolkit files


//Print shortcodes in widget

//add_filter('widget_text','do_shortcodes');



// VC addons Load

require_once(THEMEE_ACC_PATH . 'vc-addons/vc-blocks-load.php');



//Theme Shortcodes


require_once(THEMEE_ACC_PATH . 'theme-shortcodes/slides-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/service-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/btn-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/stat-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/staff-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/styled-map-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/photogallery-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/tile-gallery-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/video-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/grid-gallery-shortcode.php');
require_once(THEMEE_ACC_PATH . 'theme-shortcodes/head-mistress-shortcode.php');


//Shortcodes Dependent on Visual Composer

include_once(ABSPATH. 'wp-admin/includes/plugin.php');
if(is_plugin_active('js_composer/js_composer.php')){

  //  require_once(THEMEE_ACC_PATH . 'theme-shortcodes/staff-shortcode.php');

}

//Registering THEMEE Toolkit files

function  themee_toolkit_files(){

    wp_enqueue_style('owl-carousel', plugin_dir_url(__FILE__) . 'assets/css/owl.carousel.css');
    wp_enqueue_style('fancybox-css', plugin_dir_url( __FILE__ ) . 'assets/css/jquery.fancybox.css');
    wp_enqueue_style('seo-toolkit', plugin_dir_url( __FILE__ ) . 'assets/css/themee-toolkit.css');
    wp_enqueue_style('nice-select', plugin_dir_url( __FILE__ ) . 'assets/css/nice-select.css');
    wp_enqueue_script('owl-carousel', plugin_dir_url(__FILE__) . 'assets/js/owl.carousel.js', array('jquery'),'20120206',true);
    wp_enqueue_script('gmap3', plugin_dir_url(__FILE__) . 'assets/js/gmap3.min.js', array('jquery'),'20120206',true);
    wp_enqueue_script('select', plugin_dir_url(__FILE__) . 'assets/js/select.js', array('jquery'),'20120206',true);
    wp_enqueue_script('nice-select', plugin_dir_url(__FILE__) . 'assets/js/jquery.nice-select.js', array('jquery'),'20120206',true);
    wp_enqueue_script('gmap3', plugin_dir_url(__FILE__) . 'assets/js/gmap3.min.js', array('jquery'),'20120206',true);
    wp_enqueue_script('waypoint', plugin_dir_url( __FILE__ ) . 'assets/js/waypoints.min.js', array('jquery'), '20120206', true );
  	wp_enqueue_script('fancybox', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.fancybox.min.js', array('jquery'), '20120206', true );
  	wp_enqueue_script('isotope', plugin_dir_url( __FILE__ ) . 'assets/js/isotope-v3.0.4.min.js', array('jquery'), '3.0.4', true );
  	wp_enqueue_script('counter-up', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.counterup.js', array('jquery'), '20120206', true );



}

add_action('wp_enqueue_scripts','themee_toolkit_files');


/*

//test shortcodes here

function post_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => -1,
        'type'  => 'post',
        'color'  => '#dd4d40',
        'icon'  => '',
       // 'count' => ''
    ), $atts) );

    $q = new WP_Query(
        array(

        'posts_per_page' => $count,
        'post_type' => $type,
        /*
        'orderby' => 'menu_order',
        'order' => 'ASC'
    */

    /*
    )
        );

    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();

        $post_content = get_the_content();

    $list .= '<li><a style="color:'.$color.'" href="'.get_permalink().'">';


       if(!empty($icon)){
            $list .='<i class="'.$icon.'"></i>';
       }

    $list .=''.get_the_title().'</a></li>';
    endwhile;
    $list.= '</ul>';

    /*
      $list = '<div class="custom_post_list">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $list .= '
        <div class="single_post_item">
            <h2>' .do_shortcode( get_the_title() ). '</h2>
            '.wpautop( $post_content ).'
            <p>'.$custom_field.'</p>
        </div>
        ';
    endwhile;
    $list.= '</div>';

    */

    /*
    wp_reset_query();
    return $list;
}
add_shortcode('post_list', 'post_list_shortcode');


function themee_vc_postlist_addon(){

    vc_map( array(
      "name" => __( "Post List", "my-text-domain" ),
      "base" => "post_list",
      "category" => __( "Themee", "my-text-domain"),
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __( "Post Type", "my-text-domain" ),
            "param_name" => "type",
            "std" => "post",
            "value" => array(
                //"label" => "value",
                "Page" => "page",
                "Post" => "post",
      ),
            "description" => __( "Type post type here.", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Post Count", "my-text-domain" ),
            "param_name" => "count",
            "value" => __( "-1", "my-text-domain" ),
            "description" => __( "Type how many item you want to show. Number only. Type -1 for unlimited item", "my-text-domain" ),

            "dependency" => array(
                'element' => 'type',
                'value'   => 'post'

            )
    ),


        array(
            "type" => "colorpicker",
            "heading" => __( "Link Color", "my-text-domain" ),
            "param_name" => "color",
            "value" => __( "#dd4d40", "my-text-domain" ),
            "description" => __( "Select Link color.", "my-text-domain" )
         ),
        array(
            "type" => "iconpicker",
            "heading" => __( "Icon", "my-text-domain" ),
            "param_name" => "icon",
            "description" => __( "Select Link icon.", "my-text-domain" )
         )
      )
   ) );

}
add_action('vc_before_init','themee_vc_postlist_addon');






/*

function themee_alert_shortcode($atts, $content = null){

    extract(shortcode_atts(
       array(

        'class' => '',
        'text'  => '',
        'id'    => '',
        'size'  => '',


    ), $atts

    ));

        return '<blockquote class="'.esc_attr($class).'">
  <p>'.esc_html($text).'</p>
  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>';

    $img_array = wp_get_attachment_image_src($id, $size);

    return '<img src="'.$img_array[0].'"/>';


}

add_shortcode('alert', 'themee_alert_shortcode');
