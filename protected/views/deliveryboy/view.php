<?php
/* @var $this DeliveryboyController */
/* @var $model deliveryboy */

$this->breadcrumbs=array(
	'Delivery Boys'=>array('index'),
	$model->delivery_boy_name,
);

$this->menu=array(
	//array('label'=>'List deliveryboy', 'url'=>array('index')),
	array('label'=>'Add Delivery Boy', 'url'=>array('create')),
	array('label'=>'Update Delivery Boy Details', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Delivery Boy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Delivery Boys List', 'url'=>array('admin')),
);
?>

<h1>View Delivery Boy Details<?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'delivery_boy_name',
		'contact_number',
		'area.area_name',
		//'created_datetime',
		//'updated_datetime',
		//'flag',
	),
)); ?>
