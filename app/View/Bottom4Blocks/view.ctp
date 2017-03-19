<div class="bottom4Blocks view">
<h2><?php echo __('Bottom4 Block'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bottom4Block['Bottom4Block']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo h($bottom4Block['Bottom4Block']['header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($bottom4Block['Bottom4Block']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($bottom4Block['Bottom4Block']['image_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bottom4 Block'), array('action' => 'edit', $bottom4Block['Bottom4Block']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bottom4 Block'), array('action' => 'delete', $bottom4Block['Bottom4Block']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bottom4Block['Bottom4Block']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bottom4 Blocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bottom4 Block'), array('action' => 'add')); ?> </li>
	</ul>
</div>
