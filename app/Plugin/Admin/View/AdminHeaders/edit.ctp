<div class="headers form">
<?php echo $this->ExtendedForm->create('Header', array('class' => 'form-horizontal', 'novalidate' => 'novalidate'));?>
    <fieldset>
        <legend><?php echo __d('admin', 'Edit Header'); ?></legend>
	<?php
		if(isset($this->request->params['named']['id'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('id', array_merge(array('label' => __d('admin', 'Id'))));
		if(isset($this->request->params['named']['id'])) echo '</div>';

		
		if(isset($this->request->params['named']['phone'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('phone', array_merge(array('label' => __d('admin', 'Phone'))));
		if(isset($this->request->params['named']['phone'])) echo '</div>';

		if(isset($this->request->params['named']['text'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('text', array_merge(array('label' => __d('admin', 'Text'))));
		if(isset($this->request->params['named']['text'])) echo '</div>';

		
		if(isset($this->request->params['named']['image_name'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('image_name', array_merge(array('label' => __d('admin', 'Image')), array('type' => 'file')));
		if(isset($this->request->params['named']['image_name'])) echo '</div>';

	?>
    </fieldset>
<?php echo $this->ExtendedForm->end(array('label' => __d('admin', 'Save Header'), 'class' => 'btn btn-primary', 'div' => false, 'before' => '<div class="control-group"><div class="controls">', 'after' => "\n" . $this->Html->link(__d('admin', 'Cancel'), $redirectUrl, array('class' => 'btn')) . '</div></div>'));?>
</div>