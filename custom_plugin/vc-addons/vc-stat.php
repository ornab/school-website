<?php
    vc_map( array(
      "name" => esc_html__( "Themee Statistics Box", "my-text-domain" ),
      "base" => "themee_stat",
      "category" => esc_html__( "Themee", "my-text-domain"),
      "params" => array(

        array(
            "type" => "textfield",
            "heading" => esc_html__( "Statistics number", "my-text-domain" ),
            "param_name" => "number",
            "description" => esc_html__( "", "my-text-domain" ),

          ),
          array(
              "type" => "textfield",
              "heading" => esc_html__( "Statistics Delay", "my-text-domain" ),
              "param_name" => "delay",
              "std" => esc_html__( "10", "my-text-domain"),
              "description" => esc_html__( "", "my-text-domain" ),

            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Statistics Time", "my-text-domain" ),
                "param_name" => "time",
                "std" => esc_html__( "1000", "my-text-domain"),
                "description" => esc_html__( "", "my-text-domain" ),

              ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Statistics after text", "my-text-domain" ),
            "param_name" => "after_text",
            "description" => esc_html__( "", "my-text-domain" ),

          ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Statistics description", "my-text-domain" ),
            "param_name" => "desc",
            "description" => esc_html__( "", "my-text-domain" ),

          ),
      )
   )

);
