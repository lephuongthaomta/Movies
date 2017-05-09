<?php
/* @var $this PhimController */
/* @var $model Phim */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_phim'); ?>
		<?php echo $form->textField($model,'id_phim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenPhim'); ?>
		<?php echo $form->textField($model,'tenPhim',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anhDaiDien'); ?>
		<?php echo $form->textArea($model,'anhDaiDien',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_theloai'); ?>
		<?php echo $form->textField($model,'id_theloai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thoiLuong'); ?>
		<?php echo $form->textField($model,'thoiLuong',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'khoiChieu'); ?>
		<?php echo $form->textField($model,'khoiChieu',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'daoDien'); ?>
		<?php echo $form->textField($model,'daoDien',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dienVienChinh'); ?>
		<?php echo $form->textField($model,'dienVienChinh',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noiDung'); ?>
		<?php echo $form->textField($model,'noiDung',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Trailer'); ?>
		<?php echo $form->textField($model,'Trailer',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dinhDang'); ?>
		<?php echo $form->textField($model,'dinhDang',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_nhanvien'); ?>
		<?php echo $form->textField($model,'id_nhanvien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->