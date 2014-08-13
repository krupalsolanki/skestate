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
            <div id="logo"><?php //echo CHtml::encode(Yii::app()->name);  ?></div>
        </div><!-- header -->

        <div id="mainmenu">

            <div class="container" id="page">    
                <?php
                $this->widget('bootstrap.widgets.TbNavbar', array(
                    'type' => 'inverse',
                    'brand' => 'SK estate agency',
                    'collapse' => true,
                    'items' => array(
                        array(
                            'class' => 'bootstrap.widgets.TbMenu',
                            'items' => array(
                                array('label' => 'Home', 'url' => array('/site/index')),
                                '---',
                                array('label' => 'Post Requirement', 'url' => array('/postproperty/create')),
                                '---',
                                array('label' => 'List Property', 'url' => array('/listproperty/create')),
                                '---',
                                array('label' => 'more', 'url' => '#', 'items' => array(
                                        array('label' => 'About Us', 'url' => array('/site/page', 'view' => 'about')),
                                        array('label' => 'Contact', 'url' => '#'),
                                    )),
                            ),
                        ),
                        array(
                            'class' => 'bootstrap.widgets.TbMenu',
                            'htmlOptions' => array('class' => 'pull-right'),
                            'items' => array(
                                array('label' => 'Send Quick Email', 'url' => array('/site/contact')),
                                '---',
                                array('label' => Yii::app()->getModule('user')->t("Login"), 'url' => Yii::app()->getModule('user')->loginUrl, 'visible' => Yii::app()->user->isGuest),
                                array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => Yii::app()->getModule('user')->t("Profile"), 'visible' => !Yii::app()->user->isGuest),
                                '---',
                                array('label' => Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')', 'url' => Yii::app()->getModule('user')->logoutUrl, 'visible' => !Yii::app()->user->isGuest),
                                array('label' => Yii::app()->getModule('user')->t("Register"), 'url' => Yii::app()->getModule('user')->registrationUrl, 'visible' => Yii::app()->user->isGuest),
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


        <?php
        $this->widget('application.extensions.socialLink.socialLink', array(
            'style' => 'right', //alignment - left, right
            'top' => '30', //in percentage
            'media' => array(
                'facebook' => array(
                    'url' => 'http://facebook.com/sharer/sharer.php?u=',
                    'target' => '_blank',
                ),
                'twitter' => array(
                    'url' => 'http://twitter.com/',
                    'target' => '_blank',
                ),
                'google-plus' => array(
                    'url' => 'https://plus.google.com/',
                    'target' => '_blank',
                ),
                'linkedin' => array(
                    'url' => 'http://linkedin.com/',
                    'target' => '_blank',
                ),
                'rss' => array(
                    'url' => 'http://rss.com/',
                    'target' => '_blank',
                ),
            )
        ));
        ?>

        <div id="page">
        <?php echo $content; ?> </div>

        <div class="clear"></div>

        <div id="footer" class="footer">
            <div class="container">
                <strong> Copyright &copy; <?php echo date('Y'); ?> by sk estate agency.<br/>
                    All Rights Reserved.<br/></strong>
            </div>
        </div><!-- footer -->

        <!-- Backstretch  -->       
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/backstretch/jquery.backstretch.min.js"></script>;            
        <script type="text/javascript">
        $.backstretch("<?php echo Yii::app()->request->baseUrl; ?>/images/backstretch1.jpg", {speed: 150});
        </script>
        <!-- backstretch ends -->

    </body>

</html>
