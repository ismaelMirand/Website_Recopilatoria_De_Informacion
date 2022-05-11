<?php

namespace app\controllers;

use app\models\Asignatura;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AsignaturaController implements the CRUD actions for Asignatura model.
 */
class AsignaturaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Asignatura models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Asignatura::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id_asignatura' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Asignatura model.
     * @param int $id_asignatura Id Asignatura
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_asignatura)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_asignatura),
        ]);
    }

    /**
     * Creates a new Asignatura model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Asignatura();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_asignatura' => $model->id_asignatura]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Asignatura model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_asignatura Id Asignatura
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_asignatura)
    {
        $model = $this->findModel($id_asignatura);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_asignatura' => $model->id_asignatura]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Asignatura model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_asignatura Id Asignatura
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_asignatura)
    {
        $this->findModel($id_asignatura)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Asignatura model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_asignatura Id Asignatura
     * @return Asignatura the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_asignatura)
    {
        if (($model = Asignatura::findOne(['id_asignatura' => $id_asignatura])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
