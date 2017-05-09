<?php
/* @var $this PhimController */
/* @var $model Phim */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'phim-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Tên phim'); ?>
		<?php echo $form->textField($model,'tenPhim',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tenPhim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ảnh bìa'); ?>
		<?php echo $form->FileField($model,'anhDaiDien',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'anhDaiDien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Thể loại'); ?>
		<?php echo $form->dropDownList($model,'id_theloai',$data,array('empty' => 'Chọn thể loại')); ?>
		<?php echo $form->error($model,'id_theloai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Thời lượng'); ?>
		<?php echo $form->textField($model,'thoiLuong',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'thoiLuong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Khởi chiếu'); ?>
		<?php // echo $form->textField($model,'khoiChieu',array('size'=>60,'maxlength'=>255));
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			    'model' => $model,
			    'attribute' => 'khoiChieu',
			    'options' => array(
			    	'dateFormat'=>'dd-mm-yy'
			    ),
			    'htmlOptions' => array(        // textField size
			        'maxlength' => '10',    // textField maxlength
			    ),
			));
		 ?>
		<?php echo $form->error($model,'khoiChieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Đạo diễn'); ?>
		<?php echo $form->textField($model,'daoDien',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'daoDien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Diễn viên chính'); ?>
		<?php echo $form->textField($model,'dienVienChinh',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dienVienChinh'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'Nội dung'); ?>
		<?php //echo $form->textField($model,'noiDung',array('size'=>60,'maxlength'=>255)); 
			$this->widget('application.extensions.ckeditor.CKEditor', array(
			 	'model' => $model,
	            'attribute' => 'noiDung',
	            'language' => 'vi',
	            'theme'=>'default',
	            'editorTemplate' => 'full',
        	));
		?>
		<?php echo $form->error($model,'noiDung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Trailer'); ?>
		<?php echo $form->textField($model,'Trailer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Trailer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Định dạng'); ?>
		<?php echo $form->textField($model,'dinhDang',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dinhDang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm' : 'Lưu'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->