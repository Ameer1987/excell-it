<?php
$this->Paginator->options(array(
    'url' => $usersTableURL,
    'update' => '.users.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('email', __d('admin', 'email'), array('model' => $usersTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('modified', __d('admin', 'modified'), array('model' => $usersTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user[$usersTableModelAlias]['email']); ?>&nbsp;</td>
		<td><?php echo (empty($user[$usersTableModelAlias]['modified']) || '0000-00-00 00:00:00' == $user[$usersTableModelAlias]['modified'] || '1970-01-01 01:00:00' == $user[$usersTableModelAlias]['modified']) ? '' : $this->Time->format('d/m/Y', $user[$usersTableModelAlias]['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_users', 'action' => 'view', $user[$usersTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_users', 'action' => 'edit', $user[$usersTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_users', 'action' => 'delete', $user[$usersTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $user[$usersTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $usersTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $usersTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $usersTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $usersTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();