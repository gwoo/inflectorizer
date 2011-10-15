<?php if (isset($result)):?>
	<h2>Result: <?=$result;?></h2>
<?php endif;?>

<?=$this->form->create(null, array('action' => 'display')); ?>
	<?=$this->form->field('method', array('type' => 'select', 'list' => $methods)); ?>
	<?=$this->form->field('text', array('value' => $text)); ?>
	<?=$this->form->submit('inflect me baby!'); ?>
<?=$this->form->end(); ?>