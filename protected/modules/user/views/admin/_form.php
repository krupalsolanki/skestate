<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span5">
            <div class="main" style="background:rgba(255, 255, 255, 0.50);">
                <h1><?php echo UserModule::t("Form"); ?></h1>
        <div class="form">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'user-form',
                'enableAjaxValidation' => true,
                'htmlOptions' => array('enctype' => 'multipart/form-data'),
            ));
            ?>



<?php echo $form->errorSummary(array($model, $profile)); ?>

            <div class="row">
                <?php echo $form->labelEx($model, 'username'); ?>
                <?php echo $form->textField($model, 'username', array('size' => 20, 'maxlength' => 20)); ?>
<?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'password'); ?>
                <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 128)); ?>
<?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'email'); ?>
                <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128)); ?>
<?php echo $form->error($model, 'email'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'superuser'); ?>
                <?php echo $form->dropDownList($model, 'superuser', User::itemAlias('AdminStatus')); ?>
<?php echo $form->error($model, 'superuser'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'status'); ?>
                <?php echo $form->dropDownList($model, 'status', User::itemAlias('UserStatus')); ?>
            <?php echo $form->error($model, 'status'); ?>
            </div>
            <?php
            $profileFields = $profile->getFields();
            if ($profileFields) {
                foreach ($profileFields as $field) {
                    ?>
                    <div class="row">
                        <?php echo $form->labelEx($profile, $field->varname); ?>
                        <?php
                        if ($widgetEdit = $field->widgetEdit($profile)) {
                            echo $widgetEdit;
                        } elseif ($field->range) {
                            echo $form->dropDownList($profile, $field->varname, Profile::range($field->range));
                        } elseif ($field->field_type == "TEXT") {
                            echo CHtml::activeTextArea($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                        } else {
                            echo $form->textField($profile, $field->varname, array('size' => 60, 'maxlength' => (($field->field_size) ? $field->field_size : 255)));
                        }
                        ?>
                    <?php echo $form->error($profile, $field->varname); ?>
                    </div>
                    <?php
                }
            }
            ?>
            <div class="row button">
                <?php echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Create') : UserModule::t('Save')); ?> 
                <?php echo CHtml::resetButton('Reset',array('class'=>'btn','style'=>'margin-left:10px')); ?>
                </div>

<?php $this->endWidget(); ?>

        </div><!-- form -->
        </div>
        </div><!-- span9 -->
        <div class="span3">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Quick Links</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li><?php echo CHtml::link('Manage',Yii::app()->createurl('user/admin')) ?></li>
                       <li><?php echo CHtml::link('List',Yii::app()->createurl('/user')) ?></li>
                      
                        
                    </ul></div>
            </div>
        </div>
    </div><!-- rowfluid -->
</div><!-- container fluid -->