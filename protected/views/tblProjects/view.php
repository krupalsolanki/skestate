<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link href='http://fonts.googleapis.com/css?family=Dosis|Raleway' rel='stylesheet' type='text/css'>
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
                <legend><h3 style="font-family: 'Raleway', sans-serif;">Project Name:<?php echo " " . $model->project_name; ?></h3></legend>
                <img src="<?php echo $model->image_path; ?>" width="300px">
                <hr>
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
        <?php
        if (Yii::app()->user->isGuest) {
            ?>
            <div class="span3">
                <div class="portlet" id="yw0">
                    <div class="portlet-decoration">
                        <div class="portlet-title">Other Projects</div>
                    </div>
                    <div class="portlet-content">
                        <ul class="sidebar" id="yw1">
                            <?php
                            $count = TblProjects::model()->count();
                            $criteria = new CDbCriteria;
                            $criteria->select = 't.project_id,t.project_name'; // select fields which you want in output
                            $data = TblProjects::model()->findAll($criteria);
                            $j;
                            for ($j = 0; $j < $count; $j++) {
                                ?>
                                
                            <li><?php echo CHtml::link(ucfirst($data[$j]->project_name),array('TblProjects/'.$data[$j]->project_id));  ?></li>
                                 
                            <?php
                            if($j==5){ 
                              ?>
                              <li><i class=" icon-hand-down"></i><?php echo CHtml::link("more projects"); ?></li>
                            <?php
                                break; }
                             
                            } ?>
                            </ul></div>
                    </div>
                </div>
            <?php } ?>
    </div>
</div>