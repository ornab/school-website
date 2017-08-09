<?php
    vc_map( array(
      "name" => esc_html__( "Themee Head Mistress", "my-text-domain" ),
      "base" => "themee_head_mistress",
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
            "param_name" => "phone",
            "description" => esc_html__( "", "my-text-domain" )
         ),

        array(
            "type" => "textfield",
            "heading" => esc_html__( "Email", "my-text-domain" ),
            "param_name" => "email",
            "description" => esc_html__( "", "my-text-domain" )
         ),

        array(
            "type" => "textarea",
            "heading" => esc_html__( "Description", "my-text-domain" ),
            "param_name" => "description",
            "description" => esc_html__( "", "my-text-domain" )
         ),

          array(
            "type" => "attach_image",
            "heading" => esc_html__( "Photo", "my-text-domain" ),
            "param_name" => "photo",
            "description" => esc_html__( "Best Image Upload Size: 370x300", "my-text-domain" ),
            ),

            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Link type", "my-text-domain" ),
                "param_name" => "type",
                "std" => esc_html__( "1", "my-text-domain"),
                    "value" => array(
                       'Link to page' => 1,
                       'External link' => 2,
                ),
                "description" => esc_html__( "", "my-text-domain" )
            ),


            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Link to page", "my-text-domain" ),
                "param_name" => "link_to_page",
                "value" =>themee_toolkit_get_page_as_list(),
                "description" => esc_html__( "", "my-text-domain" ),
                "dependency" => array(
                    "element" => "type",
                    "value"   => array("1"),
                 ),

              ),

            array(
                "type" => "textfield",
                "heading" => esc_html__( "External link", "my-text-domain" ),
                "param_name" => "external_link",
                "description" => esc_html__( "", "my-text-domain" ),
                "dependency" => array(
                    "element" => "type",
                    "value"   => array("2"),
                 ),

              ),

             array(
                "type" => "textfield",
                "heading" => esc_html__( "Link text", "my-text-domain" ),
                "param_name" => "link_text",
                "std" => esc_html__( "See more", "my-text-domain"),
                "description" => esc_html__( "", "my-text-domain" ),

              ),

      )
   )

);
