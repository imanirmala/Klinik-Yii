<?php

namespace app\controllers;

use app\models\Tpasien;
use app\models\TpasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TpasiensController implements the CRUD actions for Tpasien model.
 */
class TpasiensController extends Controller
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
     * Lists all Tpasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TpasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tpasien model.
     * @param int $id_pasien Id Pasien
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pasien)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pasien),
        ]);
    }

    /**
     * Creates a new Tpasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tpasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pasien' => $model->id_pasien]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tpasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pasien Id Pasien
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pasien)
    {
        $model = $this->findModel($id_pasien);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pasien' => $model->id_pasien]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tpasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pasien Id Pasien
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pasien)
    {
        $this->findModel($id_pasien)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tpasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pasien Id Pasien
     * @return Tpasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pasien)
    {
        if (($model = Tpasien::findOne(['id_pasien' => $id_pasien])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
