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
		<li><?php echo $this->Html->link(__('New Service Snippet Point'), array('controller' => 'service_snippet_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Service Snippet Points'); ?></h3>
	<?php if (!empty($serviceSnippet['ServiceSnippetPoint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Point Detail'); ?></th>
		<th><?php echo __('Service Snippet Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($serviceSnippet['ServiceSnippetPoint'] as $serviceSnippetPoint): ?>
		<tr>
			<td><?php echo $serviceSnippetPoint['id']; ?></td>
			<td><?php echo $serviceSnippetPoint['point_detail']; ?></td>
			<td><?php echo $serviceSnippetPoint['service_snippet_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'service_snippet_points', 'action' => 'view', $serviceSnippetPoint['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'service_snippet_points', 'action' => 'edit', $serviceSnippetPoint['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'service_snippet_points', 'action' => 'delete', $serviceSnippetPoint['id']), array('confirm' => __('Are you sure you want to delete # %s?', $serviceSnippetPoint['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service Snippet Point'), array('controller' => 'service_snippet_points', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
