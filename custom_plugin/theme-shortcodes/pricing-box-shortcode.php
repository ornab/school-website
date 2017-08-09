<?php 

// Pricing Box shortcode

function health_pricing_shortcode( $atts, $content = null ){
  extract( shortcode_atts( array(
    'title' => '',
    'price' => '',
    'currency' => '',
    'btn_link'  => '',
    'btn_text' => 'Purchase',
  
  ), $atts) );
     
    
 $pricing_marlup = '
 
<div class="pricing-box text-center">
    <h3 class="pbox-title">'.$title.'</h3>
    <div class="pbox-price">
        <span class="currency">'.$currency.'</span>
        <span class="price-amount">'.$price.'</span>
    </div>
    
    '.$content.'
  
      
<a href="'.$btn_link.'" class="pbox-btn">'.$btn_text.'</a>
        
</div> 
     
  ';  
    
 return $pricing_marlup;    
    
}
add_shortcode('pricing-box', 'health_pricing_shortcode');





