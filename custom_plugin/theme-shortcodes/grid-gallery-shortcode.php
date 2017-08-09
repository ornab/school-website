<?php

/*  Grid Gallery
/*===================*/

	function themee_grid_gallery($atts, $content = null){
		extract( shortcode_atts( array(
			'images'              => '',
			'link_full'           => 'false',
			'columns'             => '3',
		), $atts ) );

		$gal_images = "";
		$output = "";

        $output .= '
             <script>
              jQuery(window).load(function(){
                        jQuery("[data-fancybox]").fancybox();
                    });
            </script>
        ';


		if (isset($images) && !empty($images)) {
			$images = explode( ',', $images );
			$i = - 1;


			foreach ( $images as $attach_id ) {
				$i ++;
				if ( $attach_id > 0 ) {
					$img = wp_get_attachment_image_src($attach_id, 'large');
					$link = wp_get_attachment_image_src($attach_id,'full');

					$thumb_img = get_post( $attach_id );

					$after_img  = '';

					if (!empty($thumb_img->post_excerpt)) {
						$after_img = '<figcaption class="wp-caption-text">'.$thumb_img->post_excerpt.'</figcaption>';
					}

					if ($link_full == "true") {
						$gal_images .= '


                        <div class="gallery-item" style="background-image:url('.$img[0].')">
                            <a data-fancybox href="'.$link[0].'" class="overlay-box">
                                <div class="gal-overlay">
                                    <div class="gal-icon">
                                        <i class="fa fa-plus"></i>
                                        '.$after_img.'
                                    </div>
                                </div>
                            </a>
                        </div>


                        ';
					} else {
						$gal_images .= '
                            <div class="gallery-item" style="background-image:url('.$img[0].')">
                            </div>

                        ';
					}
				}

			}


			$output .= '<div class="nz-gallery nz-clearfix" data-columns="'.absint($columns).'">'.$gal_images.'</div>';
			return $output;
		}
	}
	add_shortcode('grid_gallery','themee_grid_gallery');
