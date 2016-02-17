<?php
// no direct access
defined('_JEXEC') or die ('Restricted access'); 


 $document->addStyleSheet(JURI::root(true) . '/modules/' . $module->module . '/assets/jstyle.css');
$document->addScript(JURI::root(true) . '/modules/' . $module->module . '/assets/jscript.js');
?>

	<div id="lofass109" class="lof-ass">
        <div class="lofass-container  lof-css3  lof-snright">
       
        <div class="preload" style="opacity: 0; visibility: hidden;"><div></div></div>
         <!-- MAIN CONTENT -->
         <div class="lof-main-wapper" style="height:300px;width:650px;">
              <?php foreach ($slides as $slide) { ?>
             <div class="lof-main-item " style="top: 300px; height: 300px; display: block;">
                 <img src="<?php echo JURI::root() . $slide->image; ?>" title="<?php echo $slide->title; ?>">


                 <div class="lof-description">
                     <h4><a target="<?php echo $slide->target; ?>" title="<?php echo $slide->title; ?>" href="<?php echo $slide->link; ?>"><?php echo $slide->title; ?></a></h4>
                        <?php if($params->get('show_desc')) { ?>
                     <a target="_parent" title="<?php echo $slide->title; ?>" href="<?php echo $slide->link; ?>"><?php echo strip_tags($slide->description,"<br><span><em><i><b><strong><small><big>"); ?></a>
                        <?php }?>
                 </div>
             </div>
             
             <?php } ?>


         </div>
      <!-- END MAIN CONTENT -->
        <!-- NAVIGATOR -->
                      <div class="lof-buttons-control">
                  <a href="/joomla/" onclick="return false;" class="lof-previous">Previous</a>
                  <a href="/joomla/" class="lof-next" onclick="return false;">Next</a>
                </div>

              <div class="lof-navigator-outer">
                  <ul class="lof-navigator" style="top: 0px;">
                      <?php foreach ($slides as $slide) { ?>
                      <li class="" style="height: 100px; width: 310px;">
                          <div>
                              <img src="<?php echo JURI::root() . $slide->image; ?>" title="<?php echo $slide->title; ?>">
                              <h4><?php echo $slide->title; ?></h4>
                          </div>
                      </li>
                         <?php } ?>

                  </ul>
              </div>

  </div>
  </div>
 <script type="text/javascript">

  var _lofmain =  $('lofass109'); 
    
  var object = new LofSlideshow( _lofmain,
                  { 
                    fxObject:{
                    transition:Fx.Transitions.Quad.easeInOut,  
                    duration:500                    },
                    startItem:0,
                    interval:5000,
                    direction :'vrdown', 
                    navItemHeight:100,
                    navItemWidth:310,
                    navItemsDisplay:3,
                    navPos:'right'
                  } );
      object.registerButtonsControl( 'click', {next:_lofmain.getElement('.lof-next'),
                         previous:_lofmain.getElement('.lof-previous')} );
      object.start( 1, _lofmain.getElement('.preload') );

</script>
<?php
   if ( $params->get('show_slider')==0)
    {
        echo '<script>        
                    jQuery( document ).ready(function() {
                    if("'.JURI::root().'"==="'.JURI::current().'"||"'.JURI::root().'index.php"==="'.JURI::current().'")
                    {
                         jQuery("div#lofass109").css("display","block"); 
                    }else {
                         jQuery("div#lofass109").css("display","none"); 
                    }
                });</script>';
    }
 ?>


