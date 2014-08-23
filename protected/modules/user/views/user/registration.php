<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Registration");
$this->breadcrumbs = array(
    UserModule::t("Registration"),
);
?>
<div class="account-container register">
    <div class="content clearfix">
       
            


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
               
                    <legend><h1>Registration</h1></legend>
                    <div class="login-fields">
                    <div class="field">
                       
                        <?php echo $form->textField($model, 'username',array('placeholder' =>'username' ,'class'=>'login')); ?>
                        <?php echo $form->error($model, 'username'); ?>
                    </div>

                    <div class="field">
                       
                        <?php echo $form->passwordField($model, 'password',array('placeholder' =>'Password' ,'class'=>'login')); ?>
                        <?php echo $form->error($model, 'password'); ?>
                        <p class="hint">
                            <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
                        </p>
                    </div>

                    <div class="field">
                       
                        <?php echo $form->passwordField($model, 'verifyPassword',array('placeholder' =>'Verify Password' ,'class'=>'login')); ?>
                        <?php echo $form->error($model, 'verifyPassword'); ?>
                    </div>

                    <div class="field">
                       
                        <?php echo $form->textField($model, 'email',array('placeholder' =>'Email' ,'class'=>'login')); ?>
                        <?php echo $form->error($model, 'email'); ?>
                    </div>

                    <?php
                    $profileFields = $profile->getFields();
                    if ($profileFields) {
                        foreach ($profileFields as $field) {
                            ?>
                            <div class="field">
                               
                                <?php
                                if ($widgetEdit = $field->widgetEdit($profile)) {
                                    echo $widgetEdit;
                                } elseif ($field->range) {
                                    echo $form->dropDownList($profile, $field->varname, Profile::range($field->range));
                                } elseif ($field->field_type == "TEXT") {
                                    echo$form->textArea($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                                } else {
                                    echo $form->textField($profile, $field->varname, array('class'=>'login','placeholder' =>'First/Last Name','size' => 60, 'maxlength' => (($field->field_size) ? $field->field_size : 255)));
                                }
                                ?>
                                <?php echo $form->error($profile, $field->varname); ?>
                            </div>	
                            <?php
                        }
                    }
                    ?>
                    <?php if (UserModule::doCaptcha('registration')): ?>
                    <div class="field" >
                            
                            <?php echo $form->textField($model, 'verifyCode',array('placeholder' =>'Verification Code','class'=>'login')); ?>
                        <span style="border:0px solid;">    <?php $this->widget('CCaptcha'); ?></span>
                            <?php echo $form->error($model, 'verifyCode'); ?>
                        </div>
                    <?php endif; ?>
                    <div style="margin:10px">
                    <div class="login action">
                        <?php echo CHtml::submitButton(UserModule::t("Register"),array('class'=>'btn btn-warning')); ?>
                                            
                    </div>
                
                    </div>
                    <?php $this->endWidget(); ?>
                </div><!-- form -->
            </div>
      
<?php endif; ?>