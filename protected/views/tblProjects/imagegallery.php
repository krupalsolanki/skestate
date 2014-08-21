<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->widget('application.modules.nivoSliderManagement.extensions.nivoslider.CNivoSlider', array(
     //nsprovider is  a variable sent  from the corresponding action,see below.
                       'images'=>$nsprovider,
                       'effect'=>'sliceUpDown',
                       'config'=>array(
               'effect'=>'sliceUpDown',
               'slices'=>25,
               'animSpee'=>500,
               'pauseTime'=>6000,
               'startSlide'=>0,
               'directionNav'=>true,
               'directionNavHide'=>true,
               'controlNav'=>true,
               'keyboardNav'=>true,
               'pauseOnHover'=>true,
               'manualAdvance'=>false,
               'captionOpacity'=>0.5,
          // 'controlNavThumbs'=>true,
         // 'controlNavThumbsSearch'=>'.jpg', //Replace this with...
        // 'controlNavThumbsReplace'=>'_100_100_thumb.jpg', //...this in thumb Image src
        // 'controlNavThumbsFromRel'=>true
            )
    )
);
?>