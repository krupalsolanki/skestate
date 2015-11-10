<?php
/* @var $this UrgentMessageController */
/* @var $model UrgentMessage */

$this->breadcrumbs=array(
	'Urgent Messages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UrgentMessage', 'url'=>array('index')),
	array('label'=>'Create UrgentMessage', 'url'=>array('create')),
	array('label'=>'Update UrgentMessage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UrgentMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UrgentMessage', 'url'=>array('admin')),
);
?>

<h1>View UrgentMessage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'message',
	),
)); ?>
