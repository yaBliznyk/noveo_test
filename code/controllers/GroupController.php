<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * Class GroupController
 * @package app\controllers
 *
 * Группы пользователей
 */
class GroupController extends ActiveController
{
    public $modelClass = 'app\models\Group';
}