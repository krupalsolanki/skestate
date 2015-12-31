<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/contact.css" media="screen, projection" />

<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
$this->layout = "//layouts/theme";
$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>

<section class="wrapper-lg">
    <div class="container">
        <div class="row">
            <?php if (Yii::app()->user->hasFlash('contact')): ?>

                <div class="flash-success">
                    <?php echo Yii::app()->user->getFlash('contact'); ?>
                </div>

            <?php else: ?>
                <div class="col-sm-12 col-md-4">
                    <h3>Contact data</h3>
                    <div class="well">
                        <p><i class="fa fa-map-marker"></i> Shop no 44, “A” Wing, Green Fields Society,
                            JVLR, Andheri (East),
                            Mumbai – 400093</p>
                        <p><i class="fa fa-phone"></i> +91 982138 8331</p>
                        <p><i class="fa fa-envelope"></i> <?= Yii::app()->params['adminEmail'] ?></p>
                        <hr>
                        <p>
                        </p><ul class="social-networks">
                            <li><a class="btn btn-facebook" href="https://www.facebook.com/skestateagency/"><i class="fa fa-fw fa-facebook"></i></a></li>
                            <li><a class="btn btn-google-plus" href="https://plus.google.com/109421332274280228036/about"><i class="fa fa-fw fa-google-plus"></i></a></li>
                        </ul>
                        <p></p>
                    </div><!-- /.well -->
                </div><!-- /.col -->
                <div class="col-sm-12 col-md-4">
                    <h3>Contact by email</h3>
                    <?php
                    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                        'id' => 'contact-form',
                        'enableClientValidation' => true,
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        //    'type' => 'horizontal',
                        ),
                    ));
                    ?>
                    <?php echo $form->errorSummary($model); ?>
                    <form role="form" method="post" action="<?php echo CController::createUrl('site/contact') ?>">
                        <div class="form-group">
                            <label for="exmaple-contact-email">Email address</label>
                            <input type="email" class="form-control" name="ContactForm[email]" id="exmaple-contact-email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="example-contact-name">Name</label>
                            <input type="text" class="form-control" name="ContactForm[name]" id="example-contact-name" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <label for="example-contact-message">Message</label>
                            <textarea id="example-contact-message" name="ContactForm[body]" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <?php if (CCaptcha::checkRequirements()): ?>
                                <div class="row">
                                    <?php echo $form->labelEx($model, 'verifyCode'); ?>
                                    <div>
                                        <?php $this->widget('CCaptcha'); ?>
                                        <?php echo $form->textField($model, 'verifyCode'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-12 col-md-4">
                    <h3>Find us on the map</h3>
                    <div class="padding-sm widget-dashed">
                        <div class="embed-wrapper">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.282282850159!2d72.8665283143081!3d19.13911705496036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7db79000001%3A0xd342b8997a251f48!2sSK+Estate+Agency!5e0!3m2!1sen!2sin!4v1451566384423" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div><!-- /.col -->
                <?php
                $this->endWidget();
            endif;
            ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
