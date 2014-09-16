<?php
/* @var $this UrgentMessageController */
/* @var $model UrgentMessage */

$this->breadcrumbs=array(
	'Urgent Messages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UrgentMessage', 'url'=>array('index')),
	array('label'=>'Create UrgentMessage', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#urgent-message-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Urgent Messages</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'urgent-message-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'message',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
