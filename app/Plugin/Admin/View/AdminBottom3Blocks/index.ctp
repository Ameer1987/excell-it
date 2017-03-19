<h2><?php echo __d('admin', 'Bottom3 Blocks');?></h2>


        <div class="bottom3Blocks index table">
            <?php echo $this->element('../AdminBottom3Blocks/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Bottom3 Block'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
