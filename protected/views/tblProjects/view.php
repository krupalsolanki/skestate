<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />

<?php
/* @var $this TblProjectsController */
/* @var $model TblProjects */

$this->breadcrumbs = array(
    'Tbl Projects' => array('index'),
    $model->project_id,
);
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span6">
            <div class="main">
                <legend><h1>Project Name:<?php echo " " . $model->project_name; ?></h1></legend>
                <img src="<?php echo $model->image_path; ?>" width="300px">
                <?php
                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model,
                    'cssFile' => Yii::app()->baseUrl . '/css/detailview.css',
                    'attributes' => array(
                        'project_name',
                        'project_address',
                        'price_per_sqft',
                        'developed_by',
                        'type_of_project',
                        'type_of_property',
                        'project_description',
                    ),
                ));
                ?>
            </div>
        </div>
        <?php
        if (Yii::app()->getModule('user')->isAdmin()) {
            ?>
            <div class="span3">
                <div class="portlet" id="yw0">
                    <div class="portlet-decoration">
                        <div class="portlet-title">Profile</div>
                    </div>
                    <div class="portlet-content">
                        <ul class="sidebar" id="yw1">
                            <li><?php echo CHtml::link('Manage Added Projects', Yii::app()->createurl('TblProjects/admin')) ?></li>
                            <li><?php echo CHtml::link('Add Projects', Yii::app()->createurl('TblProjects/create')) ?></li>

                        </ul></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>