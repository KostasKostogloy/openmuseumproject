<?php
/* @var $this UserController */
/* @var $model User */
?>

<div class="row">
    <div class="col-md-3">
        <?php $this->renderPartial('_sidebar');?>
    </div>
    <div class="col-md-9">
        <a class="btn btn-success btn-sm pull-right" href="<?=Yii::app()->createUrl('user/register');?>"><i class="glyphicon glyphicon-plus-sign"></i> Προσθήκη Χρήστη</a>
        <h3 class="text-primary" style="margin-top:0;">Διαχείριση Χρηστών</h3>
        <hr />
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'user-grid',
            'itemsCssClass' => 'table table-striped',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'username',
                'email',
                array(
                    'class' => 'CButtonColumn',
                    'template' => SAHelper::buttonTemplate(array('update', 'delete')),
                    'htmlOptions' => array('width' => 70),
                    'buttons' => SAHelper::buttons(array('update', 'delete')),
                ),
            ),
        ));
        ?>
    </div>
</div>
