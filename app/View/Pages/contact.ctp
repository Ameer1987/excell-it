
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
    "latitude" => 25.197525,
    "longitude" => 55.274288,
    "marker" => true,
    "infoWindow" => true
);
?>

<?php echo $this->GoogleMap->map($map_options); ?>

<?php
echo $this->GoogleMap->addMarker("map_canvas", 1, array(
    "showWindow" => true,
    "latitude" => 25.197525,
    "longitude" => 55.274288,
    "windowText" => "Excel IT Company",
    "markerTitle" => "Excel IT",
    "markerIcon" => "http://labs.google.com/ridefinder/images/mm_20_purple.png",
    "markerShadow" => "http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png"
));
?>

<br />
<main class="mobile-center">
    <section>
        <div class="container hr well1 ins2">
            <div class="row">
                <div class="grid_4">
                    <dl class="info">
                        <dt>Name</dt>
                        <dd>Business Company</dd>
                        <dt>Birth Date</dt>
                        <dd>June 23, 1987</dd>
                        <dt>Place of birth</dt>
                        <dd>Los Angeles, California</dd>
                    </dl>
                </div>
                <div class="grid_4">
                    <dl class="info">
                        <dt>History</dt>
                        <dd>
                            <ul>
                                <li>Lorem ipsum dolor sit 1997-1999 adipis</li>
                                <li>Pellentesque sed dolor  1995-1999</li>
                                <li>Aliquam congue nisl 2001-2005</li>
                                <li>Mauris accumsa vel diam 2006-2008</li>
                                <li>Sed in lacus ut 2008-2010 enim adipiscing </li>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="grid_4">
                    <dl class="info">
                        <dt>History</dt>
                        <dd>
                            <ul>
                                <li>Lorem ipsum dolor sit 1997-1999 adipis</li>
                                <li>Pellentesque sed dolor  1995-1999</li>
                                <li>Aliquam congue nisl 2001-2005</li>
                                <li>Mauris accumsa vel diam 2006-2008</li>
                                <li>Sed in lacus ut 2008-2010 enim adipiscing </li>
                            </ul>
                        </dd>
                    </dl>
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
    <section>
        <div class="container">
            <?php echo $this->element('footer_copyright'); ?>
        </div>
    </section>
</footer>