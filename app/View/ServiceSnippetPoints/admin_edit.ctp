<div class="serviceSnippetPoints form">
<?php echo $this->Form->create('ServiceSnippetPoint'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Service Snippet Point'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('point_detail');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ServiceSnippetPoint.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ServiceSnippetPoint.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Service Snippet Points'), array('action' => 'index')); ?></li>
	</ul>
</div>
