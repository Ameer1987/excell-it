<div class="contacts view">
<h2><?php echo __('Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['image_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position Latitude'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['position_latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position Longitude'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['position_longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['logo_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Link'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['facebook_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter Link'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['twitter_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skype Link'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['skype_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contact['Contact']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
	</ul>
</div>
