<h2><?php echo __d('admin', 'Messages');?></h2>


        <div class="messages index table">
            <?php echo $this->element('../AdminMessages/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Message'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
