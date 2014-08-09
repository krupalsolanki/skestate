<?php
/* @var $this PostpropertyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Postproperties',
);

$this->menu=array(
	array('label'=>'Create Postproperty', 'url'=>array('create')),
	array('label'=>'Manage Postproperty', 'url'=>array('admin')),
);
?>

<h1>Postproperties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
