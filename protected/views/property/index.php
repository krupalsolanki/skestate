<?php
$this->renderPartial('property_list', array(
    'dataProvider' => $models,
    'pages' => $pages
));
$page_num = $pages->getPageCount();
if ($page_num) {
    ?>

    <!-- Pagination -->
    <div class="row">
        <div class="col-sm-12">
            <ul class="pagination pagination-lg">
                <li><a href="<?= CController::createUrl('property/index', array('page' => 1)) ?>">«</a></li>
                <?php
                $count = 1;
                for ($index = 0; $index < $page_num; $index++) {
                    $class = $pages->getCurrentPage() == $index ? 'class="active"' : "";
                    $page_numbr = $index + 1;
                    $page_link = CController::createUrl('property/index', array(
                                'Property_page' => $page_numbr,
                                'Property[type]' => $property_type,
                                'Property[location]' => $location,
                                'range' => $range,
                    ));
                    echo '<li ' . $class . '><a href="' . $page_link . '">' . $page_numbr . '</a></li>';
                }
                ?>
                <li><a href="<?= CController::createUrl('property/index', array('Property_page' => $pages->getPageCount())) ?>">»</a></li>
            </ul><!-- /.pagination -->
        </div><!-- /.col -->
    </div><!-- /.row --> <!-- End of pagination -->
    <?php
}?>