<?php
/* @var $this ListpropertyController */
/* @var $model Listproperty */
/* @var $form CActiveForm */
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/bootstrap-select.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/bootstrap-select.min.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/bootstrap.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/bootstrap.min.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/font-awesome.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/font-awesome.min.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/prism-line-numbers.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/prism.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/theme.css" media="screen, projection" />

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'listproperty-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>



    <?php //echo $form->errorSummary($model);  ?>
    <div class="span6">
        <div class="widget">

            <div class="box">

                <legend><h3>Get your Property Online</h3></legend>
                <div class="row">

                    <?php echo $form->textField($model, 'name', array('size' => 30, 'maxlength' => 30, 'placeholder' => 'Full Name..', 'class' => 'login')); ?>
                    <?php echo $form->error($model, 'name'); ?>
                </div>

                <div class="row">

                    <?php echo $form->textField($model, 'email', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'Email..', 'class' => 'login')); ?>
                    <?php echo $form->error($model, 'email'); ?>
                </div>

                <div class="row">

                    <?php echo $form->textField($model, 'mobile', array('size' => 10, 'maxlength' => 10, 'placeholder' => 'Mobile number..', 'class' => 'login')); ?>
                    <?php echo $form->error($model, 'mobile'); ?>
                </div>

                <div class="row">

                    <?php echo $form->textField($model, 'city', array('size' => 10, 'maxlength' => 10, 'placeholder' => 'City', 'class' => 'login')); ?>
                    <?php echo $form->error($model, 'city'); ?>
                </div>

                <div class="row">
                    <?php echo $form->dropDownList($model, 'property_for', array('Sale', 'Rent', 'PG'), array('prompt' => ('List My Property For'))); ?>
                    <?php echo $form->error($model, 'property_for'); ?>
                </div>

                <div class="row">

                    <?php echo $form->dropDownList($model, 'property_category', array('Residential Plot', 'Residential House', 'Commercial Land', 'Commercial Shop', 'Commercial Showroom', 'Commercial Office Space', 'Builder Floor Apartment', 'Villa', 'Others'), array('prompt' => ('Type of Property'))); ?>
                    <?php echo $form->error($model, 'property_category'); ?>
                </div>

                <div class="row">

                    <?php echo $form->dropDownList($model, 'rooms', array(1, 2, 3, 4, 5, 6, 7, 8), array('prompt' => ('No of Rooms'))); ?>
                    <?php echo $form->error($model, 'rooms'); ?>
                </div>

                <div class="row">
                    <?php echo $form->textFieldRow($model, 'plot_area', array('labelOptions' => array('label' => false), 'placeholder' => 'Plot area of your property..', 'append' => 'sq ft', 'style' => 'margin-top:0px', 'class' => 'login')); ?>

                </div>

                <div class="row">

                    <?php echo $form->textFieldRow($model, 'property_price', array('hint' => 'Price per square feet, or the rent.', 'labelOptions' => array('label' => false), 'style' => 'margin-top:0px', 'placeholder' => 'Price of your property..', 'prepend' => 'Rs.', 'size' => 10, 'maxlength' => 10, 'class' => 'login')); ?>

                </div>

                <div class="row">

                    <?php echo $form->textAreaRow($model, 'property_address', array('labelOptions' => array('label' => false), 'placeholder' => 'Where is your property?', 'size' => 60, 'maxlength' => 300, 'class' => 'login')); ?>

                </div>

                <div class="row buttons">

                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'type' => 'warning',
                        'label' => 'List Property',
                        'block' => false,
                        'buttonType' => 'submit',
                    ));
                    ?>
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'type' => 'default',
                        'label' => 'Reset',
                        'block' => false,
                        'buttonType' => 'reset'
                    ));
                    ?>

                </div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div><!-- form -->