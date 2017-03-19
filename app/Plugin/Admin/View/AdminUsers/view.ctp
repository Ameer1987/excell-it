<h2><?php  echo __d('admin', 'User') . ': ' . $user['User']['toString'];?></h2>
<ul class="nav nav-tabs">
    <li class="active"><a href="#tabs-1" data-toggle="tab"><?php  echo __d('admin', 'Details');?></a></li>
</ul>
<div class="tab-content">
    <div id="tabs-1" class="tab-pane active">
        <div class="users view container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <dl class="dl-horizontal">
                    				<dt><?php echo __d('admin', 'Id'); ?></dt>
				<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Created'); ?></dt>
				<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Modified'); ?></dt>
				<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Email'); ?></dt>
				<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Password'); ?></dt>
				<dd>
			<?php echo h($user['User']['password']); ?>
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
                				<li><?php echo $this->Html->link(__d('admin', 'Edit User'), array('action' => 'edit', $user['User']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index'))))); ?> </li>
				<li><?php echo $this->Form->postLink(__d('admin', 'Delete User'), array('action' => 'delete', $user['User']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index')))), null, __d('admin', 'Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'New User'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'List Users'), array('action' => 'index')); ?> </li>
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
