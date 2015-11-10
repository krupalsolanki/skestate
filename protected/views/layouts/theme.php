<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SK Estate Agency</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-select.min.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prism-line-numbers.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prism.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme.css" media="screen, projection" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.3.min.js"><\/script>')</script>
    </head>

    <body>
        <!--Header Start -->
        <!-- Main Navbar -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <section class="wrapper-xs bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-10">
                            <i class="fa fa-question-circle"></i> Have any question? Email us at <i class="fa fa-envelope"></i> <a href="mailto:admin@skestateagency.in?subject=Enquiry"><span class="text-light">admin@skestateagency.in</span></a>
                        </div><!-- /.col -->
                        <div class="col-sm-12 col-md-2">
                            <ul class="list-inline no-margin-bottom">
                                <li><a href="#"><i class="text-light fa fa-lg fa-fw fa-twitter"></i></a></li>
                                <li><a href="#"><i class="text-light fa fa-lg fa-fw fa-facebook"></i></a></li>
                                <li><a href="#"><i class="text-light fa fa-lg fa-fw fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="text-light fa fa-lg fa-fw fa-pinterest"></i></a></li>
                            </ul>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.wrapper -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo CController::createUrl('//site/index') ?>">
                        <img style="height: 53px" src="<?php echo Yii::app()->request->baseUrl; ?>/images/SK_badge.png" alt="SK Logo">
                    </a>
                </div>
                <!-- Navbar -->
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo CController::createUrl('property/post'); ?>">Post Property</a>
                        </li>
                        <li>
                            <a href="<?php echo CController::createUrl('property/requirement'); ?>">Post Requirement</a>
                        </li>
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->

        <!--Header End -->

        <?php echo $content; ?>

        <!-- Footer Start-->
        <footer class="footer-container">
            <section class="footer-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <p>Contact us on:</p>
                            <ul class="list-unstyled">                                
                                <li><i class="fa fa-map-marker"></i> <a href="#link">&nbsp;&nbsp;
                                        Shop no 44, “A” Wing, Green Fields Society,
                                        JVLR, Andheri (East),
                                        Mumbai – 400093</a></li>
                                <li><i class="fa fa-phone"></i>&nbsp;&nbsp;Mobile : +91 982138 8331</li>
                            </ul>
                        </div><!-- /.col -->
                        <div class="col-sm-12 col-md-6 col-md-offset-1 text-center">
                            <h2>Keep in touch</h2>
                            <form action="<?php echo CController::createUrl('//subscribeList/subscribe') ?>" method="post" >
                                <div class="input-group">
                                    <input type="email" name="SubscribeList[email_id]" class="form-control input-lg" placeholder="Your email">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary btn-lg" tabindex="-1">Subscribe</button>
                                    </div>
                                </div><!-- /.input-group -->
                            </form>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.wrapper-sm -->
            <section class="footer-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="no-margin-bottom">All Rights Reserved ® Designed by <a href="http://envisiodevs.com" target="_blank">EnvisioDevs</a></p>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.footer-secondary -->
        </footer><!-- /.footer-container --> <!-- End of footer -->

        <!-- last but not least the javascript -->

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-select.min.js"></script>
        <script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker();
    });
        </script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.js"></script>
    </body>
</html>
