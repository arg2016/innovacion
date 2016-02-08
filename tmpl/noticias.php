<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

$document->addStyleSheet(JURI::root(true) . '/modules/' . $module->module . '/assets/noticias/jquery.booklet.latest.css');
$document->addScript(JURI::root(true) . '/modules/' . $module->module . '/assets/noticias/jquery.booklet.latest.min.js');



?>

	
	    <div id="mybook">
	        <div class="hoja" title="first page">

	            <div class="titulo-nota">
	              <h3>Convocatoria PRODEP 2016</h3>
	            </div>
              <div class="imagen-nota">
                <img src="<?php echo JURI::root(true) . '/modules/' . $module->module . '/assets/noticias/';?>BANNER_MUJER_INDIGENA.jpg" alt="test">
              </div>
              <div class="contenido-nota">
                <p>Keeping up with all the amazing science fiction and fantasy books this month may actually be a full-time job. Alastair Reynolds, Patricia McKillip, Yann Martel, Iain Pears, Lois McMaster Bujold and a ton of your other favorite authors have new books. Here are the books you absolutely must not miss in February!</p>
                <p>Keeping up with all the amazing science fiction and fantasy books this month may actually be a full-time job. Alastair Reynolds, Patricia McKillip, Yann Martel, Iain Pears, Lois McMaster Bujold and a ton of your other favorite authors have new books. Here are the books you absolutely must not miss in February!</p>

              </div>
              <div class="pie">
                <hr>
                <a href="#">Leer mas</a>
              </div>

	        </div>
	        <div class="hoja" title="second page">
            <div class="titulo-nota">
              <h3>Convocatoria PRODEP 2016</h3>
            </div>
            <div class="imagen-nota">
               <img src="<?php echo JURI::root(true) . '/modules/' . $module->module . '/assets/noticias/';?>BANNER_MUJER_INDIGENA.jpg" alt="test">
            </div>
            <div class="contenido-nota">
              <p>Keeping up with all the amazing science fiction and fantasy books this month may actually be a full-time job. Alastair Reynolds, Patricia McKillip, Yann Martel, Iain Pears, Lois McMaster Bujold and a ton of your other favorite authors have new books. Here are the books you absolutely must not miss in February!</p>
            </div>
            <div class="pie">
              <hr>
              <a href="#">Leer mas</a>
            </div>
	        </div>
	        <div title="third page">
	            <h3>Page 3</h3>
	        </div>
	        <div title="fourth page">
	            <h3>Page 4</h3>
	        </div>
	        <div title="fifth page">
	            <h3>Page 5</h3>
	        </div>
	        <div title="sixth page">
	            <h3>Page 6</h3>
	        </div>
	        <div title="seventh page">
	            <h3>Page 7</h3>
	        </div>
	        <div title="eighth page">
	            <h3>Page 8</h3>
	        </div>
	    </div>


	<script>
	    jQuery(function () {
	        jQuery("#mybook").booklet({
        width:  '100%',
        //auto:true,
        tabs:  true,
       tabWidth:  180,
       tabHeight:  20,
       nextControlText: "Siguiente",
       previousControlText:"Anterior",
        height: 650
    });

	    });
    </script>