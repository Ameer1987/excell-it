<div class="services form">
<?php echo $this->ExtendedForm->create('Service', array('class' => 'form-horizontal', 'novalidate' => 'novalidate'));?>
    <fieldset>
        <legend><?php echo __d('admin', 'Edit Service'); ?></legend>
	<?php
		if(isset($this->request->params['named']['id'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('id', array_merge(array('label' => __d('admin', 'Id'))));
		if(isset($this->request->params['named']['id'])) echo '</div>';

		if(isset($this->request->params['named']['header'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('header', array_merge(array('label' => __d('admin', 'Header'))));
		if(isset($this->request->params['named']['header'])) echo '</div>';

		if(isset($this->request->params['named']['details'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('details', array_merge(array('label' => __d('admin', 'Details'))));
		if(isset($this->request->params['named']['details'])) echo '</div>';

		if(isset($this->request->params['named']['image_name'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('image_name', array_merge(array('label' => __d('admin', 'Image')), array('type' => 'file')));
		if(isset($this->request->params['named']['image_name'])) echo '</div>';

	?>
    </fieldset>
<?php echo $this->ExtendedForm->end(array('label' => __d('admin', 'Save Service'), 'class' => 'btn btn-primary', 'div' => false, 'before' => '<div class="control-group"><div class="controls">', 'after' => "\n" . $this->Html->link(__d('admin', 'Cancel'), $redirectUrl, array('class' => 'btn')) . '</div></div>'));?>
</div>