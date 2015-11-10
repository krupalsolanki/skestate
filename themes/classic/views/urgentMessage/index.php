<?php
/* @var $this UrgentMessageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Urgent Messages',
);

$this->menu=array(
	array('label'=>'Create UrgentMessage', 'url'=>array('create')),
	array('label'=>'Manage UrgentMessage', 'url'=>array('admin')),
);
?>

<h1>Urgent Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
