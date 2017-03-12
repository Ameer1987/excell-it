<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('text');
		echo $this->Form->input('image_name');
		echo $this->Form->input('position_map');
		echo $this->Form->input('phone');
		echo $this->Form->input('address');
		echo $this->Form->input('logo_name');
		echo $this->Form->input('facebook_link');
		echo $this->Form->input('twitter_link');
		echo $this->Form->input('skype_link');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
	</ul>
</div>
