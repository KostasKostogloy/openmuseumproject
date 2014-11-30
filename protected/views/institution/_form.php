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

            <p><?php echo $form->labelEx($model,'GID'); ?></p>
            <p><?php echo $form->textField($model,'GID', array('class'=>'form-control')); ?></p>
            <p><?php echo $form->error($model,'GID'); ?></p>

		<p><?php echo $form->labelEx($model,'NAMEGRK'); ?></p>
            <p><?php echo $form->textField($model,'NAMEGRK',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'NAMEGRK'); ?></p>

		<p><?php echo $form->labelEx($model,'ADDRESS'); ?></p>
		<p><?php echo $form->textField($model,'ADDRESS',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'ADDRESS'); ?></p>

		<p><?php echo $form->labelEx($model,'PHONE'); ?></p>
		<p><?php echo $form->textField($model,'PHONE',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'PHONE'); ?></p>

		<p><?php echo $form->labelEx($model,'DIMOS'); ?></p>
		<p><?php echo $form->textField($model,'DIMOS',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'DIMOS'); ?></p>

		<p><?php echo $form->labelEx($model,'NEWCAT'); ?></p>
		<p><?php echo $form->textField($model,'NEWCAT',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'NEWCAT'); ?></p>

		<p><?php echo $form->labelEx($model,'NEWSUBCAT'); ?></p>
		<p><?php echo $form->textField($model,'NEWSUBCAT',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'NEWSUBCAT'); ?></p>

		<p><?php echo $form->labelEx($model,'dbpedia_url'); ?></p>
		<p><?php echo $form->textField($model,'dbpedia_url',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'dbpedia_url'); ?></p>

		<p><?php echo $form->labelEx($model,'abstract'); ?></p>
		<p><?php echo $form->textArea($model,'abstract',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'abstract'); ?></p>

		<p><?php echo $form->labelEx($model,'thumbnail'); ?></p>
		<p><?php echo $form->textField($model,'thumbnail',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'thumbnail'); ?></p>

		<p><?php echo $form->labelEx($model,'WEBSITE'); ?></p>
		<p><?php echo $form->textField($model,'WEBSITE',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'WEBSITE'); ?></p>

		<p><?php echo $form->labelEx($model,'wikipedia'); ?></p>
		<p><?php echo $form->textField($model,'wikipedia',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'wikipedia'); ?></p>

		<p><?php echo $form->labelEx($model,'POINT_X'); ?></p>
		<p><?php echo $form->textField($model,'POINT_X',array('size'=>32,'maxlength'=>32,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'POINT_X'); ?></p>

		<p><?php echo $form->labelEx($model,'POINT_Y'); ?></p>
		<p><?php echo $form->textField($model,'POINT_Y',array('size'=>32,'maxlength'=>32,'class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'POINT_Y'); ?></p>

		<p><?php echo $form->labelEx($model,'published'); ?></p>
		<p><?php echo $form->textField($model,'published', array('class'=>'form-control')); ?></p>
		<p><?php echo $form->error($model,'published'); ?></p>

		<p><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->