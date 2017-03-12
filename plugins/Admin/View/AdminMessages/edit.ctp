<div class="messages form">
<?php echo $this->ExtendedForm->create('Message', array('class' => 'form-horizontal', 'novalidate' => 'novalidate'));?>
    <fieldset>
        <legend><?php echo __d('admin', 'Edit Message'); ?></legend>
	<?php
		if(isset($this->request->params['named']['id'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('id', array_merge(array('label' => __d('admin', 'Id'))));
		if(isset($this->request->params['named']['id'])) echo '</div>';

		if(isset($this->request->params['named']['name'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('name', array_merge(array('label' => __d('admin', 'Name'))));
		if(isset($this->request->params['named']['name'])) echo '</div>';

		if(isset($this->request->params['named']['email'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('email', array_merge(array('label' => __d('admin', 'Email'))));
		if(isset($this->request->params['named']['email'])) echo '</div>';

		if(isset($this->request->params['named']['phone'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('phone', array_merge(array('label' => __d('admin', 'Phone'))));
		if(isset($this->request->params['named']['phone'])) echo '</div>';

		if(isset($this->request->params['named']['message'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('message', array_merge(array('label' => __d('admin', 'Message'))));
		if(isset($this->request->params['named']['message'])) echo '</div>';

	?>
    </fieldset>
<?php echo $this->ExtendedForm->end(array('label' => __d('admin', 'Save Message'), 'class' => 'btn btn-primary', 'div' => false, 'before' => '<div class="control-group"><div class="controls">', 'after' => "\n" . $this->Html->link(__d('admin', 'Cancel'), $redirectUrl, array('class' => 'btn')) . '</div></div>'));?>
</div>