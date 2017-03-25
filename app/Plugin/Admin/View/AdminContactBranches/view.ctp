<h2><?php  echo __d('admin', 'Contact Branch') . ': ' . $contactBranch['ContactBranch']['toString'];?></h2>
<ul class="nav nav-tabs">
    <li class="active"><a href="#tabs-1" data-toggle="tab"><?php  echo __d('admin', 'Details');?></a></li>
</ul>
<div class="tab-content">
    <div id="tabs-1" class="tab-pane active">
        <div class="contactBranches view container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <dl class="dl-horizontal">
                    				<dt><?php echo __d('admin', 'Id'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['id']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Name'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['name']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Details'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['details']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Mobile'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['mobile']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Phone'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['phone']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Address'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['address']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Facebook Link'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['facebook_link']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Linkedin Link'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['linkedin_link']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Skype Link'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['skype_link']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Email'); ?></dt>
				<dd>
			<?php echo h($contactBranch['ContactBranch']['email']); ?>
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
                				<li><?php echo $this->Html->link(__d('admin', 'Edit Contact Branch'), array('action' => 'edit', $contactBranch['ContactBranch']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index'))))); ?> </li>
				<li><?php echo $this->Form->postLink(__d('admin', 'Delete Contact Branch'), array('action' => 'delete', $contactBranch['ContactBranch']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index')))), null, __d('admin', 'Are you sure you want to delete # %s?', $contactBranch['ContactBranch']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'New Contact Branch'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'List Contact Branches'), array('action' => 'index')); ?> </li>
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
