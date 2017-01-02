<?php
/* @var $this SentsmsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sentsms',
);

$this->menu=array(
	array('label'=>'Create sentsms', 'url'=>array('create')),
	array('label'=>'Manage sentsms', 'url'=>array('admin')),
);
?>

<h1>Sentsms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
