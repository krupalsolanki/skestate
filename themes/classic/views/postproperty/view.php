<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<?php
/* @var $this PostpropertyController */
/* @var $model Postproperty */

$this->breadcrumbs = array(
    'Postproperties' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Postproperty', 'url' => array('index')),
    array('label' => 'Create Postproperty', 'url' => array('create')),
    array('label' => 'Update Postproperty', 'url' => array('update', 'id' => $model->p_id)),
    array('label' => 'Delete Postproperty', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->p_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Postproperty', 'url' => array('admin')),
);
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="main">
                <h1>View Post property #<?php echo $model->p_id; ?></h1>

                <?php
                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model,
                    'attributes' => array(
                        'p_id',
                        'name',
                        'email',
                        'mobile',
                        'city',
                        'property_type',
                        'property_for',
                        'size_of_property',
                        'location',
                        'budget',
                        'message',
                    ),
                ));
                ?>

            </div>
        </div>
        <div class="span3">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Quick Links</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li><?php echo CHtml::link('Create',Yii::app()->createurl('postproperty/create')) ?></li>
                        <li><?php echo CHtml::link('Manage',Yii::app()->createurl('postproperty/admin')) ?></li>
                   </ul></div>
            </div>
        </div>
    </div>
</div>