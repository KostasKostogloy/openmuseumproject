<?php
/* @var $this SiteController */
/* @var $model User */
?>

<h2 class="text-primary text-center"><?=Yii::t('user','Νέος Λογαριασμός')?></h2>

<div class="form form-horizontal well" style="width:400px;margin:0 auto;text-align:center;">
	<?php

	echo CHtml::beginForm('', 'post');
	echo '<p>'.CHtml::activeLabel($model, 'email').'</p>';
	echo '<p>'.CHtml::activeTextField($model, 'email').'</p>';
	echo '<p>'.CHtml::error($model, 'email').'</p>';
	echo '<p>'.CHtml::activeLabel($model, 'password').'</p>';
	echo '<p>'.CHtml::activePasswordField($model, 'password',array('autocomplete'=>'off')).'</p>';
	echo '<p>'.CHtml::error($model, 'password').'</p>';
	echo '<p>'.CHtml::activeLabel($model, 'username').'</p>';
	echo '<p>'.CHtml::activeTextField($model, 'username').'</p>';
	echo '<p>'.CHtml::error($model, 'username').'</p>';
	echo '<p>'.CHtml::submitButton(Yii::t('user','Δημιουργία'),array('class'=>'btn btn-primary')).'</p>';
	echo CHtml::endForm();

	?>
	<div class="clearfix"></div>
</div>