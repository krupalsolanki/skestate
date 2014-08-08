<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<div class="container">
<div class="row">
    <div class="span-2"></div>
    <div class="span-8">
<div class="form-vertical">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note"><span class="required">* </span>= required</p>

        <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
<?php echo $form->textField($model, 'name', array('size' => 40, 'maxlength' => 40)); ?>
<?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
<?php echo $form->labelEx($model, 'email'); ?>
<?php echo $form->textField($model, 'email', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
<?php echo $form->labelEx($model, 'password'); ?>
<?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 100)); ?>
<?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'mobile'); ?>
<?php echo $form->textField($model, 'mobile', array('size' => 12, 'maxlength' => 12)); ?>
<?php echo $form->error($model, 'mobile'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'city'); ?>
<?php echo $form->textField($model, 'city', array('size' => 20, 'maxlength' => 20)); ?>
<?php echo $form->error($model, 'city'); ?>
    </div>
    
    <div class="row button-column">

        <?php
                
        echo CHtml::submitButton($model->isNewRecord ? 'Register' : 'Save', array('class' => 'btn btn-primary','style'=>'margin:22px')); 
        echo CHtml::resetButton('Reset',array('class'=>'btn btn-primary'));
       
        ?>
          
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>
</div>
</div>