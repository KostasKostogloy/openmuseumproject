<?php
/* @var $this InstitutionsController */
?>
<div class="row">
    <h2 class="text-center text-primary">Διαχείρηση Ινστιτούτων</h2>
   <div class="col-md-3">
        <?php $this->renderPartial('//user/_sidebar');?>
    </div>
    <div class="col-md-9">
        <br />
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
    </div>
</div>