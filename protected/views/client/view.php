<?php
/* @var $this ClientController */
/* @var $model client */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->client_name,
);

$this->menu=array(
	//array('label'=>'List client', 'url'=>array('index')),
	array('label'=>'Add New Client', 'url'=>array('create')),
	array('label'=>'Update Client Details', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Client', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Client List', 'url'=>array('admin')),
);
?>

<h1>View Client  <?php //echo $model->client_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'client_name',
		'consumer_number',
		'mobile_number',
		'address',
		'area.area_name',
		'cylinderrate.cylinder_type',
		//'created_datetime',
		//'updated_datetime',
		//'flag',
	),
)); ?>
