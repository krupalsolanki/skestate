<?php
/* @var $this PropertyController */
/* @var $model Property */
/* @var $form CActiveForm */
?>
<link href="<?php echo Yii::app()->request->baseUrl ?>/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/bootstrap-switch.min.js" type="text/javascript"></script>
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'property-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'), // ADD THIS
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row-fluid">
        <div class="span4">
            <?php echo $form->labelEx($model, 'project_name'); ?>
            <?php echo $form->textField($model, 'project_name', array('size' => 60, 'maxlength' => 200)); ?>
            <?php echo $form->error($model, 'project_name'); ?>
        </div>
        <div class="span4 offset1">
            <?php echo $form->labelEx($model, 'tag_line'); ?>
            <?php echo $form->textField($model, 'tag_line', array('size' => 100, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'tag_line'); ?>
        </div>
        <div class="span8" style="margin-left:0px; ">
            <?php echo $form->labelEx($model, 'description'); ?>
            <?php echo $form->textArea($model, 'description', array('size' => 200, 'maxlength' => 1000, 'style' => 'width: 513px; height: 102px;')); ?>
            <?php echo $form->error($model, 'description'); ?>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span4">
            <?php echo $form->labelEx($model, 'type'); ?>
            <?php echo $form->dropdownlist($model, 'type', array(1 => 'Buy', 2 => 'Rent'), array('prompt' => 'Select')); ?>
            <?php echo $form->error($model, 'type'); ?>
        </div>
        <div class="span4 offset1">
            <?php echo $form->labelEx($model, 'type_of_property'); ?>
            <?php echo $form->dropdownlist($model, 'type_of_property', CHtml::listData(TypeOfProperty::model()->findAll(), 'id', 'type'), array('prompt' => 'Select')); ?>
            <?php echo $form->error($model, 'type_of_property'); ?>
        </div>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'builder'); ?>
        <?php echo $form->textField($model, 'builder', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'builder'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'location'); ?>
        <?php echo $form->textField($model, 'location', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'location'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'address'); ?>
        <?php echo $form->textField($model, 'address', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'address'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'city'); ?>
        <?php echo $form->textField($model, 'city', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'city'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'area'); ?>
        <?php echo $form->textField($model, 'area'); ?>
        <?php echo $form->error($model, 'area'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'bed'); ?>
        <?php echo $form->textField($model, 'bed'); ?>
        <?php echo $form->error($model, 'bed'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'bath'); ?>
        <?php echo $form->textField($model, 'bath'); ?>
        <?php echo $form->error($model, 'bath'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'balcony'); ?>
        <?php echo $form->textField($model, 'balcony'); ?>
        <?php echo $form->error($model, 'balcony'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'parking'); ?>
        <?php echo $form->textField($model, 'parking'); ?>
        <?php echo $form->error($model, 'parking'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'rate'); ?>
        <?php echo $form->textField($model, 'rate'); ?>
        <?php echo $form->error($model, 'rate'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'budget'); ?>
        <?php echo $form->textField($model, 'budget'); ?>
        <?php echo $form->error($model, 'budget'); ?>
    </div>



    <div class="row">
        <div class="span12">
            <h2>Amenities</h2>
            <div class="span3">
                <?php echo $form->labelEx($model, 'hot_property'); ?>
                <?php echo $form->checkbox($model, 'hot_property', array('class' => 'checkbox-switch')); ?>
                <?php echo $form->error($model, 'hot_property'); ?>
            </div>
            <div class="span3" >
                <?php echo $form->labelEx($model, 'swiming_pool'); ?>
                <?php echo $form->checkbox($model, 'swiming_pool', array('class' => 'checkbox-switch')); ?>
                <?php echo $form->error($model, 'swiming_pool'); ?>
            </div>
            <div class="span3" >
                <?php echo $form->labelEx($model, 'garden'); ?>
                <?php echo $form->checkbox($model, 'garden', array('class' => 'checkbox-switch')); ?>
                <?php echo $form->error($model, 'garden'); ?>
            </div>
            <div class="span3" >
                <?php echo $form->labelEx($model, 'rain_water_harvesting'); ?>
                <?php echo $form->checkbox($model, 'rain_water_harvesting', array('class' => 'checkbox-switch')); ?>
                <?php echo $form->error($model, 'rain_water_harvesting'); ?>
            </div>
            <div class="span3" >
                <?php echo $form->labelEx($model, 'security'); ?>
                <?php echo $form->checkbox($model, 'security', array('class' => 'checkbox-switch')); ?>
                <?php echo $form->error($model, 'security'); ?>
            </div>
            <div class="span3" >
                <?php echo $form->labelEx($model, 'power_backup'); ?>
                <?php echo $form->checkbox($model, 'power_backup', array('class' => 'checkbox-switch')); ?>
                <?php echo $form->error($model, 'power_backup'); ?>
            </div>
            <div class="span3" >
                <?php echo $form->labelEx($model, 'gymnasium'); ?>
                <?php echo $form->checkbox($model, 'gymnasium', array('class' => 'checkbox-switch')); ?>
                <?php echo $form->error($model, 'gymnasium'); ?>
            </div>
        </div>
    </div>

    <?php
    $this->widget('CMultiFileUpload', array(
        'model' => $model,
        'attribute' => 'images',
        'accept' => 'jpg|png',
        'max' => '5',
        'options' => array(
//            'onFileSelect' => 'function(e, v, m){ alert("onFileSelect - "+v) }',
//            'afterFileSelect' => 'function(e, v, m){ alert("afterFileSelect - "+v) }',
//            'onFileAppend' => 'function(e, v, m){ alert("onFileAppend - "+v) }',
            'afterFileAppend' => 'function(e, v, m){ fileUploaded(e,v,m)}',
//            'onFileRemove' => 'function(e, v, m){ alert("onFileRemove - "+v) }',
//            'afterFileRemove' => 'function(e, v, m){ alert("afterFileRemove - "+v) }',
        ),
    ));
    ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<script>
    $("[class='checkbox-switch']").bootstrapSwitch();
    function fileUploaded(e, v, m) {
        console.log(e.id + ", Value : " + e.value);
    }
</script>