<div class="homeUpperSnippets form">
<?php echo $this->ExtendedForm->create('HomeUpperSnippet', array('class' => 'form-horizontal', 'novalidate' => 'novalidate'));?>
    <fieldset>
        <legend><?php echo __d('admin', 'Add Home Upper Snippet'); ?></legend>
	<?php
		if(isset($this->request->params['named']['header'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('header', array_merge(array('label' => __d('admin', 'Header'))));
		if(isset($this->request->params['named']['header'])) echo '</div>';

		if(isset($this->request->params['named']['details'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('details', array_merge(array('label' => __d('admin', 'Details'))));
		if(isset($this->request->params['named']['details'])) echo '</div>';

		if(isset($this->request->params['named']['order'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('order', array_merge(array('label' => __d('admin', 'Order'))));
		if(isset($this->request->params['named']['order'])) echo '</div>';

		if(isset($this->request->params['named']['image_name'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('image_name', array_merge(array('label' => __d('admin', 'Image')), array('type' => 'file')));
		if(isset($this->request->params['named']['image_name'])) echo '</div>';

	?>
    </fieldset>
<?php echo $this->ExtendedForm->end(array('label' => __d('admin', 'Save HomeUpperSnippet'), 'class' => 'btn btn-primary', 'div' => false, 'before' => '<div class="control-group"><div class="controls">', 'after' => "\n" . $this->Html->link(__d('admin', 'Cancel'), $redirectUrl, array('class' => 'btn')) . '</div></div>'));?>
</div>