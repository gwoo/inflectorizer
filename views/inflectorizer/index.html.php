<?php if (isset($result)):?>
	<h2><?=$this->title("{$method} {$text} => {$result}");?></h2>
<?php endif;?>

<?=$this->form->create(null, array('action' => 'display')); ?>
	<?=$this->form->field('method', array(
		'type' => 'select', 'list' => $methods, 'value' => $method
	)); ?>
	<?=$this->form->field('text', array('value' => $text)); ?>
	<?=$this->form->submit('inflect me baby!'); ?>
<?=$this->form->end(); ?>