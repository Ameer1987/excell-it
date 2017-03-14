<h2><?php  echo __d('admin', 'Service Snippet') . ': ' . $serviceSnippet['ServiceSnippet']['toString'];?></h2>
<ul class="nav nav-tabs">
    <li class="active"><a href="#tabs-1" data-toggle="tab"><?php  echo __d('admin', 'Details');?></a></li>
		<li><a href="#tabs-2" data-toggle="tab"><?php echo __d('admin', 'Service Snippet Points');?></a></li>
</ul>
<div class="tab-content">
    <div id="tabs-1" class="tab-pane active">
        <div class="serviceSnippets view container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <dl class="dl-horizontal">
                    				<dt><?php echo __d('admin', 'Id'); ?></dt>
				<dd>
			<?php echo h($serviceSnippet['ServiceSnippet']['id']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Header'); ?></dt>
				<dd>
			<?php echo h($serviceSnippet['ServiceSnippet']['header']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Intro'); ?></dt>
				<dd>
			<?php echo h($serviceSnippet['ServiceSnippet']['intro']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Image Name'); ?></dt>
				<dd>
			<?php echo h($serviceSnippet['ServiceSnippet']['image_name']); ?>
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
                				<li><?php echo $this->Html->link(__d('admin', 'Edit Service Snippet'), array('action' => 'edit', $serviceSnippet['ServiceSnippet']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index'))))); ?> </li>
				<li><?php echo $this->Form->postLink(__d('admin', 'Delete Service Snippet'), array('action' => 'delete', $serviceSnippet['ServiceSnippet']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index')))), null, __d('admin', 'Are you sure you want to delete # %s?', $serviceSnippet['ServiceSnippet']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'New Service Snippet'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'List Service Snippets'), array('action' => 'index')); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tabs-2" class="tab-pane">
        <div class="related">
            <h3><?php echo __d('admin', 'Service Snippet Points');?></h3>
            <div class="serviceSnippetPoints table">
            <?php echo $this->element('../AdminServiceSnippetPoints/table', array('serviceSnippetPointsTableURL' => $serviceSnippetPointsTableURL, 'serviceSnippetPoints' => $serviceSnippetPoints, 'serviceSnippetPointsTableModelAlias' => 'ServiceSnippetPoint', 'redirectUrl' => '/' . $this->request->url . '#tabs-' . 2));?>
            </div>
            <div class="actions">
                <?php echo $this->Html->link(__d('admin', 'New Service Snippet Point'), array('plugin' => 'admin', 'controller' => 'admin_service_snippet_points', 'action' => 'add', 'service_snippet_id' => $serviceSnippet['ServiceSnippet']['id'], '?' => array('redirect' => '/' . $this->request->url . '#tabs-' . 2)), array('class' => 'btn btn-primary'));?> </li>
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
