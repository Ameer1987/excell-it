<?php
$this->Paginator->options(array(
    'url' => $servicesTableURL,
    'update' => '.services.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('header', __d('admin', 'header'), array('model' => $servicesTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('image_name', __d('admin', 'Images'), array('model' => $servicesTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($services as $service): ?>
	<tr>
		<td><?php echo h($service[$servicesTableModelAlias]['header']); ?>&nbsp;</td>
		<td><?php echo h($service[$servicesTableModelAlias]['image_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_services', 'action' => 'view', $service[$servicesTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_services', 'action' => 'edit', $service[$servicesTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_services', 'action' => 'delete', $service[$servicesTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $service[$servicesTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $servicesTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $servicesTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $servicesTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $servicesTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();