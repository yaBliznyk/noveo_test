<?php

namespace app\components\validators;

use app\models\Group;
use yii\validators\Validator;

/**
 * Class GroupRelationValidator
 * @package app\components\validators
 *
 * Валидация связи с группой
 */
class GroupRelationValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        if (!Group::findOne($model->$attribute)) {
            $model->addError('groupId', 'Такой группы не существует');
        }
    }
}