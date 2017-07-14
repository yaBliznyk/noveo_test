<?php

namespace app\models;

use app\components\validators\GroupRelationValidator;
use yii\db\ActiveRecord;

/**
 * Class User
 * @package app\models
 *
 * @property int $id
 * @property string $email
 * @property string $firstName
 * @property string $lastName
 * @property int $groupId
 * @property boolean $state
 * @property string $creationDate
 */
class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'firstName', 'lastName' , 'state', 'groupId'], 'required'],
            [['email', 'firstName', 'lastName'], 'string', 'length' => [3, 255]],
            ['state', 'boolean'],
            ['email', 'email'],
            ['email', 'unique'],
            ['groupId', 'integer'],
            ['groupId', GroupRelationValidator::className()]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'groupId' => 'Группа',
            'email' => 'email',
            'firstName' => 'Имя',
            'lastName' => 'Фамилия',
            'state' => 'Статус',
            'creationDate' => 'Дата создания'
        ];
    }
}
