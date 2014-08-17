
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
$this->layout = "//layouts/column1";
$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base-admin.css" media="screen, projection" />
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span-10">
            <div style="padding: 40px 0 150px;
                 background: rgba(59, 102, 116, 0.6);text-align: center">
                 <?php if (Yii::app()->user->hasFlash('contact')): ?>

                    <div class="flash-success">
                        <?php echo Yii::app()->user->getFlash('contact'); ?>
                    </div>

                <?php else: ?>
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

                        <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

                    <?php echo $form->errorSummary($model); ?>

                    <fieldset>
                        <legend><h1 style="color: white">Get in Touch</h1></legend>
                        <?php echo $form->textFieldRow($model, 'name', array('placeholder' => 'Name', 'style' => 'height:45px;font-size: 15px;width:600px;',)); ?>




                        <?php echo $form->textFieldRow($model, 'email', array('placeholder' => 'Email', 'style' => 'height:45px;font-size: 15px;width:600px;')); ?>





                        <?php echo $form->textFieldRow($model, 'subject', array('size' => 60, 'maxlength' => 128, 'placeholder' => 'Subject', 'style' => 'height:45px;font-size: 15px;width:600px;')); ?>





                        <?php echo $form->textAreaRow($model, 'body', array('rows' => 6, 'cols' => 50, 'placeholder' => 'Your Queries here...', 'style' => 'height:45px;font-size: 15px;width:600px;')); ?>


                    </fieldset>



                    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary', 'style' => 'height:35px;font-size: 15px;width:150px;')); ?>


                    <?php $this->endWidget(); ?>

                </div><!-- form -->
            </div>
        </div>
        <div style="margin: 1em;"></div>
        <div class="row-fluid">
            <div class="span6" style="border: 1px solid;">
                <?php
                /**
                 * EGmap3 Yii extension example view file.
                 *
                 * You can copy this file or its contents into your Yii
                 * application for testing.
                 *
                 */
                Yii::import('ext.jquery-gmap.*');

                $gmap = new EGmap3Widget();
                $gmap->setSize(600, 400);

// base options
                $options = array(
                    'scaleControl' => true,
                    'streetViewControl' => true,
                    'zoom' => 13,
                    'center' => array(0, 0),
                    'mapTypeId' => EGmap3MapTypeId::HYBRID,
                    'mapTypeControlOptions' => array(
                        'style' => EGmap3MapTypeControlStyle::DROPDOWN_MENU,
                        'position' => EGmap3ControlPosition::TOP_CENTER,
                    ),
                );
                $gmap->setOptions($options);

// marker with custom icon
                $marker = new EGmap3Marker(array(
                    'title' => 'SK Estate Agency',
                    'icon' => array(
                        'url' => '/skestate/images/workoffice.png',
                        'anchor' => array('x' => 1, 'y' => 36),
                    'anchor' => new EGmap3Point(0,0),
                    )
                ));

// set marker position by address
                $marker->address = 'Shop no 44, "A" Wing, Green Fields Society, JVLR, Andheri (East), Mumbai - 400093';

// data associated with the marker
                $marker->data = 'SK Estate Agency';

// add a Javascript event on marker click
                $js = "function(marker, event, data){
        var map = $(this).gmap3('get'),
        infowindow = $(this).gmap3({action:'get', name:'infowindow'});
        if (infowindow){
            infowindow.open(map, marker);
            infowindow.setContent(data);
        } else {
            $(this).gmap3({action:'addinfowindow', anchor:marker, options:{content: data}});
        }
}";
                $marker->addEvent('click', $js);

// center the map on the marker
                $marker->centerOnMap();

                $gmap->add($marker);

                $gmap->renderMap();
                ?>
            </div>
            <div class="span4">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/locate.jpg">
            </div>
        </div>
    </div>
<?php endif; ?>