<?php
/* @var $this PhimController */
/* @var $data Phim */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_phim')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_phim), array('view', 'id'=>$data->id_phim)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenPhim')); ?>:</b>
	<?php echo CHtml::encode($data->tenPhim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anhDaiDien')); ?>:</b>
	<?php echo CHtml::encode($data->anhDaiDien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_theloai')); ?>:</b>
	<?php echo CHtml::encode($data->id_theloai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thoiLuong')); ?>:</b>
	<?php echo CHtml::encode($data->thoiLuong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('khoiChieu')); ?>:</b>
	<?php echo CHtml::encode($data->khoiChieu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('daoDien')); ?>:</b>
	<?php echo CHtml::encode($data->daoDien); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dienVienChinh')); ?>:</b>
	<?php echo CHtml::encode($data->dienVienChinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noiDung')); ?>:</b>
	<?php echo CHtml::encode($data->noiDung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Trailer')); ?>:</b>
	<?php echo CHtml::encode($data->Trailer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dinhDang')); ?>:</b>
	<?php echo CHtml::encode($data->dinhDang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nhanvien')); ?>:</b>
	<?php echo CHtml::encode($data->id_nhanvien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>