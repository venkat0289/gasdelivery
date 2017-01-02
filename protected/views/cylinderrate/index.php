<?php
/* @var $this CylinderrateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cylinderrates',
);

$this->menu=array(
	array('label'=>'Create cylinderrate', 'url'=>array('create')),
	array('label'=>'Manage cylinderrate', 'url'=>array('admin')),
);
?>

<h1>Cylinderrates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
