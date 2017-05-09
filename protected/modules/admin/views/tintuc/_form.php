<?php
/* @var $this TintucController */
/* @var $model Tintuc */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tintuc-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tintuc'); ?>
		<?php echo $form->textField($model,'id_tintuc'); ?>
		<?php echo $form->error($model,'id_tintuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_chitiettintuc'); ?>
		<?php echo $form->dropDownList($model,'id_chitiettintuc',$data,array('empty' => 'Chọn chi tiết tin tức')); ?>
		<?php echo $form->error($model,'id_chitiettintuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tieude'); ?>
		<?php echo $form->textField($model,'tieude',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tieude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trangthai'); ?>
		<?php echo $form->textField($model,'trangthai'); ?>
		<?php echo $form->error($model,'trangthai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mota'); ?>
		<?php //echo $form->textField($model,'noiDung',array('size'=>60,'maxlength'=>255)); 
			$this->widget('application.extensions.ckeditor.CKEditor', array(
			 	'model' => $model,
	            'attribute' => 'mota',
	            'language' => 'vi',
	            'theme'=>'default',
	            'editorTemplate' => 'full',
        	));
		?>
		<?php echo $form->error($model,'mota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'binhluan'); ?>
		<?php echo $form->textArea($model,'binhluan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'binhluan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_add'); ?>
		<?php // echo $form->textField($model,'khoiChieu',array('size'=>60,'maxlength'=>255));
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			    'model' => $model,
			    'attribute' => 'date_add',
			    'options' => array(
			    	'dateFormat'=>'dd-mm-yy'
			    ),
			    'htmlOptions' => array(        // textField size
			        'maxlength' => '10',    // textField maxlength
			    ),
			));
		 ?>
		<?php echo $form->error($model,'date_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_upd'); ?>
		<?php // echo $form->textField($model,'khoiChieu',array('size'=>60,'maxlength'=>255));
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			    'model' => $model,
			    'attribute' => 'date_upd',
			    'options' => array(
			    	'dateFormat'=>'dd-mm-yy'
			    ),
			    'htmlOptions' => array(        // textField size
			        'maxlength' => '10',    // textField maxlength
			    ),
			));
		 ?>
		<?php echo $form->error($model,'date_upd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_thanhvien'); ?>
		<?php echo $form->textField($model,'id_thanhvien'); ?>
		<?php echo $form->error($model,'id_thanhvien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soluongBL'); ?>
		<?php echo $form->textField($model,'soluongBL'); ?>
		<?php echo $form->error($model,'soluongBL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_description'); ?>
		<?php echo $form->FileField($model,'image_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_content'); ?>
		<?php echo $form->FileField($model,'image_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image_content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm' : 'Lưu'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->