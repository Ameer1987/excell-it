<h2><?php echo __d('admin', 'Contact Generals');?></h2>


        <div class="contactGenerals index table">
            <?php echo $this->element('../AdminContactGenerals/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Contact General'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
