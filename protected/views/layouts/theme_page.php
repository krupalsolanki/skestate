<?php /* @var $this Controller */ ?>
<?php
$this->beginContent('//layouts/theme');
$location = Yii::app()->db->createCommand('select distinct location from tbl_property')->queryColumn();
?>
<section class="wrapper-xs bg-highlight">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="<?= CController::createUrl('property/index') ?>" class="form-inline">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Search:</label>
                            <select class="form-control selectpicker show-tick" title='Choose One' data-style="btn-primary" name="Property[type]">
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
                            <select class="form-control selectpicker show-tick" title='Choose One' data-live-search="true" data- style="btn-primary" name="Property[location]">
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
                    </div><!-- /.col --> <!-- End of sidebar -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->endContent(); ?>