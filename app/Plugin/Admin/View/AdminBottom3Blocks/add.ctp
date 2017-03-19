<div class="bottom3Blocks form">
<?php echo $this->ExtendedForm->create('Bottom3Block', array('class' => 'form-horizontal', 'novalidate' => 'novalidate'));?>
    <fieldset>
        <legend><?php echo __d('admin', 'Add Bottom3 Block'); ?></legend>
	<?php
		if(isset($this->request->params['named']['header'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('header', array_merge(array('label' => __d('admin', 'Header'))));
		if(isset($this->request->params['named']['header'])) echo '</div>';

		if(isset($this->request->params['named']['text'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('text', array_merge(array('label' => __d('admin', 'Text'))));
		if(isset($this->request->params['named']['text'])) echo '</div>';

		if(isset($this->request->params['named']['image_name'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('image_name', array_merge(array('label' => __d('admin', 'Image')), array('type' => 'file')));
		if(isset($this->request->params['named']['image_name'])) echo '</div>';

		if(isset($this->request->params['named']['background_colour'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('background_colour', array_merge(array('label' => __d('admin', 'Background Colour'))));
		if(isset($this->request->params['named']['background_colour'])) echo '</div>';

	?>
    </fieldset>
<?php echo $this->ExtendedForm->end(array('label' => __d('admin', 'Save Bottom3Block'), 'class' => 'btn btn-primary', 'div' => false, 'before' => '<div class="control-group"><div class="controls">', 'after' => "\n" . $this->Html->link(__d('admin', 'Cancel'), $redirectUrl, array('class' => 'btn')) . '</div></div>'));?>
</div>