<?php
/* @var $this SentsmsController */
/* @var $model sentsms */

$this->breadcrumbs=array(
	'send sms'=>array('index'),
	'Customer Ids',
);

$this->menu=array(
	//array('label'=>'List sentsms', 'url'=>array('index')),
	array('label'=>'Sent SMS List', 'url'=>array('admin')),
);
?>

<h1>Send SMS</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>