<div class="bottom3Blocks view">
<h2><?php echo __('Bottom3 Block'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bottom3Block['Bottom3Block']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo h($bottom3Block['Bottom3Block']['header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($bottom3Block['Bottom3Block']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($bottom3Block['Bottom3Block']['image_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Background Colour'); ?></dt>
		<dd>
			<?php echo h($bottom3Block['Bottom3Block']['background_colour']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bottom3 Block'), array('action' => 'edit', $bottom3Block['Bottom3Block']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bottom3 Block'), array('action' => 'delete', $bottom3Block['Bottom3Block']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bottom3Block['Bottom3Block']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bottom3 Blocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bottom3 Block'), array('action' => 'add')); ?> </li>
	</ul>
</div>
