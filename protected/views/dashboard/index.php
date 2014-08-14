<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/gridview.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tablesorter.css" media="screen, projection" />

<div class="container-fluid">

    <?php
    $this->pageTitle = Yii::app()->name . ' - Index';
    $this->breadcrumbs = array(
        'Index',
    );
    ?>


    <div class="row-fluid">
        <div class="span3">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Quick Links</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li><a href="<?php Yii::app()->getModule('user')->adminUrl?>">Users</a></li>
                        <li><a href="#">View Posted Requirements </a></li>
                        <li><a href="#">View Listed Property </a></li>
                        <li><a href="#">Add new Project</a></li>
                        
                    </ul></div>
            </div>
        </div>
        
        <div class="span5">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Quick Stats</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li><i class="icon-large icon-user"></i><a href="#"><ins>Total Users </ins>:<span style="margin:60px;"></span><?php Yii::app()->getModule('user')->totalUsers(); ?></a></li>
                        <li><i class="icon-large icon-home"></i><a href="#"><ins>Total Posted Requirements</ins>:<span style="margin:17px;"></span><?php echo $rows=Postproperty::model()->count(); ?></a></li>
                        <li><i class="icon-large icon-home"></i><a href="#"><ins>Total Listed Property</ins>:<span style="margin:36px;"></span><?php echo $rows=Listproperty::model()->count(); ?></a></li>
                        <li><i class="icon-large icon-plus-sign"></i><a href="#">Total Projects Added</a></li>
                    </ul></div>
            </div>
        </div>
        
        <div class="span3">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Profile</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li><a href="#">Name</a></li>
                        <li><a href="#">Email</a></li>
                        <li><a href="#">User Name</a></li>
                        <li><a href="#"><button class="btn btn-primary btn-block">Edit </button></a></li>
                    </ul></div>
            </div>
        </div>

    </div>
</div>