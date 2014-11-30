<?php
/* @var $this InstitutionsController */
?>

<h1 class="text-primary"><?= Yii::t('data', 'Διαχείρηση Ινστιτούτων') ?></h1>

<?php echo CHtml::link('Import Data', array('data/admin'), array('class' => 'btn btn-danger')); ?>

<?php echo CHtml::link('Fetch Data', array('institution/admin'), array('class' => 'btn btn-danger')); ?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'institution-grid',
    'itemsCssClass' => 'table table-striped table-condensed table-bordered',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'NAMEGRK',
        'ADDRESS',
        'PHONE',
        //'DIMOS',
        //'NEWCAT',
        //'NEWSUBCAT',
        'dbpedia_url',
        array(
            'header' => 'Wikipedia',
            'type'=>'raw',
            'value' => '(!empty($data->dbpedia_url)) ? "<a href=\"institution/wikipedia/".$data->id."\" class=\"btn btn-success\">Wikipedia</a>" : ""',
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => SAHelper::buttonTemplate(array('view', 'update', 'delete')),
            'htmlOptions' => array('width' => 70),
            'buttons' => SAHelper::buttons(array('view', 'update', 'delete')),
        ),
    ),
));
?>