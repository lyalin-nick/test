<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Film */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="film-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php if(isset($model->image_ext) ) echo "<img src=".$model->image_ext." style=\"width:300px;\">"?>

    <?= $form->field($model, 'image_ext')->fileInput() ?>

    <?= $form->field($model, 'preview')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'time')->input('time') ?>

    <?= $form->field($model, 'age_restrict')->dropDownList([
            '0+'=>'0+',
            '6+'=>'6+',
            '12+'=>'12+',
            '16+'=>'16+',
            '18+'=>'18+',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
