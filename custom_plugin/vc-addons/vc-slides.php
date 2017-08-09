<?php
    vc_map( array(
      "name" => esc_html__( "Themee Slider", "my-text-domain" ),
      "base" => "themee_slides",
      "category" => esc_html__( "Themee", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => esc_html__( "Count", "my-text-domain" ),
            "param_name" => "count",
            "value" => esc_html__( "3", "my-text-domain" ),
            "description" => esc_html__( "Select Slides Count. If you want to show unlimited slides, type -1.", "my-text-domain" )
         ),
        
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Select Slide", "my-text-domain" ),
            "param_name" => "slider_id",
            "value" =>themee_toolkit_get_slide_as_list(),
            "description" => esc_html__( "", "my-text-domain" ),
            "dependency" => array(
                "element" => "count",
                "value"   => array("1"),
             ),
            
          ),
        
        
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Loop", "my-text-domain" ),
            "param_name" => "loop",
            "std" => esc_html__( "true", "my-text-domain"),
                "value" => array(
                   'Yes' => 'true',
                   'No' => 'false',
            ),
            "description" => esc_html__( "To Enable loop, Select yes.", "my-text-domain" ),
            "dependency" => array(
                "element" => "count",
                "value"   => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
             ),
            
          ),
          
          
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Slider height", "my-text-domain" ),
            "param_name" => "height",
            "std" => esc_html__( "730", "my-text-domain"),
            "description" => esc_html__( "Type Slider Height in pixel. Numbers only.", "my-text-domain" ),
            
          ),
        
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Autoplay", "my-text-domain" ),
            "param_name" => "autoplay",
            "std" => esc_html__( "true", "my-text-domain"),
                "value" => array(
                   'Yes' => 'true',
                   'No' => 'false'
            ),
            "description" => esc_html__( "To Enable autoplay, Select yes.", "my-text-domain" ),
            "dependency" => array(
                "element" => "count",
                "value"   => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
             ),
            
          ),
        
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Autoplay Timeout", "my-text-domain" ),
            "param_name" => "autoplayTimeout",
            "std" => esc_html__( "4000", "my-text-domain"),
                "value" => array(
                '1s' => '1000',
                '2s' => '2000',
                '3s' => '3000',
                '4s' => '4000',
                '5s' => '5000',
                '6s' => '6000',
                '7s' => '7000',
                '8s' => '8000',
                '9s' => '9000',
                '10s' => '10000',
                '11s' => '11000',
                '12s' => '12000',
                '13s' => '13000',
                '14s' => '14000',
                '15s' => '15000'
            ),
            "description" => esc_html__( "Select Timeout interval", "my-text-domain" ),
            "dependency" => array(
                "element" => "count",
                "value"   => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
             ),
            
          ),
        
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Navigation", "my-text-domain" ),
            "param_name" => "nav",
            "std" => esc_html__( "true", "my-text-domain"),
                "value" => array(
                   'Yes' => 'true',
                   'No' => 'false'
            ),
            "description" => esc_html__( "To Enable nav, Select yes ", "my-text-domain" ),
            "dependency" => array(
                "element" => "count",
                "value"   => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
             ),
            
          ),
        
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Dots", "my-text-domain" ),
            "param_name" => "dots",
            "std" => esc_html__( "true", "my-text-domain"),
                "value" => array(
                   'Yes' => 'true',
                   'No' => 'false'
            ),
            "description" => __( "To Enable dots, Select yes ", "my-text-domain" ),
            "dependency" => array(
                "element" => "count",
                "value"   => array("2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"),
             ),
            
          ),
       
    
    
        
      )
   ) 
        
);