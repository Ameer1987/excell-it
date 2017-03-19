<?php
$this->Paginator->options(array(
    'url' => $contactsTableURL,
    'update' => '.contacts.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('name', __d('admin', 'name'), array('model' => $contactsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('details', __d('admin', 'details'), array('model' => $contactsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('mobile', __d('admin', 'mobile'), array('model' => $contactsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('position_latitude', __d('admin', 'position_latitude'), array('model' => $contactsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('position_longitude', __d('admin', 'position_longitude'), array('model' => $contactsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('phone', __d('admin', 'phone'), array('model' => $contactsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('address', __d('admin', 'address'), array('model' => $contactsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('facebook_link', __d('admin', 'facebook_link'), array('model' => $contactsTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo h($contact[$contactsTableModelAlias]['name']); ?>&nbsp;</td>
		<td><?php echo h($contact[$contactsTableModelAlias]['details']); ?>&nbsp;</td>
		<td><?php echo h($contact[$contactsTableModelAlias]['mobile']); ?>&nbsp;</td>
		<td><?php echo h($contact[$contactsTableModelAlias]['position_latitude']); ?>&nbsp;</td>
		<td><?php echo h($contact[$contactsTableModelAlias]['position_longitude']); ?>&nbsp;</td>
		<td><?php echo h($contact[$contactsTableModelAlias]['phone']); ?>&nbsp;</td>
		<td><?php echo h($contact[$contactsTableModelAlias]['address']); ?>&nbsp;</td>
		<td><?php echo h($contact[$contactsTableModelAlias]['facebook_link']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_contacts', 'action' => 'view', $contact[$contactsTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_contacts', 'action' => 'edit', $contact[$contactsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php // echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_contacts', 'action' => 'delete', $contact[$contactsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $contact[$contactsTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $contactsTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $contactsTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $contactsTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $contactsTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();