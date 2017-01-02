<?php
/* @var $this SentsmsController */
/* @var $model sentsms */

$this->breadcrumbs=array(
	'Sentsms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List sentsms', 'url'=>array('index')),
	array('label'=>'Create sentsms', 'url'=>array('create')),
	array('label'=>'Update sentsms', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete sentsms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage sentsms', 'url'=>array('admin')),
);
?>

<h1>View sentsms #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'message_id',
		'sms_content',
		'status',
	),
)); ?>
