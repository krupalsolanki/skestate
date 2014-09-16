<?php
/* @var $this UrgentMessageController */
/* @var $model UrgentMessage */

$this->breadcrumbs=array(
	'Urgent Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UrgentMessage', 'url'=>array('index')),
	array('label'=>'Manage UrgentMessage', 'url'=>array('admin')),
);
?>

<h1>Create UrgentMessage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>