<?php $this->assign('title', 'Excel IT | Homepage'); ?>

<!--
            ========================================================
                                        CONTENT
            ========================================================
-->

<?php if (count($HomepageSliders) > 0): ?>
    <section class="camera_container">
        <div id="camera" class="camera_wrap">
            <?php foreach ($HomepageSliders as $HomepageSlider): ?>
                <div data-src="../files/files/<?php echo $HomepageSlider['HomepageSlider']['image_name'] ?>">
                    <div class="camera_caption fadeIn">
                        <div class="container">
                            <div class="row">
                                <div class="preffix_6 grid_6"><?php echo $HomepageSlider['HomepageSlider']['title'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<?php if (count($HomeUpperSnippets) > 0): ?>
    <section>
        <div class="container banner_wr">
            <ul class="banner">
                <?php foreach ($HomeUpperSnippets as $HomeUpperSnippet): ?>
                    <?php $backgroundColor = $HomeUpperSnippet['HomeUpperSnippet']['background_colour'] ? ('background-color: ' . $HomeUpperSnippet['HomeUpperSnippet']['background_colour'] . '; ') : ''; ?>
                    <li style="<?php echo $backgroundColor; ?>">
                        <div>
                            <?php if ($HomeUpperSnippet['HomeUpperSnippet']['image_name']): ?>
                                <img style="width: 100px;" src="../files/files/<?php echo $HomeUpperSnippet['HomeUpperSnippet']['image_name'] ?>" alt="">
                            <?php endif ?>
                        </div>
                        <h3><?php echo $HomeUpperSnippet['HomeUpperSnippet']['header']; ?></h3>
                        <p><?php echo $HomeUpperSnippet['HomeUpperSnippet']['details']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>

<?php if (count($HomeMiddleSnippets) > 0): ?>
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
                                <?php if ($HomeMiddleSnippet['HomeMiddleSnippet']['image_name']): ?>
                                    <img style="width: 100px;" src="../files/files/<?php echo $HomeMiddleSnippet['HomeMiddleSnippet']['image_name'] ?>" alt="">
                                <?php endif ?>
                            </div>
                            <div class="box_cnt__no-flow">
                                <h3><a href="#"><?php echo $HomeMiddleSnippet['HomeMiddleSnippet']['header']; ?></a></h3>
                                <p><?php echo $HomeMiddleSnippet['HomeMiddleSnippet']['details']; ?></p>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                </li>
            </ul>
        </div>
    </section>
<?php endif; ?>

<section class="well1">
    <div class="container">
        <div class="row">
            <div class="grid_4">
                <?php if ($Bottom1Block): ?>
                    <h2><?php echo $Bottom1Block['Bottom1Block']['header'] ?></h2>
                    <img src="../files/files/<?php echo $Bottom1Block['Bottom1Block']['image_name'] ?>" alt="">
                    <p><?php echo $Bottom1Block['Bottom1Block']['text'] ?></p>
                <?php endif; ?>
            </div>
            <div class="grid_4">
                <?php if ($Bottom2Block): ?>
                    <h2><?php echo $Bottom2Block['Bottom2Block']['header'] ?></h2>
                    <img src="../files/files/<?php echo $Bottom2Block['Bottom2Block']['image_name'] ?>" alt="">
                    <p><?php echo $Bottom2Block['Bottom2Block']['text'] ?></p>
                <?php endif; ?>
            </div>
            <div class="grid_4">
                <?php if ($Bottom3Block): ?>
                    <div class="info-box">
                        <h2><?php echo $Bottom3Block['Bottom3Block']['header'] ?></h2>
                        <img src="../files/files/<?php echo $Bottom3Block['Bottom3Block']['image_name'] ?>" alt="">
                        <p><?php echo $Bottom3Block['Bottom3Block']['text'] ?></p>
                    </div>
                <?php endif; ?>
                <?php if (count($Bottom4Blocks) > 1): ?>
                    <div class="owl-carousel">
                        <?php foreach ($Bottom4Blocks as $key => $Bottom4Block): ?>
                            <div class="item">
                                <blockquote class="box">
                                    <div class="box_aside">
                                        <img src="../files/files/<?php echo $Bottom4Block['Bottom4Block']['image_name'] ?>" alt="">
                                    </div>
                                    <div class="box_cnt__no-flow">
                                        <p>
                                            <q><?php echo $Bottom4Block['Bottom4Block']['text'] ?></q>
                                        </p>
                                        <!--<cite><a href="#">Incididunt ut labor</a></cite>-->
                                    </div>
                                </blockquote>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
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
