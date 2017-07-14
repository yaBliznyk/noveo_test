<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Group
 * @package app\models
 *
 * @property int $id
 * @property string $name
 */
class Group extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'required'],
            ['name', 'unique'],
            ['name', 'string', 'length' => [1, 255]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }
}