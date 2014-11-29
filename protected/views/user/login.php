<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - ' . Yii::t('user', 'Sign in');
$this->breadcrumbs=array(
	Yii::t('user', 'Sign in'),
);
?>

<h2 class="text-primary text-center"><?php echo Yii::t('user', 'Σύνδεση');?></h2>

<div class="form form-horizontal well" style="width:400px;margin:0 auto;text-align:center;">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

            <?php echo '<p>'.$form->labelEx($model,'email').'</p>'; ?>
            <?php echo '<p>'.$form->textField($model,'username',array('class'=>'login-form-field','placeholder'=>Yii::t('user','Διεύθυνση email'))).'</p>'; ?>
            <?php echo '<p>'.$form->error($model,'username').'</p>'; ?>



            <?php echo '<p>'.$form->labelEx($model,'password').'</p>'; ?>
            <?php echo '<p>'.$form->passwordField($model,'password',array('class'=>'login-form-field','placeholder'=>Yii::t('user','Ο κωδικός σας'))).'</p>'; ?>
            <?php echo '<p>'.$form->error($model,'password').'</p>'; ?>



            <?php echo '<p>'.$form->checkBox($model,'rememberMe',array(
                'class'=>'login_checkbox',
            )); ?>
            <?php echo $form->label($model,'rememberMe',array(
                'class'=>'checkbox','style'=>"display:inline-block;padding:0px;"
            )).'</p>'; ?>
            <?php echo $form->error($model,'rememberMe'); ?>

	<p><a href="<?php echo Yii::app()->createUrl('user/resetPassword');?>"><?php echo Yii::t('user','Ξεχάσατε τον κωδικό σας?'); ?></a></p>


        <div class="row buttons">
            <?php echo CHtml::submitButton(Yii::t('user', 'Σύνδεση'),array(
                'class'=>'btn btn-large btn-success',
            )); ?>
        </div>

    <?php $this->endWidget(); ?>
</div>