<?php

/**
 * This is the model class for table "tbl_tintuc".
 *
 * The followings are the available columns in table 'tbl_tintuc':
 * @property integer $id_tintuc
 * @property integer $id_chitiettintuc
 * @property string $tieude
 * @property integer $trangthai
 * @property string $mota
 * @property string $binhluan
 * @property string $date_add
 * @property string $date_upd
 * @property integer $id_thanhvien
 * @property integer $soluongBL
 * @property string $image_description
 * @property string $image_content
 */
class Tintuc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_tintuc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tintuc', 'required'),
			array('tieude', 'length', 'max'=>255),
			array('mota, binhluan, date_add, date_upd, image_description, image_content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tintuc, id_chitiettintuc, tieude, trangthai, mota, binhluan, date_add, date_upd, id_thanhvien, soluongBL, image_description, image_content', 'safe', 'on'=>'search'),
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
			'id_tintuc' => 'Mã tin tức',
			'id_chitiettintuc' => 'Mã chi tiết tin tức',
			'tieude' => 'Tiêu đề',
			'trangthai' => 'Trạng thái',
			'mota' => 'Mô tả',
			'binhluan' => 'Bình luận',
			'date_add' => 'Ngày đăng tin',
			'date_upd' => 'Ngày cập nhật tin',
			'id_thanhvien' => 'Mã thành viên',
			'soluongBL' => 'Số lượng bình luận',
			'image_description' => 'Ảnh mô tả',
			'image_content' => 'Ảnh bình luận',
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

		$criteria->compare('id_tintuc',$this->id_tintuc);
		$criteria->compare('id_chitiettintuc',$this->id_chitiettintuc);
		$criteria->compare('tieude',$this->tieude,true);
		$criteria->compare('trangthai',$this->trangthai);
		$criteria->compare('mota',$this->mota,true);
		$criteria->compare('binhluan',$this->binhluan,true);
		$criteria->compare('date_add',$this->date_add,true);
		$criteria->compare('date_upd',$this->date_upd,true);
		$criteria->compare('id_thanhvien',$this->id_thanhvien);
		$criteria->compare('soluongBL',$this->soluongBL);
		$criteria->compare('image_description',$this->image_description,true);
		$criteria->compare('image_content',$this->image_content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tintuc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	static function getAllTintuc()
	{
		$data = Tintuc::model()->findAll();
		return $data;
	}

}
