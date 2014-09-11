<?php
echo Yii::app()->bootstrap->init();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/css/custom.css" type="text/css" media="all">
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/maxheight.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/cufon-yui.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/cufon-replace.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/Myriad_Pro_300.font.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/Myriad_Pro_400.font.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/jquery.faded.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/jquery.jqtransform.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#faded").faded({
                    speed: 500,
                    crossfade: true,
                    autoplay: 10000,
                    autopagination: false
                });
                $('#domain-form').jqTransform({
                    imgPath: 'images/'
                });
            });
        </script>
        <!--[if lt IE 7]><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/ie6_script_other.js"></script><![endif]-->
        <!--[if lt IE 9]><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/js/html5.js"></script><![endif]-->
    </head>
    <body id="page1" onLoad="new ElementMaxHeight();">
        <!-- START PAGE SOURCE -->
        <div class="tail-top">
            <header>
                <div class="container">
                    <div class="header-box">
                        <div class="left">
                            <div class="right">
                                <?php
                                $links = array(
                                    array('label' => 'Home', 'url' => Controller::createUrl('/site/index'), 'active' => (Yii::app()->controller->route) == "site/index" ? true : false),
                                    array('label' => 'Post Requirement', 'url' => Controller::createUrl('/postproperty/create'), 'active' => (Yii::app()->controller->route == "postproperty/create") ? true : false),
                                    array('label' => 'List Property', 'url' => Controller::createUrl('/listproperty/create'), 'active' => (Yii::app()->controller->route == "listproperty/create") ? true : false),
                                    array('label' => 'Dashboard', 'url' => Controller::createUrl('/dashboard/index'), 'visible' => (!Yii::app()->user->isGuest && Yii::app()->getModule('user')->isAdmin()), 'active' => (Yii::app()->controller->route == "dashboard/index") ? true : false),
                                    array('label' => 'About Us', 'url' => Controller::createUrl('/site/page', array('view' => 'about')), 'active' => (Yii::app()->controller->route == "/site/page") ? true : false, 'visible' => Yii::app()->user->isGuest),
                                );

                                $this->renderPartial('//widgets/menu', array('links' => $links));
                                ?>

                                <div style="padding-top: 10px">
                                    <h1 style="color: #82b704">
                                        SK ESTATE AGENCY
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="top-info">24/7 Sales &amp; Support + 1 800 234 5678 &nbsp; l &nbsp; <a href="#">Hot Deals</a> &nbsp; l &nbsp; <a href="#">Search</a></span>
                    <form action="#" id="login-form">
                        <fieldset>
                            <?php 
                            if (Yii::app()->user->isGuest && Yii::app()->controller->route != "user/login/login"): ?>
                                <a href="<?php echo Controller::createUrl('user/login') ?>" class="login"><span><span>Login</span></span></a> 
                            <?php elseif(!Yii::app()->user->isGuest): ?>
                                <a href="<?php echo Controller::createUrl('user/logout') ?>" class="login"><span><span>Logout</span></span></a> 
                            <?php endif; ?>
                        </fieldset>
                    </form>
                </div>
            </header>
            <section id="content">
                <div class="container">
                    <?php echo $content ?>
                </div>
            </section>
        </div>
        <footer>
            <div class="footerlink">
                <p class="lf">Copyright &copy; <?php echo date("Y") ?> <a href="#">SK ESTATE AGENCY</a> - All Rights Reserved</p>
                <p class="rf">Developed By Envisio Devs</p>
                <div style="clear:both;"></div>
            </div>
        </footer>
</html>