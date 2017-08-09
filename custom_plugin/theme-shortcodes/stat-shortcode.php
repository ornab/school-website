<?php

function themee_stat_shortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'number' =>'',
        'after_text' =>'',
        'desc' => '',
        'delay'=>10,
        'time'=>1000,
    ), $atts) );

    $themee_stat_markup= '
          <script>
                  jQuery(window).load(function(){

                  jQuery(".counter").counterUp({
                    delay: 10,
                    time: 1000
                });
            });

          </script>

          ';

    $themee_stat_markup.= '

      <div class="themee-stat-box">

         <h1> <span class="counter"> '.$number.' </span> '.$after_text.' </h1>
         '.$desc.'

      </div>

    ';



    return $themee_stat_markup;

}
add_shortcode('themee_stat', 'themee_stat_shortcode');
