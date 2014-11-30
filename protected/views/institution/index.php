<?php
/* @var $this InstitutionsController */
?>

<h1 class="text-primary"><?= Yii::t('data', 'Διαχείρηση Ινστιτούτων') ?></h1>

<?php echo CHtml::link('Fetch Data', array('institution/admin'), array('class' => 'btn btn-danger')); ?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'user-grid',
    'itemsCssClass' => 'table table-striped table-condensed table-bordered',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'NAMEGRK',
        'ADDRESS',
        'PHONE',
        'DIMOS',
        'NEWCAT',
        'NEWSUBCAT',
        'dbpedia_url',
        array(
            'class' => 'CButtonColumn',
            'template' => SAHelper::buttonTemplate(array('view', 'update', 'delete')),
            'htmlOptions' => array('width' => 70),
            'buttons' => SAHelper::buttons(array('view', 'update', 'delete')),
        ),
    ),
));
?>