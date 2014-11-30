<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('user', 'Sign in');
$this->breadcrumbs = array(
    Yii::t('user', 'Sign in'),
);

?>

<h2 class="text-primary text-center"><?php echo Yii::t('user', 'Σύνδεση'); ?></h2>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-3 hidden-xs"></div>
    <div class="form form-horizontal well col-lg-4 col-md-4 col-sm-6 text-center" >
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>

        <?php echo '<p>' . $form->labelEx($model, 'email') . '</p>'; ?>
        <?php echo '<p>' . $form->textField($model, 'username', array('class' => 'login-form-field form-control', 'placeholder' => Yii::t('user', 'Διεύθυνση email'))) . '</p>'; ?>
        <?php echo '<p>' . $form->error($model, 'username', array('class' => 'text-danger')) . '</p>'; ?>



        <?php echo '<p>' . $form->labelEx($model, 'password') . '</p>'; ?>
        <?php echo '<p>' . $form->passwordField($model, 'password', array('class' => 'login-form-field form-control', 'placeholder' => Yii::t('user', 'Ο κωδικός σας'))) . '</p>'; ?>
        <?php echo '<p>' . $form->error($model, 'password', array('class' => 'text-danger')) . '</p>'; ?>


        <div class="row buttons">
            <?php
            echo CHtml::submitButton(Yii::t('user', 'Σύνδεση'), array(
                'class' => 'btn btn-large btn-success',
            ));
            ?>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-3 hidden-xs"></div>
</div>
<?php $this->endWidget(); ?>