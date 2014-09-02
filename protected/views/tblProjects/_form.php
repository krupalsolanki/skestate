<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="main" style="background: white;border: 0px solid;
border-radius: 15px 0px 15px 0px;">
               


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'tbl-projects-form',
         'type'=>'horizontal',
     'htmlOptions' => array('enctype' => 'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<fieldset>
 
            <legend style="margin-left: 15px;">Add New Project</legend>
 
    <?php echo $form->textFieldRow($model, 'project_name', array('hint'=>'','size'=>30,'maxlength'=>30)); ?>
    <?php echo $form->RadioButtonListRow($model, 'type_of_project', array('Commercial'=>'Commercial', 'Residential'=>'Residential', 'Both'=>'Residential and Commercial')); ?>
    <?php echo $form->checkBoxListInlineRow($model, 'type_of_property', array('Apartments'=>'Apartments', 'Bungalows'=>'Bungalows', 'Offices'=>'Offices')); ?>
    <?php echo $form->textFieldRow($model, 'price_per_sqft', array('prepend'=>'Rs.')); ?>
    <?php echo $form->textAreaRow($model, 'project_address', array('class'=>'span8', 'rows'=>5,'size'=>60,'maxlength'=>100)); ?>
    <?php echo $form->textFieldRow($model, 'project_area', array('hint'=>'Area where the project is developed','maxlength'=>30)); ?>
    <?php echo $form->textAreaRow($model, 'project_description', array('class'=>'span8', 'rows'=>5,'size'=>60)); ?>
    <?php echo $form->textFieldRow($model, 'developed_by', array('hint'=>'','size'=>15,'maxlength'=>15)); ?>
    <?php echo $form->fileFieldRow($model, 'image',array('hint'=>'Images files with extensions .jpg, .gif, .png are allowed')); ?>
</fieldset>
 
<div class="form-actions">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::resetButton('Reset',array('class'=>'btn')); ?>
    </div>
 

<?php $this->endWidget(); ?>

<!-- form -->
            </div>
        </div>
        <div class="span3">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Profile</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li><?php echo CHtml::link('Manage Added Projects',Yii::app()->createurl('TblProjects/admin')) ?></li>
                        
                        
                          </ul></div>
            </div>
        </div>
    </div>
</div>