<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<?php
/* @var $this ListpropertyController */
/* @var $model Listproperty */

$this->breadcrumbs = array(
    'Listproperties' => array('index'),
    'Manage',
);
/*
  $this->menu=array(
  array('label'=>'List Listproperty', 'url'=>array('index')),
  array('label'=>'Create Listproperty', 'url'=>array('create')),
  );
 * 
 */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#listproperty-grid').yiiGridView('update', {
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
                <h1>Manage Listed properties</h1>
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
                    'id' => 'listproperty-grid',
                    'dataProvider' => $model->search(),
                    'filter' => $model,
                    'columns' => array(
                        'property_id',
                        'name',
                        'email',
                        'mobile',
                        'property_for',
                        'city',
                        /*
                          'property_category',
                          'rooms',
                          'plot_area',
                          'property_price',
                          'property_address',
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
                        <li><?php echo CHtml::link('Create',Yii::app()->createurl('listproperty/create')) ?></li>
                        <li><?php echo CHtml::link('View',Yii::app()->createurl('listproperty/index')) ?></li>
                   </ul></div>
            </div>
        </div>
    </div>
</div>