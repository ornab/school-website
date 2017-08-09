<?php

function themee_head_mistress_shortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'title'=>'',
        'position' => '',
        'phone' => '',
        'email' => '',
        'description' =>'',
        'photo' =>'',
        'type' =>1,
        'link_to_page' =>'',
        'external_link' => '',
        'link_text' => 'See more',

    ), $atts) );

    if($type == 1){
        $link_source = get_page_link($link_to_page);
    } else{
        $link_source = $external_link;
    }

    $photo_array = wp_get_attachment_image_src($photo, 'large');

    $themee_head_box_markup= '
      <div class="single-head-box">
         <img src="'.$photo_array[0].'" alt="'.$title.'" />

        <h2> '.$title.' <span> '.$position.' </span> <span> '.$phone.' </span> <span> '.$email.' </span> </h2>

      <p>  <span>'.wpautop($description).'</span> </p>

       </div>
        <a  href="'.$link_source.'" class="service-more-btn" style="text-decoration:none">'.$link_text.' </a>
    ';


    return $themee_head_box_markup;

  }
  add_shortcode('themee_head_mistress', 'themee_head_mistress_shortcode');
