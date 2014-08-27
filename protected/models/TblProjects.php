<?php

/**
 * This is the model class for table "tbl_projects".
 *
 * The followings are the available columns in table 'tbl_projects':
 * @property integer $project_id
 * @property string $project_name
 * @property string $project_address
 * @property integer $price_per_sqft
 * @property string $developed_by
 * @property string $type_of_project
 * @property string $type_of_property
 * @property string $image_file_path
 */
class TblProjects extends CActiveRecord 
{
	/**
	 * @return string the associated database table name
	 */
        public $image;
	public function tableName()
	{
		return 'tbl_projects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_name, project_address, price_per_sqft, developed_by, type_of_project, type_of_property,project_description', 'required'),
			array('price_per_sqft', 'numerical', 'integerOnly'=>true),
			array('project_name', 'length', 'max'=>30),
			array('project_address', 'length', 'max'=>100),
			array('developed_by, type_of_project, type_of_property', 'length', 'max'=>50),
			array('image_path', 'length', 'max'=>300),
                        array('image','file','types' => 'jpg, png, gif, bmp'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('project_id, project_name, project_address, price_per_sqft, developed_by, type_of_project, type_of_property,project_description', 'safe', 'on'=>'search'),
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
			'project_id' => 'Project',
			'project_name' => 'Project Name',
			'project_address' => 'Project Address',
			'price_per_sqft' => 'Price Per Sqft',
			'developed_by' => 'Developed By',
			'type_of_project' => 'Type Of Project',
			'type_of_property' => 'Type Of Property',
			'image' => 'Image File ',
                        'project_description' => 'Project Description ',
                      
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

		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('project_address',$this->project_address,true);
		$criteria->compare('price_per_sqft',$this->price_per_sqft);
		$criteria->compare('developed_by',$this->developed_by,true);
		$criteria->compare('type_of_project',$this->type_of_project,true);
		$criteria->compare('type_of_property',$this->type_of_property,true);
		$criteria->compare('image',$this->image,true);
                $criteria->compare('image_path',$this->image_path,true);
                $criteria->compare('project_description',$this->project_description,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblProjects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
}
