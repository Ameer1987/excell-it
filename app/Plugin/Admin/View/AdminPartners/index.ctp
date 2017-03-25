<h2><?php echo __d('admin', 'Partners');?></h2>


        <div class="partners index table">
            <?php echo $this->element('../AdminPartners/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Partner'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
