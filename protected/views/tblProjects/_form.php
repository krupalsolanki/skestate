<?php
/* @var $this TblProjectsController */
/* @var $model TblProjects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-projects-form',
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
		<?php echo $form->textField($model,'project_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'project_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_address'); ?>
		<?php echo $form->textField($model,'project_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'project_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_per_sqft'); ?>
		<?php echo $form->textField($model,'price_per_sqft'); ?>
		<?php echo $form->error($model,'price_per_sqft'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'developed_by'); ?>
		<?php echo $form->textField($model,'developed_by',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'developed_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_project'); ?>
		<?php echo $form->textField($model,'type_of_project',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'type_of_project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_property'); ?>
		<?php echo $form->textField($model,'type_of_property',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'type_of_property'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_file_path'); ?>
		<?php echo $form->textField($model,'image_file_path',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'image_file_path'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->