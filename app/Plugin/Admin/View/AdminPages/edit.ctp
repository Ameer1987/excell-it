<div class="pages form">
<?php echo $this->ExtendedForm->create('Page', array('class' => 'form-horizontal', 'novalidate' => 'novalidate'));?>
    <fieldset>
        <legend><?php echo __d('admin', 'Edit Page'); ?></legend>
	<?php
		if(isset($this->request->params['named']['id'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('id', array_merge(array('label' => __d('admin', 'Id'))));
		if(isset($this->request->params['named']['id'])) echo '</div>';

		if(isset($this->request->params['named']['title'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('title', array_merge(array('label' => __d('admin', 'Title'))));
		if(isset($this->request->params['named']['title'])) echo '</div>';

		if(isset($this->request->params['named']['content'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('content', array_merge(array('label' => __d('admin', 'Content'))));
		if(isset($this->request->params['named']['content'])) echo '</div>';

		if(isset($this->request->params['named']['permalink'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('permalink', array_merge(array('label' => __d('admin', 'Permalink'))));
		if(isset($this->request->params['named']['permalink'])) echo '</div>';

	?>
    </fieldset>
<?php echo $this->ExtendedForm->end(array('label' => __d('admin', 'Save Page'), 'class' => 'btn btn-primary', 'div' => false, 'before' => '<div class="control-group"><div class="controls">', 'after' => "\n" . $this->Html->link(__d('admin', 'Cancel'), $redirectUrl, array('class' => 'btn')) . '</div></div>'));?>
</div>