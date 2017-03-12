<div class="homeMiddleSnippets index">
	<h2><?php echo __('Home Middle Snippets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('header'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th><?php echo $this->Paginator->sort('order'); ?></th>
			<th><?php echo $this->Paginator->sort('image_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($homeMiddleSnippets as $homeMiddleSnippet): ?>
	<tr>
		<td><?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['id']); ?>&nbsp;</td>
		<td><?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['header']); ?>&nbsp;</td>
		<td><?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['details']); ?>&nbsp;</td>
		<td><?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['order']); ?>&nbsp;</td>
		<td><?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['image_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $homeMiddleSnippet['HomeMiddleSnippet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $homeMiddleSnippet['HomeMiddleSnippet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $homeMiddleSnippet['HomeMiddleSnippet']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $homeMiddleSnippet['HomeMiddleSnippet']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Home Middle Snippet'), array('action' => 'add')); ?></li>
	</ul>
</div>
