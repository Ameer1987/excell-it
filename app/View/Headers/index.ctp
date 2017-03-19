<h2><?php echo __d('', 'Headers');?></h2>


        <div class="headers index table">
            <?php echo $this->element('..//table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('', 'New Header'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
