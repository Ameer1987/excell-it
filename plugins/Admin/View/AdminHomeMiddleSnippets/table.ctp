<?php
$this->Paginator->options(array(
    'url' => $homeMiddleSnippetsTableURL,
    'update' => '.homeMiddleSnippets.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('header', __d('admin', 'header'), array('model' => $homeMiddleSnippetsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('order', __d('admin', 'order'), array('model' => $homeMiddleSnippetsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('image_name', __d('admin', 'image_name'), array('model' => $homeMiddleSnippetsTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($homeMiddleSnippets as $homeMiddleSnippet): ?>
	<tr>
		<td><?php echo h($homeMiddleSnippet[$homeMiddleSnippetsTableModelAlias]['header']); ?>&nbsp;</td>
		<td><?php echo h($homeMiddleSnippet[$homeMiddleSnippetsTableModelAlias]['order']); ?>&nbsp;</td>
		<td><?php echo h($homeMiddleSnippet[$homeMiddleSnippetsTableModelAlias]['image_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_home_middle_snippets', 'action' => 'view', $homeMiddleSnippet[$homeMiddleSnippetsTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_home_middle_snippets', 'action' => 'edit', $homeMiddleSnippet[$homeMiddleSnippetsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_home_middle_snippets', 'action' => 'delete', $homeMiddleSnippet[$homeMiddleSnippetsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $homeMiddleSnippet[$homeMiddleSnippetsTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $homeMiddleSnippetsTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $homeMiddleSnippetsTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $homeMiddleSnippetsTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $homeMiddleSnippetsTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();