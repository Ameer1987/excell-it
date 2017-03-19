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
                        <img src="../files/files/<?php echo $service['Service']['image_name'] ?>" alt="">
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
<?php if ($service_snippet): ?>
    <section class="well1 ins4 bg-image">
        <div class="container">
            <div class="row">
                <div class="grid_7 preffix_5">
                    <h2><?php echo $service_snippet['ServiceSnippet']['header'] ?></h2>
                    <p><?php echo $service_snippet['ServiceSnippet']['intro'] ?></p>
                    <div class="row off4">
                        <div class="grid_3">
                            <ul class="marked-list wow fadeInRight">
                                <?php foreach ($service_snippet['ServiceSnippetPoint'] as $key => $serviceSnippetPoint): ?>
                                    <?php if ($key > 0 and $key % 3 === 0): ?>  
                                    </ul>
                                </div>
                                <div class="grid_3">
                                    <ul data-wow-delay="0.2s" class="marked-list wow fadeInRight">
                                    <?php endif; ?>    
                                    <li><?php echo $serviceSnippetPoint['point_detail'] ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
