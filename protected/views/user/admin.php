<?php
/* @var $this UserController */
/* @var $model User */
?>

<div class="row">
    <h2 class="text-center text-primary">Διαχείριση Χρηστών</h2>
    <div class="col-md-3">
        <div class="well well-sm">
            <ul class="nav nav-pills nav-stacked" id="yw1">
                <li>
                    <a href="#"><span class="glyphicon glyphicon-dashboard"></span> Διαχείριση</a>
                </li>
                <li>
                    <a href="<?= Yii::app()->createUrl('institutions/index') ?>"><span class="glyphicon glyphicon-book"></span> Ινστιτούτων</a>
                </li>
                <li class="active">
                    <a href="<?= Yii::app()->createUrl('user/admin') ?>"><span class="glyphicon glyphicon-lock"></span> Πρόσβασης</a>
                </li>
                <li>
                    <a href="dbpedia.php"><span class="glyphicon glyphicon-file"></span> Στατιστικά</a>
                </li>
                <li>
                    <a href="<?=$this->createUrl('user/logout')?>"><span class="glyphicon glyphicon-off"></span> Αποσύνδεση</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <br />
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'user-grid',
            'itemsCssClass' => 'table table-striped table-condensed table-bordered',
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

