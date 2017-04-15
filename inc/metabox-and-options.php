<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

function themee_theme_page_metabox($options){
    
  $options      = array(); // remove old options

   
    
     // -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'themee_page_options',
  'title'     => 'Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'themee_page_options_meta',
       
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'enable_title',
          'type'  => 'switcher',
          'title' => 'Enable Title?',
          'default' => true,
          'desc' => esc_html__('If you want to enable title,select yes.', 'themee'),
        ),
        // end: a field
    
      // begin: a field
        array(
          'id'    => 'enable_content',
          'type'  => 'switcher',
          'title' => 'Enable Content?',
          'default' => true,
          'desc' => esc_html__('If you want to enable content,select yes.', 'themee'),
        ),
        // end: a field

    /*   
      array(
          'id'    => 'section_1_textarea',
          'type'  => 'textarea',
          'title' => 'Textarea Field',
        ),
        
        array(
          'id'    => 'section_1_upload',
          'type'  => 'upload',
          'title' => 'Upload Field',
        ),
        
        array(
          'id'    => 'section_1_switcher',
          'type'  => 'switcher',
          'title' => 'Switcher Field',
          'label' => 'Yes, Please do it.',
        ), 
      
      */
    
    
    
      ), // end: fields
    ), // end: a section
 ),
);
// -----------------------------------------
// Slide Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'themee_slide_options',
  'title'     => 'Slide Options',
  'post_type' => 'slide',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'themee_slide_options_meta',

      // begin: fields
      'fields' => array(

       array(
  'id'              => 'buttons',
  'type'            => 'group',
  'title'           => 'Slide Buttons',
  'button_title'    => 'Add New',
  'accordion_title' => 'Add New Button',
  'fields'          => array(
    array(
      'id'    => 'type',
      'type'  => 'select',
      'title' => 'Button Type',
      'desc' => 'Select Button Type',
    'options'  => array(
    'bordered'  => 'Bordered Button',
     'filled' => 'Filled Button',
  ),
   
    ),
    array(
      'id'    => 'text',
      'type'  => 'text',
      'title' => 'Button Text',
      'desc' => 'Type Button Text',
      'default' => 'Go to admission',
    ),
       array(
      'id'    => 'link_type',
      'type'  => 'select',
      'title' => 'Link Type',
      'desc' => 'Select Link Type',
    'options'  => array(
     '1'  => 'Wordpress Page',
     '2' => 'External Link',
  ),
   
    ),  
    
    array(
      'id'    => 'link_to_page',
      'type'  => 'select',
      'title' => 'Select Page',
    'options'  => 'page',
    'dependency'   => array( 'link_type', '==', '1' ),
   
    ),    
    
      array(
      'id'    => 'link_to_external',
      'type'  => 'text',
      'title' => 'Type URL', 
      'dependency'   => array( 'link_type', '==', '2' ),
   
    ),
  ),
),
    array(
  'id'    => 'enable_overlay',
  'type'  => 'switcher',
  'default'  => true,
  'title' => 'Enable or Disable Overlay',
),
    array(
  'id'    => 'overlay_percentage', // this is must be unique
  'type'  => 'text',
  'default'  => '70',
  'title' => 'Overlay Percentage',
  'desc' => 'Type Overlay Percentage in Number.',
),
    
    array(
  'id'    => 'overlay_color',
  'type'  => 'color_picker',
  'title' => 'Overlay Color',
  'default' => '#181a1f',
),






    
    /*
      // begin: a field
        array(
          'id'    => 'enable_content',
          'type'  => 'switcher',
          'title' => 'Enable Content?',
          'default' => true,
          'desc' => esc_html__('If you want to enable content,select yes.', 'themee'),
        ),
        // end: a field

     
    */
    
    
      ), // end: fields
    ), // end: a section
 ),
);



  return $options;
    
    
}
add_filter( 'cs_metabox_options', 'themee_theme_page_metabox' );