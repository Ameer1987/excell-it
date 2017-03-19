<h2><?php  echo __d('admin', 'Bottom4 Block') . ': ' . $bottom4Block['Bottom4Block']['toString'];?></h2>
<ul class="nav nav-tabs">
    <li class="active"><a href="#tabs-1" data-toggle="tab"><?php  echo __d('admin', 'Details');?></a></li>
</ul>
<div class="tab-content">
    <div id="tabs-1" class="tab-pane active">
        <div class="bottom4Blocks view container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <dl class="dl-horizontal">
                    				<dt><?php echo __d('admin', 'Id'); ?></dt>
				<dd>
			<?php echo h($bottom4Block['Bottom4Block']['id']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Header'); ?></dt>
				<dd>
			<?php echo h($bottom4Block['Bottom4Block']['header']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Text'); ?></dt>
				<dd>
			<?php echo h($bottom4Block['Bottom4Block']['text']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Image Name'); ?></dt>
				<dd>
			<?php echo h($bottom4Block['Bottom4Block']['image_name']); ?>
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
                				<li><?php echo $this->Html->link(__d('admin', 'Edit Bottom4 Block'), array('action' => 'edit', $bottom4Block['Bottom4Block']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index'))))); ?> </li>
				<li><?php echo $this->Form->postLink(__d('admin', 'Delete Bottom4 Block'), array('action' => 'delete', $bottom4Block['Bottom4Block']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index')))), null, __d('admin', 'Are you sure you want to delete # %s?', $bottom4Block['Bottom4Block']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'New Bottom4 Block'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'List Bottom4 Blocks'), array('action' => 'index')); ?> </li>
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
