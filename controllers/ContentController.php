<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 29.07.2018
 * Time: 18:28
 */

namespace app\controllers;


use yii\web\Controller;

class ContentController extends Controller
{
    public function actionWork()
    {
        return $this->render('workindex', ['events' => $events, 'date' => $date]);
    }

}