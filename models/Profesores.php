<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesores".
 *
 * @property string $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $direccion
 * @property string $nif
 * @property string $nacimiento
 * @property string $alta
 * @property string $baja
 * @property string $movil
 * @property string $mail
 * @property string $observaciones
 * @property string $created_at
 * @property string $updated_at
 */
class Profesores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profesores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'direccion', 'nif', 'nacimiento', 'alta', 'baja', 'movil', 'mail', 'observaciones'], 'required'],
            [['nacimiento', 'alta', 'baja', 'created_at', 'updated_at'], 'safe'],
            [['observaciones'], 'string'],
            [['nombre'], 'string', 'max' => 50],
            [['apellidos', 'mail'], 'string', 'max' => 100],
            [['direccion'], 'string', 'max' => 200],
            [['nif'], 'string', 'max' => 9],
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
            'nif' => 'Nif',
            'nacimiento' => 'Nacimiento',
            'alta' => 'Alta',
            'baja' => 'Baja',
            'movil' => 'Movil',
            'mail' => 'Mail',
            'observaciones' => 'Observaciones',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
