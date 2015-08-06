<?php
// No direct access
defined('_JEXEC') or die;
?>
<div class="row">
	<?php if($module->showtitle) : ?>
      <h4 class="center-align red-text">
         <?php echo $module->title; ?>¿Que marcas distribuimos?
      </h4>
   <?php endif; ?>
	<p class=" center-align flow-text">
      <?php echo $params->get('text_intro'); ?>Siempre trabajamos con las mejores marcas del sector garantizando a nuestros clientes materiales de alta calidad a los mejores precios.
   </p>
	<?php for ($i=0; $i < 12 ; $i++) : ?>
		<div class="col s6 m3 l2">
			<img class="responsive-img" src="http://placehold.it/200x150">
		</div>
	<?php endfor; ?>
</div>
<a class="waves-effect waves-teal btn red" href="<?php echo $params->get('mymenuitem'); ?>">
	<!-- Ver más... -->
	<?php echo JText::_('TPL_BDMATZ_SEEMORE'); ?>
</a>
