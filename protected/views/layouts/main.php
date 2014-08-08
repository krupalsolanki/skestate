<?php
/* @var $this Controller */
//Yii::app()->bootstrap->register();
echo Yii::app()->bootstrap->init();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
       
      

            <div id="header">
                <div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->
            
            <div id="mainmenu">
                
              <div class="container" id="page">    
                <?php
                $this->widget('bootstrap.widgets.TbNavbar', array(
                'type' => 'inverse',
                'brand' => 'sk estate agency',
                'collapse' => true,
                'items' => array(
                array(
                'class' => 'bootstrap.widgets.TbMenu',
                'items' => array(
                array('label' => 'Home', 'url' => array('/site/index')),
                '---',
                array('label' => 'Post Requirement', 'url' => '#'),
                '---',
                array('label' => 'List Property', 'url' => array('/listproperty/create')),
                '---',
                array('label'=>'more', 'url'=>'#', 'items'=>array(    
                array('label'=>'About Us', 'url'=>array('/site/page', 'view'=>'about')),
                array('label' => 'Contact', 'url' =>'#'),
                )),
                ),
                ),
            
              //  '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
                array(
                'class' => 'bootstrap.widgets.TbMenu',
                'htmlOptions' => array('class' => 'pull-right'),
                'items' => array(
                array('label' => 'Send Quick Email', 'url' => array('/site/contact')),
                '---',
                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    '---',
                array('label' => 'Logout ('.Yii::app()->user->name.')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),   
                
                array('label' => 'Register', 'url' => array('/user/create'), 'visible' => Yii::app()->user->isGuest),
                    ),
                ),
               ),
               ));
                ?>
                </div>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
<?php endif ?>
                <div id="page">
                    <?php echo $content; ?> </div>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by sk estate agency.<br/>
                All Rights Reserved.<br/>
<?php //echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
