<h2><?php  echo __d('admin', 'Home Middle Snippet') . ': ' . $homeMiddleSnippet['HomeMiddleSnippet']['toString'];?></h2>
<ul class="nav nav-tabs">
    <li class="active"><a href="#tabs-1" data-toggle="tab"><?php  echo __d('admin', 'Details');?></a></li>
</ul>
<div class="tab-content">
    <div id="tabs-1" class="tab-pane active">
        <div class="homeMiddleSnippets view container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <dl class="dl-horizontal">
                    				<dt><?php echo __d('admin', 'Id'); ?></dt>
				<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['id']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Header'); ?></dt>
				<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['header']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Details'); ?></dt>
				<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['details']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Order'); ?></dt>
				<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['order']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Image Name'); ?></dt>
				<dd>
			<?php echo h($homeMiddleSnippet['HomeMiddleSnippet']['image_name']); ?>
			&nbsp;
		</dd>
                    </dl>
                </div>
                                <div class="actions span2" style="min-height: 160px;">
                    <div class="btn-group pull-right">
                        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php echo __d('admin', 'Actions');?>                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                				<li><?php echo $this->Html->link(__d('admin', 'Edit Home Middle Snippet'), array('action' => 'edit', $homeMiddleSnippet['HomeMiddleSnippet']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index'))))); ?> </li>
				<li><?php echo $this->Form->postLink(__d('admin', 'Delete Home Middle Snippet'), array('action' => 'delete', $homeMiddleSnippet['HomeMiddleSnippet']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index')))), null, __d('admin', 'Are you sure you want to delete # %s?', $homeMiddleSnippet['HomeMiddleSnippet']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'New Home Middle Snippet'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'List Home Middle Snippets'), array('action' => 'index')); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
(function(){
    var $tab = $('.nav.nav-tabs li a[href=' + window.location.hash + ']:first');
    if($tab.length == 0) {
        $tab = $('.nav.nav-tabs li a:first');
    }
    $tab.tab('show');
})();
</script>
