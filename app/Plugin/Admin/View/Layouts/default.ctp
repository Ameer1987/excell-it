<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $backendPluginName; ?>
            <?php echo $title_for_layout; ?>
        </title>

        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('/' . $backendPluginNameUnderscored . '-plugin/css/bootstrap.min.css');

        echo $this->Html->script('/' . $backendPluginNameUnderscored . '-plugin/js/vendors.min.js');
        echo $this->Html->script('/' . $backendPluginNameUnderscored . '-plugin/js/ckeditor/ckeditor.js');
        echo $this->Html->script('/' . $backendPluginNameUnderscored . '-plugin/js/ckfinder/ckfinder.js');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <br />

                    <a class="brand" href=""><?php echo $this->Html->link('Excell-It  Admin', '/' . $backendPluginNameUnderscored); ?></a>
                    <br />
                    <ul class="nav navbar-nav">
                        <li><?php echo $this->Html->link('Users', '/' . $backendPluginNameUnderscored . '/users'); ?></li>
                        <li><?php echo $this->Html->link('Careers', '/' . $backendPluginNameUnderscored . '/careers'); ?></li>
                        <li><?php echo $this->Html->link('Partners', '/' . $backendPluginNameUnderscored . '/partners'); ?></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link('General', '/' . $backendPluginNameUnderscored . '/contact_generals'); ?></li>
                                <li><?php echo $this->Html->link('Branches', '/' . $backendPluginNameUnderscored . '/contact_branches'); ?></li>
                            </ul>
                        </li>
                        <li><?php echo $this->Html->link('Services', '/' . $backendPluginNameUnderscored . '/services'); ?></li>
                        <li><?php echo $this->Html->link('Service Snippets', '/' . $backendPluginNameUnderscored . '/service_snippets'); ?></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Homepage
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link('Homepage Sliders', '/' . $backendPluginNameUnderscored . '/homepage_sliders'); ?></li>
                                <li><?php echo $this->Html->link('Upper Snippets', '/' . $backendPluginNameUnderscored . '/home_upper_snippets'); ?></li>
                                <li><?php echo $this->Html->link('Middle Snippets', '/' . $backendPluginNameUnderscored . '/home_middle_snippets'); ?></li>
                                <li><?php echo $this->Html->link('Bottom1', '/' . $backendPluginNameUnderscored . '/bottom1_blocks'); ?></li>
                                <li><?php echo $this->Html->link('Bottom2', '/' . $backendPluginNameUnderscored . '/bottom2_blocks'); ?></li>
                                <li><?php echo $this->Html->link('Bottom3', '/' . $backendPluginNameUnderscored . '/bottom3_blocks'); ?></li>
                                <li><?php echo $this->Html->link('Bottom4', '/' . $backendPluginNameUnderscored . '/bottom4_blocks'); ?></li>
                            </ul>
                        </li>
                        <li><?php echo $this->Html->link('Headers', '/' . $backendPluginNameUnderscored . '/headers'); ?></li>
                    </ul>
                    <ul class="nav pull-right">
                        <li><?php echo $this->Html->link('Logout', '/' . $backendPluginNameUnderscored . '/users/logout'); ?></li>
                    </ul>
                </div>
            </div>
            <div id="content">

                <?php echo $this->Session->flash('bad', array('params' => array('class' => 'alert alert-error'))); ?>
                <?php echo $this->Session->flash('good', array('params' => array('class' => 'alert alert-success'))); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">
            </div>
        </div>
        <?php echo $this->Html->script('/' . $backendPluginNameUnderscored . '-plugin/js/admin.min.js'); ?>
        <?php echo $this->Js->writeBuffer(); ?>
    </body>
</html>
