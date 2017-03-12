<div class="homeUpperSnippets view">
<h2><?php echo __('Home Upper Snippet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($homeUpperSnippet['HomeUpperSnippet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo h($homeUpperSnippet['HomeUpperSnippet']['header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($homeUpperSnippet['HomeUpperSnippet']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($homeUpperSnippet['HomeUpperSnippet']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($homeUpperSnippet['HomeUpperSnippet']['image_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Home Upper Snippet'), array('action' => 'edit', $homeUpperSnippet['HomeUpperSnippet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Home Upper Snippet'), array('action' => 'delete', $homeUpperSnippet['HomeUpperSnippet']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $homeUpperSnippet['HomeUpperSnippet']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Upper Snippets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Home Upper Snippet'), array('action' => 'add')); ?> </li>
	</ul>
</div>
