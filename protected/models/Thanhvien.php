<?php

/**
 * This is the model class for table "tbl_thanhvien".
 *
 * The followings are the available columns in table 'tbl_thanhvien':
 * @property integer $id_thanhvien
 * @property string $hoTen
 * @property string $email
 * @property string $matKhau
 * @property integer $sdt
 * @property string $ngaysinh
 * @property integer $gioitinh
 * @property integer $trangthai
 * @property integer $created_at
 * @property integer $updated_at
 */
class Thanhvien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_thanhvien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hoTen, email, matKhau, created_at, updated_at', 'required'),
			array('sdt, gioitinh, trangthai, created_at, updated_at', 'numerical', 'integerOnly'=>true),
			array('hoTen, email, matKhau', 'length', 'max'=>255),
			array('ngaysinh', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_thanhvien, hoTen, email, matKhau, sdt, ngaysinh, gioitinh, trangthai, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id_thanhvien' => 'Id Thanhvien',
			'hoTen' => 'Ho Ten',
			'email' => 'Email',
			'matKhau' => 'Mat Khau',
			'sdt' => 'Sdt',
			'ngaysinh' => 'Ngaysinh',
			'gioitinh' => 'Gioitinh',
			'trangthai' => 'Trangthai',
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

		$criteria->compare('id_thanhvien',$this->id_thanhvien);
		$criteria->compare('hoTen',$this->hoTen,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('matKhau',$this->matKhau,true);
		$criteria->compare('sdt',$this->sdt);
		$criteria->compare('ngaysinh',$this->ngaysinh,true);
		$criteria->compare('gioitinh',$this->gioitinh);
		$criteria->compare('trangthai',$this->trangthai);
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
	 * @return Thanhvien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
