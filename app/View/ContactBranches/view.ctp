<div class="contactBranches view">
<h2><?php echo __('Contact Branch'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Link'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['facebook_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linkedin Link'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['linkedin_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skype Link'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['skype_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contactBranch['ContactBranch']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact Branch'), array('action' => 'edit', $contactBranch['ContactBranch']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact Branch'), array('action' => 'delete', $contactBranch['ContactBranch']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contactBranch['ContactBranch']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Branches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Branch'), array('action' => 'add')); ?> </li>
	</ul>
</div>
