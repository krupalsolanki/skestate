<?php
/* @var $this ListpropertyController */
/* @var $model Listproperty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'listproperty-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_for'); ?>
		<?php echo $form->textField($model,'property_for',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'property_for'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_category'); ?>
		<?php echo $form->textField($model,'property_category',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'property_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rooms'); ?>
		<?php echo $form->textField($model,'rooms'); ?>
		<?php echo $form->error($model,'rooms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plot_area'); ?>
		<?php echo $form->textField($model,'plot_area'); ?>
		<?php echo $form->error($model,'plot_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_price'); ?>
		<?php echo $form->textField($model,'property_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'property_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_address'); ?>
		<?php echo $form->textField($model,'property_address',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'property_address'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->