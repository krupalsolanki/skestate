<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/bootstrap-select.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/bootstrap-select.min.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/bootstrap.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/bootstrap.min.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/font-awesome.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/font-awesome.min.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/prism-line-numbers.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/prism.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sktheme/css/theme.css" media="screen, projection" />

<?php
/* @var $this ListpropertyController */
/* @var $model Listproperty */

$this->breadcrumbs = array(
    'Listproperties' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Listproperty', 'url' => array('index')),
    array('label' => 'Create Listproperty', 'url' => array('create')),
    array('label' => 'Update Listproperty', 'url' => array('update', 'id' => $model->property_id)),
    array('label' => 'Delete Listproperty', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->property_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Listproperty', 'url' => array('admin')),
);
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="main">
                <h1>View Listproperty #<?php echo $model->property_id; ?></h1>

                <?php
                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model,
                    'attributes' => array(
                        'property_id',
                        'name',
                        'email',
                        'mobile',
                        'property_for',
                        'city',
                        'property_category',
                        'rooms',
                        'plot_area',
                        'property_price',
                        'property_address',
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
                        <li><?php echo CHtml::link('Create', Yii::app()->createurl('listproperty/create')) ?></li>
                        <li><?php echo CHtml::link('Manage', Yii::app()->createurl('listproperty/admin')) ?></li>
                    </ul></div>
            </div>
        </div>
    </div>
</div>