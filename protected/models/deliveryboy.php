<?php

/**
 * This is the model class for table "delivery_boy".
 *
 * The followings are the available columns in table 'delivery_boy':
 * @property integer $id
 * @property string $delivery_boy_name
 * @property string $contact_number
 * @property string $assigned_area
 * @property string $created_datetime
 * @property string $updated_datetime
 * @property string $flag
 */
class deliveryboy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'delivery_boy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('delivery_boy_name, contact_number, assigned_area', 'required'),
			array('delivery_boy_name, assigned_area', 'length', 'max'=>250),
			array('contact_number', 'length', 'max'=>50),
			array('flag', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('delivery_boy_name, contact_number, assigned_area', 'safe', 'on'=>'search'),
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
				'area' => array(self::BELONGS_TO, 'area', 'assigned_area'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'delivery_boy_name' => 'Delivery Boy Name',
			'contact_number' => 'Contact Number',
			'assigned_area' => 'Assigned Area',
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
		$criteria->compare('delivery_boy_name',$this->delivery_boy_name,true);
		$criteria->compare('contact_number',$this->contact_number,true);
		$criteria->compare('assigned_area',$this->assigned_area,true);
		//$criteria->compare('created_datetime',$this->created_datetime,true);
		//$criteria->compare('updated_datetime',$this->updated_datetime,true);
		//$criteria->compare('flag',$this->flag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return deliveryboy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
