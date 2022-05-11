<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignatura".
 *
 * @property int $id_asignatura
 * @property string $nombre
 * @property string $profesor
 * @property int $dificultad
 * @property string $area
 * @property int $semestre
 * @property string $descripcion
 */
class Asignatura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asignatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_asignatura', 'nombre', 'profesor', 'dificultad', 'area', 'semestre', 'descripcion'], 'required'],
            [['id_asignatura', 'dificultad', 'semestre'], 'integer'],
            [['nombre', 'area'], 'string', 'max' => 200],
            [['profesor'], 'string', 'max' => 400],
            [['descripcion'], 'string', 'max' => 500],
            [['id_asignatura'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_asignatura' => 'Id Asignatura',
            'nombre' => 'Nombre',
            'profesor' => 'Profesor',
            'dificultad' => 'Dificultad',
            'area' => 'Area',
            'semestre' => 'Semestre',
            'descripcion' => 'Descripcion',
        ];
    }
}
