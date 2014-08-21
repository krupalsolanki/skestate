<?php
/* @var $this TblProjectsController */
/* @var $model TblProjects */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_address'); ?>
		<?php echo $form->textField($model,'project_address',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_per_sqft'); ?>
		<?php echo $form->textField($model,'price_per_sqft'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'developed_by'); ?>
		<?php echo $form->textField($model,'developed_by',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_of_project'); ?>
		<?php echo $form->textField($model,'type_of_project',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_of_property'); ?>
		<?php echo $form->textField($model,'type_of_property',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->