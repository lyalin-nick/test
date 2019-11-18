<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CinemaSession */

$this->title = "Изменить сеанс: ".$model->getFilmTitle(). "($model->date $model->time)";
$this->params['breadcrumbs'][] = ['label' => 'Сеанс', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->getFilmTitle(). "($model->date $model->time)", 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="cinema-session-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'film_items' => $film_items,
    ]) ?>

</div>
