<?php
/* @var $this ListpropertyController */
/* @var $data Listproperty */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->property_id), array('view', 'id'=>$data->property_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_for')); ?>:</b>
	<?php echo CHtml::encode($data->property_for); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_category')); ?>:</b>
	<?php echo CHtml::encode($data->property_category); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('rooms')); ?>:</b>
	<?php echo CHtml::encode($data->rooms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plot_area')); ?>:</b>
	<?php echo CHtml::encode($data->plot_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_price')); ?>:</b>
	<?php echo CHtml::encode($data->property_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_address')); ?>:</b>
	<?php echo CHtml::encode($data->property_address); ?>
	<br />

	*/ ?>

</div>