<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="row">

        <?php echo $form->dropDownList($model, 'what', array('Buy')); ?>
<?php echo $form->error($model, 'what'); ?>
    </div>

    <div class="row">

        <?php echo $form->dropDownList($model, 'type', array('Commercial')); ?>
<?php echo $form->error($model, 'type'); ?>

    </div>


    <div class="row buttons">
<?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->


<?php $this->layout = '//layouts/main'; ?>