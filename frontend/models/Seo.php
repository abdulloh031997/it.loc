<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "seo".
 *
 * @property int $id
 * @property string|null $type
 * @property int|null $count
 * @property string|null $created_at
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count'], 'default', 'value' => null],
            [['count'], 'integer'],
            [['created_at'], 'safe'],
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'count' => 'Count',
            'created_at' => 'Created At',
        ];
    }
}
