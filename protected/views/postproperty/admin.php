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
/* @var $this PostpropertyController */
/* @var $model Postproperty */

$this->breadcrumbs = array(
    'Postproperties' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Postproperty', 'url' => array('index')),
    array('label' => 'Create Postproperty', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#postproperty-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="main">
                <h1>Manage Posted properties</h1>



                <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
                <div class="search-form" style="display:none">
                    <?php
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div><!-- search-form -->

                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'postproperty-grid',
                    'dataProvider' => $model->search(),
                    'filter' => $model,
                    'columns' => array(
                        'p_id',
                        'name',
                        'email',
                        'mobile',
                        'city',
                        'property_type',
                        /*
                          'property_for',
                          'size_of_property',
                          'location',
                          'budget',
                          'message',
                         */
                        array(
                            'class' => 'CButtonColumn',
                        ),
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
                        <li><?php echo CHtml::link('Create', Yii::app()->createurl('postproperty/create')) ?></li>
                        <li><?php echo CHtml::link('View', Yii::app()->createurl('postproperty/index')) ?></li>
                    </ul></div>
            </div>
        </div>
    </div>
</div>