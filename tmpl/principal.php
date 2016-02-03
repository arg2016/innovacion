<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

$document->addStyleSheet(JURI::root(true) . '/modules/' . $module->module . '/assets/principal/boutique.css');
$document->addScript(JURI::root(true) . '/modules/' . $module->module . '/assets/principal/jquery.boutique.min.js');
?>

<script>
    // Calling Boutique on your HTML element when the document is ready:
    jQuery(document).ready(function () {

        // Generate bullets
        jQuery.each(jQuery('#boutique').children('li'), function () {
            jQuery('#bullets').append('<div class="bullet" />');
        });
        jQuery('.bullet').first().addClass('active');

        // Bullet click event
        jQuery('.bullet').click(function () {
            var index = jQuery(this).index();
            boutique_goto(index + 1);
        });

        // Initiate Boutique
        jQuery('#boutique').boutique({
            container_width: 'auto',
            autoplay:true,
            front_img_width: 700,
            front_img_height: 380
        });
    });
    // Change the active bullet to match current frame
    var pre_move_callback = function (href, containerid, framenumber) {
        jQuery('#bullets').children('.active').removeClass('active');
        jQuery('.bullet').eq(framenumber - 1).addClass('active');
    }
</script>

<div id="contenidoSlider">
    <!-- The Boutique HTML: -->
    <ul id="boutique">
        <li>
            <a href="#">
                <img src="http://localhost/innovacion/modules/mod_djimageslider/assets/principal/Desert.jpg" alt="">
                <span>Description 1.</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="http://localhost/innovacion/modules/mod_djimageslider/assets/principal/BANNER_MUJER_INDIGENA.jpg" alt="">
                <span>RECEPCION DE SOLICITUDES HASTA EL 04 DE MARZO DE 2016</span>
            </a>
        </li>
        <li><img src="http://localhost/innovacion/modules/mod_djimageslider/assets/principal/image7.jpg"></li>
        <li><img src="http://localhost/innovacion/modules/mod_djimageslider/assets/principal/image6.jpg"></li>

        <li><img src="http://localhost/innovacion/modules/mod_djimageslider/assets/principal/image9.jpg"></li>
    </ul>
    <div id="bullets"></div>
    <!-- End of the Boutique HTML -->
</div>