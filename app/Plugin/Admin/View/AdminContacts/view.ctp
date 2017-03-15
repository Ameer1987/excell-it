<h2><?php  echo __d('admin', 'Contact') . ': ' . $contact['Contact']['toString'];?></h2>
<ul class="nav nav-tabs">
    <li class="active"><a href="#tabs-1" data-toggle="tab"><?php  echo __d('admin', 'Details');?></a></li>
</ul>
<div class="tab-content">
    <div id="tabs-1" class="tab-pane active">
        <div class="contacts view container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <dl class="dl-horizontal">
                    				<dt><?php echo __d('admin', 'Id'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Name'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Details'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['details']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Image Name'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['image_name']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Position Latitude'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['position_latitude']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Position Longitude'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['position_longitude']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Phone'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['phone']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Address'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['address']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Logo Name'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['logo_name']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Facebook Link'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['facebook_link']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Twitter Link'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['twitter_link']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Skype Link'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['skype_link']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Email'); ?></dt>
				<dd>
			<?php echo h($contact['Contact']['email']); ?>
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
                				<li><?php echo $this->Html->link(__d('admin', 'Edit Contact'), array('action' => 'edit', $contact['Contact']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index'))))); ?> </li>
				<li><?php echo $this->Form->postLink(__d('admin', 'Delete Contact'), array('action' => 'delete', $contact['Contact']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index')))), null, __d('admin', 'Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'New Contact'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'List Contacts'), array('action' => 'index')); ?> </li>
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
