<h2><?php  echo __d('admin', 'Message') . ': ' . $message['Message']['toString'];?></h2>
<ul class="nav nav-tabs">
    <li class="active"><a href="#tabs-1" data-toggle="tab"><?php  echo __d('admin', 'Details');?></a></li>
</ul>
<div class="tab-content">
    <div id="tabs-1" class="tab-pane active">
        <div class="messages view container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <dl class="dl-horizontal">
                    				<dt><?php echo __d('admin', 'Id'); ?></dt>
				<dd>
			<?php echo h($message['Message']['id']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Name'); ?></dt>
				<dd>
			<?php echo h($message['Message']['name']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Email'); ?></dt>
				<dd>
			<?php echo h($message['Message']['email']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Phone'); ?></dt>
				<dd>
			<?php echo h($message['Message']['phone']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Message'); ?></dt>
				<dd>
			<?php echo h($message['Message']['message']); ?>
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
                				<li><?php echo $this->Html->link(__d('admin', 'Edit Message'), array('action' => 'edit', $message['Message']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index'))))); ?> </li>
				<li><?php echo $this->Form->postLink(__d('admin', 'Delete Message'), array('action' => 'delete', $message['Message']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index')))), null, __d('admin', 'Are you sure you want to delete # %s?', $message['Message']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'New Message'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'List Messages'), array('action' => 'index')); ?> </li>
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
