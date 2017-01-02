<?php
/* @var $this SentsmsController */
/* @var $model sentsms */

$this->breadcrumbs=array(
	'Sent SMS'=>array('index'),
	'List',
);

$this->menu=array(
	//array('label'=>'List sentsms', 'url'=>array('index')),
	array('label'=>'Send SMS', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sentsms-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Sent SMS List</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php // $this->renderPartial('_search',array(	'model'=>$model,)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sentsms-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
	//	'id',
		//'message_id',
		'client.client_name',
		'client.consumer_number',
		'client.mobile_number',
		'sms_content',
		array(
				'name'=>'status',
				'value'=>array($this,'displaystatus'),
),
			array(
					'name'=>'created_datetime',
					'value'=>array($this,'dateconversion'),
			),
		//array(
		//	'class'=>'CButtonColumn',
		//),
	),
)); ?>
