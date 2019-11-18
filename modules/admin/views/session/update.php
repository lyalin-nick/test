<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CinemaSession */

$this->title = 'Изменение сеанса: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Сеансы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="cinema-session-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
