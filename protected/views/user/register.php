<?php
/* @var $this UserController */
/* @var $model LoginForm */
?>

<div class="row">
    <h2 class="text-center text-primary">Δημιουργία νέου χρήστη</h2>
    <div class="col-md-3">
        <div class="well well-sm">
            <ul class="nav nav-pills nav-stacked" id="yw1">
                <li>
                    <a href="#"><span class="glyphicon glyphicon-dashboard"></span> Διαχείριση</a>
                </li>
                <li>
                    <a href="<?= Yii::app()->createUrl('institutions/index') ?>"><span class="glyphicon glyphicon-globe"></span> Ινστιτούτων</a>
                </li>
                <li class="active">
                    <a href="<?= Yii::app()->createUrl('user/admin') ?>"><span class="glyphicon glyphicon-floppy-save"></span> Πρόσβασης</a>
                </li>
                <li>
                    <a href="dbpedia.php"><span class="glyphicon glyphicon-link"></span> Entity Link</a>
                </li>
                <li>
                    <a href="string-match.php"><span class="glyphicon glyphicon-transfer"></span> Check Match</a>
                </li>
                <li>
                    <a href="precision-recall.php"><span class="glyphicon glyphicon-screenshot"></span> Precision - Recall</a>
                </li>
                <li>
                    <a href="compare.php"><span class="glyphicon glyphicon-ok"></span> Merged Data</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <br />
        <div class="form form-horizontal well">
            <?php

            echo CHtml::beginForm('', 'post');
            echo '<p>'.CHtml::activeLabel($model, 'email').'</p>';
            echo '<p>'.CHtml::activeTextField($model, 'email',array('class'=>'form-control')).'</p>';
            echo '<p>'.CHtml::error($model, 'email').'</p>';
            echo '<p>'.CHtml::activeLabel($model, 'password').'</p>';
            echo '<p>'.CHtml::activePasswordField($model, 'password',array('autocomplete'=>'off','class'=>'form-control')).'</p>';
            echo '<p>'.CHtml::error($model, 'password').'</p>';
            echo '<p>'.CHtml::activeLabel($model, 'username').'</p>';
            echo '<p>'.CHtml::activeTextField($model, 'username',array('class'=>'form-control')).'</p>';
            echo '<p>'.CHtml::error($model, 'username').'</p>';
            echo '<p>'.CHtml::submitButton(Yii::t('user','Δημιουργία'),array('class'=>'btn btn-primary')).'</p>';
            echo CHtml::endForm();

            ?>
            <div class="clearfix"></div>
        </div> 
    </div>
</div>