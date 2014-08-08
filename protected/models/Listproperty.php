<?php

/**
 * This is the model class for table "listproperty".
 *
 * The followings are the available columns in table 'listproperty':
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $property_for
 * @property string $city
 * @property string $property_category
 * @property integer $rooms
 * @property integer $plot_area
 * @property string $property_price
 * @property string $property_address
 */
class Listproperty extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'listproperty';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, mobile, property_for, city, property_category, rooms, plot_area, property_price, property_address', 'required'),
			array('rooms, plot_area', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>30),
			array('email', 'length', 'max'=>50),
			array('mobile, property_for, city, property_price', 'length', 'max'=>10),
			array('property_category', 'length', 'max'=>15),
			array('property_address', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('name, email, mobile, property_for, city, property_category, rooms, plot_area, property_price, property_address', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'email' => 'Email',
			'mobile' => 'Mobile',
			'property_for' => 'Property For',
			'city' => 'City',
			'property_category' => 'Property Category',
			'rooms' => 'Rooms',
			'plot_area' => 'Plot Area',
			'property_price' => 'Property Price',
			'property_address' => 'Property Address',
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

		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('property_for',$this->property_for,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('property_category',$this->property_category,true);
		$criteria->compare('rooms',$this->rooms);
		$criteria->compare('plot_area',$this->plot_area);
		$criteria->compare('property_price',$this->property_price,true);
		$criteria->compare('property_address',$this->property_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Listproperty the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
