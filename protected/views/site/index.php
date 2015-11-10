<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$data = TblProperty::model()->findAll();
$count = count($data);
$location = Yii::app()->db->createCommand('select distinct location from tbl_property')->queryColumn();
?>
<section class="wrapper-lg bg-custom-home">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="widget padding-lg bg-dark">
                    <h1 class="heading-lg text-center text-light">Buy, Sell, or Rent Properties</h1>
                    <br class="spacer-lg">
                    <form action="<?= CController::createUrl('property/index') ?>" class="form-inline">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Search:</label>
                                <select class="form-control selectpicker show-tick" title='Choose One' data-style="btn-primary" name="Property[type]">
                                    <?php
                                    $typeOfProperty = TypeOfProperty::model()->findAll();
                                    foreach ($typeOfProperty as $type) {
                                        echo "<option value=\"$type->id\">$type->type</option>";
                                    }
                                    ?>
                                </select>
                            </div><!-- /.col -->
                            <div class="col-md-2">
                                <label for="">Status:</label>
                                <select class="form-control selectpicker show-tick" title='Choose One' data-style="btn-primary" name="Property[status]">
                                    <optgroup label="Status:">
                                        <option>Buy</option>
                                        <option>Sale</option>
                                        <option>Rent</option>
                                    </optgroup>
                                </select>
                            </div><!-- /.col -->
                            <div class="col-md-3">
                                <label for="">Location:</label>
                                <select class="form-control selectpicker show-tick" title='Choose One' data-live-search="true" data-style="btn-primary" name="Property[location]">
                                    <?php
                                    foreach ($location as $location) {
                                        echo "<option>$location</option>";
                                    }
                                    ?>
                                </select>
                            </div><!-- /.col -->
                            <div class="col-md-2">
                                <label for="">Price:</label>
                                <select class="form-control selectpicker show-tick" title='Choose One' data-style="btn-primary" name="range">
                                    <optgroup label="Price:">
                                        <option>Up to 5000</option>
                                        <option>Up to 10000</option>
                                        <option>Up to 20000</option>
                                    </optgroup>
                                </select>
                            </div><!-- /.col -->
                            <div class="col-md-2">
                                <label for="">Ready?</label>
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.widget -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- /hero -->

<?php $urgentMessage = UrgentMessage::model()->findAll(); ?>
<section class="wrapper-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <marquee behavior="scroll" direction="left" scrolldelay='150'>
                    <?php
                    foreach ($urgentMessage as $message) {
                        echo $message->message . "&nbsp;";
                    }
                    ?>
                </marquee>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="wrapper-md bg-highlight">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <div class="overlay-container">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/item-small.jpg">
                        <div class="overlay-content">
                            <h3 class="h4 headline">Great Deal</h3>
                            <p>So you know you're getting a top quality property from an experienced team.</p>
                        </div><!-- /.overlay-content -->
                    </div><!-- /.overlay-container -->
                    <div class="thumbnail-meta">
                        <p><i class="fa fa-fw fa-home"></i> 1199 Pacific Hwy #110</p>
                        <p><i class="fa fa-fw fa-map-marker"></i> San Diego, CA 92101</p>
                    </div>
                    <div class="thumbnail-meta">
                        <i class="fa fa-fw fa-info-circle"></i> 1460 Ft | 2 Bed | 1,5 Bath | 2 Garage
                    </div>
                    <div class="thumbnail-meta">
                        <i class="fa fa-fw fa-dollar"></i> <span class="h3">350.000</span> <a href="#link" class="btn btn-link pull-right">View <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div><!-- /.thumbnail -->
            </div>
            <?php
            for ($i = 0; $i < $count; $i++) {
                ?>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="overlay-container">
                            <img src="<?php echo Yii::app()->request->baseUrl . $data[$i]->image_path; ?>">
                            <div class="overlay-content">
                                <h3 class="h4 headline"> <?php echo $data[$i]->project_name; ?> </h3>
                                <p> By: <?php echo $data[$i]->builder; ?></p>
                            </div><!-- /.overlay-content -->
                        </div><!-- /.overlay-container -->
                        <div class="thumbnail-meta">
                            <p><i class="fa fa-fw fa-home"></i> <?php echo $data[$i]->location . "," . $data[$i]->city; ?></p>
                            <p><i class="fa fa-fw fa-map-marker"></i> <?php echo $data[$i]->address; ?></p>
                        </div>
                        <div class="thumbnail-meta">
                            <i class="fa fa-fw fa-info-circle"></i> <?php echo $data[$i]->area; ?> sqft.| <?php echo $data[$i]->rate; ?> per sqft.| <?php echo $data[$i]->bed; ?> BHK 
                        </div>
                        <div class="thumbnail-meta">
                            <i class="fa fa-fw fa-inr"></i> <span class="h3"><?php echo $data[$i]->budget; ?></span> <a href='<?php echo CController::createUrl('//property/' . $data[$i]->id); ?>' class="btn btn-link pull-right">View <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.col -->
            <?php } ?>
            <div class="col-md-6">

                <!-- Carousel -->
                <div id="my-carousel" class="carousel slide no-margin-bottom">
                    <!-- indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#my-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- carousel -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/img/wallpaper.jpg" alt="1200x500">
                            <div class="carousel-caption visible-lg">
                                <h1>Bootstrap Framework Overhauled<br> Meet the new sexy</h1>
                                <p class="lead">Beautifull Bootstrap skin with overhauled components.</p><br>
                            </div>
                        </div><!-- /.item -->
                        <div class="item">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/img/mumbai_skyline.jpg" alt="1200x500">
                            <div class="carousel-caption visible-lg">
                                <h1>Finding the right property requires a lot of time and effort.</h1>
                                <p class="lead">Won’t it be convenient if all the properties that fit your needs were literally served to you on a platter?  </p>
                            </div>
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

            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
