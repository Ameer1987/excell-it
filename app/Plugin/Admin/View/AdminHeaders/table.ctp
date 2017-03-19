<?php
$this->Paginator->options(array(
    'url' => $headersTableURL,
    'update' => '.headers.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('logo_name', __d('admin', 'logo_name'), array('model' => $headersTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('phone', __d('admin', 'phone'), array('model' => $headersTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('text', __d('admin', 'text'), array('model' => $headersTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('message', __d('admin', 'message'), array('model' => $headersTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('image_name', __d('admin', 'image_name'), array('model' => $headersTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($headers as $header): ?>
	<tr>
		<td><?php echo h($header[$headersTableModelAlias]['logo_name']); ?>&nbsp;</td>
		<td><?php echo h($header[$headersTableModelAlias]['phone']); ?>&nbsp;</td>
		<td><?php echo h($header[$headersTableModelAlias]['text']); ?>&nbsp;</td>
		<td><?php echo h($header[$headersTableModelAlias]['message']); ?>&nbsp;</td>
		<td><?php echo h($header[$headersTableModelAlias]['image_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_headers', 'action' => 'view', $header[$headersTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_headers', 'action' => 'edit', $header[$headersTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_headers', 'action' => 'delete', $header[$headersTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $header[$headersTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $headersTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $headersTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $headersTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $headersTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();