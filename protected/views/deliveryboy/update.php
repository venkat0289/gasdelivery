<?php
/* @var $this DeliveryboyController */
/* @var $model deliveryboy */

$this->breadcrumbs=array(
	'Delivery Boys'=>array('index'),
	$model->delivery_boy_name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List deliveryboy', 'url'=>array('index')),
	array('label'=>'Add Delivery Boy', 'url'=>array('create')),
	array('label'=>'View Delivery Boy ', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Delivery Boys List' , 'url'=>array('admin')),
);
?>

<h1>Update Delivery Boy Details<?php //echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>