<?php
$this->Paginator->options(array(
    'url' => $bottom2BlocksTableURL,
    'update' => '.bottom2Blocks.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('header', __d('admin', 'header'), array('model' => $bottom2BlocksTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('image_name', __d('admin', 'image_name'), array('model' => $bottom2BlocksTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($bottom2Blocks as $bottom2Block): ?>
	<tr>
		<td><?php echo h($bottom2Block[$bottom2BlocksTableModelAlias]['header']); ?>&nbsp;</td>
		<td><?php echo h($bottom2Block[$bottom2BlocksTableModelAlias]['image_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_bottom2_blocks', 'action' => 'view', $bottom2Block[$bottom2BlocksTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_bottom2_blocks', 'action' => 'edit', $bottom2Block[$bottom2BlocksTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php // echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_bottom2_blocks', 'action' => 'delete', $bottom2Block[$bottom2BlocksTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $bottom2Block[$bottom2BlocksTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $bottom2BlocksTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $bottom2BlocksTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $bottom2BlocksTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $bottom2BlocksTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();