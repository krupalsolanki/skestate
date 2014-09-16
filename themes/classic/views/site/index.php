<div id="faded">
    <ul class="slides">
        <li><img src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/images/slide-title1.png"><a href="#"><span><span>Learn More</span></span></a></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/images/slide-title2.png"><a href="#"><span><span>Learn More</span></span></a></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/images/slide-title1.png"><a href="#"><span><span>Learn More</span></span></a></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/images/slide-title2.png"><a href="#"><span><span>Learn More</span></span></a></li>
    </ul>
</div>
<div class="inside">
    <?php
    $projects = TblProjects::model()->findAll();
    $this->renderPartial('//widgets/hotProperties', array('projects' => $projects));
    ?>
</div>