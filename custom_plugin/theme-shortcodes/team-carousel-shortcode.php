<?php 

function team_carousel_shortcode($atts){
    extract( shortcode_atts( array(

        'title_color' => '#03A9F4',
        'count' => 4,
        'tablet_count' => 3,
        'mobile_count' => 2,
        'loop'     => 'true',
        'autoplay' => 'false',
        'autoplaytimeout' => 5000,
        'nav'      => 'true',
        'dots'     => 'true',
        
     ), $atts) );
    
 $q = new WP_Query( array(
    'posts_per_page' => -1,
    'post_type'  => 'team',
 )); 
    
 $team_markup = '
    <script>
        jQuery(window).load(function(){
                jQuery(".owl-carousel").owlCarousel({
                    margin: 30,
                    loop: '.$loop.',
                    autoplay: '.$autoplay.',
                    autoplaytimeout: '.$autoplaytimeout.',
                    nav: '.$nav.',
                    dots: '.$dots.',
                    navText:["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                    
                    responsive:{
                        0:{
                            items: '.esc_attr($mobile_count).',
                        },
                        600:{
                            items: '.esc_attr($tablet_count).',
                        },
                        1024:{
                            items: '.esc_attr($count).',
                        }
                    }
                    
                    
                });
            });
   </script>
 
 <div class="team-carousel owl-carousel">
 ';
    
  while($q->have_posts()) : $q->the_post();  
  
    $idd = get_the_ID();
    $post_content = get_the_content();
    
 $team_markup .= '
    <div class="team-box">
        <div class="team-img">
            <a href="'.get_permalink().'">
                <img src="'.get_the_post_thumbnail_url($idd, 'full').'" alt="'.get_the_title($idd).'" />
            </a>
        </div>
        <div class="team-content">
            <a href="'.get_permalink().'"><h5 style="color:'.$title_color.'">'.get_the_title($idd).'</h5></a>
            '.wpautop($post_content).'
        </div>
    </div>
  ';
    
 endwhile;   
    
 $team_markup .= '</div>';
    
 wp_reset_query();
    
 return $team_markup;
    
}

add_shortcode( 'team_carousel', 'team_carousel_shortcode' );

