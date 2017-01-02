<?php
/* @var $this DeliveryboyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Deliveryboys',
);

$this->menu=array(
	array('label'=>'Create deliveryboy', 'url'=>array('create')),
	array('label'=>'Manage deliveryboy', 'url'=>array('admin')),
);
?>

<h1>Deliveryboys</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
