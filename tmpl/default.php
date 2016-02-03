<?php
// no direct access
defined('_JEXEC') or die ('Restricted access'); 

$document->addStyleSheet(JURI::root(true) . '/modules/' . $module->module . '/assets/camera.css');
    $document->addScript(JURI::root(true) . '/modules/' . $module->module . '/assets/jquery.mobile.customized.min.js');
    $document->addScript(JURI::root(true) . '/modules/' . $module->module . '/assets/jquery.easing.1.3.js');
    $document->addScript(JURI::root(true) . '/modules/' . $module->module . '/assets/camera.min.js');
?>

<script>
jQuery(function(){jQuery("#camera_wrap_1").camera({thumbnails:!0,height:"411px", hover: !1, pagination: !1})
    });
</script>
<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
    
    <?php foreach ($slides as $slide) { ?>
        <div data-link="<?php echo $slide->link; ?>" data-target ="<?php echo $slide->target; ?>" data-thumb="<?php echo JURI::root(). $slide->image; ?>" data-src="<?php echo JURI::root().$slide->image; ?>">
            <div class="camera_caption fadeFromBottom">
                <?php echo $slide->title; ?>
                <br>
                <?php if($params->get('show_desc')) { ?>
                <?php echo strip_tags($slide->description,"<br><span><em><i><b><strong><small><big>"); ?>
                <?php }?>
            </div>
        </div>
    <?php  }  ?>
</div>


<?php
    if ( $params->get('show_slider')==0)
    {
        echo '<script>        
                    jQuery( document ).ready(function() {
                    if("'.JURI::root().'"==="'.JURI::current().'"||"'.JURI::root().'index.php"==="'.JURI::current().'")
                    {
                         jQuery("div#camera_wrap_1").css("display","block"); 
                    }else {
                         jQuery("div#camera_wrap_1").css("display","none"); 
                    }
                });</script>';
    }
 ?>
