<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cursos".
 *
 * @property int $id_cur
 * @property string $referencia
 * @property string $descripcion
 */
class Cursos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cursos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['referencia', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['referencia'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cur' => 'Id Cur',
            'referencia' => 'Referencia',
            'descripcion' => 'Descripcion',
        ];
    }
}
