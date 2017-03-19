<h2><?php echo __d('admin', 'Home Upper Snippets');?></h2>


        <div class="homeUpperSnippets index table">
            <?php echo $this->element('../AdminHomeUpperSnippets/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Home Upper Snippet'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
