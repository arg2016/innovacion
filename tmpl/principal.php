<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
$document->addStyleSheet(JURI::root(true) . '/modules/' . $module->module . '/assets/principal/boutique.css');
$document->addScript(JURI::root(true) . '/modules/' . $module->module . '/assets/principal/jquery.boutique.min.js');
?>

<script>
jQuery(document).ready(function(){jQuery.each(jQuery("#boutique").children("li"),function(){jQuery("#bullets").append('<div class="bullet" />')}),jQuery(".bullet").first().addClass("active"),jQuery(".bullet").click(function(){var e=jQuery(this).index();boutique_goto(e+1)}),jQuery("#boutique").boutique({container_width:"auto",autoplay:!0,front_img_width:700,front_img_height:380})});var pre_move_callback=function(e,u,t){jQuery("#bullets").children(".active").removeClass("active"),jQuery(".bullet").eq(t-1).addClass("active")};
</script>

<div id="contenidoSlider">
    <!-- The Boutique HTML: -->
    <ul id="boutique">
    <?php foreach ($slides as $slide) { ?>
        <li>
            <a href="<?php echo $slide->link; ?>">
                <img src="<?php echo JURI::root().$slide->image; ?>" alt="">
                <span class="item_titulo">
                    <?php if($params->get('show_title')) {echo $slide->title;} ?>
                    <?php if($params->get('show_desc'))  {echo $slide->description; }?>
                </span>
            </a>
        </li>
     <?php  }  ?>
   
    </ul>
    <div id="bullets"></div>
    <!-- End of the Boutique HTML -->
    
    
</div>

<?php 
echo '<script>        
                    jQuery( document ).ready(function() {
                    if("'.JURI::root().'"==="'.JURI::current().'"||"'.JURI::root().'index.php"==="'.JURI::current().'")
                    {
                         jQuery("div#contenidoSlider").css("display","block"); 
                    }else {
                         jQuery("div#contenidoSlider").css("display","none"); 
                    }
                });</script>';

?>