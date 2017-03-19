<div class="bottom2Blocks view">
<h2><?php echo __('Bottom2 Block'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bottom2Block['Bottom2Block']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo h($bottom2Block['Bottom2Block']['header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($bottom2Block['Bottom2Block']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($bottom2Block['Bottom2Block']['image_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bottom2 Block'), array('action' => 'edit', $bottom2Block['Bottom2Block']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bottom2 Block'), array('action' => 'delete', $bottom2Block['Bottom2Block']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bottom2Block['Bottom2Block']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bottom2 Blocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bottom2 Block'), array('action' => 'add')); ?> </li>
	</ul>
</div>
