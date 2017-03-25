<?php
$this->Paginator->options(array(
    'url' => $contactBranchesTableURL,
    'update' => '.contactBranches.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('name', __d('admin', 'name'), array('model' => $contactBranchesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('details', __d('admin', 'details'), array('model' => $contactBranchesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('mobile', __d('admin', 'mobile'), array('model' => $contactBranchesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('phone', __d('admin', 'phone'), array('model' => $contactBranchesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('facebook_link', __d('admin', 'facebook_link'), array('model' => $contactBranchesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('linkedin_link', __d('admin', 'linkedin_link'), array('model' => $contactBranchesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('skype_link', __d('admin', 'skype_link'), array('model' => $contactBranchesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('email', __d('admin', 'email'), array('model' => $contactBranchesTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($contactBranches as $contactBranch): ?>
	<tr>
		<td><?php echo h($contactBranch[$contactBranchesTableModelAlias]['name']); ?>&nbsp;</td>
		<td><?php echo h($contactBranch[$contactBranchesTableModelAlias]['details']); ?>&nbsp;</td>
		<td><?php echo h($contactBranch[$contactBranchesTableModelAlias]['mobile']); ?>&nbsp;</td>
		<td><?php echo h($contactBranch[$contactBranchesTableModelAlias]['phone']); ?>&nbsp;</td>
		<td><?php echo h($contactBranch[$contactBranchesTableModelAlias]['facebook_link']); ?>&nbsp;</td>
		<td><?php echo h($contactBranch[$contactBranchesTableModelAlias]['linkedin_link']); ?>&nbsp;</td>
		<td><?php echo h($contactBranch[$contactBranchesTableModelAlias]['skype_link']); ?>&nbsp;</td>
		<td><?php echo h($contactBranch[$contactBranchesTableModelAlias]['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_contact_branches', 'action' => 'view', $contactBranch[$contactBranchesTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_contact_branches', 'action' => 'edit', $contactBranch[$contactBranchesTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_contact_branches', 'action' => 'delete', $contactBranch[$contactBranchesTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $contactBranch[$contactBranchesTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $contactBranchesTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $contactBranchesTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $contactBranchesTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $contactBranchesTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();