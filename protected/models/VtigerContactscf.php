<?php

/**
 * This is the model class for table "vtiger_contactscf".
 *
 * The followings are the available columns in table 'vtiger_contactscf':
 * @property integer $contactid
 * @property string $cf_747
 * @property string $cf_811
 */
class VtigerContactscf extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vtiger_contactscf';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contactid', 'numerical', 'integerOnly'=>true),
			array('cf_747', 'length', 'max'=>100),
			array('cf_811', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('contactid, cf_747, cf_811', 'safe', 'on'=>'search'),
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
			'contactid' => 'Contactid',
			'cf_747' => 'Cf 747',
			'cf_811' => 'Cf 811',
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

		$criteria->compare('contactid',$this->contactid);
		$criteria->compare('cf_747',$this->cf_747,true);
		$criteria->compare('cf_811',$this->cf_811,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VtigerContactscf the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
