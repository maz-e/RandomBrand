<?php
// No direct access
defined('_JEXEC') or die;

//$app = JFactory::getApplication();
$menu = $app->getMenu();
$item_menu = $menu->getItem($params->get('mymenuitem'));
?>
	<?php if($module->showtitle) : ?>
	   <h4 class="center-align red-text">
	      <?php echo $module->title; ?>
	   </h4>
	<?php endif; ?>
	<p class=" center-align flow-text">
	   <?php echo $params->get('text_intro'); ?>
	</p>
	<div class="row">
	<?php	foreach ($random_img as $item) { ?>
		<div class="col s6 m3 l2 <?php if(current($item)>5) {echo 'hide-on-small-only'; } ?>">
			<a href="<?php echo $item->webpage; ?>">
				<img class="responsive-img hoverable margin-bottom" src="<?php echo $item->logo; ?>" alt="<?php echo $item->brand_name; ?>">
			</a>
		</div>
	<?php } ?>
	</div>
	<a class="waves-effect waves-teal btn red" href="<?php echo htmlspecialchars($item_menu->route); ?>">
		<!-- Ver más... -->
		<?php echo JText::_('TPL_BDMATZ_SEEMORE'); ?>
	</a>
