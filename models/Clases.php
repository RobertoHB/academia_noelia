<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clases".
 *
 * @property string $id
 * @property string $curso
 * @property string $materia
 * @property string $descripcion
 * @property int $dias
 * @property string $ndias
 * @property int $precio
 * @property string $created_at
 * @property string $updated_at
 */
class Clases extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clases';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['curso', 'materia', 'descripcion', 'dias', 'ndias', 'precio'], 'required'],
            [['dias', 'precio'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['curso', 'materia'], 'string', 'max' => 100],
            [['descripcion'], 'string', 'max' => 500],
            [['ndias'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'curso' => 'Curso',
            'materia' => 'Materia',
            'descripcion' => 'Descripcion',
            'dias' => 'Dias',
            'ndias' => 'Ndias',
            'precio' => 'Precio',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
