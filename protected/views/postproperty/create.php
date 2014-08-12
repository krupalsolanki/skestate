<?php
/* @var $this PostpropertyController */
/* @var $model Postproperty */

//$this->breadcrumbs=array(
//	'Postproperties'=>array('index'),
//	'Create',
//);


?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base-admin.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dashboard.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" media="screen, projection" />


<?php $this->renderPartial('_form', array('model'=>$model)); ?>