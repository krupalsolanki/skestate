<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

   

<div class="form">

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
         
    <div class="span4">
        <div class="widget">
            <div class="widget-header"><h3>Sign Up here..</h3></div>
        <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
<?php echo $form->textField($model, 'name', array('size' => 40, 'maxlength' => 40,'placeholder'=>'Your full name here..')); ?>
<?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
<?php echo $form->labelEx($model, 'email'); ?>
<?php echo $form->textField($model, 'email', array('size' => 50, 'maxlength' => 50,'placeholder'=>'Enter a valid email-id here..')); ?>
<?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
<?php echo $form->labelEx($model, 'password'); ?>
<?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 100,'placeholder'=>'password..')); ?>
<?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'mobile'); ?>
<?php echo $form->textField($model, 'mobile', array('size' => 12, 'maxlength' => 12,'placeholder'=>'Your phone number..')); ?>
<?php echo $form->error($model, 'mobile'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'city'); ?>
<?php echo $form->textField($model, 'city', array('size' => 20, 'maxlength' => 20,'placeholder'=>'Your city..')); ?>
<?php echo $form->error($model, 'city'); ?>
    </div>
    
    <div class="row button-column">

        <?php
                
        echo CHtml::submitButton($model->isNewRecord ? 'Register' : 'Save', array('class' => 'btn btn-primary','style'=>'margin:22px')); 
        echo CHtml::resetButton('Reset',array('class'=>'btn'));
       
        ?>
          
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>
</div>
</div>