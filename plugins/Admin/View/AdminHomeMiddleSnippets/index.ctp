<h2><?php echo __d('admin', 'Home Middle Snippets');?></h2>


        <div class="homeMiddleSnippets index table">
            <?php echo $this->element('../AdminHomeMiddleSnippets/table');?>
        </div>

        <div class="actions">

            <h3><?php echo __d('admin', 'Actions'); ?></h3>
            <?php echo $this->Html->link(__d('admin', 'New Home Middle Snippet'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>        </div>
