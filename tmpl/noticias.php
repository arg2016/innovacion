<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
$document->addStyleSheet(JURI::root(true) . '/modules/' . $module->module . '/assets/noticias/jquery.booklet.latest.css');
$document->addScript(JURI::root(true) . '/modules/' . $module->module . '/assets/noticias/jquery.booklet.latest.min.js');
$auto=0;
if ($params->get('autoplay')==0)
{
    $auto='false';
}else
{
    $auto='true';
}
?>


<div id="mybook">
    
    <?php foreach ($slides as $slide) { ?>
    <div class="hoja" title="<?php echo $slide->title; ?>">

        <div class="titulo-nota">
            <h3><?php if($params->get('show_title')) {echo $slide->title;} ?></h3>
        </div>
        <div class="imagen-nota">
            <img src="<?php echo JURI::root().$slide->image; ?>" alt="<?php echo $slide->title; ?>">
        </div>
        <div class="contenido-nota">
            
           <?php 
            if($params->get('show_desc'))
            {
           echo $slide->description; 
            }
           ?>

        </div>
        <div class="pie">
            <hr>
            <a href="#">Leer mas</a>
        </div>

    </div>
    <?php  }  ?>


</div>


<script>
    jQuery(function () {
        jQuery("#mybook").booklet({
            width: '100%',
            auto:<?php echo $auto; ?>,
            tabs: true,
            tabWidth: 180,
            tabHeight: 20,
            nextControlText: "Siguiente",
            previousControlText: "Anterior",
            height: 650
        });

    });
</script>