<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h3>Login</h3>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<div class="row">
		
		<?php echo $form->textField($model,'email',array('placeholder'=>'Your registered email here..')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->passwordField($model,'password',array('placeholder'=>'Your password here..')); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary')); ?>
                <?php echo CHtml::resetButton('Reset',array('buttonType'=>'reset','class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
