<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base-admin.css" media="screen, projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/signin.css" media="screen, projection" />

<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>



<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<div class="account-container">
    <div class="content clearfix">
        <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->
        <h1>Sign In</h1>  
        

<div class="form">
<?php echo CHtml::beginForm(); ?>

	
	
	<?php echo CHtml::errorSummary($model); ?>
	
	<div class="row">
		
		<?php echo CHtml::activeTextField($model,'username',array('placeholder'=>'your registered email..','style' => 'height:25px;font-size: 15px;width:250px;')) ?>
	</div>
	
	<div class="row">
		
		<?php echo CHtml::activePasswordField($model,'password',array('placeholder'=>'your password here..','style' => 'height:25px;font-size: 15px;width:250px;')) ?>
	</div>
	
	<div class="row">
		<p class="hint">
                    <strong style="font-size: 15px;"> 
		<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl,array('style'=>'font-size: 15px;color:black')); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl,array('style'=>'color:black;font-size: 15px;')); ?>
                    </strong>
                    </p>
	</div>
	
	<div class="row rememberMe">
		<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
		<?php echo CHtml::activeLabelEx($model,'rememberMe',array('style'=>'color:white')); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton(UserModule::t("Login"),array('class'=>'btn btn-primary')); ?>
                <?php echo CHtml::resetButton('Reset',array('class'=>'btn')); ?>
	</div>
	
<?php echo CHtml::endForm(); ?>
</div><!-- form -->

    </div>
</div>
<?php

$form = new CActiveForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
            
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
            'class'=>'btn btn-primary',
        ),
    ),
), $model);


?>