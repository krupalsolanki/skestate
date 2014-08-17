<?php
/* @var $this TblProjectsController */
/* @var $model TblProjects */

$this->breadcrumbs=array(
	'Tbl Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblProjects', 'url'=>array('index')),
	array('label'=>'Manage TblProjects', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>