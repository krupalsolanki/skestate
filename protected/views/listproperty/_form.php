<?php
/* @var $this ListpropertyController */
/* @var $model Listproperty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'listproperty-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php //echo $form->errorSummary($model); ?>
    <div class="span4">
    <div class="widget">
    <div class='widget-header'><h3>Fill the form and we will buzz you.</h3></div>
	<div class="row">
		
		<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>30,'placeholder'=>'Your name..')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50,'placeholder'=>'Your email..')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'mobile',array('size'=>10,'maxlength'=>10,'placeholder'=>'Your mobile number..')); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'city',array('size'=>10,'maxlength'=>10,'placeholder'=>'Enter your city')); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>
    
        <div class="row">
		<?php echo $form->dropDownList($model, 'property_for',  array('empty'=>'List My Property For', 'Sale', 'Rent', 'PG')); ?>
		<?php echo $form->error($model,'property_for'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->dropDownList($model,'property_category',array('Type Of Property','Residential Plot','Residential House','Commercial Land','Commercial Shop','Commercial Showroom','Commercial Office Space','Builder Floor Apartment','Villa','Others')); ?>
		<?php echo $form->error($model,'property_category'); ?>
	</div>

	<div class="row">
	
		<?php echo $form->dropDownList($model,'rooms',array('placeholder'=>'No. of Rooms..','1','2','3','4','5','6','7','8')); ?>
		<?php echo $form->error($model,'rooms'); ?>
	</div>

	<div class="row">
	        <?php echo $form->textFieldRow($model,'plot_area',array('labelOptions' => array('label' => false),'placeholder'=>'Plot area of your property..','append'=>'sq ft','style'=>'margin-top:0px')); ?>
		
	</div>

	<div class="row">
		
		<?php echo $form->textFieldRow($model,'property_price',array('hint'=>'Price per square feet, or the rent.','labelOptions' => array('label' => false),'style'=>'margin-top:0px','placeholder'=>'Price of your property..','prepend'=>'Rs.','size'=>10,'maxlength'=>10)); ?>
		
	</div>

	<div class="row">
		
		<?php echo $form->textAreaRow($model,'property_address',array('labelOptions' => array('label' => false),'placeholder'=>'Where is your property?','size'=>60,'maxlength'=>300)); ?>
		
	</div>
       
	<div class="row buttons">
		
                <?php $this->widget('bootstrap.widgets.TbButton', array(
    'type'=>'primary',
    'label'=>'List Property',
    'block'=>false,
    'buttonType'=>'submit'
)); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
    'type'=>'default',
    'label'=>'Reset',
    'block'=>false,
    'buttonType'=>'reset'
)); ?>
           
	</div>

<?php $this->endWidget(); ?>
    </div>
    </div>
</div><!-- form -->