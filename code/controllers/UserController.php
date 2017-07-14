<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * Class UserController
 * @package app\controllers
 *
 * Пользователи
 */
class UserController extends ActiveController
{

    public $modelClass = 'app\models\User';
}