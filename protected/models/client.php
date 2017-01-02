<?php

/**
 * This is the model class for table "client".
 *
 * The followings are the available columns in table 'client':
 * @property integer $id
 * @property string $client_name
 * @property string $consumer_number
 * @property string $mobile_number
 * @property string $address
 * @property string $area
 * @property integer $type_of_cylinder
 * @property string $created_datetime
 * @property string $updated_datetime
 * @property string $flag
 */
class client extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_name, consumer_number, mobile_number, address, area, type_of_cylinder', 'required'),
			array('type_of_cylinder', 'numerical', 'integerOnly'=>true),
			array('client_name, consumer_number, area', 'length', 'max'=>250),
			array('mobile_number', 'length', 'max'=>50),
			array('flag', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, client_name, consumer_number, mobile_number, address, area, type_of_cylinder, created_datetime, updated_datetime, flag', 'safe', 'on'=>'search'),
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
				'cylinderrate' => array(self::BELONGS_TO, 'cylinderrate', 'type_of_cylinder'),
				'areaname' => array(self::BELONGS_TO, 'area', 'area'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'client_name' => 'Client Name',
			'consumer_number' => 'Consumer Number',
			'mobile_number' => 'Mobile Number',
			'address' => 'Address',
			'area' => 'Area',
			'type_of_cylinder' => 'Type Of Cylinder',
			'created_datetime' => 'Created Datetime',
			'updated_datetime' => 'Updated Datetime',
			'flag' => 'Flag',
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
		$criteria->compare('client_name',$this->client_name,true);
		$criteria->compare('consumer_number',$this->consumer_number,true);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('type_of_cylinder',$this->type_of_cylinder);
		$criteria->compare('created_datetime',$this->created_datetime,true);
		$criteria->compare('updated_datetime',$this->updated_datetime,true);
		$criteria->compare('flag',$this->flag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return client the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
