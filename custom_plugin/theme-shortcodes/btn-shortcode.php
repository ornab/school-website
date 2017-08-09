<?php   

function themee_btn_shortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'type' =>1,
        'link_to_page' =>'',
        'external_link' => '',
        'link_text' => 'Read more about us',
    ), $atts) );
    
    if($type == 1){
        $link_source = get_page_link($link_to_page);
    } else{
        $link_source = $external_link;
    }
    
   
    
     
    $themee_btn_markup= '
    <a href="'.$link_source.'" class="bordered-btn"> '.$link_text.' </a>
   
    ';

    
   
    return $themee_btn_markup;
        
}
add_shortcode('themee_btn', 'themee_btn_shortcode');  