<h2><?php echo __d('admin', 'Users');?></h2>


        <div class="users index table">
            <?php echo $this->element('../AdminUsers/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New User'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
