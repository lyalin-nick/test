<?php

namespace app\controllers;

use app\models\Film;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\CinemaSession;

class FilmController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $cinemasession = CinemaSession::find()->orderBy('date, time')->all();
        $images=Film::find()->all();
        return $this->render('index', [
            'cinemasession' => $cinemasession,
        ]);
    }

    public function actionView($id)
    {
        $model = Film::findOne($id);
        return $this->render('view', [
            'model' => $model,
        ]);
    }


}
