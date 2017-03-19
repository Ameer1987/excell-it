<div class="bottom2Blocks form">
<?php echo $this->Form->create('Bottom2Block'); ?>
	<fieldset>
		<legend><?php echo __('Add Bottom2 Block'); ?></legend>
	<?php
		echo $this->Form->input('header');
		echo $this->Form->input('text');
		echo $this->Form->input('image_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bottom2 Blocks'), array('action' => 'index')); ?></li>
	</ul>
</div>
