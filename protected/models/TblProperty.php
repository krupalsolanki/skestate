<?php

/**
 * This is the model class for table "tbl_property".
 *
 * The followings are the available columns in table 'tbl_property':
 * @property integer $id
 * @property string $project_name
 * @property string $builder
 * @property string $location
 * @property string $city
 * @property string $address
 * @property double $area
 * @property integer $bed
 * @property integer $bath
 * @property integer $balcony
 * @property integer $parking
 * @property double $rate
 * @property double $budget
 * @property integer $type
 * @property integer $hot_property
 * @property integer $swiming_pool
 * @property integer $garden
 * @property integer $rain_water_harvesting
 * @property integer $security
 * @property integer $power_backup
 * @property integer $gymnasium
 * @property string $image_path
 */
class TblProperty extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_property';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_name, builder, location, area, bed, bath, balcony, parking, rate, budget, type', 'required'),
			array('bath, balcony, parking, type, hot_property, swiming_pool, garden, rain_water_harvesting, security, power_backup, gymnasium', 'numerical', 'integerOnly'=>true),
			array('area, bed, rate, budget', 'numerical'),
			array('project_name, builder, location', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, project_name, builder, location, area, bed, bath, balcony, parking, rate, budget, type, hot_property, swiming_pool, garden, rain_water_harvesting, security, power_backup', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'project_name' => 'Project Name',
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
			'swiming_pool' => 'Swimming Pool',
			'garden' => 'Garden',
			'rain_water_harvesting' => 'Rain Water Harvesting',
			'security' => 'Security',
			'power_backup' => 'Power Backup',
			'gymnasium' => 'Gymnasium',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('builder',$this->builder,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('area',$this->area);
		$criteria->compare('bed',$this->bed);
		$criteria->compare('bath',$this->bath);
		$criteria->compare('balcony',$this->balcony);
		$criteria->compare('parking',$this->parking);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('budget',$this->budget);
		$criteria->compare('type',$this->type);
		$criteria->compare('hot_property',$this->hot_property);
		$criteria->compare('swiming_pool',$this->swiming_pool);
		$criteria->compare('garden',$this->garden);
		$criteria->compare('rain_water_harvesting',$this->rain_water_harvesting);
		$criteria->compare('security',$this->security);
		$criteria->compare('power_backup',$this->power_backup);
		$criteria->compare('gymnasium',$this->gymnasium);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblProperty the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
