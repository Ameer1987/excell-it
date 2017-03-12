<div class="serviceSnippetPoints index">
	<h2><?php echo __('Service Snippet Points'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('point_detail'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($serviceSnippetPoints as $serviceSnippetPoint): ?>
	<tr>
		<td><?php echo h($serviceSnippetPoint['ServiceSnippetPoint']['id']); ?>&nbsp;</td>
		<td><?php echo h($serviceSnippetPoint['ServiceSnippetPoint']['point_detail']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $serviceSnippetPoint['ServiceSnippetPoint']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $serviceSnippetPoint['ServiceSnippetPoint']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $serviceSnippetPoint['ServiceSnippetPoint']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $serviceSnippetPoint['ServiceSnippetPoint']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Service Snippet Point'), array('action' => 'add')); ?></li>
	</ul>
</div>
