<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>
 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base-admin.css" media="screen, projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/signin.css" media="screen, projection" />

 

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
<div class="account-container">
    <div class="content clearfix">
        <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->
        <h1>Sign In</h1>  
        <p>Sign in with your registered account.</p>
            <div class="row">

<?php echo $form->textField($model, 'email', array('placeholder' => 'Your registered email here..')); ?>
<?php echo $form->error($model, 'email'); ?>
            </div>

            <div class="row">

<?php echo $form->passwordField($model, 'password', array('placeholder' => 'Your password here..')); ?>
<?php echo $form->error($model, 'password'); ?>

            </div>

            <div class="row rememberMe">
                <?php echo $form->checkBox($model, 'rememberMe'); ?>
<?php echo $form->label($model, 'rememberMe'); ?>
<?php echo $form->error($model, 'rememberMe'); ?>
            </div>

            <div class="row buttons">
<?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>
            <?php echo CHtml::resetButton('Reset', array('buttonType' => 'reset', 'class' => 'btn ')); ?>
            </div>
          </div>
 </div>
<?php $this->endWidget(); ?>
        </div><!-- form -->
