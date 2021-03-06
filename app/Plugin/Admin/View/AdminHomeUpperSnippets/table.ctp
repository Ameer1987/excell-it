<?php
$this->Paginator->options(array(
    'url' => $homeUpperSnippetsTableURL,
    'update' => '.homeUpperSnippets.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('header', __d('admin', 'header'), array('model' => $homeUpperSnippetsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('order', __d('admin', 'order'), array('model' => $homeUpperSnippetsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('image_name', __d('admin', 'image_name'), array('model' => $homeUpperSnippetsTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('background_colour', __d('admin', 'background_colour'), array('model' => $homeUpperSnippetsTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($homeUpperSnippets as $homeUpperSnippet): ?>
	<tr>
		<td><?php echo h($homeUpperSnippet[$homeUpperSnippetsTableModelAlias]['header']); ?>&nbsp;</td>
		<td><?php echo h($homeUpperSnippet[$homeUpperSnippetsTableModelAlias]['order']); ?>&nbsp;</td>
		<td><?php echo h($homeUpperSnippet[$homeUpperSnippetsTableModelAlias]['image_name']); ?>&nbsp;</td>
		<td><?php echo h($homeUpperSnippet[$homeUpperSnippetsTableModelAlias]['background_colour']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_home_upper_snippets', 'action' => 'view', $homeUpperSnippet[$homeUpperSnippetsTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_home_upper_snippets', 'action' => 'edit', $homeUpperSnippet[$homeUpperSnippetsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_home_upper_snippets', 'action' => 'delete', $homeUpperSnippet[$homeUpperSnippetsTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $homeUpperSnippet[$homeUpperSnippetsTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $homeUpperSnippetsTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $homeUpperSnippetsTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $homeUpperSnippetsTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $homeUpperSnippetsTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();