<?php

namespace app\controllers;

use app\models\Regsitrasi;
use app\models\RegsitrasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegsitrasiController implements the CRUD actions for Regsitrasi model.
 */
class RegsitrasiController extends Controller
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
     * Lists all Regsitrasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RegsitrasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Regsitrasi model.
     * @param int $id_registrasi Id Registrasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_registrasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_registrasi),
        ]);
    }

    /**
     * Creates a new Regsitrasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Regsitrasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_registrasi' => $model->id_registrasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Regsitrasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_registrasi Id Registrasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_registrasi)
    {
        $model = $this->findModel($id_registrasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_registrasi' => $model->id_registrasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Regsitrasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_registrasi Id Registrasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_registrasi)
    {
        $this->findModel($id_registrasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Regsitrasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_registrasi Id Registrasi
     * @return Regsitrasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_registrasi)
    {
        if (($model = Regsitrasi::findOne(['id_registrasi' => $id_registrasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
