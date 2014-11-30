<?php
/* @var $this InstitutionsController */
?>
<div class="row">
   <div class="col-md-3">
        <?php $this->renderPartial('//user/_sidebar');?>
    </div>
    <div class="col-md-9">
        <?php echo CHtml::link('<span class="glyphicon glyphicon-plus-sign"></span> Προσθήκη', array('institution/create'), array('class' => 'btn btn-success btn-sm pull-right', 'style' => 'margin-left: 5px;')); ?> 
        <?php echo CHtml::link('<span class="glyphicon glyphicon-sort"></span> Ενημέρωση', array('institution/admin'), array('class' => 'btn btn-danger btn-sm pull-right', 'style' => 'margin-left: 5px;')); ?>
        <?php echo CHtml::link('<span class="glyphicon glyphicon-import"></span> Εισαγωγή Δεδομένων', array('data/index'), array('class' => 'btn btn-danger btn-sm pull-right', 'style' => 'margin-left: 5px;')); ?> 
        <h3 class="text-primary" style="margin-top:0;"><?= Yii::t('data', 'Διαχείρηση Ινστιτούτων'); ?></h3>
        <hr />
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'institution-grid',
            'itemsCssClass' => 'table table-striped table-condensed table-bordered',
            'dataProvider' => $model->searchAdmin(),
            'filter' => $model,
            'pager' => array(
                'header' => '',
                'htmlOptions' => array('class'=>'pagination'),
                'selectedPageCssClass' => 'active',
            ),
            'pagerCssClass'=> 'pagination pull-right',
            'columns' => array(
                'NAMEGRK',
                'ADDRESS',
                'PHONE',
                //'dbpedia_url',
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
    </div>
</div>