<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '938749116210048',
            xfbml: true,
            version: 'v2.5'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
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
        $truncated = (strlen($model->description) > 400) ? substr($model->description, 0, 400) . '...' : $model->description;
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
                        <img class="img-responsive" style="max-height: 450px; width: auto" src="<?php echo $webFolder . $files_folder . $img; ?>" alt="property_image" >
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
    <h2 style="display: inline-block">Possession : <?= $model->possession ?></h2>
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
                <h3><i class="fa fa-fw fa-rupee"></i><?= number_format($model->budget, 2) ?> Cr Onwards</h3>
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
                <div class="panel-body" id="div_description">
                    <p id="p_content_truncated"><?= $truncated ?></p>
                    <p id="p_content_full" style="display: none"><?= $model->description ?></p>
                </div><!-- /.panel-body -->
                <?php if (strlen($model->description) > 400) { ?>
                    <div class="panel-body" >
                        <button class="btn btn-primary" id="btn_show_more"><i class="fa fa-arrow-down"></i> Show more</button>
                    </div>
                <?php } ?>
            </div><!-- /.panel -->
            <h3 class="h4">Share:</h3>
            <p>
                <a href="#link" class="btn btn-primary"><i class="fa fa-envelope"></i> Email to a friend</a>
                <a href="#link" class="btn btn-facebook"><i class="fa fa-facebook"></i> Share</a>
            <!--<div class="fb-share-button" data-href="<?= $this->createAbsoluteUrl('/property/', array('id', $model->id)) ?>" data-layout="button"></div>-->
            <div
                class="fb-like"
                data-share="true"
                data-width="450"
                data-show-faces="true">
            </div>
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


    $(document).ready(function () {
        $('#btn_show_more').on('click', function () {
            $("#p_content_truncated").hide();
            $("#p_content_full").show('slow')
            $(this).hide();

        });

    });
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtFU9ag1KFdfCsTsU032uwk3X_y1eHjO0&callback=initMap">
</script>
<script>
    FB.ui({
        method: 'share',
        href: 'https://developers.facebook.com/docs/',
    }, function (response) {
    });
</script>
