<div class="serviceSnippetPoints form">
<?php echo $this->Form->create('ServiceSnippetPoint'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Service Snippet Point'); ?></legend>
	<?php
		echo $this->Form->input('point_detail');
		echo $this->Form->input('service_snippets_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Service Snippet Points'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Service Snippets'), array('controller' => 'service_snippets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Snippets'), array('controller' => 'service_snippets', 'action' => 'add')); ?> </li>
	</ul>
</div>
