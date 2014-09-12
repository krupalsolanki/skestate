<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Restore");
$this->breadcrumbs = array(
    UserModule::t("Login") => array('/user/login'),
    UserModule::t("Restore"),
);
?>


    <?php if (Yii::app()->user->hasFlash('recoveryMessage')): ?>
    <div class="success">
    <?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
    </div>
<?php else: ?>
    <div class="span3">
        <legend><h1>Restore</h1></legend>
        <div class="form">

    <?php echo CHtml::beginForm(); ?>
            <div class="row">

    <?php echo CHtml::activeTextField($form, 'login_or_email', array('placeholder' => 'Enter Username or Email')) ?>

            </div>

            <div class="row submit">
    <?php echo CHtml::submitButton(UserModule::t("Restore"), array('class' => 'btn-warning', 'style' => 'width:219px')); ?>
            </div>

    <?php echo CHtml::endForm(); ?>
        </div><!-- form -->
    </div>
<?php endif; ?>