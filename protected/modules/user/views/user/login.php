<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/signin.css" media="screen, projection" />

<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Login");
$this->breadcrumbs = array(
    UserModule::t("Login"),
);
?>



<?php if (Yii::app()->user->hasFlash('loginMessage')): ?>

    <div class="success">
        <?php echo Yii::app()->user->getFlash('loginMessage'); ?>
    </div>

<?php endif; ?>

<?php echo CHtml::beginForm(); ?>
<div class=" well inside">
    <h1>
        Login
    </h1>
    <hr/>
    <div class="account-container offset3">
        <div class="content clearfix">
            <?php echo CHtml::errorSummary($model); ?>

            <div class="field">

                <?php echo CHtml::activeTextField($model, 'username', array('placeholder' => 'Username/Email', 'class' => 'login username-field')) ?>
            </div>

            <div class="field" style="margin-top: 15px;">

                <?php echo CHtml::activePasswordField($model, 'password', array('placeholder' => 'Password', 'class' => 'login password-field')) ?>
            </div>

            <div class="login-actions">
                <span class="login-checkbox">
                    <?php echo CHtml::activeCheckBox($model, 'rememberMe', array('class' => 'field login-checkbox')); ?>
                    <?php echo CHtml::activeLabelEx($model, 'rememberMe'); ?>
                </span>
                <div class="form-actions">
                    <?php echo CHtml::submitButton(UserModule::t("Login"), array('class' => 'button btn btn-warning btn-large')); ?>
                </div>
                <div class="form-actions">
                   <?php echo CHtml::link('New User?',Controller::createUrl('/user/registration')); ?> |
                   <?php echo CHtml::link('Forgot Password?',Yii::app()->getModule('user')->fpUrl); ?>
                </div>
            </div>

            <?php echo CHtml::endForm(); ?>
        </div><!-- form -->

    </div>
</div>

<?php
$form = new CActiveForm(array(
    'elements' => array(
        'username' => array(
            'type' => 'text',
            'maxlength' => 32,
        ),
        'password' => array(
            'type' => 'password',
            'maxlength' => 32,
        ),
        'rememberMe' => array(
            'type' => 'checkbox',
        )
    ),
    'buttons' => array(
        'login' => array(
            'type' => 'submit',
            'label' => 'Sign In',
            'class' => 'btn btn-primary',
        ),
    ),
        ), $model);
?>


<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/signin.js"></script>