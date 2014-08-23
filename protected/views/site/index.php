<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span7">
            <legend><h1>Latest Projects</h1></legend>
             
         <?php 
            $data= TblProjects::model()->findAll();
         ?>
            <div style="">
              
            </div>
        </div>
        <div class="span4">
            <?php
            ?>
        </div>
    </div>
</div>
