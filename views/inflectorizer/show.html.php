<?php if (!empty($results)):?>
	<h2>Result:</h2>
	<?php foreach($results as $method => $result): ?>
		<p><?=$method?> => <?=$result?></p>
	<?php endforeach;?>
<?php endif;?>

<?=$this->form->create(null, array('action' => 'show')); ?>
	<?=$this->form->field('text', array('value' => $text)); ?>
	<?=$this->form->submit('inflect me baby!'); ?>
<?=$this->form->end(); ?>
