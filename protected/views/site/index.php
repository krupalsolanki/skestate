<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span7" style="margin-top: 50px;background: white">

            <legend><h3>Hot Properties</h3></legend>

            <?php
            $count = TblProjects::model()->count();
            $criteria = new CDbCriteria;
            $criteria->select = 't.project_id,t.project_name, t.image_path,t.project_address'; // select fields which you want in output
            $data = TblProjects::model()->findAll($criteria);
            $j;
            for ($j = 0; $j < $count; $j++) {
                ?>
            <div style="border-radius: 4px;width:150px;height:auto;float: left;margin: 20px; overflow: hidden;box-shadow: -4px 2px 20px -2px rgb(12, 12, 12);">

                <img src="<?php echo $data[$j]->image_path; ?>" style="width:150px;height:150px">
                    <?php
                    echo '<center>' . '<b>' . ucfirst($data[$j]->project_name) . '</b>' . '</center>';
                    echo '<center>' . ucfirst($data[$j]->project_address) . '</center>';
                    echo '<center>' . '' . '</center>';
                    ?>
                   <center> <?php
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'label' => 'more',
                            'type' => 'info',
                            'size' => 'small',
                           
                            'block' => true,
                            'htmlOptions'=>array('style'=>'margin-top:1px'),
                            'url'=> array('tblProjects/'.$data[$j]->project_id),
                        ));
                        ?> </center>
                </div>
                <?php
            }
            ?>

        </div>
        

    </div>
</div>

