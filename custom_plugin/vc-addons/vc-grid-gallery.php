<?php

				/*  GALLERY              (CONTENT)
			/*-------------------------------*/

				vc_map(array(
		    		'name'                    => "Grid Gallery",
		    		'base'                    => "grid_gallery",
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Themee", "my-text-domain"),
		    		'icon'                    => 'icon-gallery',
		    		'js_view'                 => '',
		    		'description'             => 'Insert image gallery',
		    		'params'                  => array(
		    			array(
							"type"       => "attach_images",
							"class"      => "",
							"heading"    => "Upload images",
							"param_name" => "images",
						),
						array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Link to full image?",
							"param_name" => "link_full",
							"value"      => array(
								"false" => 'false',
								"true"  => 'true'
							)
						),

						array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Columns",
							"param_name" => "columns",
							"value"      => array(
								"1" => '1',
								"2" => '2',
								"3" => '3',
								"4" => '4',
								"5" => '5',
								"6" => '6',
								"7" => '7',
								"8" => '8',
								"9" => '9'
							),
						),

		    		)
		    	));
