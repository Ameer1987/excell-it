<div class="serviceSnippets view">
<h2><?php echo __('Service Snippet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serviceSnippet['ServiceSnippet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo h($serviceSnippet['ServiceSnippet']['header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intro'); ?></dt>
		<dd>
			<?php echo h($serviceSnippet['ServiceSnippet']['intro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Snippet Points'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceSnippet['ServiceSnippetPoints']['id'], array('controller' => 'service_snippet_points', 'action' => 'view', $serviceSnippet['ServiceSnippetPoints']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($serviceSnippet['ServiceSnippet']['image_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service Snippet'), array('action' => 'edit', $serviceSnippet['ServiceSnippet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service Snippet'), array('action' => 'delete', $serviceSnippet['ServiceSnippet']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $serviceSnippet['ServiceSnippet']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Snippets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Snippet'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Snippet Points'), array('controller' => 'service_snippet_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Snippet Points'), array('controller' => 'service_snippet_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
