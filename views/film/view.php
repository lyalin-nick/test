<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Film */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Сеансы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="film-view">

    <h1><?= Html::encode($this->title) ?></h1>


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
