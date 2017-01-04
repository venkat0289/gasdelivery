<?php

/**
 * This is the model class for table "sent_sms".
 *
 * The followings are the available columns in table 'sent_sms':
 * @property integer $id
 * @property integer $message_id
 * @property string $sms_content
 * @property string $status
 */
class sentsms extends CActiveRecord
{
	public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sent_sms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sms_content', 'required'),
			array('message_id', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, message_id, sms_content', 'safe', 'on'=>'search'),
			array('verifyCode', 'CaptchaExtendedValidator', 'allowEmpty'=>!CCaptcha::checkRequirements()),
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
				'client' => array(self::BELONGS_TO, 'client', 'client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'message_id' => 'Message Id',
			'sms_content' => 'Message Content',
			'status' => 'Status',
			'created_datetime'=>'Sent Date',
			'verifyCode'=>'Verification Code',
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
		$criteria->compare('message_id',$this->message_id);
		$criteria->compare('sms_content',$this->sms_content,true);
		//$criteria->compare('status',$this->status,true);
		//$criteria->compare('created_datetime',$this->created_datetime,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
				'sort'=>array(
						'defaultOrder'=>'created_datetime DESC',
				),
		));
	}

	public function sendsms($post)
	{
		$customerids = $post['sms_content'];
		
		$sql = "SELECT cl.id as clientid, cl.client_name, cl.mobile_number, cl.address, cr.price, db.delivery_boy_name, db.contact_number from client cl JOIN cylinder_rate cr ON( cr.id = cl.type_of_cylinder) join area ar on( ar.id = cl.area) JOIN delivery_boy db ON( db.assigned_area = cl.area) where cl.consumer_number IN(". $customerids.")";
		$command= Yii::app()->db->createCommand($sql);
		$results=$command->queryAll();
		if(count($results) >0)
		{
			foreach ($results as $idx=>$val)
			{
				$this->send_sms_api($val['clientid'],$val['mobile_number'],$val['client_name'],$val['delivery_boy_name'],$val['price'],$val['contact_number']);
			}
			
		} 

		return true;
	}
	
	public function send_sms_api($clientid,$clientmobile,$clientname, $deliveryboyname, $price, $deliveryboycontact)
	{
		
		if (isset($clientmobile) && $clientmobile != "")
		{
			// Message composing part
			//$message = "Hi ".$clientname.", Your ordered gas will be delivered by Mr.";
			//$message .= $deliveryboyname." for the amount of Rs.".$price.". Please have this number for your delivery boy contact.";
			//$message .= ": ". $deliveryboycontact;
			
			$message = "நீங்கள்  பதிவு செய்த LPG சிலிண்டர் , இன்று டெலிவரிக்கு அனுப்பப்பட்டு உள்ளது. தொடர்புக்கு - SS பாரத் கேஸ்  0452-2690 456 , 2690 567.";
			
			$msgid = $this->insert_sentsms_details($message,$clientid);
			
			// Configuration
			$username		= "indiratrust";
			$api_password	= "22a61evjka967fw45";
			$sender			= "SSBGAS";
			$domain			= "sms.foosms.com";
			$priority		= "11";// 11-Enterprise, 12- Scrub
			$method			= "GET";
			
			$username		= urlencode($username);
			$password		= urlencode($api_password);
			$sender			= urlencode($sender);
			$message		= urlencode($message);
			
			$parameters="username=$username&api_password=$api_password&sender=$sender&to=$clientmobile&message=$message&priority=$priority&unicode=1";
			
			if($method=="POST")
			{
				$opts = array(
						'http'=>array(
								'method'=>"$method",
								'content' => "$parameters",
								//'content-type'=>"application/x-www-form-urlencoded",
								'header'=>"Accept-language: en\r\n" .
								"Cookie: foo=bar\r\n"
						)
				);
			
				$context = stream_context_create($opts);
			
				$fp = fopen("http://$domain/pushsms.php", "r", false, $context);
			}
			else
			{
				$fp = fopen("http://$domain/pushsms.php?$parameters", "r");
			}
			
			$response = stream_get_contents($fp);
			fpassthru($fp);
			fclose($fp);
			
			
			if($response=="")
				$response = "Process Failed! Please check your domain, username and password.";
		
			$this->update_message_response($msgid, $response);
		}
		
	}
	
	public function insert_sentsms_details($message,$clientid)
	{
		$sql = "insert into sent_sms(client_id,sms_content) values(".$clientid.",'".$message."')";
		$command= Yii::app()->db->createCommand($sql);
		$command->query();
		$lastID = Yii::app()->db->getLastInsertID();
		
		return $lastID;
	}
	
	public function update_message_response($messageid,$response)
	{
		$sql = "update sent_sms set comment = '".$response."' where id = ".$messageid;
		$command= Yii::app()->db->createCommand($sql);
		$command->query();
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return sentsms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
