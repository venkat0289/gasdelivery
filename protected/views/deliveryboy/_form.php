<?php
/* @var $this DeliveryboyController */
/* @var $model deliveryboy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deliveryboy-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_boy_name'); ?>
		<?php echo $form->textField($model,'delivery_boy_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'delivery_boy_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_number'); ?>
		<?php echo $form->textField($model,'contact_number',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contact_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assigned_area'); ?>
		<?php //echo $form->textField($model,'assigned_area',array('size'=>60,'maxlength'=>250)); 
			echo $form->dropDownList($model,'assigned_area',CHtml::listData(area::model()->findAll(array('order' => 'area_name ASC')), 'id', 'area_name'), array('empty'=>'--Select--'));?>
		<?php echo $form->error($model,'assigned_area'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->