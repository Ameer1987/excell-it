<div class="serviceSnippetPoints form">
<?php echo $this->ExtendedForm->create('ServiceSnippetPoint', array('class' => 'form-horizontal', 'novalidate' => 'novalidate'));?>
    <fieldset>
        <legend><?php echo __d('admin', 'Edit Service Snippet Point'); ?></legend>
	<?php
		if(isset($this->request->params['named']['id'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('id', array_merge(array('label' => __d('admin', 'Id'))));
		if(isset($this->request->params['named']['id'])) echo '</div>';

		if(isset($this->request->params['named']['point_detail'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('point_detail', array_merge(array('label' => __d('admin', 'Point Detail'))));
		if(isset($this->request->params['named']['point_detail'])) echo '</div>';

		if(isset($this->request->params['named']['service_snippet_id'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('service_snippet_id', array_merge(array('label' => __d('admin', 'Service Snippet')), array('options' => $serviceSnippetsSelect, 'empty' => '- ' . __d('admin', 'Choose a Service Snippet') . ' -')));
		if(isset($this->request->params['named']['service_snippet_id'])) echo '</div>';

	?>
    </fieldset>
<?php echo $this->ExtendedForm->end(array('label' => __d('admin', 'Save ServiceSnippetPoint'), 'class' => 'btn btn-primary', 'div' => false, 'before' => '<div class="control-group"><div class="controls">', 'after' => "\n" . $this->Html->link(__d('admin', 'Cancel'), $redirectUrl, array('class' => 'btn')) . '</div></div>'));?>
</div>