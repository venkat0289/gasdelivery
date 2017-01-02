<?php
/* @var $this DeliveryboyController */
/* @var $model deliveryboy */

$this->breadcrumbs=array(
	'Delivery Boy'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List deliveryboy', 'url'=>array('index')),
	array('label'=>'Delivery Boys List', 'url'=>array('admin')),
);
?>

<h1>Add Delivery Boy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>