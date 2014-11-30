<?php
/* @var $this InstitutionController */
/* @var $model Institution */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GID'); ?>
		<?php echo $form->textField($model,'GID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMEGRK'); ?>
		<?php echo $form->textField($model,'NAMEGRK',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADDRESS'); ?>
		<?php echo $form->textField($model,'ADDRESS',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PHONE'); ?>
		<?php echo $form->textField($model,'PHONE',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIMOS'); ?>
		<?php echo $form->textField($model,'DIMOS',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NEWCAT'); ?>
		<?php echo $form->textField($model,'NEWCAT',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NEWSUBCAT'); ?>
		<?php echo $form->textField($model,'NEWSUBCAT',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dbpedia_url'); ?>
		<?php echo $form->textField($model,'dbpedia_url',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abstract'); ?>
		<?php echo $form->textArea($model,'abstract',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail'); ?>
		<?php echo $form->textField($model,'thumbnail',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WEBSITE'); ?>
		<?php echo $form->textField($model,'WEBSITE',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wikipedia'); ?>
		<?php echo $form->textField($model,'wikipedia',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POINT_X'); ?>
		<?php echo $form->textField($model,'POINT_X',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POINT_Y'); ?>
		<?php echo $form->textField($model,'POINT_Y',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'published'); ?>
		<?php echo $form->textField($model,'published'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->