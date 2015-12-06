<?php /* @var $this Controller */ ?>
<?php
$this->beginContent('//layouts/theme');
$location = Yii::app()->db->createCommand('select distinct location from tbl_property')->queryColumn();
$possession = Yii::app()->db->createCommand('select distinct possession from tbl_property')->queryColumn();
?>
<section class="wrapper-xs bg-highlight">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="<?= CController::createUrl('property/index') ?>" class="form-inline">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Search:</label>
                            <select class="form-control selectpicker show-tick" title='Choose One' data-style="btn-primary" name="Property[type_of_property]">
                                <?php
                                $typeOfProperty = TypeOfProperty::model()->findAll();
                                foreach ($typeOfProperty as $type) {
                                    $selected = $type->id == $this->property_type ? 'selected' : '';
                                    echo "<option value=\"$type->id\" $selected >$type->type</option>";
                                }
                                ?>
                            </select>
                        </div><!-- /.col -->
                        <div class="col-md-2">
                            <label for="">Status:</label>
                            <select class="form-control selectpicker show-tick" title='Choose One' data-style="btn-primary" name="Property[type]">
                                <optgroup label="Status:">
                                    <option value="1" <?= $this->status == 1 ? "selected" : "" ?>>Buy</option>
                                    <option value="2" <?= $this->status == 2 ? "selected" : "" ?>>Rent</option>
                                </optgroup>
                            </select>
                        </div><!-- /.col -->
                        <div class="col-md-3">
                            <label for="">Location:</label>
                            <select class="form-control selectpicker show-tick" title='Choose One' data-live-search="true" data-style="btn-primary" name="Property[location]" >
                                <option value="">All</option>
                                <?php
                                foreach ($location as $location) {
                                    if ($this->location == $location)
                                        echo "<option selected >$location</option>";
                                    else
                                        echo "<option >$location</option>";
                                }
                                ?>
                            </select>
                        </div><!-- /.col -->
                        <div class="col-md-2">
                            <label for="">Possession:</label>
                            <select class="form-control selectpicker show-tick" title='Choose One' data-style="btn-primary" name="Property[possession]">
                                <?php
                                foreach ($possession as $possession) {
                                    if ($this->possession == $possession)
                                        echo "<option selected >$possession</option>";
                                    else
                                        echo "<option >$possession</option>";
                                }
                                ?>
                            </select>
                        </div><!-- /.col -->
                        <div class="col-md-2">
                            <label for="">Ready?</label>
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<section class="wrapper-md bg-">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <?php echo $content; ?>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="panel panel-secondary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Featured</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        $property = Property::getFeatured();
                        ?>
                        <div class="thumbnail">
                            <div class="overlay-container">
                                <img src="<?php
                                if ($property->image_path)
                                    echo Yii::app()->request->baseUrl . $property->image_path;
                                else
                                    echo Yii::app()->request->baseUrl . "/img/item-small.jpg";
                                ?>">
                                <div class="overlay-content">
                                    <h3 class="h4 headline"> <?php echo $property->project_name; ?> </h3>
                                    <p> By: <?php echo $property->builder; ?></p>
                                </div><!-- /.overlay-content -->
                            </div><!-- /.overlay-container -->
                            <div class="thumbnail-meta">
                                <p><i class="fa fa-fw fa-home"></i> <?php echo $property->location . "," . $property->city; ?></p>
                                <p><i class="fa fa-fw fa-map-marker"></i> <?php echo $property->address; ?></p>
                            </div>
                            <div class="thumbnail-meta">
                                <i class="fa fa-fw fa-info-circle"></i> <?php echo $property->area; ?> sqft.| <?php echo $property->rate; ?> per sqft.| <?php echo $property->bed; ?> BHK 
                            </div>
                            <div class="thumbnail-meta">
                                <i class="fa fa-fw fa-inr"></i> <span class="h3"><?php echo $property->budget; ?> Cr</span> <a href='<?php echo CController::createUrl('//property/' . $property->id); ?>' class="btn btn-link pull-right">View <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div><!-- /.thumbnail -->
                    </div><!-- /.col --> <!-- End of sidebar -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->endContent(); ?>