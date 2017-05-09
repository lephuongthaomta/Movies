<?php

/**
 * This is the model class for table "tbl_phong".
 *
 * The followings are the available columns in table 'tbl_phong':
 * @property integer $id_phongchieu
 * @property string $tenPhong
 * @property integer $loaiPhong
 * @property integer $soHangMax
 * @property integer $soCotMax
 * @property integer $created_at
 * @property integer $updated_at
 */
class Phong extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_phong';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tenPhong, loaiPhong, soHangMax, soCotMax, created_at, updated_at', 'required'),
			array('id_phongchieu, loaiPhong, soHangMax, soCotMax, created_at, updated_at', 'numerical', 'integerOnly'=>true),
			array('tenPhong', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_phongchieu, tenPhong, loaiPhong, soHangMax, soCotMax, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id_phongchieu' => 'Id Phongchieu',
			'tenPhong' => 'Ten Phong',
			'loaiPhong' => 'Loai Phong',
			'soHangMax' => 'So Hang Max',
			'soCotMax' => 'So Cot Max',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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

		$criteria->compare('id_phongchieu',$this->id_phongchieu);
		$criteria->compare('tenPhong',$this->tenPhong,true);
		$criteria->compare('loaiPhong',$this->loaiPhong);
		$criteria->compare('soHangMax',$this->soHangMax);
		$criteria->compare('soCotMax',$this->soCotMax);
		$criteria->compare('created_at',$this->created_at);
		$criteria->compare('updated_at',$this->updated_at);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Phong the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
