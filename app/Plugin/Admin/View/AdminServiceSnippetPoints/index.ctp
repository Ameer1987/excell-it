<h2><?php echo __d('admin', 'Service Snippet Points');?></h2>


        <div class="serviceSnippetPoints index table">
            <?php echo $this->element('../AdminServiceSnippetPoints/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Service Snippet Point'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
