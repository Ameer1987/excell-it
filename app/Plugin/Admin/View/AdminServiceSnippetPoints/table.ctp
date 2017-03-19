<?php
$this->Paginator->options(array(
    'url' => $serviceSnippetPointsTableURL,
    'update' => '.serviceSnippetPoints.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('point_detail', __d('admin', 'point_detail'), array('model' => $serviceSnippetPointsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('service_snippet_id', __d('admin', 'ServiceSnippet'), array('model' => $serviceSnippetPointsTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($serviceSnippetPoints as $serviceSnippetPoint): ?>
	<tr>
		<td><?php echo h($serviceSnippetPoint[$serviceSnippetPointsTableModelAlias]['point_detail']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($serviceSnippetPoint['ServiceSnippet']['toString'], array('controller' => 'admin_service_snippets', 'action' => 'view', $serviceSnippetPoint['ServiceSnippet']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_service_snippet_points', 'action' => 'view', $serviceSnippetPoint[$serviceSnippetPointsTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_service_snippet_points', 'action' => 'edit', $serviceSnippetPoint[$serviceSnippetPointsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_service_snippet_points', 'action' => 'delete', $serviceSnippetPoint[$serviceSnippetPointsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $serviceSnippetPoint[$serviceSnippetPointsTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $serviceSnippetPointsTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $serviceSnippetPointsTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $serviceSnippetPointsTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $serviceSnippetPointsTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();