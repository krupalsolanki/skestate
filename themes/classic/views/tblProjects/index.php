<?php
/* @var $this TblProjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Projects',
);

$this->menu=array(
	array('label'=>'Create TblProjects', 'url'=>array('create')),
	array('label'=>'Manage TblProjects', 'url'=>array('admin')),
);
?>

<h1>Tbl Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
