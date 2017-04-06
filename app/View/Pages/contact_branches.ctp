<?php $this->assign('title', 'Excell IT | Contact us'); ?>

<!--
      ========================================================
                                  CONTENT
      ========================================================
-->
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
    "latitude" => $ContactGeneral['ContactGeneral']['position_latitude'],
    "longitude" => $ContactGeneral['ContactGeneral']['position_longitude'],
    "marker" => true,
    "infoWindow" => true
);
?>

<?php echo $this->GoogleMap->map($map_options); ?>

<?php
echo $this->GoogleMap->addMarker("map_canvas", 1, array(
    "showWindow" => true,
    "latitude" => $ContactGeneral['ContactGeneral']['position_latitude'],
    "longitude" => $ContactGeneral['ContactGeneral']['position_longitude'],
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
            <?php foreach ($ContactBranches as $key => $ContactBranch): ?>
                <?php if ($key > 0 && $key % 3 == 0): ?>
                </div><hr><div class="row">
                <?php endif ?>
                <div class="grid_4">
                    <dl class="info">
                        <dt><?php echo $ContactBranch['ContactBranch']['name']; ?></dt>
                        <dd><?php echo $ContactBranch['ContactBranch']['details']; ?></dd>
                        <dd><?php echo $ContactBranch['ContactBranch']['address']; ?></dd>
                        <dd><?php echo $ContactBranch['ContactBranch']['phone']; ?></dd> 
                        <dd><?php echo $ContactBranch['ContactBranch']['mobile']; ?></dd> 
                        <dd><?php echo $ContactBranch['ContactBranch']['facebook_link']; ?></dd>                    
                        <dd><?php echo $ContactBranch['ContactBranch']['linkedin_link']; ?></dd>                    
                        <dd><?php echo $ContactBranch['ContactBranch']['skype_link']; ?></dd>                    
                        <dd><?php echo $ContactBranch['ContactBranch']['email']; ?></dd> 
                    </dl>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
