<?php

namespace app\controllers;

use yii\rest\Controller;

/**
 * Class ErrorController
 * @package app\controllers
 *
 * Обработка ошибок
 */
class ErrorController extends Controller
{
    public function actions()
    {
        return [
            'error' => ['class' => 'yii\web\ErrorAction'],
        ];
    }
}