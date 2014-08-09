<?php
/* @var $this ListpropertyController */
/* @var $model Listproperty */
/*
$this->breadcrumbs=array(
	'Listproperties'=>array('index'),
	'Create',
);
 



$this->menu=array(
	array('label'=>'List Listproperty', 'url'=>array('index')),
	array('label'=>'Manage Listproperty', 'url'=>array('admin')),
);
*/?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base-admin.css" media="screen, projection" />
        


<?php $this->renderPartial('_form', array('model'=>$model)); ?>