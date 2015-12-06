<?php
/* @var $this PostpropertyController */
/* @var $model Postproperty */
/* @var $form CActiveForm */

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'postproperty-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>
<section class="wrapper-sm">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-4">
                <h3>List Requirement</h3>
                <form role="form">
                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'name'); ?>

                        <?php echo $form->textField($model, 'name', array('size' => 30, 'class' => 'form-control', 'maxlength' => 30, 'placeholder' => 'Your name here..')); ?>
                        <?php echo $form->error($model, 'name'); ?>
                    </div>

                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'email'); ?>

                        <?php echo $form->textField($model, 'email', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'A valid email please..', 'class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'email'); ?>
                    </div>

                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'mobile'); ?>

                        <?php echo $form->textField($model, 'mobile', array('size' => 10, 'maxlength' => 10, 'placeholder' => 'Your phone number..', 'class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'mobile'); ?>
                    </div>

                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'city'); ?>

                        <?php echo $form->textField($model, 'city', array('size' => 15, 'maxlength' => 15, 'placeholder' => 'Your city..', 'class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'city'); ?>
                    </div>

                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'property_type'); ?>

                        <?php echo $form->dropDownList($model, 'property_type', array('Commercial Property', 'Residential Property'), array('class' => 'form-control selectpicker show-tick')); ?>
                        <?php echo $form->error($model, 'property_type'); ?>
                    </div>

                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'property_for'); ?>

                        <?php echo $form->dropDownList($model, 'property_for', array('Buy', 'Rent'), array('class' => 'form-control selectpicker show-tick')); ?>
                        <?php echo $form->error($model, 'property_for'); ?>
                    </div>

                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'size_of_property'); ?>

                        <?php echo $form->textField($model, 'size_of_property', array('placeholder' => 'Size of property you are looking for.', 'class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'size_of_property'); ?>
                    </div>

                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'location'); ?>

                        <?php echo $form->textField($model, 'location', array('size' => 15, 'maxlength' => 15, 'placeholder' => 'Specific location', 'class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'location'); ?>
                    </div>

                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'budget'); ?>

                        <?php echo $form->textField($model, 'budget', array('size' => 10, 'maxlength' => 10, 'placeholder' => 'How much do you want to spend?', 'class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'budget'); ?>
                    </div>

                    <div class="form-group">                        
                        <?php echo $form->labelEx($model, 'message'); ?>

                        <?php echo $form->textArea($model, 'message', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Any extra requirement..', 'class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'message'); ?>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Send me a copy
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo $model->isNewRecord ? 'List Requirement' : 'Save' ?></button>
                </form>
            </div><!-- /.col -->
            <div class="col-md-6 col-md-offset-1">

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
<?php $this->endWidget(); ?>
