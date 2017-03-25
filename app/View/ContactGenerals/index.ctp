<div class="contactGenerals index">
	<h2><?php echo __('Contact Generals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook_link'); ?></th>
			<th><?php echo $this->Paginator->sort('linkedin_link'); ?></th>
			<th><?php echo $this->Paginator->sort('skype_link'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('position_latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('position_longitude'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contactGenerals as $contactGeneral): ?>
	<tr>
		<td><?php echo h($contactGeneral['ContactGeneral']['id']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['name']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['details']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['address']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['facebook_link']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['linkedin_link']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['skype_link']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['email']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['position_latitude']); ?>&nbsp;</td>
		<td><?php echo h($contactGeneral['ContactGeneral']['position_longitude']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactGeneral['ContactGeneral']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactGeneral['ContactGeneral']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactGeneral['ContactGeneral']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contactGeneral['ContactGeneral']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Contact General'), array('action' => 'add')); ?></li>
	</ul>
</div>
