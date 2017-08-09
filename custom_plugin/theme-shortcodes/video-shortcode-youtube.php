<?php 
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Youtube Modal Shortcode

function modal_youtube_shortcode( $atts ) {
    
    extract( shortcode_atts( array(
        'id'    => '',
        'width' => '',
        'modal' => 'true',
        'title' => '',
        'imge'   => '',
        
    ), $atts) );
    
$src = 'https://www.youtube.com/embed/';   
$style  ='';
$img_array ='';

if( !empty($width)) {
    $style = 'max-width:'.absint($width).'px;';
}    
    
$output ='';
    
$output .= '
     <script>
        jQuery(document).ready(function(){
                jQuery("[data-fancybox]").fancybox();
            });
    </script>
';    
    
if(isset($id) or !empty($id)){    
    
   if($modal == "true") {
       
        if(isset($imge) or !empty($imge)) {
           $img_array = wp_get_attachment_image_src($imge, 'full');          
        }


        $output .= '<a data-fancybox href="https://www.youtube.com/watch?v='.$id.'" class="video-modal" style="background-image:url('.$img_array[0].')">';      

        $output .= '<div class="video-overlay"><div class="video-overlay-content">
        <div class="video-icon"><i class="fa fa-play"></i></div>
        </div></div>';
        $output .= '</a>';          
    
} else {
   
        $output .= '
 
        <div class="video-embed" style="'.$style.'">
            <div class="flex-mod">
            
<iframe src="'.$src.esc_attr($id).'" frameborder="0" allowfullscreen></iframe>     
            </div>
        </div>
 ';      
       
}
    
    
    
}    
    
return $output;     
    
    
}

add_shortcode( 'modal_youtube', 'modal_youtube_shortcode' );



