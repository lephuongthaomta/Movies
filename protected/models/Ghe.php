<?php

/**
 * This is the model class for table "tbl_ghe".
 *
 * The followings are the available columns in table 'tbl_ghe':
 * @property integer $id_ghe
 * @property integer $id_loaighe
 * @property integer $id_trangthai
 * @property integer $soLuongGhe
 * @property integer $soHang
 * @property integer $soCot
 * @property integer $created_at
 * @property integer $updated_at
 */
class Ghe extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ghe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ghe, soHang, soCot, created_at, updated_at', 'required'),
			array('id_ghe, id_loaighe, id_trangthai, soLuongGhe, soHang, soCot, created_at, updated_at', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ghe, id_loaighe, id_trangthai, soLuongGhe, soHang, soCot, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id_ghe' => 'Id Ghe',
			'id_loaighe' => 'Id Loaighe',
			'id_trangthai' => 'Id Trangthai',
			'soLuongGhe' => 'So Luong Ghe',
			'soHang' => 'So Hang',
			'soCot' => 'So Cot',
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

		$criteria->compare('id_ghe',$this->id_ghe);
		$criteria->compare('id_loaighe',$this->id_loaighe);
		$criteria->compare('id_trangthai',$this->id_trangthai);
		$criteria->compare('soLuongGhe',$this->soLuongGhe);
		$criteria->compare('soHang',$this->soHang);
		$criteria->compare('soCot',$this->soCot);
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
	 * @return Ghe the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
