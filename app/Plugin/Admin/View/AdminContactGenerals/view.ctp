<h2><?php  echo __d('admin', 'Contact General') . ': ' . $contactGeneral['ContactGeneral']['toString'];?></h2>
<ul class="nav nav-tabs">
    <li class="active"><a href="#tabs-1" data-toggle="tab"><?php  echo __d('admin', 'Details');?></a></li>
</ul>
<div class="tab-content">
    <div id="tabs-1" class="tab-pane active">
        <div class="contactGenerals view container-fluid">
            <div class="row-fluid">
                <div class="span10">
                    <dl class="dl-horizontal">
                    				<dt><?php echo __d('admin', 'Id'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['id']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Name'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['name']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Details'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['details']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Mobile'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['mobile']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Phone'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['phone']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Address'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['address']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Facebook Link'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['facebook_link']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Linkedin Link'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['linkedin_link']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Skype Link'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['skype_link']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Email'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['email']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Position Latitude'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['position_latitude']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __d('admin', 'Position Longitude'); ?></dt>
				<dd>
			<?php echo h($contactGeneral['ContactGeneral']['position_longitude']); ?>
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
                				<li><?php echo $this->Html->link(__d('admin', 'Edit Contact General'), array('action' => 'edit', $contactGeneral['ContactGeneral']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index'))))); ?> </li>
				<li><?php echo $this->Form->postLink(__d('admin', 'Delete Contact General'), array('action' => 'delete', $contactGeneral['ContactGeneral']['id'], '?' => array('redirect' => $this->Html->url(array('action' => 'index')))), null, __d('admin', 'Are you sure you want to delete # %s?', $contactGeneral['ContactGeneral']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'New Contact General'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__d('admin', 'List Contact Generals'), array('action' => 'index')); ?> </li>
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
