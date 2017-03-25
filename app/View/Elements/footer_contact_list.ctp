<ul class="row contact-list">
    <li class="grid_4">
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-map-marker"></div>
            </div>
            <div class="box_cnt__no-flow">
                <address><?php echo $ContactGeneral['ContactGeneral']['address']; ?></address>
            </div>
        </div>
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-envelope"></div>
            </div>
            <div class="box_cnt__no-flow">
                <a href="mailto:#">
                    <?php echo explode(',', $ContactGeneral['ContactGeneral']['email'])[0]; ?>
                </a>
            </div>
        </div>
    </li>
    <li class="grid_4">
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-phone"></div>
            </div>
            <div class="box_cnt__no-flow">
                <?php foreach (explode(',', $ContactGeneral['ContactGeneral']['phone']) as $phone): ?>
                    <?php echo $phone; ?>
                    <br/>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-fax"></div>
            </div>
            <div class="box_cnt__no-flow">
                <?php foreach (explode(',', $ContactGeneral['ContactGeneral']['mobile']) as $mobile): ?>
                    <?php echo $mobile; ?>
                    <br/>
                <?php endforeach; ?>
            </div>
        </div>
    </li>
    <li class="grid_4">
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-facebook"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="<?php echo $ContactGeneral['ContactGeneral']['facebook_link']; ?>">Follow on facebook</a></div>
        </div>
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-twitter"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="<?php echo $ContactGeneral['ContactGeneral']['linkedin_link']; ?>">Follow on Linked In</a></div>
        </div>
    </li>
</ul>