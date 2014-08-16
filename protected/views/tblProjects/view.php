<?php
/* @var $this TblProjectsController */
/* @var $model TblProjects */

$this->breadcrumbs=array(
	'Tbl Projects'=>array('index'),
	$model->project_id,
);

$this->menu=array(
	array('label'=>'List TblProjects', 'url'=>array('index')),
	array('label'=>'Create TblProjects', 'url'=>array('create')),
	array('label'=>'Update TblProjects', 'url'=>array('update', 'id'=>$model->project_id)),
	array('label'=>'Delete TblProjects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->project_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblProjects', 'url'=>array('admin')),
);
?>

<h1>View TblProjects #<?php echo $model->project_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'project_id',
		'project_name',
		'project_address',
		'price_per_sqft',
		'developed_by',
		'type_of_project',
		'type_of_property',
		'image_file_path',
	),
)); ?>
