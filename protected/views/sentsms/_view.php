<?php
/* @var $this SentsmsController */
/* @var $data sentsms */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message_id')); ?>:</b>
	<?php echo CHtml::encode($data->message_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sms_content')); ?>:</b>
	<?php echo CHtml::encode($data->sms_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>