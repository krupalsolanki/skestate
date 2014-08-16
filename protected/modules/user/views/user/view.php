<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<?php
$this->breadcrumbs = array(
    UserModule::t('Users') => array('index'),
    $model->username,
);
$this->layout = '//layouts/column2';
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="main">
                <h1><?php echo UserModule::t('View User') . ' "' . $model->username . '"'; ?></h1>
                <?php
// For all users
                $attributes = array(
                    'username',
                );

                $profileFields = ProfileField::model()->forAll()->sort()->findAll();
                if ($profileFields) {
                    foreach ($profileFields as $field) {
                        array_push($attributes, array(
                            'label' => UserModule::t($field->title),
                            'name' => $field->varname,
                            'value' => (($field->widgetView($model->profile)) ? $field->widgetView($model->profile) : (($field->range) ? Profile::range($field->range, $model->profile->getAttribute($field->varname)) : $model->profile->getAttribute($field->varname))),
                        ));
                    }
                }
                array_push($attributes, 'create_at', array(
                    'name' => 'lastvisit_at',
                    'value' => (($model->lastvisit_at != '0000-00-00 00:00:00') ? $model->lastvisit_at : UserModule::t('Not visited')),
                        )
                );

                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model,
                    'attributes' => $attributes,
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
            <?php
            if(UserModule::isAdmin()) {
                $this->layout="//layouts/column1";
	   ?>
            <ul class="sidebar" id="yw1">
                <li><?php echo CHtml::link('Manage',Yii::app()->createurl('user/admin')) ?></li>
            </ul>
            <?php
}
            ?>
        </div>
            </div>
        </div>
    </div>
</div>