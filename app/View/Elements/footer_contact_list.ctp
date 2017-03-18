<ul class="row contact-list">
    <li class="grid_4">
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-map-marker"></div>
            </div>
            <div class="box_cnt__no-flow">
                <address><?php echo $contacts['Contact']['address']; ?></address>
            </div>
        </div>
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-envelope"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="mailto:#"><?php echo explode(',', $contacts['Contact']['email'])[0]; ?></a></div>
        </div>
    </li>
    <li class="grid_4">
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-phone"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="callto:#"><?php echo $contacts['Contact']['phone']; ?></a></div>
        </div>
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-fax"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="callto:#"><?php echo $contacts['Contact']['mobile']; ?></a></div>
        </div>
    </li>
    <li class="grid_4">
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-facebook"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="<?php echo $contacts['Contact']['facebook_link']; ?>">Follow on facebook</a></div>
        </div>
        <div class="box">
            <div class="box_aside">
                <div class="icon2 fa-twitter"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="<?php echo $contacts['Contact']['twitter_link']; ?>">Follow on Twitter</a></div>
        </div>
    </li>
</ul>