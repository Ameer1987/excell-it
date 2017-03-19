<?php
$this->Paginator->options(array(
    'url' => $bottom3BlocksTableURL,
    'update' => '.bottom3Blocks.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('header', __d('admin', 'header'), array('model' => $bottom3BlocksTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('image_name', __d('admin', 'image_name'), array('model' => $bottom3BlocksTableModelAlias));?></th>
	<!--<th><?php // echo $this->Paginator->sort('background_colour', __d('admin', 'background_colour'), array('model' => $bottom3BlocksTableModelAlias));?></th>-->
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($bottom3Blocks as $bottom3Block): ?>
	<tr>
		<td><?php echo h($bottom3Block[$bottom3BlocksTableModelAlias]['header']); ?>&nbsp;</td>
		<td><?php echo h($bottom3Block[$bottom3BlocksTableModelAlias]['image_name']); ?>&nbsp;</td>
		<!--<td><?php // echo h($bottom3Block[$bottom3BlocksTableModelAlias]['background_colour']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_bottom3_blocks', 'action' => 'view', $bottom3Block[$bottom3BlocksTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_bottom3_blocks', 'action' => 'edit', $bottom3Block[$bottom3BlocksTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php // echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_bottom3_blocks', 'action' => 'delete', $bottom3Block[$bottom3BlocksTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $bottom3Block[$bottom3BlocksTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $bottom3BlocksTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $bottom3BlocksTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $bottom3BlocksTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $bottom3BlocksTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();