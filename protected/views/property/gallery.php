<?php
$this->breadcrumbs = array(
    'Properties' => array('index'),
    'Update Thumbnail',
);

$this->menu = array(
    array('label' => 'List Property', 'url' => array('index')),
    array('label' => 'Create Property', 'url' => array('create')),
    array('label' => 'Update Property', 'url' => array('//property/update/' . $model->id)),
);



if ($model->image_path) {
    ?>
    <div class="row">
        <h1>Default</h1>
        <div class="span4">
            <div class="thumbnail text-center">
                <div class="overlay-container">
                    <img src="<?= Yii::app()->request->baseUrl . $model->image_path ?>">
                </div><!-- /.overlay-container -->
            </div><!-- /.thumbnail -->
        </div>
    </div>
    <?php
}
?>
<div class="row-fluid">
    <h3>Optionally Set Default image to be shown as thumbnail</h3>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'property-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'action' => CController::createUrl('//property/update/' . $model->id),
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'), // ADD THIS
    ));
    echo $form->hiddenField($model, 'image_path');
    $folder = Yii::getPathOfAlias('webroot') . '/images/property/'; // folder for uploaded files
    $webFolder = Yii::app()->request->baseUrl . "/images/property/";
    $files_folder = $model->id . '/';
    $count = 0;
    $scanned_directory = array();
    if ($files_folder) {
        $directory = $folder . $files_folder;
        $scanned_directory = array_diff(scandir($directory), array('..', '.', '.swp'));
        foreach ($scanned_directory as $img) {
            $count++;
            ?>
            <div class="span4">
                <div class="tiles">
                    <div>
                        <a class="deleteUploadImage" id="del_<?= $count ?>" onclick="deleteImage(this.id, '<?= $model->id . '/' . $img ?>');">×</a>
                    </div>
                    <div style="display: block" >
                        <img src="<?php echo $webFolder . $files_folder . $img; ?>" class="galleryImg" id="img_<?= $count ?>" onclick="setDefault(this.id, '<?= $model->id . '/' . $img ?>')">
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
<div class="row form-actions">
    <?php echo CHtml::submitButton('Update');
    ?>
</div>


<?php $this->endWidget(); ?>
<script>
    function setDefault(id, image) {
        $('[id^=img_]').removeClass('image_selected');
        $('#' + id).addClass('image_selected');
        $('#Property_image_path').val('/images/property/' + image);
    }

    function deleteImage(id, image) {
        $.ajax({
            method: 'POST',
            data: {
                image: image
            },
            url: "<?php echo Controller::createUrl('property/deleteImage'); ?>",
            success: function (resp)
            {
                $('#' + id).parent().parent().remove();
                $('#Property_image_path').val(null);
            },
            error: function (jqxhr, status, errorMessage)
            {
                alert("Unable to delete");
            }
        });
    }
</script>