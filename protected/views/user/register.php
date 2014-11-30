<?php
/* @var $this UserController */
/* @var $model LoginForm */
?>

<div class="row">
    <div class="col-md-3">
        <?php $this->renderPartial('_sidebar');?>
    </div>
    <div class="col-md-9">
        <h3 class="text-primary" style="margin-top:0;">Δημιουργία νέου χρήστη</h3>
        <hr />
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