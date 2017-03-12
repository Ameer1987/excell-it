<div class="serviceSnippetPoints view">
<h2><?php echo __('Service Snippet Point'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serviceSnippetPoint['ServiceSnippetPoint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point Detail'); ?></dt>
		<dd>
			<?php echo h($serviceSnippetPoint['ServiceSnippetPoint']['point_detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Snippets'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceSnippetPoint['ServiceSnippets']['id'], array('controller' => 'service_snippets', 'action' => 'view', $serviceSnippetPoint['ServiceSnippets']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service Snippet Point'), array('action' => 'edit', $serviceSnippetPoint['ServiceSnippetPoint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service Snippet Point'), array('action' => 'delete', $serviceSnippetPoint['ServiceSnippetPoint']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $serviceSnippetPoint['ServiceSnippetPoint']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Snippet Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Snippet Point'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Snippets'), array('controller' => 'service_snippets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Snippets'), array('controller' => 'service_snippets', 'action' => 'add')); ?> </li>
	</ul>
</div>
