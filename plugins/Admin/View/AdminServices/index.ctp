<h2><?php echo __d('admin', 'Services');?></h2>


        <div class="services index table">
            <?php echo $this->element('../AdminServices/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Service'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
