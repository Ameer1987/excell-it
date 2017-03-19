<h2><?php echo __d('admin', 'Careers');?></h2>


        <div class="careers index table">
            <?php echo $this->element('../AdminCareers/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Career'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
