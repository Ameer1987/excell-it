<div class="careers view">
<h2><?php echo __('Career'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($career['Career']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo h($career['Career']['header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($career['Career']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($career['Career']['image_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Career'), array('action' => 'edit', $career['Career']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Career'), array('action' => 'delete', $career['Career']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $career['Career']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('action' => 'add')); ?> </li>
	</ul>
</div>
