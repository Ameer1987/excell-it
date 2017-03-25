<div class="contactGenerals form">
<?php echo $this->ExtendedForm->create('ContactGeneral', array('class' => 'form-horizontal', 'novalidate' => 'novalidate'));?>
    <fieldset>
        <legend><?php echo __d('admin', 'Add Contact General'); ?></legend>
	<?php
		if(isset($this->request->params['named']['name'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('name', array_merge(array('label' => __d('admin', 'Name'))));
		if(isset($this->request->params['named']['name'])) echo '</div>';

		if(isset($this->request->params['named']['details'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('details', array_merge(array('label' => __d('admin', 'Details'))));
		if(isset($this->request->params['named']['details'])) echo '</div>';

		if(isset($this->request->params['named']['mobile'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('mobile', array_merge(array('label' => __d('admin', 'Mobile'))));
		if(isset($this->request->params['named']['mobile'])) echo '</div>';

		if(isset($this->request->params['named']['phone'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('phone', array_merge(array('label' => __d('admin', 'Phone'))));
		if(isset($this->request->params['named']['phone'])) echo '</div>';

		if(isset($this->request->params['named']['address'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('address', array_merge(array('label' => __d('admin', 'Address'))));
		if(isset($this->request->params['named']['address'])) echo '</div>';

		if(isset($this->request->params['named']['facebook_link'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('facebook_link', array_merge(array('label' => __d('admin', 'Facebook Link'))));
		if(isset($this->request->params['named']['facebook_link'])) echo '</div>';

		if(isset($this->request->params['named']['linkedin_link'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('linkedin_link', array_merge(array('label' => __d('admin', 'Linkedin Link'))));
		if(isset($this->request->params['named']['linkedin_link'])) echo '</div>';

		if(isset($this->request->params['named']['skype_link'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('skype_link', array_merge(array('label' => __d('admin', 'Skype Link'))));
		if(isset($this->request->params['named']['skype_link'])) echo '</div>';

		if(isset($this->request->params['named']['email'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('email', array_merge(array('label' => __d('admin', 'Email'))));
		if(isset($this->request->params['named']['email'])) echo '</div>';

		if(isset($this->request->params['named']['position_latitude'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('position_latitude', array_merge(array('label' => __d('admin', 'Position Latitude'))));
		if(isset($this->request->params['named']['position_latitude'])) echo '</div>';

		if(isset($this->request->params['named']['position_longitude'])) echo '<div style="display: none;">';
		echo $this->ExtendedForm->input('position_longitude', array_merge(array('label' => __d('admin', 'Position Longitude'))));
		if(isset($this->request->params['named']['position_longitude'])) echo '</div>';

	?>
    </fieldset>
<?php echo $this->ExtendedForm->end(array('label' => __d('admin', 'Save ContactGeneral'), 'class' => 'btn btn-primary', 'div' => false, 'before' => '<div class="control-group"><div class="controls">', 'after' => "\n" . $this->Html->link(__d('admin', 'Cancel'), $redirectUrl, array('class' => 'btn')) . '</div></div>'));?>
</div>