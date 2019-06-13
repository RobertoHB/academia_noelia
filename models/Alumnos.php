<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property string $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $direccion
 * @property string $NIF
 * @property string $nacimiento
 * @property string $movil
 * @property string $mail
 * @property string $observaciones
 * @property string $created_at
 * @property string $updated_at
 * @property string $alta
 * @property string $baja
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'direccion', 'NIF', 'nacimiento', 'movil', 'mail', 'observaciones', 'alta'], 'required'],
            [['nacimiento', 'created_at', 'updated_at', 'alta', 'baja'], 'safe'],
            [['observaciones'], 'string'],
            [['nombre'], 'string', 'max' => 50],
            [['apellidos', 'mail'], 'string', 'max' => 100],
            [['direccion'], 'string', 'max' => 200],
            [['NIF'], 'string', 'max' => 9],
            [['movil'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'direccion' => 'Direccion',
            'NIF' => 'Nif',
            'nacimiento' => 'Nacimiento',
            'movil' => 'Movil',
            'mail' => 'Mail',
            'observaciones' => 'Observaciones',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'alta' => 'Alta',
            'baja' => 'Baja',
        ];
    }
}
