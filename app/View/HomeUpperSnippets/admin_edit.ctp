<div class="homeUpperSnippets form">
<?php echo $this->Form->create('HomeUpperSnippet'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Home Upper Snippet'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('header');
		echo $this->Form->input('details');
		echo $this->Form->input('order');
		echo $this->Form->input('image_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HomeUpperSnippet.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('HomeUpperSnippet.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Home Upper Snippets'), array('action' => 'index')); ?></li>
	</ul>
</div>
