<?php
    vc_map( array(
      "name" => esc_html__( "Themee Tile Gallery", "my-text-domain" ),
      "base" => "themee_tile_gallery",
      "category" => esc_html__( "Themee", "my-text-domain"),
      "params" => array(

        array(
          "type" => "attach_images",
          "heading" => esc_html__( "Upload Gallery Images", "my-text-domain" ),
          "param_name" => "images",
          "description" => esc_html__( "", "my-text-domain" ),
          ),
         array(
            "type" => "textfield",
            "heading" => esc_html__( "Height", "my-text-domain" ),
            "param_name" => "height",
            "std" => esc_html__( "310", "my-text-domain"),
            "description" => esc_html__( "Type image height in number", "my-text-domain" )
         ),

         array(
            "type" => "textfield",
            "heading" => esc_html__( "Width", "my-text-domain" ),
            "param_name" => "width",
            "std" => esc_html__( "360", "my-text-domain"),
            "description" => esc_html__( "Type image width in number", "my-text-domain" )
         )



      )
   )

);
