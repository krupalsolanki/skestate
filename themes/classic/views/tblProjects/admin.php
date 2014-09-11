<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />

<?php
/* @var $this TblProjectsController */
/* @var $model TblProjects */

$this->breadcrumbs=array(
	'Tbl Projects'=>array('index'),
	'Manage',
);
$this->layout="//layouts/column1";
$this->menu=array(
	array('label'=>'List TblProjects', 'url'=>array('index')),
	array('label'=>'Create TblProjects', 'url'=>array('create')),
); 
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="main">
                <legend><h1>Manage Projects</h1></legend>

<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-projects-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-projects-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'project_id',
		'project_name',
		'project_address',
		'price_per_sqft',
		'developed_by',
		'type_of_project',
		/*
		'type_of_property',
		'image_file_path',
		*/
		array(
			'class'=>'CButtonColumn',
		),
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
                        <li><?php echo CHtml::link('Add Projects',Yii::app()->createurl('TblProjects/create')) ?></li>
                        
                          </ul></div>
            </div>
        </div>
    </div>
</div>