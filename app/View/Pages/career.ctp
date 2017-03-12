<?php $this->assign('title', 'Excel IT | Career'); ?>

<!--
      ========================================================
                                  CONTENT
      ========================================================
-->
<section class="well1">
    <div class="container">
        <h2>Job opportunities</h2>
        <div class="row">
            <?php foreach ($careers as $career): ?>
                <div class="grid_4">
                    <h3><?php echo $career['Career']['header'] ?></h3>
                    <p><?php echo $career['Career']['details'] ?></p>
                    <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'displayObject', $career['Career']['id'], 'Career')); ?>" class="btn">Read more</a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
