<?php $this->assign('title', 'Excell IT | Career'); ?>

<!--
      ========================================================
                                  CONTENT
      ========================================================
-->
<section class="well1">
    <div class="container">
        <h2>Job opportunities</h2>
        <div class="row">
            <?php foreach ($careers as $key => $career): ?>
                <?php if ($key > 0 && $key % 3 == 0): ?>
                </div><hr><div class="row">
                <?php endif ?>
                <div class="grid_4">
                    <?php if ($career['Career']['image_name']): ?>
                        <img src="../files/files/<?php echo $career['Career']['image_name'] ?>" alt="">
                    <?php endif ?>
                    <h3><?php echo $career['Career']['header'] ?></h3>
                    <p><?php echo $career['Career']['details'] ?></p>
                    <!--<a href="<?php // echo Router::url(array('controller' => 'Pages', 'action' => 'displayCareer', $career['Career']['id']));   ?>" class="btn">Read more</a>-->
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
