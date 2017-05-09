<?php

/**
 * This is the model class for table "tbl_phim".
 *
 * The followings are the available columns in table 'tbl_phim':
 * @property integer $id_phim
 * @property string $tenPhim
 * @property string $anhDaiDien
 * @property integer $id_theloai
 * @property string $thoiLuong
 * @property string $khoiChieu
 * @property string $daoDien
 * @property string $dienVienChinh
 * @property string $noiDung
 * @property string $Trailer
 * @property string $dinhDang
 * @property integer $id_nhanvien
 * @property integer $created_at
 * @property integer $updated_at
 */
class Phim extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_phim';
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('tenPhim', 'required'),
			// array('tenPhim, thoiLuong, khoiChieu, daoDien, dienVienChinh, Trailer, dinhDang', 'length', 'max'=>255),
			
			// // The following rule is used by search().
			// // @todo Please remove those attributes that should not be searched.
			// array('id_phim, tenPhim, anhDaiDien, id_theloai, thoiLuong, khoiChieu, daoDien, dienVienChinh, noiDung, Trailer, dinhDang, id_nhanvien, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id_phim' => 'Phim',
			'tenPhim' => 'Tên Phim',
			'anhDaiDien' => 'Ảnh đại diện',
			'id_theloai' => 'Thể loại',
			'thoiLuong' => 'Thời lượng',
			'khoiChieu' => 'Khởi chiếu',
			'daoDien' => 'Đạo diễn',
			'dienVienChinh' => 'Diễn viên chính',
			'noiDung' => 'Nội dung',
			'Trailer' => 'Trailer',
			'dinhDang' => 'Định dạng',
			'id_nhanvien' => 'Nhân viên',
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

		$criteria->compare('id_phim',$this->id_phim);
		$criteria->compare('tenPhim',$this->tenPhim,true);
		$criteria->compare('anhDaiDien',$this->anhDaiDien,true);
		$criteria->compare('id_theloai',$this->id_theloai);
		$criteria->compare('thoiLuong',$this->thoiLuong,true);
		$criteria->compare('khoiChieu',$this->khoiChieu,true);
		$criteria->compare('daoDien',$this->daoDien,true);
		$criteria->compare('dienVienChinh',$this->dienVienChinh,true);
		$criteria->compare('noiDung',$this->noiDung,true);
		$criteria->compare('Trailer',$this->Trailer,true);
		$criteria->compare('dinhDang',$this->dinhDang,true);
		$criteria->compare('id_nhanvien',$this->id_nhanvien);
		$criteria->compare('created_at',$this->created_at);
		$criteria->compare('updated_at',$this->updated_at);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	static function getPhimHomePage()
	{
		$criteria = new CDbCriteria;
		$criteria->limit = 6;
		$data =Phim::model()->findAll($criteria);
		return $data;
	}

	static function getPhimByid($id)
	{
		$criteria = new CDbCriteria;
		$criteria->select="*";
		$criteria->condition="id_theloai = ".$id;
		$data =Phim::model()->findAll($criteria);
		return $data;
	}
	 static function  getChitietphimByID($id){
         $data = Yii::app()->db->createCommand()
                ->select("*")
                ->from('tbl_phim')
                ->where('id_phim =' . $id)
                ->queryAll();

        return $data;
    }

} 
