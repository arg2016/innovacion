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
    <?php foreach ($slides as $slide) { ?>
        <li>
            <a href="<?php echo $slide->link; ?>">
                <img src="<?php echo JURI::root().$slide->image; ?>" alt="">
                <span><?php echo $slide->title; ?></span>
            </a>
        </li>
     <?php  }  ?>
   
    </ul>
    <div id="bullets"></div>
    <!-- End of the Boutique HTML -->
</div>


<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">

</div>