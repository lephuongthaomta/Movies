<?php
/* @var $this TheloaiController */
/* @var $model Theloai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_theloai'); ?>
		<?php echo $form->textField($model,'id_theloai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenLoad'); ?>
		<?php echo $form->textField($model,'tenLoad',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->