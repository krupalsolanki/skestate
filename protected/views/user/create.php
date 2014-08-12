<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

// $this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Manage User', 'url'=>array('admin')),
//);
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base-admin.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dashboard.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" media="screen, projection" />


<?php $this->renderPartial('_form', array('model'=>$model)); ?>