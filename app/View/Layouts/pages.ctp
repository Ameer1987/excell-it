<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <?php echo $this->fetch('title'); ?>
        </title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">

        <?php
        echo $this->Html->meta('favicon.ico', '/img/favicon.ico', array(
            'type' => 'icon'
        ));

        echo $this->Html->css('grid');
        echo $this->Html->css('style');
        echo $this->Html->css('camera');
        echo $this->Html->css('owl-carousel');

        echo $this->Html->script('jquery');
        echo $this->Html->script('jquery-migrate-1.2.1');
        echo $this->Html->script('device.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>
    <body>
        <div class="page">
            <!--
            ========================================================
                                                              HEADER
            ========================================================
            -->

            <header>
                <div class="container">
                    <div class="brand">
                        <h1 class="brand_name"><a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'homepage')); ?>">Business</a></h1>
                        <p class="brand_slogan">Company</p>
                    </div><a href="callto:#" class="fa-phone">800-2345-6789</a>
                    <p>One of our representatives will happily contact you within 24 hours. For urgent needs call us at</p>
                </div>
                <div id="stuck_container" class="stuck_container">
                    <div class="container">
                        <nav class="nav">
                            <?php echo $this->element('menu'); ?>
                        </nav>
                    </div>
                </div>
            </header>

            <!--
            ========================================================
                                        CONTENT
            ========================================================
            -->
            <main class="mobile-center">
                <?php echo $this->Flash->render(); ?>

                <?php echo $this->fetch('content'); ?>
            </main>

            <!--
========================================================
                            FOOTER
========================================================
            -->
            <footer>
                <?php echo $this->fetch('extra_footer'); ?>
                <section>
                    <div class="container">
                        <?php echo $this->element('footer_copyright'); ?>
                    </div>
                </section>
            </footer>

        </div>
        <?php echo $this->Html->script('script'); ?>
    </body>
</html>