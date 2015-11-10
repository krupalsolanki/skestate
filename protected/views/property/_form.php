<?php
/* @var $this PropertyController */
/* @var $model Property */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'property-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'project_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'builder'); ?>
		<?php echo $form->textField($model,'builder',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'builder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo $form->textField($model,'area'); ?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bed'); ?>
		<?php echo $form->textField($model,'bed'); ?>
		<?php echo $form->error($model,'bed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bath'); ?>
		<?php echo $form->textField($model,'bath'); ?>
		<?php echo $form->error($model,'bath'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balcony'); ?>
		<?php echo $form->textField($model,'balcony'); ?>
		<?php echo $form->error($model,'balcony'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parking'); ?>
		<?php echo $form->textField($model,'parking'); ?>
		<?php echo $form->error($model,'parking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
		<?php echo $form->error($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'budget'); ?>
		<?php echo $form->textField($model,'budget'); ?>
		<?php echo $form->error($model,'budget'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hot_property'); ?>
		<?php echo $form->textField($model,'hot_property'); ?>
		<?php echo $form->error($model,'hot_property'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'swiming_pool'); ?>
		<?php echo $form->textField($model,'swiming_pool'); ?>
		<?php echo $form->error($model,'swiming_pool'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garden'); ?>
		<?php echo $form->textField($model,'garden'); ?>
		<?php echo $form->error($model,'garden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rain_water_harvesting'); ?>
		<?php echo $form->textField($model,'rain_water_harvesting'); ?>
		<?php echo $form->error($model,'rain_water_harvesting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'security'); ?>
		<?php echo $form->textField($model,'security'); ?>
		<?php echo $form->error($model,'security'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'power_backup'); ?>
		<?php echo $form->textField($model,'power_backup'); ?>
		<?php echo $form->error($model,'power_backup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_path'); ?>
		<?php echo $form->textField($model,'image_path',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'image_path'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->