<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/contact.css" media="screen, projection" />

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

<div class=" well inside">
    <h1>
        Contact Us
    </h1>
    <hr/>
    <div class="row-fluid">
        <div class="inside">
            <div class="span5 offset1">
                <div class="contact-container">
                    <div class="content clearfix">
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
                            <div class="login-fields">


                                <div class="field">
                                    <?php echo $form->textFieldRow($model, 'name', array('class' => 'login', 'placeholder' => 'Name', 'labelOptions' => array('label' => false), 'style' => 'width:80%')); ?>
                                </div>


                                <div class="field">
                                    <?php echo $form->textFieldRow($model, 'email', array('class' => 'login', 'placeholder' => 'Email', 'labelOptions' => array('label' => false), 'style' => 'width:80%')); ?>
                                </div>



                                <div class="field">
                                    <?php echo $form->textFieldRow($model, 'subject', array('class' => 'login', 'size' => 60, 'maxlength' => 128, 'placeholder' => 'Subject', 'labelOptions' => array('label' => false), 'style' => 'width:80%')); ?>
                                </div>



                                <div class="field">
                                    <?php echo $form->textAreaRow($model, 'body', array('class' => 'login', 'rows' => 6, 'cols' => 100, 'placeholder' => 'Your Queries here...', 'labelOptions' => array('label' => false), 'style' => 'width:80%')); ?>
                                </div>




                                <div class="login-actions" >
                                    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-warning btn-large', 'style' => 'color:white; margin:10px;')); ?>
                                </div>

                                <?php $this->endWidget(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div><!-- span6 -->
            <div class="span6">
                <div class="map">
                    <?php
                    Yii::import('ext.jquery-gmap.*');

                    $gmap = new EGmap3Widget();
                    $gmap->setSize(600, 400);


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
                            'url' => Yii::app()->request->baseUrl . '/images/workoffice.png',
                            'anchor' => array('x' => 1, 'y' => 36),
                            'anchor' => new EGmap3Point(0, 0),
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

            </div>
        </div>
    </div>
</div>
