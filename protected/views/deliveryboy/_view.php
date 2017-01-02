<?php
/* @var $this DeliveryboyController */
/* @var $data deliveryboy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_boy_name')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_boy_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_number')); ?>:</b>
	<?php echo CHtml::encode($data->contact_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assigned_area')); ?>:</b>
	<?php echo CHtml::encode($data->assigned_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->created_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->updated_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag')); ?>:</b>
	<?php echo CHtml::encode($data->flag); ?>
	<br />


</div>