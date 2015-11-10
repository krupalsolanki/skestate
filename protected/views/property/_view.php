<div class="row">
    <article class="post">
        <div class="col-sm-12 col-md-5">
            <a href="#link"><img class="img-responsive img-thumbnail" src="<?= Yii::app()->request->baseUrl . $model->image_path ?>"></a>
        </div><!-- /.col -->
        <div class="col-sm-12 col-md-7">
            <h3><a href="<?php echo CController::createUrl('//property/' . $model->id); ?>"><?= $model->project_name ?>, <span class="text-muted"><?= $model->location ?> </span></a></h3>
            <p><?= $model->tag_line ?></p>
            <div class="col-sm-12 col-md-6">
                <ul class="list-unstyled">
                    <li><i class="fa fa-fw fa-th"></i> <?= $model->area ?> Ft<sup>2</sup></li>
                    <li><i class="fa fa-fw fa-columns"></i> <?= $model->bed ?> Beds</li>
                    <li><i class="fa fa-fw fa-female"></i> <?= $model->bath ?> Bathrooms</li>
                    <li><i class="fa fa-fw fa-truck"></i> <?= $model->parking ?> Parking</li>
                    <li><i class="fa fa-fw fa-building-o"></i> <?= $model->balcony ?> Balcony</li>
                </ul>
                <p><a href="<?php echo CController::createUrl('//property/' . $model->id); ?>" class="btn btn-primary">View More »</a></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <h3><i class="fa fa-fw fa-rupee"></i><?= number_format($model->budget, 2) ?></h3>
            </div>

        </div><!-- /.col -->
    </article><!-- /.post -->
</div><!-- /.row -->