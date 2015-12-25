<?php

Yii::import('application.models._base.BaseProperty');

class Property extends BaseProperty {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getFeatured() {
        return Property::model()->find(array(
                    'select' => '*, rand() as rand',
                    'limit' => '1',
                    'condition' => 'hot_property = 1',
                    'order' => 'rand'
        ));
    }

}
