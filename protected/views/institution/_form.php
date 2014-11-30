<?php
/* @var $this InstitutionController */
/* @var $model Institution */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'institution-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'GID'); ?>
		<?php echo $form->textField($model,'GID'); ?>
		<?php echo $form->error($model,'GID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMEGRK'); ?>
		<?php echo $form->textField($model,'NAMEGRK',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'NAMEGRK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESS'); ?>
		<?php echo $form->textField($model,'ADDRESS',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'ADDRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PHONE'); ?>
		<?php echo $form->textField($model,'PHONE',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'PHONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIMOS'); ?>
		<?php echo $form->textField($model,'DIMOS',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'DIMOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NEWCAT'); ?>
		<?php echo $form->textField($model,'NEWCAT',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'NEWCAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NEWSUBCAT'); ?>
		<?php echo $form->textField($model,'NEWSUBCAT',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'NEWSUBCAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dbpedia_url'); ?>
		<?php echo $form->textField($model,'dbpedia_url',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'dbpedia_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abstract'); ?>
		<?php echo $form->textArea($model,'abstract',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'abstract'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail'); ?>
		<?php echo $form->textField($model,'thumbnail',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'thumbnail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wikipedia'); ?>
		<?php echo $form->textField($model,'wikipedia',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'wikipedia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitude'); ?>
		<?php echo $form->textField($model,'latitude',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude'); ?>
		<?php echo $form->textField($model,'longitude',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'longitude'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->