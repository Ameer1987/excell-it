<?php $this->assign('title', 'Excel IT | Homepage'); ?>

<!--
            ========================================================
                                        CONTENT
            ========================================================
-->

<section class="camera_container">
    <?php echo $this->element('homepage_slideshow'); ?>
</section>
<section>
    <div class="container banner_wr">
        <ul class="banner">
            <?php foreach ($HomeUpperSnippets as $HomeUpperSnippet): ?>
                <li>
                    <div class="fa-globe"></div>
                    <h3><?php echo $HomeUpperSnippet['HomeUpperSnippet']['header']; ?></h3>
                    <p><?php echo $HomeUpperSnippet['HomeUpperSnippet']['details']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<section class="well ins1">
    <div class="container hr">
        <ul class="row product-list">
            <li class="grid_6">
                <?php foreach ($HomeMiddleSnippets as $key => $HomeMiddleSnippet): ?>
                    <?php if ($key % 2 == 0 && $key !== 0): ?>
                    </li>
                    <li class="grid_6">
                    <?php endif; ?>
                    <div class="box wow fadeInRight">
                        <div class="box_aside">
                            <div class="icon fa-comments"></div>
                        </div>
                        <div class="box_cnt__no-flow">
                            <h3><a href="#"><?php echo $HomeUpperSnippet['HomeUpperSnippet']['header']; ?></a></h3>
                            <p><?php echo $HomeUpperSnippet['HomeUpperSnippet']['details']; ?></p>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </li>
        </ul>
    </div>
</section>
<section class="well1">
    <div class="container">
        <div class="row">
            <div class="grid_4">
                <?php echo $this->element('homepage_grid1'); ?>
            </div>
            <div class="grid_4">
                <?php echo $this->element('homepage_grid2'); ?>
            </div>
            <div class="grid_4">
                <div class="info-box">
                    <?php echo $this->element('homepage_info_box'); ?>
                </div>
                <div class="owl-carousel">
                    <?php echo $this->element('homepage_carousel'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->start('extra_footer'); ?>
<section class="well3">
    <div class="container">
        <?php echo $this->element('footer_contact_list'); ?>
    </div>
</section>
<?php $this->end(); ?>