<h2><?php echo __d('admin', 'Bottom1 Blocks');?></h2>


        <div class="bottom1Blocks index table">
            <?php echo $this->element('../AdminBottom1Blocks/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Bottom1 Block'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
