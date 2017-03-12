<?php $this->assign('title', 'Excel IT'); ?>

<!--
      ========================================================
                                  CONTENT
      ========================================================
-->
<section class="well1">
    <div class="container">
        <h2><?php echo $career['Career']['header'] ?></h2>
        <div class="row">
            <div class="grid_9">
                <p><?php echo $career['Career']['details'] ?></p>
            </div>
            <div class="grid_3">
                <?php if ($career['Career']['image_name']): ?>
                    <img src="../../img/<?php echo $career['Career']['image_name'] ?>" alt="">
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
