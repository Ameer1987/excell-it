<div class="contactGenerals view">
<h2><?php echo __('Contact General'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Link'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['facebook_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linkedin Link'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['linkedin_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skype Link'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['skype_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position Latitude'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['position_latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position Longitude'); ?></dt>
		<dd>
			<?php echo h($contactGeneral['ContactGeneral']['position_longitude']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact General'), array('action' => 'edit', $contactGeneral['ContactGeneral']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact General'), array('action' => 'delete', $contactGeneral['ContactGeneral']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contactGeneral['ContactGeneral']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Generals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact General'), array('action' => 'add')); ?> </li>
	</ul>
</div>
