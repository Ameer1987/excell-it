<div class="serviceSnippets form">
<?php echo $this->Form->create('ServiceSnippet'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Service Snippet'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ServiceSnippet.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ServiceSnippet.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Service Snippets'), array('action' => 'index')); ?></li>
	</ul>
</div>
