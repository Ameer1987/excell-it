<div class="contactGenerals form">
<?php echo $this->Form->create('ContactGeneral'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact General'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('details');
		echo $this->Form->input('mobile');
		echo $this->Form->input('phone');
		echo $this->Form->input('address');
		echo $this->Form->input('facebook_link');
		echo $this->Form->input('linkedin_link');
		echo $this->Form->input('skype_link');
		echo $this->Form->input('email');
		echo $this->Form->input('position_latitude');
		echo $this->Form->input('position_longitude');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContactGeneral.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ContactGeneral.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Generals'), array('action' => 'index')); ?></li>
	</ul>
</div>
