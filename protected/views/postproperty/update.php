<?php
/* @var $this PostpropertyController */
/* @var $model Postproperty */

$this->breadcrumbs=array(
	'Postproperties'=>array('index'),
	$model->name=>array('view','id'=>$model->p_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Postproperty', 'url'=>array('index')),
	array('label'=>'Create Postproperty', 'url'=>array('create')),
	array('label'=>'View Postproperty', 'url'=>array('view', 'id'=>$model->p_id)),
	array('label'=>'Manage Postproperty', 'url'=>array('admin')),
);
?>

<h1>Update Postproperty <?php echo $model->p_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>