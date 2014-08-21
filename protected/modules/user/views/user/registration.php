<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Registration");
$this->breadcrumbs = array(
    UserModule::t("Registration"),
);
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span-10">
            <div style="padding: 40px 0 150px;
                 background: rgba(37, 37, 37, 0.6);text-align: center">


                <?php if (Yii::app()->user->hasFlash('registration')): ?>
                    <div class="success">
                        <?php echo Yii::app()->user->getFlash('registration'); ?>
                    </div>
                <?php else: ?>


                    <?php
                    $form = $this->beginWidget('UActiveForm', array(
                        'id' => 'registration-form',
                        'enableAjaxValidation' => true,
                        'disableAjaxValidationAttributes' => array('RegistrationForm_verifyCode'),
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                        'htmlOptions' => array('enctype' => 'multipart/form-data'),
                    ));
                    ?>



                    <?php echo $form->errorSummary(array($model, $profile)); ?>
                <fieldset>
                    <legend><h1 style="color: whitesmoke;">Registration</h1></legend>
                    <div class="row">
                       
                        <?php echo $form->textField($model, 'username',array('placeholder' =>'username' ,'style' => 'height:40px;font-size: 15px;width:500px;')); ?>
                        <?php echo $form->error($model, 'username'); ?>
                    </div>

                    <div class="row">
                       
                        <?php echo $form->passwordField($model, 'password',array('placeholder' =>'Password' ,'style' => 'height:40px;font-size: 15px;width:500px;')); ?>
                        <?php echo $form->error($model, 'password'); ?>
                        <p class="hint">
                            <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
                        </p>
                    </div>

                    <div class="row">
                       
                        <?php echo $form->passwordField($model, 'verifyPassword',array('placeholder' =>'Verify Password' ,'style' => 'height:40px;font-size: 15px;width:500px;')); ?>
                        <?php echo $form->error($model, 'verifyPassword'); ?>
                    </div>

                    <div class="row">
                       
                        <?php echo $form->textField($model, 'email',array('placeholder' =>'Email' ,'style' => 'height:40px;font-size: 15px;width:500px;')); ?>
                        <?php echo $form->error($model, 'email'); ?>
                    </div>

                    <?php
                    $profileFields = $profile->getFields();
                    if ($profileFields) {
                        foreach ($profileFields as $field) {
                            ?>
                            <div class="row">
                               
                                <?php
                                if ($widgetEdit = $field->widgetEdit($profile)) {
                                    echo $widgetEdit;
                                } elseif ($field->range) {
                                    echo $form->dropDownList($profile, $field->varname, Profile::range($field->range));
                                } elseif ($field->field_type == "TEXT") {
                                    echo$form->textArea($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                                } else {
                                    echo $form->textField($profile, $field->varname, array('style' => 'height:40px;font-size: 15px;width:500px;','placeholder' =>'First/Last Name','size' => 60, 'maxlength' => (($field->field_size) ? $field->field_size : 255)));
                                }
                                ?>
                                <?php echo $form->error($profile, $field->varname); ?>
                            </div>	
                            <?php
                        }
                    }
                    ?>
                    <?php if (UserModule::doCaptcha('registration')): ?>
                    <div class="row" >;
                            
                            <?php echo $form->textField($model, 'verifyCode',array('placeholder' =>'Verification Code','style'=>'margin-left:14em;height:40px;font-size: 15px;width:500px;')); ?>
                        <span style="border:0px solid;">    <?php $this->widget('CCaptcha'); ?></span>
                            <?php echo $form->error($model, 'verifyCode'); ?>
                        </div>
                    <?php endif; ?>
                    <div style="margin:10px;">
                    <div class="row submit">
                        <?php echo CHtml::submitButton(UserModule::t("Register"),array('class'=>'btn btn-primary','style'=>'width:200px;height:40px')); ?>
                       <?php echo CHtml::resetButton('Reset',array('class'=>'btn','style'=>'width:200px;height:40px')); ?>                      
                    </div>
                </fieldset>

                    <?php $this->endWidget(); ?>
                </div><!-- form -->
            </div>
        </div>
    </div>
<?php endif; ?>