<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CinemaSession */

$this->title = $model->getFilmtitle().' ('.$model->date.' '.$model->time.')';
$this->params['breadcrumbs'][] = ['label' => 'Сеанс', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cinema-session-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            [
                'attribute'=>'film_id',
                'label'=>'Фильм',
                'value'=>function($data){
                    return $data->getFilmTitle();
                }
            ],
            [
                'attribute' => 'date',
                'format' =>  ['date', 'd.M.Y'],
                'options' => ['width' => '1']
            ],
            [
                'attribute' => 'time',
                'format' =>  ['time', 'H:m'],
                'options' => ['width' => '1']
            ],
            'value',
        ],
    ]) ?>

</div>
