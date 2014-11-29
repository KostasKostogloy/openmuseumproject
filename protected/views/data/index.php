<?php
/* @var $this DataController */
/* @var $model ImportedData */

$this->breadcrumbs=array(
    'Data',
);

?>

<h1 class="text-primary"><?=Yii::t('data', 'Διαχείρηση Δεδομένων')?></h1>

<?php echo CHtml::link('Import Data', array('data/admin'), array('class' => 'btn btn-danger')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'user-grid',
    'itemsCssClass'=> 'table table-striped table-condensed table-bordered',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'TNAME',
        'NAMEGRK',
        'ADDRESS',
        'PHONE',
        'DIMOS',
        'NEWCAT',
        'NEWSUBCAT',
    ),
)); ?>