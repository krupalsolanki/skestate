<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/realestateview/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/realestateview/font-awesome/css/font-awesome.min.css" />

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/realestateview/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/realestateview/bootstrap/js/bootstrap.min.js"></script>
<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$count = TblProjects::model()->count();
$criteria = new CDbCriteria;
$criteria->select = 't.developed_by,t.project_id,t.project_name, t.image_path,t.project_address,t.price_per_sqft,t.type_of_project,t.project_area'; // select fields which you want in output
$data = TblProjects::model()->findAll($criteria);
$j;
?>

<div style="margin-top: 5em;"></div>   
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span7" style="margin-top:20px;margin-left: 17px;">

            <?php
            $this->widget('bootstrap.widgets.TbCarousel', array(
                'htmlOptions' => array('style' => 'width:50em'),
                'slide' => true,
                'displayPrevAndNext' => false,
                'items' => array(
                    array('image' => '/skestate/images/slider/Header3.png'),
                    array('image' => '/skestate/images/slider/Header4.png'),
                    array('image' => '/skestate/images/slider/Header5.png'),
                ),
            ));
            ?>
        </div>
        <div class="span4" style="margin-top:20px;">

            <legend><h3>What's New</h3>
            </legend>

            <marquee  behavior="scroll" direction="up" scrolldelay='150'><?php
                for ($j = 0; $j < $count; $j++) {
                    echo CHtml::link(ucfirst($data[$j]->project_name), array('tblProjects/' . $data[$j]->project_id));
                    echo "<br/>";
                    echo "Developed By: " . ucfirst($data[$j]->developed_by);
                    echo "<br/><br/>";
                }
                ?>
            </marquee>

        </div>
        <div class="span15" style="margin-left: 10px;">
            <legend><h2>Hot Properties</h2></legend>
            <?php
            for ($j = 0; $j < $count; $j++) {
                ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                    <div class="panel panel-default">
                        <div class="row padall">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <span></span>
                                <img src="<?php echo $data[$j]->image_path; ?>"  style="width:100px;height:100px" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <span class="fa icon">&#8377;<?php echo $data[$j]->price_per_sqft . " "; ?>/sqft</span>
                                    </div>
                                    <div class="pull-right">
                                        <?php echo $data[$j]->type_of_project; ?>
                                    </div>
                                </div>
                                <div>
                                    <h4><span class="fa fa-map-marker icon"> <?php echo $data[$j]->project_area; ?></span></h4>
                                    <?php echo ucfirst($data[$j]->project_name); ?> <span class="fa fa-search icon pull-right"><?php echo CHtml::link(' Know More', array('tblProjects/' . $data[$j]->project_id)); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <style>
                img {
                    max-width: 110%;
                    height: auto;      
                }

                .clearfix {
                    clear:both;
                }

                .rowcolor {
                    background-color:#CCCCCC;
                }

                .padall {
                    padding:10px;
                }

                .icon {
                    font-size:23px;
                    color:#197BB5;
                }
            </style>
        </div>
        <div class="span6">
           
        </div>
    </div>
</div>

