<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/contact.css" media="screen, projection" />

<?php
/* @var $this PostpropertyController */
/* @var $model Postproperty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'postproperty-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	 <div class="span6">
    <div class="widget">
    <div class="box">
        <legend><h3>Post Requirement</h3><p>Let us know what you need,</p><p> we will get it for you</p></legend>
        
        
	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		
		<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>30,'placeholder'=>'Your name here..','class'=>'login')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50,'placeholder'=>'A valid email please..','class'=>'login')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'mobile',array('size'=>10,'maxlength'=>10,'placeholder'=>'Your phone number..','class'=>'login')); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'city',array('size'=>15,'maxlength'=>15,'placeholder'=>'Your city..','class'=>'login')); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->dropDownList($model,'property_type',array('Commercial Property','Residential Property'),array('prompt'=>('I want a..'))); ?>
		<?php echo $form->error($model,'property_type'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->dropDownList($model,'property_for',array('Buy','Rent'),array('prompt'=>('I am looking to..'))); ?>
		<?php echo $form->error($model,'property_for'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'size_of_property',array('placeholder'=>'Size of property you are looking for.','class'=>'login')); ?>
		<?php echo $form->error($model,'size_of_property'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'location',array('size'=>15,'maxlength'=>15,'placeholder'=>'Specific location','class'=>'login')); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'budget',array('size'=>10,'maxlength'=>10,'placeholder'=>'How much do you want to spend?','class'=>'login')); ?>
		<?php echo $form->error($model,'budget'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textArea($model,'message',array('size'=>60,'maxlength'=>100,'placeholder'=>'Any extra requirement..','class'=>'login')); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-warning')); ?>
                <?php echo CHtml::resetButton('Clear',array('class'=>'btn ')); ?>
	
        </div>

<?php $this->endWidget(); ?>
        </div>
    </div>
    </div>
</div><!-- form -->