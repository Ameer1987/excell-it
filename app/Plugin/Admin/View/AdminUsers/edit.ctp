<div class="users form">
<?php echo $this->ExtendedForm->create('User', array('class' => 'form-horizontal', 'novalidate' => 'novalidate'));?>
    <fieldset>
        <legend><?php echo __d('admin', 'Edit User'); ?></legend>
	<?php
		if(isset($this->request->params['named']['id'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('id', array_merge(array('label' => __d('admin', 'Id'))));
		if(isset($this->request->params['named']['id'])) echo '</div>';

		if(isset($this->request->params['named']['email'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('email', array_merge(array('label' => __d('admin', 'Email'))));
		if(isset($this->request->params['named']['email'])) echo '</div>';

		if(isset($this->request->params['named']['password'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('new_password', array_merge(array('type' => 'password', 'label' => __d('admin', 'New Password'))));
		echo $this->ExtendedForm->input('confirm_password', array_merge(array('type' => 'password', 'label' => __d('admin', 'Confirm Password'))));
		if(isset($this->request->params['named']['password'])) echo '</div>';

	?>
    </fieldset>
<?php echo $this->ExtendedForm->end(array('label' => __d('admin', 'Save User'), 'class' => 'btn btn-primary', 'div' => false, 'before' => '<div class="control-group"><div class="controls">', 'after' => "\n" . $this->Html->link(__d('admin', 'Cancel'), $redirectUrl, array('class' => 'btn')) . '</div></div>'));?>
</div>