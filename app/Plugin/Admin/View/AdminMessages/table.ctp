<?php
$this->Paginator->options(array(
    'url' => $messagesTableURL,
    'update' => '.messages.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('name', __d('admin', 'name'), array('model' => $messagesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('email', __d('admin', 'email'), array('model' => $messagesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('phone', __d('admin', 'phone'), array('model' => $messagesTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($messages as $message): ?>
	<tr>
		<td><?php echo h($message[$messagesTableModelAlias]['name']); ?>&nbsp;</td>
		<td><?php echo h($message[$messagesTableModelAlias]['email']); ?>&nbsp;</td>
		<td><?php echo h($message[$messagesTableModelAlias]['phone']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_messages', 'action' => 'view', $message[$messagesTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_messages', 'action' => 'edit', $message[$messagesTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_messages', 'action' => 'delete', $message[$messagesTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $message[$messagesTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $messagesTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $messagesTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $messagesTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $messagesTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();