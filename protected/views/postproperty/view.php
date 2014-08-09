<?php
/* @var $this PostpropertyController */
/* @var $model Postproperty */

$this->breadcrumbs=array(
	'Postproperties'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Postproperty', 'url'=>array('index')),
	array('label'=>'Create Postproperty', 'url'=>array('create')),
	array('label'=>'Update Postproperty', 'url'=>array('update', 'id'=>$model->p_id)),
	array('label'=>'Delete Postproperty', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->p_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Postproperty', 'url'=>array('admin')),
);
?>

<h1>View Postproperty #<?php echo $model->p_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'p_id',
		'name',
		'email',
		'mobile',
		'city',
		'property_type',
		'property_for',
		'size_of_property',
		'location',
		'budget',
		'message',
	),
)); ?>
