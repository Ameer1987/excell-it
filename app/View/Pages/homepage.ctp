<!--
            ========================================================
                                        CONTENT
            ========================================================
-->
<main>
    <section class="camera_container">
        <?php echo $this->element('homepage_slideshow'); ?>
    </section>
    <section>
        <?php echo $this->element('homepage_banner1'); ?>
    </section>
    <section class="well ins1">
        <?php echo $this->element('homepage_banner2'); ?>
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
</main>
<!--
========================================================
                            FOOTER
========================================================
-->
<footer>
    <section class="well3">
        <div class="container">
            <?php echo $this->element('footer_contact_list'); ?>
        </div>
    </section>
    <section>
        <div class="container">
            <?php echo $this->element('footer_copyright'); ?>
        </div>
    </section>
</footer>