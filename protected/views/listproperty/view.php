<?php
/* @var $this ListpropertyController */
/* @var $model Listproperty */

$this->breadcrumbs=array(
	'Listproperties'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Listproperty', 'url'=>array('index')),
	array('label'=>'Create Listproperty', 'url'=>array('create')),
	array('label'=>'Update Listproperty', 'url'=>array('update', 'id'=>$model->property_id)),
	array('label'=>'Delete Listproperty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->property_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Listproperty', 'url'=>array('admin')),
);
?>

<h1>View Listproperty #<?php echo $model->property_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'property_id',
		'name',
		'email',
		'mobile',
		'property_for',
		'city',
		'property_category',
		'rooms',
		'plot_area',
		'property_price',
		'property_address',
	),
)); ?>
