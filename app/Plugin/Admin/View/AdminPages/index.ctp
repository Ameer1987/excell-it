<h2><?php echo __d('admin', 'Pages');?></h2>


        <div class="pages index table">
            <?php echo $this->element('../AdminPages/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Page'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
