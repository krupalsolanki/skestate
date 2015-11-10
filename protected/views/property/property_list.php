<?php
if (count($dataProvider)) {
    foreach ($dataProvider as $data) {
        $this->renderPartial('_view', array('model' => $data));
    }
} else {
    ?>

    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>No Property Found</h1>
            <h3>Try again with different search criteria</h3>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <?php
}
?>