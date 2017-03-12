<?php $this->assign('title', 'Excel IT'); ?>

<!--
      ========================================================
                                  CONTENT
      ========================================================
-->
<section class="well1">
    <div class="container">
        <h2><?php echo $service['Service']['header'] ?></h2>
        <div class="row">
            <div class="grid_9">
                <p><?php echo $service['Service']['details'] ?></p>
            </div>
            <div class="grid_3">
                <?php if ($service['Service']['image_name']): ?>
                    <img src="../../img/<?php echo $service['Service']['image_name'] ?>" alt="">
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
