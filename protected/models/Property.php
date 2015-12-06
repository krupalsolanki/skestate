<?php

/**
 * This is the model class for table "{{property}}".
 *
 * The followings are the available columns in table '{{property}}':
 * @property integer $id
 * @property string $project_name
 * @property string $tag_line
 * @property string $builder
 * @property string $location
 * @property integer $area
 * @property integer $bed
 * @property integer $bath
 * @property integer $balcony
 * @property integer $parking
 * @property integer $rate
 * @property integer $budget
 * @property integer $type
 * @property integer $hot_property
 * @property integer $swiming_pool
 * @property integer $garden
 * @property integer $rain_water_harvesting
 * @property integer $security
 * @property integer $power_backup
 * @property integer $gymnasium
 * @property string $city
 * @property string $image_path
 * @property string $address
 * @property string $description
 * @property integer $type_of_property
 * @property string $possession
 */
class Property extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{property}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('project_name, tag_line, builder, location, area, bed, bath, balcony, parking, rate, budget, type, hot_property, swiming_pool, garden, rain_water_harvesting, security, power_backup, gymnasium, city, address, description, type_of_property, possession', 'required'),
            array('area, bed, bath, balcony, parking, rate, budget, type, hot_property, swiming_pool, garden, rain_water_harvesting, security, power_backup, gymnasium, type_of_property', 'numerical', 'integerOnly' => true),
            array('project_name, builder, location, image_path, address', 'length', 'max' => 200),
            array('tag_line, city', 'length', 'max' => 100),
            array('description', 'length', 'max' => 1000),
            array('possession', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, project_name, tag_line, builder, location, area, bed, bath, balcony, parking, rate, budget, type, hot_property, swiming_pool, garden, rain_water_harvesting, security, power_backup, gymnasium, city, image_path, address, description, type_of_property, possession', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'project_name' => 'Project Name',
            'tag_line' => 'Tag Line',
            'builder' => 'Builder',
            'location' => 'Location',
            'area' => 'Area',
            'bed' => 'Bed',
            'bath' => 'Bath',
            'balcony' => 'Balcony',
            'parking' => 'Parking',
            'rate' => 'Rate',
            'budget' => 'Budget',
            'type' => 'Type',
            'hot_property' => 'Hot Property',
            'swiming_pool' => 'Swiming Pool',
            'garden' => 'Garden',
            'rain_water_harvesting' => 'Rain Water Harvesting',
            'security' => 'Security',
            'power_backup' => 'Power Backup',
            'gymnasium' => 'Gymnasium',
            'city' => 'City',
            'image_path' => 'Image Path',
            'address' => 'Address',
            'description' => 'Description',
            'type_of_property' => 'Type Of Property',
            'possession' => 'Possession',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('project_name', $this->project_name, true);
        $criteria->compare('tag_line', $this->tag_line, true);
        $criteria->compare('builder', $this->builder, true);
        $criteria->compare('location', $this->location, true);
        $criteria->compare('area', $this->area);
        $criteria->compare('bed', $this->bed);
        $criteria->compare('bath', $this->bath);
        $criteria->compare('balcony', $this->balcony);
        $criteria->compare('parking', $this->parking);
        $criteria->compare('rate', $this->rate);
        $criteria->compare('budget', $this->budget);
        $criteria->compare('type', $this->type);
        $criteria->compare('hot_property', $this->hot_property);
        $criteria->compare('swiming_pool', $this->swiming_pool);
        $criteria->compare('garden', $this->garden);
        $criteria->compare('rain_water_harvesting', $this->rain_water_harvesting);
        $criteria->compare('security', $this->security);
        $criteria->compare('power_backup', $this->power_backup);
        $criteria->compare('gymnasium', $this->gymnasium);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('image_path', $this->image_path, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('type_of_property', $this->type_of_property);
        $criteria->compare('possession', $this->possession);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Property the static model class
     */
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
