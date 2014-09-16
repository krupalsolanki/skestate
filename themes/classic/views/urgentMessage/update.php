<?php
/* @var $this UrgentMessageController */
/* @var $model UrgentMessage */

$this->breadcrumbs=array(
	'Urgent Messages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UrgentMessage', 'url'=>array('index')),
	array('label'=>'Create UrgentMessage', 'url'=>array('create')),
	array('label'=>'View UrgentMessage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UrgentMessage', 'url'=>array('admin')),
);
?>

<h1>Update UrgentMessage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>