<div class="serviceSnippets form">
<?php echo $this->Form->create('ServiceSnippet'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Service Snippet'); ?></legend>
	<?php
		echo $this->Form->input('header');
		echo $this->Form->input('intro');
		echo $this->Form->input('image_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Service Snippets'), array('action' => 'index')); ?></li>
	</ul>
</div>
