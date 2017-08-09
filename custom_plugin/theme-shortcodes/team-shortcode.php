<?php 

function team_shortcode($atts){
    extract( shortcode_atts( array(
        
        'count'       => -1,
		'display'     => 3,
        'title_color' => '#03A9F4',
        
     ), $atts) );
    
 $q = new WP_Query( array(
    'posts_per_page' => $count,
    'post_type'  => 'team',
 )); 
    
 $team_markup = '
 <div class="team-section">
    <div class="row">
 ';
    
  while($q->have_posts()) : $q->the_post();  
  
    $idd = get_the_ID();
    $post_content = get_the_content();
    
    
 if( $display == 1 ){
     $team_markup .= '<div class="col-md-6">';
 } elseif( $display == 2 ){
    $team_markup .= '<div class="col-md-4">'; 
 } else {
    $team_markup .= '<div class="col-md-3">'; 
 }  
    
 $team_markup .= '
    <div class="team-box">
        <div class="team-img">
            <a href="'.get_permalink().'">
                <img src="'.get_the_post_thumbnail_url($idd, 'full').'" alt="'.get_the_title($idd).'" />
            </a>
        </div>
        <div class="team-content">
            <h5 style="color:'.$title_color.'">'.get_the_title($idd).'</h5>
            '.wpautop($post_content).'
        </div>
    </div>
  ';
 
 $team_markup .= '</div>';
    
 endwhile;   
    
 $team_markup .= '</div>';
 $team_markup .= '</div>';
    
 wp_reset_query();
    
 return $team_markup;
    
}

add_shortcode( 'team', 'team_shortcode' );