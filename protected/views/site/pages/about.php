
<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - About';
$this->breadcrumbs = array(
    'About',
);
?>
<div class="span7" style="margin-top:20px;margin-left: 0px;">
            <?php
             $this->widget('bootstrap.widgets.TbCarousel', array(
                 'htmlOptions'=>array('style'=>'width:84em'),
    'items'=>array(
        array('image'=>'/skestate/images/slider/Header3.png'),
        array('image'=>'/skestate/images/slider/Header4.png'),
        array('image'=>'/skestate/images/slider/Header5.png'),
    ),
));?>
        </div>