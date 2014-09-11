<?php
/* @var $this TblProjectsController */
/* @var $model TblProjects */

$this->breadcrumbs=array(
	'Tbl Projects'=>array('index'),
	$model->project_id=>array('view','id'=>$model->project_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblProjects', 'url'=>array('index')),
	array('label'=>'Create TblProjects', 'url'=>array('create')),
	array('label'=>'View TblProjects', 'url'=>array('view', 'id'=>$model->project_id)),
	array('label'=>'Manage TblProjects', 'url'=>array('admin')),
);
?>

<h1>Update TblProjects <?php echo $model->project_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>