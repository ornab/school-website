<?php

function photogallery_shortcode($atts){
	extract( shortcode_atts( array(
		'type' => 'current',
	), $atts) );

    global $paged;
    $posts_per_page = -1;
    $settings = array(
        'showposts' => $posts_per_page,
        'post_type' => 'photogallery',
        'paged' => $paged
    );

    $post_query = new WP_Query( $settings );


  $date_text = __( 'তারিখে যুক্ত করা হয়েছে।', 'themee' );

	$list = '<div class="row">';
	while($post_query->have_posts()) : $post_query->the_post();
        $idd = get_the_ID();
        $gallery = get_post_meta($idd, 'gallery_images', true);
        $gallery_item_no = 0;

        $list .='<div class="col-sm-6"><div class="single-gallery-item">
            <div class="gallery-desc-inner">
                <h3>'.get_the_title().'</h3>
                <p>'.get_the_date('F j, Y', $idd).' '.$date_text.'</p>
            </div>
        ';

        if( ! empty( $gallery ) ) {

            $gallery_ids = explode( ',', $gallery );

            foreach ( $gallery_ids as $gallery_id ) {
                $attachment = wp_get_attachment_image_src( $gallery_id, 'large' );
                $attachment_thumb = wp_get_attachment_image_src( $gallery_id, 'medium' );
                $image_meta = wp_prepare_attachment_for_js( $gallery_id );
                $gallery_item_no++;

                if($gallery_item_no == '1'){
                    $list .='<a href="'.$attachment[0].'" title="'.$image_meta['title'].'">
                        <img src="'.$attachment_thumb[0].'" alt="'.$image_meta['title'].'"/>
                    </a>';
                } else {
                    $list .='<a style="display:none" href="'.$attachment[0].'" title="'.$image_meta['title'].'">
                        <img src="'.$attachment_thumb[0].'" alt="'.$image_meta['title'].'"/>
                    </a>';
                }

            }

        }
        $list .='</div></div>';
	endwhile;
	$list.= '</div>';


	return $list;
}
add_shortcode('photogallery', 'photogallery_shortcode');
