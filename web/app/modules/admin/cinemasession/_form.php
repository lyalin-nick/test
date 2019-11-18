<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CinemaSession */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cinema-session-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'film_id')->textInput() ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <?= $form->field($model, 'value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
