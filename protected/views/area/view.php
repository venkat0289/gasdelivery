<?php
/* @var $this AreaController */
/* @var $model area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->area_name,
);

$this->menu=array(
	//array('label'=>'List area', 'url'=>array('index')),
	array('label'=>'Add New Area', 'url'=>array('create')),
	array('label'=>'Update area', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete area', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Area List', 'url'=>array('admin')),
);
?>

<h1>View Area Details<?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'area_name',
		'created_datetime',
		//'updated_datetime',
		//'flag',
	),
)); ?>
