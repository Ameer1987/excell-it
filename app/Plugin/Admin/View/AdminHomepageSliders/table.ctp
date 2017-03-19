<?php
$this->Paginator->options(array(
    'url' => $homepageSlidersTableURL,
    'update' => '.homepageSliders.table',
    'evalScripts' => true
));?>
<table class="table table-striped">
<tr>
	<th><?php echo $this->Paginator->sort('title', __d('admin', 'title'), array('model' => $homepageSlidersTableModelAlias));?></th>
	<th><?php echo $this->Paginator->sort('image_name', __d('admin', 'image_name'), array('model' => $homepageSlidersTableModelAlias));?></th>
    <th class="actions"><?php echo __d('admin', 'Actions');?></th>
</tr>
<?php
foreach ($homepageSliders as $homepageSlider): ?>
	<tr>
		<td><?php echo h($homepageSlider[$homepageSlidersTableModelAlias]['title']); ?>&nbsp;</td>
		<td><?php echo h($homepageSlider[$homepageSlidersTableModelAlias]['image_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__d('admin', 'View'), array('plugin' => 'admin', 'controller' => 'admin_homepage_sliders', 'action' => 'view', $homepageSlider[$homepageSlidersTableModelAlias]['id']), array('class' => 'btn btn-info btn-mini')); ?>
			<?php echo $this->Html->link(__d('admin', 'Edit'), array('plugin' => 'admin', 'controller' => 'admin_homepage_sliders', 'action' => 'edit', $homepageSlider[$homepageSlidersTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__d('admin', 'Delete'), array('plugin' => 'admin', 'controller' => 'admin_homepage_sliders', 'action' => 'delete', $homepageSlider[$homepageSlidersTableModelAlias]['id'], '?' => array('redirect' => $redirectUrl)), array('class' => 'btn btn-danger btn-mini'), __d('admin', 'Are you sure you want to delete # %s?', $homepageSlider[$homepageSlidersTableModelAlias]['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __d('admin', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
'model' => $homepageSlidersTableModelAlias
));
?></p>

<div class="pagination">
    <ul>
<?php
		echo '<li>' . $this->Paginator->prev('Prev', array('model' => $homepageSlidersTableModelAlias), null, array('class' => 'prev disabled')) . '</li>';
		echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'span', 'model' => $homepageSlidersTableModelAlias));
		echo '<li>' . $this->Paginator->next('Next', array('model' => $homepageSlidersTableModelAlias), null, array('class' => 'next disabled')) . '</li>';
	?>
    </ul>
</div>

<?php
      echo $this->Js->writeBuffer();