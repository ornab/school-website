<?php
   function themee_tile_gallery_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'images' => '',
        'height' => '310',
        'width'=>'360',
        'size' => 'large',

    ), $atts) );

     $image_ids = explode(',',$images);
     $image_count = count($image_ids);
     $image_no = 0;


      if(!empty($images)){
        $themee_tile_gallery_markup ='
               <div class="themee-tile-gallery themee-tile-gallery-image-'.$image_count.' ">';
               foreach ($image_ids as $image) {
                  $image_array = wp_get_attachment_image_src($image, $size);
                  $image_no++;
                  $themee_tile_gallery_markup .='<div style="background-image:url('.$image_array[0].');height:'.$height.'px; width:'.$width.'px" class="tile-gallery-block tile-gallery-block-'.$image_no.'"></div>';
               }
              $themee_tile_gallery_markup .='
               </div>

        ';

      }else{
         $themee_tile_gallery_markup ='';

      }



      return  $themee_tile_gallery_markup;
}
add_shortcode('themee_tile_gallery', 'themee_tile_gallery_shortcode');
?>
