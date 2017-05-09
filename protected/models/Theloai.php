<?php

/**
 * This is the model class for table "tbl_theloai".
 *
 * The followings are the available columns in table 'tbl_theloai':
 * @property integer $id_theloai
 * @property string $tenLoad
 */
class Theloai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_theloai';
	}
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tenLoad', 'required'),
			array('tenLoad', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_theloai, tenLoad', 'safe', 'on'=>'search'),
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
			'id_theloai' => 'Id Theloai',
			'tenLoad' => 'Ten Load',
		);
	}

	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_theloai',$this->id_theloai);
		$criteria->compare('tenLoad',$this->tenLoad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	//lay du lieu tu data
	static function getAllTheLoai(){
		$data = Theloai::model()->findAll();
		return $data;
	}
}
