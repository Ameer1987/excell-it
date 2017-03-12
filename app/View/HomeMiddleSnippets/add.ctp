<div class="homeMiddleSnippets form">
<?php echo $this->Form->create('HomeMiddleSnippet'); ?>
	<fieldset>
		<legend><?php echo __('Add Home Middle Snippet'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Home Middle Snippets'), array('action' => 'index')); ?></li>
	</ul>
</div>
