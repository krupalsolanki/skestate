<article class="post">
    <!-- Carousel -->
    <div id="my-carousel" class="carousel slide">
        <!-- indicators -->
        <ol class="carousel-indicators">
            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my-carousel" data-slide-to="1"></li>
        </ol>
        <!-- carousel -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide-1.jpg" alt="1200x500" >
            </div><!-- /.item -->
            <div class="item">
                <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide-1.jpg" alt="1200x500" >
            </div><!-- /.item -->
        </div><!-- /.carousel-inner -->
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
                <h3><i class="fa fa-fw fa-rupee"></i><?= number_format($model->budget, 2) ?></h3>
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
            <div class="embed-wrapper">
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=S%C3%A3o+Paulo,+Brazil&amp;aq=0&amp;oq=S%C3%A3o+Paulo&amp;sll=-14.264383,-51.943359&amp;sspn=52.984978,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=S%C3%A3o+Paulo,+Brazil&amp;t=m&amp;z=9&amp;ll=-23.55052,-46.633309&amp;output=embed"></iframe>
            </div>
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
</article><!-- /.post -->
