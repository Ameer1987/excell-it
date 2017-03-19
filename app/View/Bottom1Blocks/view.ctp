<div class="bottom1Blocks view">
<h2><?php echo __('Bottom1 Block'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bottom1Block['Bottom1Block']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo h($bottom1Block['Bottom1Block']['header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($bottom1Block['Bottom1Block']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($bottom1Block['Bottom1Block']['image_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bottom1 Block'), array('action' => 'edit', $bottom1Block['Bottom1Block']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bottom1 Block'), array('action' => 'delete', $bottom1Block['Bottom1Block']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bottom1Block['Bottom1Block']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bottom1 Blocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bottom1 Block'), array('action' => 'add')); ?> </li>
	</ul>
</div>
