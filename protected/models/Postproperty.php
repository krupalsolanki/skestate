<?php

/**
 * This is the model class for table "postproperty".
 *
 * The followings are the available columns in table 'postproperty':
 * @property integer $p_id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $city
 * @property string $property_type
 * @property string $property_for
 * @property integer $size_of_property
 * @property string $location
 * @property string $budget
 * @property string $message
 */
class Postproperty extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_postproperty';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, mobile, city, property_type, property_for, size_of_property, location, budget, message', 'required'),
			array('size_of_property', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>30),
			array('email', 'length', 'max'=>50),
			array('mobile, budget', 'length', 'max'=>10),
			array('city, property_type, property_for, location', 'length', 'max'=>15),
			array('message', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('p_id, name, email, mobile, city, property_type, property_for, size_of_property, location, budget, message', 'safe', 'on'=>'search'),
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
			'p_id' => 'P',
			'name' => 'Name',
			'email' => 'Email',
			'mobile' => 'Mobile',
			'city' => 'City',
			'property_type' => 'Property Type',
			'property_for' => 'Property For',
			'size_of_property' => 'Size Of Property',
			'location' => 'Location',
			'budget' => 'Budget',
			'message' => 'Message',
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

		$criteria->compare('p_id',$this->p_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('property_type',$this->property_type,true);
		$criteria->compare('property_for',$this->property_for,true);
		$criteria->compare('size_of_property',$this->size_of_property);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('budget',$this->budget,true);
		$criteria->compare('message',$this->message,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Postproperty the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
