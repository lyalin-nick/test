<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Film */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Фильмы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="film-view">

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
            'title',
            [
                'label' => 'Постер фильма',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Yii::getAlias('@web').''.$data->image_ext,[
                        'alt'=>'Постер фильма',
                        'style' => 'width:300px;'
                    ]);
                },
            ],
            'preview:ntext',
            'time',
            'age_restrict',
        ],
    ]) ?>

</div>
