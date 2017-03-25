<h2><?php echo __d('admin', 'Contact Branches');?></h2>


        <div class="contactBranches index table">
            <?php echo $this->element('../AdminContactBranches/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Contact Branch'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
