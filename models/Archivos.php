<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "archivos".
 *
 * @property int $id
 * @property resource $archivo_binario
 * @property string $archivo_nombre
 * @property string $archivo_peso
 * @property string $archivo_tipo
 * @property int $id_asignatura
 * @property int $id_usuario
 */
class Archivos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'archivos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['archivo_binario', 'id_asignatura', 'id_usuario'], 'required'],
            [['archivo_binario'], 'string'],
            [['id_asignatura', 'id_usuario'], 'integer'],
            [['archivo_nombre'], 'string', 'max' => 255],
            [['archivo_peso'], 'string', 'max' => 15],
            [['archivo_tipo'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'archivo_binario' => 'Archivo Binario',
            'archivo_nombre' => 'Archivo Nombre',
            'archivo_peso' => 'Archivo Peso',
            'archivo_tipo' => 'Archivo Tipo',
            'id_asignatura' => 'Id Asignatura',
            'id_usuario' => 'Id Usuario',
        ];
    }
}
