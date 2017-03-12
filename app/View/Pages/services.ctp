<?php $this->assign('title', 'Excel IT | Services'); ?>

<!--
      ========================================================
                                  CONTENT
      ========================================================
-->
<section class="well1 ins2 mobile-center">
    <div class="container">
        <h2>The best business services</h2>
        <div class="row">
            <?php foreach ($services as $key => $service): ?>
                <?php if ($key > 0 && $key % 3 == 0): ?>
                </div><hr><div class="row">
                <?php endif ?>
                <div class="grid_4">
                    <?php if ($service['Service']['image_name']): ?>
                        <img src="../img/<?php echo $service['Service']['image_name'] ?>" alt="">
                    <?php endif ?>
                    <h3><?php echo $service['Service']['header'] ?></h3>
                    <p><?php echo $service['Service']['details'] ?></p>
                    <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'displayService', $service['Service']['id'])); ?>" class="btn">Read more</a>
                </div>
            <?php endforeach ?>
        </div>
        <hr>
    </div>
</section>
<section class="well1 ins4 bg-image">
    <div class="container">
        <div class="row">
            <div class="grid_7 preffix_5">
                <h2>How we can help?</h2>
                <p>Curabitur pellentesque, turpis sit amet iaculis condimentum, urna mi aliquet turpis, itae pharetra mauris eros non arcu. Aenean felis augue, dignissim in tempus eget, cursus sit amet sem? Cras vehicula vehicula nunc id fringilla?</p>
                <div class="row off4">
                    <div class="grid_3">
                        <ul class="marked-list wow fadeInRight">
                            <li><a href="#">Praesent vestibulum molestie</a></li>
                            <li><a href="#">Aenean nonummy hendrerit</a></li>
                            <li><a href="#">Vivamus eget nibh</a></li>
                            <li><a href="#">Etiam cursus leo vel metus</a></li>
                        </ul>
                    </div>
                    <div class="grid_3">
                        <ul data-wow-delay="0.2s" class="marked-list wow fadeInRight">
                            <li><a href="#">Donec in velit vel ipsum auctor</a></li>
                            <li><a href="#">Vestibulum iaculis lacinia est</a></li>
                            <li><a href="#">Proin dictum elementum velit</a></li>
                            <li><a href="#">Fusce euismod consequat ante</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
