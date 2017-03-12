<div class="homeMiddleSnippets form">
<?php echo $this->Form->create('HomeMiddleSnippet'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Home Middle Snippet'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HomeMiddleSnippet.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('HomeMiddleSnippet.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Home Middle Snippets'), array('action' => 'index')); ?></li>
	</ul>
</div>
