<?php
    vc_map( array(
      "name" => esc_html__( "Themee Staff Box", "my-text-domain" ),
      "base" => "themee_staff_box",
      "category" => esc_html__( "Themee", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => esc_html__( "Title", "my-text-domain" ),
            "param_name" => "title",
            "description" => esc_html__( "", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Position", "my-text-domain" ),
            "param_name" => "position",
            "description" => esc_html__( "", "my-text-domain" )
         ),
        
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Phone", "my-text-domain" ),
            "param_name" => "email",
            "description" => esc_html__( "", "my-text-domain" )
         ),
        
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Email", "my-text-domain" ),
            "param_name" => "phone",
            "description" => esc_html__( "", "my-text-domain" )
         ),
        
        array(
            "type" => "textarea",
            "heading" => esc_html__( "Description", "my-text-domain" ),
            "param_name" => "desc",
            "description" => esc_html__( "", "my-text-domain" )
         ),
        
          array(
            "type" => "attach_image",
            "heading" => esc_html__( "Photo", "my-text-domain" ),
            "param_name" => "photo",
            "description" => esc_html__( "Best Image Upload Size: 370x204", "my-text-domain" ),
            ), 
         
      )
   ) 
        
);