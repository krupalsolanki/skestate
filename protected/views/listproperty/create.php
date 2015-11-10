<?php
/* @var $this ListpropertyController */
/* @var $model Listproperty */

$this->breadcrumbs=array(
	'Listproperties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Listproperty', 'url'=>array('index')),
	array('label'=>'Manage Listproperty', 'url'=>array('admin')),
);
?>

<h1>Create Listproperty</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>