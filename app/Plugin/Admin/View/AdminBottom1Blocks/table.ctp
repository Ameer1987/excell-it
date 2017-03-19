<?php
$this->Paginator->options(array(
    'url' => $bottom1BlocksTableURL,
    'update' => '.bottom1Blocks.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('header', __d('admin', 'header'), array('model' => $bottom1BlocksTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('image_name', __d('admin', 'image_name'), array('model' => $bottom1BlocksTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($bottom1Blocks as $bottom1Block): ?>
	<tr>
		<td><?php echo h($bottom1Block[$bottom1BlocksTableModelAlias]['header']); ?>&nbsp;</td>
		<td><?php echo h($bottom1Block[$bottom1BlocksTableModelAlias]['image_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_bottom1_blocks', 'action' => 'view', $bottom1Block[$bottom1BlocksTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_bottom1_blocks', 'action' => 'edit', $bottom1Block[$bottom1BlocksTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_bottom1_blocks', 'action' => 'delete', $bottom1Block[$bottom1BlocksTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $bottom1Block[$bottom1BlocksTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $bottom1BlocksTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $bottom1BlocksTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $bottom1BlocksTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $bottom1BlocksTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();