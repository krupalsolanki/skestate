<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);
?>
<section class="wrapper-sm">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-4">
                <h2>Error <?php echo $code; ?></h2>
                <div class="error">
                    <?php echo CHtml::encode($message); ?>
                </div>
            </div>
        </div>
    </div>
</section>