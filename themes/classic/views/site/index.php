<div id="faded">
    <ul class="slides">
        <li><img src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/images/slide-title1.gif"><a href="#"><span><span>Learn More</span></span></a></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/images/slide-title4.gif"><a href="#"><span><span>Learn More</span></span></a></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/images/slide-title3.gif"><a href="#"><span><span>Learn More</span></span></a></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/images/slide-title2.gif"><a href="#"><span><span>Learn More</span></span></a></li>
    </ul>
    <ul class="pagination">
        <li><a href="#" rel="0"><span>Web Hosting</span><small>Get more information</small></a></li>
        <li><a href="#" rel="1"><span>Broadband</span><small>Get more information</small></a></li>
        <li><a href="#" rel="2"><span>Email Hosting</span><small>Get more information</small></a></li>
        <li><a href="#" rel="3"><span>Dedicated</span><small>Get more information</small></a></li>
    </ul>
</div>
<div class="inside">
    <?php
    $projects = TblProjects::model()->findAll();
    $this->renderPartial('//widgets/hotProperties', array('projects' => $projects));
    ?>
</div>