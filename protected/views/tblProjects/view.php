<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />

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
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span6">
            <div class="main">
                <legend><h1>Project Name:<?php echo " ".$model->project_name; ?></h1></legend>

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
		
	),
)); ?>
            </div>
        </div>
        <div class="span3">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Profile</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li><?php echo CHtml::link('Manage Added Projects',Yii::app()->createurl('TblProjects/admin')) ?></li>
                        <li><?php echo CHtml::link('Add Projects',Yii::app()->createurl('TblProjects/create')) ?></li>
                        
                          </ul></div>
            </div>
        </div>
    </div>
</div>