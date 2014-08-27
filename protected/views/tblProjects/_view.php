<?php
/* @var $this TblProjectsController */
/* @var $data TblProjects */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->project_id), array('view', 'id'=>$data->project_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_name')); ?>:</b>
	<?php echo CHtml::encode($data->project_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_address')); ?>:</b>
	<?php echo CHtml::encode($data->project_address); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('project_description')); ?>:</b>
	<?php echo CHtml::encode($data->project_description); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('price_per_sqft')); ?>:</b>
	<?php echo CHtml::encode($data->price_per_sqft); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('developed_by')); ?>:</b>
	<?php echo CHtml::encode($data->developed_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_project')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_property')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_property); ?>
	<br />

	 
	<b><?php echo CHtml::encode($data->getAttributeLabel('image_file_path')); ?>:</b>
	<?php echo CHtml::encode($data->image_path); ?>
	<br />

	 ?>

</div>