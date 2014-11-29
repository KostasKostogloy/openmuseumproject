<?php
/* @var $this UserController */
/* @var $model User */
?>

<h2 class="text-primary"><?=Yii::t('admin','Διαχείρηση Χρηστών')?></h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'itemsCssClass'=> 'table table-striped table-condensed table-bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'email',
		'role',
		array(
			'class'=>'CButtonColumn',
			'template' => SAHelper::buttonTemplate(array('view','update','delete')),
			'htmlOptions' => array('width'=>70),
			'buttons'=> SAHelper::buttons(array('view','update','delete')),
		),
	),
)); ?>
