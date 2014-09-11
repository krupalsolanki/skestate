<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<?php
/* @var $this PostpropertyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Postproperties',
);
/*
$this->menu = array(
    array('label' => 'Create Postproperty', 'url' => array('create')),
    array('label' => 'Manage Postproperty', 'url' => array('admin')),
); */
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="main">
                <h1>Postproperties</h1>

                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider' => $dataProvider,
                    'itemView' => '_view',
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