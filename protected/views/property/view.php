<article class="post">
    <!-- Carousel -->
    <div id="my-carousel" class="carousel slide">
        <?php
        $folder = Yii::getPathOfAlias('webroot') . '/images/property/'; // folder for uploaded files
        $webFolder = Yii::app()->request->baseUrl . "/images/property/";
        $files_folder = $model->id . '/';
        $count = $indicators = 0;
        $scanned_directory = array();
        $directory = $folder . $files_folder;
        if (file_exists($directory)) {
            $scanned_directory = array_diff(scandir($directory), array('..', '.', '.swp'));
            ?>
            <!-- indicators -->
            <ol class="carousel-indicators">
                <?php
                foreach ($scanned_directory as $img) {
                    $indicators++;
                    ?>
                    <li data-target="#my-carousel" data-slide-to="<?= $indicators ?>" class="<?php echo $count == 1 ? 'active' : null ?>"></li>
                    <div class="item <?php echo $count == 1 ? 'active' : null ?>">
                        <img class="img-responsive" src="<?php echo $webFolder . $files_folder . $img; ?>" alt="property_image" >
                    </div><!-- /.item -->
                <?php }
                ?>
            </ol>
            <!-- carousel -->
            <div class="carousel-inner">

                <?php
                foreach ($scanned_directory as $img) {
                    $count++;
                    ?>
                    <div class="item <?php echo $count == 1 ? 'active' : null ?>">
                        <img class="img-responsive" src="<?php echo $webFolder . $files_folder . $img; ?>" alt="property_image" >
                    </div><!-- /.item -->
                <?php }
                ?>
            </div>
            <?php
        } else {
            ?>
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/img/mumbai_skyline.jpg" alt=""/>
                </div><!-- /.item -->
            </div>
            <?php
        }
        ?>
        <!-- Controls -->
        <a class="left carousel-control" href="#my-carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#my-carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div><!-- /.carousel -->

    <h2><i class="fa fa-map-marker"></i> <?= $model->project_name ?>, <span class="text-muted"><?= $model->location ?> </span></h2>
    <p class="lead"><?= $model->tag_line ?></p>

    <hr>

    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="widget padding-md bg-secondary">
                <h3 class="headline">Features:</h3>
                <ul class="list-unstyled">
                    <li><i class="fa fa-fw fa-th"></i> <strong>Property:</strong> <?= $model->area ?> Ft<sup>2</sup></li>
                    <li><i class="fa fa-fw fa-columns"></i> <strong>Bedrooms:</strong> <?= $model->bed ?></li>
                    <li><i class="fa fa-fw fa-female"></i> <strong>Bathrooms:</strong> <?= $model->bath ?></li>
                    <li><i class="fa fa-fw fa-truck"></i> <strong>Parking:</strong> <?= $model->parking ?> Spots</li>
                    <li><i class="fa fa-fw fa-building-o"></i> <strong>Balcony:</strong> <?= $model->balcony ?></li>

<!--                                    <li><i class="fa fa-fw fa-signal"></i> <strong>Internet:</strong> Wireless</li>
<li><i class="fa fa-fw fa-fire"></i> <strong>Heating Type:</strong> Forced air</li>
<li><i class="fa fa-fw fa-briefcase"></i> <strong>Last Sold:</strong> May 2006, for $106.000</li>-->
                </ul>
                <input type="hidden" id="Property_address" value="<?= $model->address ?> " />
                <h3><i class="fa fa-fw fa-rupee"></i><?= number_format($model->budget, 2) ?> Cr</h3>
                <ul class="tags">
                    <?php echo $model->swiming_pool ? '<li><a href="#link">Swimming Pool</a></li>' : null; ?>
                    <?php echo $model->garden ? '<li><a href="#link">Garden</a></li>' : null; ?>
                    <?php echo $model->rain_water_harvesting ? '<li><a href="#link">Rain water Harvesting</a></li>' : null; ?>
                    <?php echo $model->security ? '<li><a href="#link">Security</a></li>' : null; ?>
                    <?php echo $model->power_backup ? '<li><a href="#link">Power Backup</a></li>' : null; ?>
                    <?php echo $model->gymnasium ? '<li><a href="#link">Gymnasium</a></li>' : null; ?>
                </ul>
            </div><!-- /.widget -->
        </div><!-- /.col -->
        <div class="col-sm-12 col-md-7">
            <div class="panel panel-secondary">
                <div class="panel-heading">
                    <h3 class="panel-title">Description</h3>
                </div>
                <div class="panel-body">
                    <p><?= $model->description ?></p>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <h3 class="h4">Share:</h3>
            <p>
                <a href="#link" class="btn btn-primary"><i class="fa fa-envelope"></i> Email to a friend</a>
                <a href="#link" class="btn btn-facebook"><i class="fa fa-facebook"></i> Share</a>
            </p>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="panel panel-secondary">
        <div class="panel-heading">
            <h3 class="panel-title">Map location</h3>
        </div><!-- /.panel-heading -->
        <div class="panel-body padding-md">
            <div id="basic_map" style="height: 350px; width: 100%"></div>
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
</article><!-- /.post -->
<script>

    function initMap() {
        var map = new google.maps.Map(document.getElementById('basic_map'), {
            zoom: 14,
            center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();

        geocodeAddress(geocoder, map);
    }

    function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('Property_address').value;
        geocoder.geocode({'address': address}, function (results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtFU9ag1KFdfCsTsU032uwk3X_y1eHjO0&callback=initMap">
</script>