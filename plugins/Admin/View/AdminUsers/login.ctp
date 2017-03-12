<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __d('admin', 'Please enter your email and password'); ?></legend>
    <?php
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        ?>
    </fieldset>
<?php echo $this->Form->end(array('label' => __d('admin', 'Login'), 'class' => 'btn btn-primary'));?>
</div>