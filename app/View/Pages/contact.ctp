<?php $this->assign('title', 'Excell IT | Contact us'); ?>

<!--
      ========================================================
                                  CONTENT
      ========================================================
-->
<?php if (count($contacts) > 0): ?>
    <?php echo $this->Html->script("http://maps.google.com/maps/api/js?key=AIzaSyAFGY4r77-ySMe8oGJsjuLsPWNfWt5c5R8&sensor=false", false); ?>

    <?php
    $map_options = array(
        "id" => "map_canvas",
        "width" => "100%",
        "height" => "300px",
        "zoom" => 16,
        "type" => "ROADMAP",
        "custom" => "mapTypeControl: false, disableDefaultUI: true",
        "localize" => false,
        "latitude" => $contacts['Contact']['position_latitude'],
        "longitude" => $contacts['Contact']['position_longitude'],
        "marker" => true,
        "infoWindow" => true
    );
    ?>

    <?php echo $this->GoogleMap->map($map_options); ?>

    <?php
    echo $this->GoogleMap->addMarker("map_canvas", 1, array(
        "showWindow" => true,
        "latitude" => $contacts['Contact']['position_latitude'],
        "longitude" => $contacts['Contact']['position_longitude'],
        "windowText" => "Excell IT Company",
        "markerTitle" => "Excell IT",
        "markerIcon" => "http://labs.google.com/ridefinder/images/mm_20_purple.png",
        "markerShadow" => "http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png"
    ));
    ?>

    <br />
    <section>
        <div class="container hr well1 ins2">
            <div class="row">
                <div class="grid_4">
                    <dl class="info">
                        <dt>Name</dt>
                        <dd><?php echo $contacts['Contact']['name']; ?></dd>
                        <dd><?php echo $contacts['Contact']['address']; ?></dd>
                        <dd><?php echo $contacts['Contact']['phone']; ?></dd>
                    </dl>
                </div>
                <div class="grid_4">
                    <dl class="info">
                        <dt>Social</dt>
                        <dd><?php echo $contacts['Contact']['facebook_link']; ?></dd>
                        <dd><?php echo $contacts['Contact']['twitter_link']; ?></dd>
                        <dd><?php echo $contacts['Contact']['skype_link']; ?></dd>
                    </dl>
                </div>
                <div class="grid_4">
                    <dl class="info">
                        <dt>Emails</dt>
                        <?php $emails = explode(',', $contacts['Contact']['email']); ?>
                        <?php foreach ($emails as $email): ?>
                            <dd><?php echo $email; ?></dd>
                        <?php endforeach; ?>
                        <dd><?php echo $contacts['Contact']['details']; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>