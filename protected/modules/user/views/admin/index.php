<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<?php
$this->breadcrumbs = array(
    UserModule::t('Users') => array('/user'),
    UserModule::t('Manage'),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});	
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('user-grid', {
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
                <h1>Users</h1>
                <?php //echo CHtml::link(UserModule::t('Advanced Search'),'#',array('class'=>'search-button'));  ?>
              <!--  <div class="search-form" style="display:none">
                    <?php
                    /*
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    )); */
                    ?>
                </div><!-- search-form -->
                <?php

  $this->widget('zii.widgets.grid.CGridView', array(
  'id'=>'post-grid',

  'dataProvider'=>$model->search(),
  'filter'=>$model,
  'columns'=>array(
  array(
  'name' => 'id',
  'type'=>'raw',
  'value' => 'CHtml::link(CHtml::encode($data->id),array("admin/update","id"=>$data->id))',
  'htmlOptions'=>array('style'=>'width:20px;')    
  ),
  array(
  'name' => 'username',
  'type'=>'raw',
  'value' => 'CHtml::link(UHtml::markSearch($data,"username"),array("admin/view","id"=>$data->id))',
  ),
  array(
  'name'=>'email',
  'type'=>'raw',
  'value'=>'CHtml::link(UHtml::markSearch($data,"email"), "mailto:".$data->email)',
  ),
  'create_at',
  'lastvisit_at',
  array(
  'name'=>'superuser',
  'value'=>'User::itemAlias("AdminStatus",$data->superuser)',
  'filter'=>User::itemAlias("AdminStatus"),
  ),
  array(
  'name'=>'status',
  'value'=>'User::itemAlias("UserStatus",$data->status)',
  'filter' => User::itemAlias("UserStatus"),
  ),
  array(
  'class'=>'CButtonColumn',
   
      ),
  ),
  )); 
?>
            </div>
        </div>

        <div class="span3">
            <?php /*
              $this->menu=array(
              array('label'=>UserModule::t('Create User'), 'url'=>array('create')),
              array('label'=>UserModule::t('Manage Users'), 'url'=>array('admin')),
              array('label'=>UserModule::t('Manage Profile Field'), 'url'=>array('profileField/admin')),
              array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
              );
             *      
             */ ?>

            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Profile</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li><?php echo CHtml::link('Create',Yii::app()->createurl('/user/admin/create')) ?></li>
                        
                        <li><?php echo CHtml::link('List',Yii::app()->createurl('/user')) ?></li>
                        
                    </ul></div>
            </div>

        </div>

    </div> <!--row fluid-->
</div> <!--container fluid-->



