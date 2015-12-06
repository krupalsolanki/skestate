<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Profile");
$this->breadcrumbs = array(
    UserModule::t("Profile") => array('profile'),
    UserModule::t("Edit"),
);
$this->menu = array(
    ((UserModule::isAdmin()) ? array('label' => UserModule::t('Manage Users'), 'url' => array('/user/admin')) : array()),
    array('label' => UserModule::t('List User'), 'url' => array('/user')),
    array('label' => UserModule::t('Profile'), 'url' => array('/user/profile')),
    array('label' => UserModule::t('Change password'), 'url' => array('changepassword')),
    array('label' => UserModule::t('Logout'), 'url' => array('/user/logout')),
);
?>

<?php if (Yii::app()->user->hasFlash('profileMessage')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('profileMessage'); ?>
    </div>
<?php endif; ?>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span7">
            <div class="main">
                <fieldset>
                    <legend><h1><?php echo UserModule::t("Edit Profile"); ?></h1></legend>
                    <?php
                    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                        'id' => 'profile-form',
                        'enableAjaxValidation' => true,
                        'htmlOptions' => array('enctype' => 'multipart/form-data'),
                        'type' => 'horizontal',
                    ));
                    ?>



                    <?php echo $form->errorSummary(array($model, $profile)); ?>

                    <?php
                    $profileFields = $profile->getFields();
                    if ($profileFields) {
                        foreach ($profileFields as $field) {
                            ?>

                            <?php
                            if ($widgetEdit = $field->widgetEdit($profile)) {
                                echo $widgetEdit;
                            } elseif ($field->range) {
                                echo $form->dropDownList($profile, $field->varname, Profile::range($field->range));
                            } elseif ($field->field_type == "TEXT") {
                                echo $form->textAreaRow($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                            } else {
                                echo $form->textFieldRow($profile, $field->varname, array('size' => 60, 'maxlength' => (($field->field_size) ? $field->field_size : 255)));
                            }
                            // echo $form->error($profile, $field->varname);
                            ?>

                            <?php
                        }
                    }
                    ?>


<?php echo $form->textFieldRow($model, 'username', array('size' => 20, 'maxlength' => 20)); ?>



<?php echo $form->textFieldRow($model, 'email', array('size' => 60, 'maxlength' => 128)); ?>



                </fieldset>

                <div class="form actions">
<?php echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Create') : UserModule::t('Save'), array('class' => 'btn btn-inverse', 'style' => 'margin-left:90px')); ?>
<?php echo CHtml::resetButton('Reset', array('class' => 'btn', 'style' => 'margin-left:10px')); ?>

                </div>

<?php $this->endWidget(); ?>

            </div><!-- form -->
        </div>
    </div>
</div>