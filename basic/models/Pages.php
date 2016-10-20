<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Pages".
 *
 * @property string $url
 * @property string $path
 * @property string $content
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'path'], 'required'],
            [['content'], 'string'],
            [['url', 'path'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'url' => 'Url',
            'path' => 'Path',
            'content' => 'Content',
        ];
    }
}
