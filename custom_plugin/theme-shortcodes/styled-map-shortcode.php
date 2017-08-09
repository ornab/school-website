<?php
function themee_styled_map_shortcode($atts, $content = null) {

    extract( shortcode_atts( array(
        'lat' => '22.865828',
        'lng' => '91.102454',
        'title' => 'Noakhali Gov. Girls School',
        'desc' => ' Maijdee Court, Noakhali',
        'height' => '500',
    ), $atts) );

    $dynamic_map_id = rand(42587942, 382947283);

    $themee_styled_map_markup = '
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA&region=US"></script>
        <div style="width:100%;height:'.$height.'px" id="themee-map-'.$dynamic_map_id.'"></div>
        <script>
        jQuery(document).ready(function($) {
            var themeemap'.$dynamic_map_id.' = {lat: '.$lat.', lng: '.$lng.'};
            $("#themee-map-'.$dynamic_map_id.'")
                .gmap3({
                    center: themeemap'.$dynamic_map_id.',
                    zoom:15,
                    scrollwheel: false,
                    mapTypeId: "shadeOfGrey",
                })
                .marker({
                    position: themeemap'.$dynamic_map_id.',
                    icon: "'.plugin_dir_url( __FILE__ ).'../assets/img/marker.png"
                })
                .infowindow({
                    position: themeemap'.$dynamic_map_id.',
                    content: "<h4>'.$title.'</h4>'.$desc.'",
                    pixelOffset: new google.maps.Size(0,-20)
                })
                .then(function (infowindow) {
                    infowindow.open(this.get(0)); // this.get(0) return the map (see "get" feature)
                })
                .styledmaptype(
                    "shadeOfGrey",
                    [


                      {"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#909090"},{"lightness":40}]},
                      {"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                      {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#f7f7f7"},{"lightness":20}]},
                      {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#f7f7f7"},{"lightness":17},{"weight":1.2}]},
                      {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f7f7f7"},{"lightness":20}]},
                      {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f7f7f7"},{"lightness":21}]},
                      {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},
                      {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},
                      {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
                      {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},
                      {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":19}]},
                      {"featureType":"water","elementType":"geometry","stylers":[{"color":"#ededed"},{"lightness":17}]}
                ],
                {name: "Shades of Grey"}
            );
        });
        </script>
    ';

    return $themee_styled_map_markup;

}
add_shortcode('themee_styled_map', 'themee_styled_map_shortcode');
