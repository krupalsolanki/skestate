<?php
/* @var $this ListpropertyController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Listproperties',
);
 * 
 */

$this->menu=array(
	array('label'=>'Create Listproperty', 'url'=>array('create')),
	array('label'=>'Manage Listproperty', 'url'=>array('admin')),
);
?>

<h1>Listproperties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
