<h2><?php  echo __d('admin', 'Service Snippet Point') . ': ' . $serviceSnippetPoint['ServiceSnippetPoint']['toString'];?></h2>
<ul class="nav nav-tabs">
    <li class="active"><a href="#tabs-1" data-toggle="tab"><?php  echo __d('admin', 'Details');?></a></li>
</ul>
<div class="tab-content">
    <div id="tabs-1" class="tab-pane active">
        <div class="serviceSnippetPoints view container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <dl class="dl-horizontal">
                    				<dt><?php echo __d('admin', 'Id'); ?></dt>
				<dd>
			<?php echo h($serviceSnippetPoint['ServiceSnippetPoint']['id']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Point Detail'); ?></dt>
				<dd>
			<?php echo h($serviceSnippetPoint['ServiceSnippetPoint']['point_detail']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Service Snippet'); ?></dt>
				<dd>
			<?php echo $this->Html->link($serviceSnippetPoint['ServiceSnippet']['toString'], array('plugin' => 'admin', 'controller' => 'admin_service_snippets', 'action' => 'view', $serviceSnippetPoint['ServiceSnippet']['id'])); ?>
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
                				<li><?php echo $this->Html->link(__d('admin', 'Edit Service Snippet Point'), array('action' => 'edit', $serviceSnippetPoint['ServiceSnippetPoint']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index'))))); ?> </li>
				<li><?php echo $this->Form->postLink(__d('admin', 'Delete Service Snippet Point'), array('action' => 'delete', $serviceSnippetPoint['ServiceSnippetPoint']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index')))), null, __d('admin', 'Are you sure you want to delete # %s?', $serviceSnippetPoint['ServiceSnippetPoint']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'New Service Snippet Point'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'List Service Snippet Points'), array('action' => 'index')); ?> </li>
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
