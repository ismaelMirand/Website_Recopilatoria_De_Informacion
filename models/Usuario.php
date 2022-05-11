<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $rut
 * @property string $nombres
 * @property string $apellidos
 * @property string $email
 * @property string $password
 * @property int $admin
 * @property int $habilitado
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rut', 'nombres', 'apellidos', 'email', 'password', 'admin'], 'required'],
            [['rut', 'admin', 'habilitado'], 'integer'],
            [['nombres', 'apellidos'], 'string', 'max' => 200],
            [['email', 'password'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rut' => 'Rut',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'email' => 'Email',
            'password' => 'Password',
            'admin' => 'Admin',
            'habilitado' => 'Habilitado',
        ];
    }
}
