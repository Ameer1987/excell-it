<?php $this->assign('title', 'Excell IT | Partners'); ?>

<!--
      ========================================================
                                  CONTENT
      ========================================================
-->
<section class="well1">
    <div class="container">
        <div class="row">
            <?php foreach ($partners as $key => $partner): ?>
                <?php if ($key > 0 && $key % 3 == 0): ?>
                </div><hr><div class="row">
                <?php endif ?>
                <div class="grid_4">
                    <?php if ($partner['Partner']['image_name']): ?>
                        <img src="../files/files/<?php echo $partner['Partner']['image_name'] ?>" alt="">
                    <?php endif ?>
                    <h3><?php echo $partner['Partner']['header'] ?></h3>
                    <p><?php echo $partner['Partner']['details'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
