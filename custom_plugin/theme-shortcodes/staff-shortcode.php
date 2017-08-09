<?php   

function themee_staff_box_shortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'title'=>'',
        'position' => '',
        'phone' => '',
        'email' => '',
        'desc' =>'',
        'photo' =>'',
    ), $atts) );
    
    
    $photo_array = wp_get_attachment_image_src($photo, 'large');
     
    $themee_staff_box_markup= '
      <div class="single-staff-box">
         <img src="'.$photo_array[0].'" alt="'.$title.'" />
        
        <h3> '.$title.' <span> '.$position.' </span> <span> '.$phone.' </span> <span> '.$email.' </span> </h3>
        
        '.wpautop($desc).'
      
      </div>
    
    ';
    
   
    return $themee_staff_box_markup;
        
}
add_shortcode('themee_staff_box', 'themee_staff_box_shortcode');  