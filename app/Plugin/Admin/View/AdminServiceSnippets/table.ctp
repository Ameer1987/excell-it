<?php
$this->Paginator->options(array(
    'url' => $serviceSnippetsTableURL,
    'update' => '.serviceSnippets.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('header', __d('admin', 'header'), array('model' => $serviceSnippetsTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($serviceSnippets as $serviceSnippet): ?>
	<tr>
		<td><?php echo h($serviceSnippet[$serviceSnippetsTableModelAlias]['header']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_service_snippets', 'action' => 'view', $serviceSnippet[$serviceSnippetsTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_service_snippets', 'action' => 'edit', $serviceSnippet[$serviceSnippetsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php // echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_service_snippets', 'action' => 'delete', $serviceSnippet[$serviceSnippetsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $serviceSnippet[$serviceSnippetsTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $serviceSnippetsTableModelAlias
));
?></p>


<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $serviceSnippetsTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $serviceSnippetsTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $serviceSnippetsTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();