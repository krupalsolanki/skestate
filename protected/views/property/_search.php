<?php
/* @var $this PropertyController */
/* @var $model Property */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'builder'); ?>
		<?php echo $form->textField($model,'builder',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area'); ?>
		<?php echo $form->textField($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bed'); ?>
		<?php echo $form->textField($model,'bed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bath'); ?>
		<?php echo $form->textField($model,'bath'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balcony'); ?>
		<?php echo $form->textField($model,'balcony'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parking'); ?>
		<?php echo $form->textField($model,'parking'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'budget'); ?>
		<?php echo $form->textField($model,'budget'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hot_property'); ?>
		<?php echo $form->textField($model,'hot_property'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'swiming_pool'); ?>
		<?php echo $form->textField($model,'swiming_pool'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garden'); ?>
		<?php echo $form->textField($model,'garden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rain_water_harvesting'); ?>
		<?php echo $form->textField($model,'rain_water_harvesting'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'security'); ?>
		<?php echo $form->textField($model,'security'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'power_backup'); ?>
		<?php echo $form->textField($model,'power_backup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_path'); ?>
		<?php echo $form->textField($model,'image_path',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->