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
                                    <h1 style="color: white">
                                        <a href="http://skestateagency.in/" >
                                            SK ESTATE AGENCY
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="top-info"><?php echo CHtml::link("Contact Us", array('/site/contact')); ?> | Support : +91 982 138 8331</span>
                    <marquee direction="left" scrolldelay="20" scrollamount="2" behavior="scroll" loop="0" class="urgentMessage">
                        <span style="color:#000000;font-family:Calibri;font-size:12px;">
                            <?php echo htmlentities(UrgentMessage::model()->findByPk(1)->message); ?>
                        </span>
                    </marquee>
                    <form action="#" id="login-form">
                        <fieldset>
                            <?php if (Yii::app()->user->isGuest && Yii::app()->controller->route != "user/login/login"): ?>
                                <a href="<?php echo Controller::createUrl('/user/login') ?>" class="login"><span><span>Login</span></span></a> 
                            <?php elseif (!Yii::app()->user->isGuest): ?>
                                <a href="<?php echo Controller::createUrl('/user/logout') ?>" class="login"><span><span>Logout</span></span></a> 
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
        <?php if (Yii::app()->controller->route == "site/contact"): ?>
            <aside style="margin-top: 15px">
                <div class="container">
                    <div class="inside">
                        <div class="col-1">
                            <span><h3>Head Office : </h3></span>
                        </div>
                        <div class="col-1" style="color: white">
                            Shop no 44, "A" Wing, Green Fields Society,<br/>
                            JVLR, Andheri (East),<br/>
                            Mumbai - 400093<br/>
                        </div>
<!--                        <div class="col-1" >
                            <img src="<?php echo Yii::app()->request->baseUrl ?>/themes/classic/images/worldmap.png" />
                        </div>-->
                        <div class="col-1">
                            <span><h3>Mobile No : </h3></span>
                        </div>
                        <div class="col-1" style="color: white">
                            +91 982 138 8331
                        </div>
                    </div>
                </div>
            </aside>
        <?php endif; ?>
        <footer>
            <div class="footerlink">
                <p class="lf">Copyright &copy; <?php echo date("Y") ?> <a href="#" style="text-decoration: none; color: #72ab03">SK ESTATE AGENCY</a> - All Rights Reserved</p>
                <p class="rf">Developed By : <b>Envisio Devs</b></p>
                <div style="clear:both;"></div>
            </div>
        </footer>
</html>