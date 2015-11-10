<?php
/* @var $this UrgentMessageController */
/* @var $model UrgentMessage */
/* @var $form CActiveForm */
?>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="main" style="background: white;border: 0px solid;
                 border-radius: 15px 0px 15px 0px;">



                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'urgent-message-form',
                    // Please note: When you enable ajax validation, make sure the corresponding
                    // controller action is handling ajax validation correctly.
                    // There is a call to performAjaxValidation() commented in generated controller code.
                    // See class documentation of CActiveForm for details on this.
                    'enableAjaxValidation' => false,
                ));
                ?>


                <fieldset>

                    <legend style="margin-left: 15px;">Add New Project</legend>

                    <?php echo $form->labelEx($model, 'message'); ?>
                    <?php echo $form->textArea($model, 'message', array('size' => 60, 'maxlength' => 200)); ?>
                    <?php echo $form->error($model, 'message'); ?>  </fieldset>

                <div class="form-actions">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
                    <?php echo CHtml::resetButton('Reset', array('class' => 'btn')); ?>
                </div>


                <?php $this->endWidget(); ?>

                <!-- form -->
            </div>
        </div>
    </div>
</div>