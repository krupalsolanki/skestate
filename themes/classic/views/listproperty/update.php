<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<?php
/* @var $this ListpropertyController */
/* @var $model Listproperty */

$this->breadcrumbs=array(
	'Listproperties'=>array('index'),
	$model->name=>array('view','id'=>$model->property_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Listproperty', 'url'=>array('index')),
	array('label'=>'Create Listproperty', 'url'=>array('create')),
	array('label'=>'View Listproperty', 'url'=>array('view', 'id'=>$model->property_id)),
	array('label'=>'Manage Listproperty', 'url'=>array('admin')),
);
?>

<h1>Update Listproperty <?php echo $model->property_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>