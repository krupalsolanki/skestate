<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<?php
$this->breadcrumbs=array(
	UserModule::t("Users"),
);


?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="main">
<h1><?php echo UserModule::t("List User"); ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array(
			'name' => 'username',
			'type'=>'raw',
			'value' => 'CHtml::link(CHtml::encode($data->username),array("user/view","id"=>$data->id))',
		),
		'create_at',
		'lastvisit_at',
	),
)); ?>
            </div><!--main ends here-->
        </div><!--Span ends here-->
        <div class="span3">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Quick Links</div>
                </div>
                <div class="portlet-content">
            <?php
            if(UserModule::isAdmin()) {
                $this->layout="//layouts/column1";
	   ?>
            <ul class="sidebar" id="yw1">
                <li><?php echo CHtml::link('Users',Yii::app()->createurl('user/admin')) ?></li>
            </ul>
            <?php
}
            ?>
        </div>
            </div>
        </div>
    </div><!--Row-fluid ends here-->
</div><!--container ends here-->