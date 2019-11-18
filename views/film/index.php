<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Test Yii Application';
?>
<div class="site-index">


    <div class="body-content">

        <div class="row">

                <?php foreach ($cinemasession as $ses):?>
                    <div class="well">
                        <img src="<?= $ses->getFilmImage() ?>" alt="" style="width: 150px">
                        <h2><a href=<?= Url::toRoute(['film/view', 'id' => $ses->film_id ]); ?>><?= $ses->getFilmTitle()?></a></h2>
                        <p>Дата показа: <?= $ses->date ?></p>
                        <p>Время показа: <?= $ses->time ?></p>
                        <p><b>Цена билета: <?= $ses->value ?></b> </p>
                    </div>
                <?php endforeach ?>

        </div>

    </div>
</div>
