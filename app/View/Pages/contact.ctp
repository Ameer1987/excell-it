<?php $this->assign('title', 'Excel IT | Contact us'); ?>

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
        "latitude" => $contacts[0]['Contact']['position_latitude'],
        "longitude" => $contacts[0]['Contact']['position_longitude'],
        "marker" => true,
        "infoWindow" => true
    );
    ?>

    <?php echo $this->GoogleMap->map($map_options); ?>

    <?php
    echo $this->GoogleMap->addMarker("map_canvas", 1, array(
        "showWindow" => true,
        "latitude" => $contacts[0]['Contact']['position_latitude'],
        "longitude" => $contacts[0]['Contact']['position_longitude'],
        "windowText" => "Excel IT Company",
        "markerTitle" => "Excel IT",
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
                        <dd><?php echo $contacts[0]['Contact']['name']; ?></dd>
                        <dd><?php echo $contacts[0]['Contact']['address']; ?></dd>
                        <dd><?php echo $contacts[0]['Contact']['phone']; ?></dd>
                    </dl>
                </div>
                <div class="grid_4">
                    <dl class="info">
                        <dt>Social</dt>
                        <dd><?php echo $contacts[0]['Contact']['facebook_link']; ?></dd>
                        <dd><?php echo $contacts[0]['Contact']['twitter_link']; ?></dd>
                        <dd><?php echo $contacts[0]['Contact']['skype_link']; ?></dd>
                    </dl>
                </div>
                <div class="grid_4">
                    <dl class="info">
                        <dt>Emails</dt>
                        <?php $emails = explode(',', $contacts[0]['Contact']['email']); ?>
                        <?php foreach ($emails as $email): ?>
                            <dd><?php echo $email; ?></dd>
                        <?php endforeach; ?>
                        <dd><?php echo $contacts[0]['Contact']['details']; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>