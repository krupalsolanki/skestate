<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<?php  $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change Password");
$this->breadcrumbs=array(
	UserModule::t("Profile") => array('/user/profile'),
	UserModule::t("Change Password"),
);

$this->menu=array(
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
		:array()),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
    array('label'=>UserModule::t('Profile'), 'url'=>array('/user/profile')),
    array('label'=>UserModule::t('Edit'), 'url'=>array('edit')),
    array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
);
?>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span6">
<div class="main">
    <fieldset>
        <legend><h1><?php echo UserModule::t("Change password"); ?></h1></legend>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'changepassword-form',
      'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->passwordFieldRow($model,'oldPassword'); ?>
	<?php echo $form->passwordFieldRow($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>
	
	<?php echo $form->passwordFieldRow($model,'verifyPassword'); ?>
         </fieldset>
    <div class="form-actions">
	<?php echo CHtml::submitButton(UserModule::t("Save"),array('class'=>'btn btn-inverse','style'=>'margin-left:100px')); ?>
        <?php echo CHtml::resetButton('Reset',array('class'=>'btn','style'=>'margin-left:10px')); ?>
    
    </div>

<?php $this->endWidget(); ?>
   
</div><!-- form -->
        </div>
        </div>
    </div>