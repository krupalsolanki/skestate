<div class="wrapper row-1">

    <?php
    $count = 0;
    foreach ($projects as $project) {
        if ($count < 4) {
            ?>

            <div class="box col-<?php echo ++$count ?> maxheight">
                <div class="border-right maxheight">
                    <div class="border-bot maxheight">
                        <div class="border-left maxheight">
                            <div class="left-top-corner maxheight">
                                <div class="right-top-corner maxheight">
                                    <div class="right-bot-corner maxheight">
                                        <div class="left-bot-corner maxheight">
                                            <div class="inner">
                                                <h3><?php echo ucfirst($project->project_name) ?></h3>
                                                <img src="<?php echo $project->image_path ?>" alt="Property_Image"
                                                     style="width: "/>
                                                <hr/>
                                                <ul class="info-list" style="min-height: 140px">
                                                    <li><span>Area</span><?php echo $project->project_area ?></li>
                                                    <li><span>Developed By</span><?php echo $project->developed_by ?></li>
                                                    <li><span>Property Type</span><?php echo $project->type_of_property ?></li>
                                                    <li><span>Project Type</span><?php echo $project->type_of_project ?></li>
                                                </ul>
                                                <span class="price">₹ <?php echo $project->price_per_sqft ?> /sq. ft</span>
                                                <div class="aligncenter"><a href="<?php echo Controller::createUrl('/tblProjects').'/'.$project->project_id ?>" class="link1"><span><span>Learn More</span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?> 

</div>