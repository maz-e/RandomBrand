<?php
// No direct access
defined('_JEXEC') or die;

$menu = $app->getMenu();
$item_menu = $menu->getItem($params->get('mymenuitem'));
$conta = 0;
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
		<div class="col s6 m3 l2 <?php if($conta > 5) {echo 'hide-on-small-only'; } ?>">
			<a href="<?php echo $item->webpage; ?>" target="_blank">
				<img class="responsive-img hoverable brand-img" src="<?php echo $item->logo; ?>" alt="<?php echo $item->brand_name; ?>">
			</a>
		</div>
	<?php $conta++; ?>
	<?php } ?>
	</div>
	<a class="waves-effect waves-light btn red" href="index.php/<?php echo htmlspecialchars($item_menu->route); ?>">
		<!-- Ver más... -->
		<?php echo JText::_('MOD_RANDOMBRAND_SEEMORE'); ?>
	</a>
