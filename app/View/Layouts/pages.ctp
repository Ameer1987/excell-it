<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <?php echo $this->fetch('title'); ?>
        </title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">

        <?php
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
                        <h1 class="brand_name">
                            <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'homepage')); ?>">
                                <img src="../files/files/<?php echo $Header['Header']['image_name'] ?>" style="width: 180px;"  alt='Excell IT' title='Excell IT' />
                            </a>
                        </h1>
                    </div><a href="callto:#" class="fa-phone"><?php echo $Header['Header']['phone'] ?></a>
                    <p><?php echo $Header['Header']['text'] ?></p>
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