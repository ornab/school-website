<?php


function health_project_shortcode($atts, $content = null){
    
    extract( shortcode_atts( array(
        'title' => '',
        'theme' => '1',
        
    ), $atts) ); 
    
    $project_categories = get_terms('project_cat');
    
    $dynamic_numbr = rand(6546331, 2487563);
    
    $theme_project_markup = '
    
    <script>
    
        jQuery(document).ready(function($){
           $(".theme-projet-s-active li").click(function(){
            
                $(".theme-projet-s-active li").removeClass("active");
                $(this).addClass("active");
                
                var selector = $(this).attr("data-filter");
                $(".project-list-'.$dynamic_numbr.'").isotope({
                    filter: selector,
                });
                
           });  
             
        });
    
        jQuery(window).load(function(){
             jQuery(".project-list-'.$dynamic_numbr.'").isotope();
        });
        
    </script>
    
  <div class="container">  
    <div class="row">';
    
    if( $theme == '1' ) {
        $theme_project_markup .=  '<div class="col-md-3">';
        $project_list_class = 'theme-project-sorting';
    } else {
        $theme_project_markup .=  '<div class="col-md-12">';
        $project_list_class = 'theme-project-sorting-two';
    }
    
        
        $theme_project_markup .='
            <ul class="theme-projet-s-active '.$project_list_class.' project_sortin_'.$theme.'">
                <li data-filter="*" class="active">All Works</li>';
    
      if(!empty($project_categories) && ! is_wp_error( $project_categories )  ) {
          
          foreach( $project_categories as $category ){
             $theme_project_markup .= '<li data-filter=".'.$category->slug.'">'.$category->name.'</li>';
          }
      }
    
                
      $theme_project_markup .= '</ul>';
      
      
      $theme_project_markup .=' 
        </div>';
        
      if( $theme == '1' ) {
          $project_column_width = 'col-md-9';
          $project_inner_column_width = 'col-md-4';
      } else  {
          $project_column_width = 'col-md-12';
          $project_inner_column_width = 'col-md-3';
      }
    
      $theme_project_markup .= '<div class="'.$project_column_width.'">';
      
      
      $theme_project_markup .='
      <div class="row project-list-'.$dynamic_numbr.'">';
      
        $q = new WP_Query( array(
        'posts_per_page' => -1,
        'post_type'  => 'project',
        ));   
    
       while($q->have_posts()) : $q->the_post();  
    
       $project_catgory =  get_the_terms( get_the_ID(), 'project_cat' ); 
  
    if( $project_catgory && ! is_wp_error( $project_catgory )  ) {
        $project_cat_list = array();
        
        foreach( $project_catgory  as $catgory ) {
             $project_cat_list[] = $catgory->slug;
        }
        
        $project_assigned_cat = join( " ", $project_cat_list );
        
    } else {
        $project_assigned_cat = '';
    }
    
       $theme_project_markup .= '  
                <div class="'.$project_inner_column_width.' '.$project_assigned_cat.'">
                    <a href="'.get_permalink().'" class="single-work-box">
                        <div class="work-box-bg" style="background-image:url('.get_the_post_thumbnail_url(get_the_ID(), 'large').')"><i class="fa fa-link"></i></div>
                        <p>'.get_the_title().'</p>
                    </a>
                </div>';
    
       endwhile;
    
       wp_reset_query();
    
       $theme_project_markup .= ' 
       
            </div>
        </div>
    </div>
</div>
    
    ';
    
    return $theme_project_markup;
    
    
}
add_shortcode('health_projects', 'health_project_shortcode');