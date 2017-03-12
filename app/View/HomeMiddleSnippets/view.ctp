<div class="homeMiddleSnippets view">
<h2><?php echo __('Home Middle Snippet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['image_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Home Middle Snippet'), array('action' => 'edit', $homeMiddleSnippet['HomeMiddleSnippet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Home Middle Snippet'), array('action' => 'delete', $homeMiddleSnippet['HomeMiddleSnippet']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $homeMiddleSnippet['HomeMiddleSnippet']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Home Middle Snippets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Home Middle Snippet'), array('action' => 'add')); ?> </li>
	</ul>
</div>
