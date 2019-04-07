<?php

namespace frontend\controllers;

use Yii;
use common\models\Product;
use common\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;


/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update', 'delete','mine'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'mine'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        /*$searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);*/

        $query = Product::find();
        $countQuery = clone $query;

        $pages = new Pagination(['totalCount' => $countQuery->count()]);

        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        //return $this->render('ListView', ['dataProvider' => $dataProvider, 'pages' => $pages]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pages' => $pages,
        ]);
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionMine()
    {
        /*$searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('mine', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);*/

        $idUser = Yii::$app->user->identity->id;
        $query = Product::find();
        $query->select('idProduct, idUser, namaBarang, deskripsi, idKategori, harga, foto, status');
        $query->where("idUser =" . $idUser);

        $countQuery = clone $query;

        $pages = new Pagination(['totalCount' => $countQuery->count()]);

        $searchModel = new ProductSearch();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        $dataProvider->setSort([
            'attributes' => [
                'id',
                'priority' => [
                    'asc' => ['priority' => SORT_ASC],
                    'desc' => ['priority' => SORT_DESC],
                    'label' => 'Priority',
                    'default' => SORT_DESC
                ],
            ]
        ]);

        /*$query = Product::find()->where(['idUser' => $idUser]);
        $countQuery = clone $query;

        $pages = new Pagination(['totalCount' => $countQuery->count()]);

        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);*/
        
        //return $this->render('ListView', ['dataProvider' => $dataProvider, 'pages' => $pages]);
        return $this->render('mine', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pages' => $pages,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $warning = 'warning';
        $model = new Product();
        $model->scenario = 'create';

        if ($model->load(Yii::$app->request->post())) 
        {
            $model->idUser = Yii::$app->user->identity->id;
            $model->status = 'active';

            //harga 0 maka giveaway
            if(($model->harga == 0) && ($model->idKategori == 1))
            {
                $model->idKategori = 2;
                $warning = 'Anda menjual barang dengan harga 0. Sistem kami telah secara otomatis mengubahnya menjadi barang gratis (You sold a product without price. So, our system automatically categorized the product as giveaway)';
            }
            //harga tidak 0 maka jual
            else if(($model->harga != 0) && ($model->idKategori == 2))
            {
                $model->idKategori = 1;
                $warning = 'Anda memberikan harga pada barang gratis. Sistem kami telah secara otomatis mengubahnya menjadi barang untuk dijual (You just made a giveaway, however you put price on it. So, our system automatically categorized the product as "things to sell")';
            }

            $imageName = $model->idUser . '_' . date("Y-m-d-h-i-sa") . '_' . $model->namaBarang;

            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs('../../common/file/product/' . $imageName . '.' .$model->file->extension);

            $model->foto = $imageName . '.' . $model->file->extension;

            $model->save();

            Yii::$app->session->setFlash('success', 'Berhasil menambah data (Adding Product is Successful)');
            if($warning != 'warning')
            {
                Yii::$app->session->setFlash('warning', $warning);
                $warning = 'warning';
            }
            return $this->redirect(['view', 'id' => $model->idProduct]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        /*$idUser = Yii::$app->user->identity->id;
        $model = $this->findModelEdit($id, $idUser);

        if ($model->load(Yii::$app->request->post())) 
        {
            $model->idUser = Yii::$app->user->identity->id;

            if($model->idKategori == 2)
            {
                $model->harga = 0;
            }
            
            $imageName = $model->idUser . '_' . date("Y-m-d-h-i-sa") . '_' . $model->namaBarang;

            if($model->file = UploadedFile::getInstance($model, 'file'))
            {
                $model->file->saveAs('../../common/file/product/' . $imageName . '.' .$model->file->extension);
                $model->foto = $imageName . '.' . $model->file->extension;
            }

            if($model->validate() && $model->save())
            {
                Yii::$app->session->setFlash('success', 'Berhasil menyimpan data');
                return $this->redirect(['index']);
            }

            return $this->redirect(['view', 'id' => $model->idProduct]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);*/

        $warning = 'warning';

        $idUser = Yii::$app->user->identity->id;
        $model = $this->findModelEdit($id, $idUser);

        if ($model->load(Yii::$app->request->post())) 
        {
            $model->idUser = $idUser;

            //harga 0 maka giveaway
            if(($model->harga == 0) && ($model->idKategori == 1))
            {
                $model->idKategori = 2;
                $warning = 'Anda menjual barang dengan harga 0. Sistem kami telah secara otomatis mengubahnya menjadi barang gratis (You sold a product without price. So, our system automatically categorized the product as giveaway)';
            }
            //harga tidak 0 maka jual
            else if(($model->harga != 0) && ($model->idKategori == 2))
            {
                $model->idKategori = 1;
                $warning = 'Anda memberikan harga pada barang gratis. Sistem kami telah secara otomatis mengubahnya menjadi barang untuk dijual (You just set price to a freebies. So, our system automatically categorized the product as "things to sell")';
            }
            
            /*$imageName = $model->foto;
            if($model->file = UploadedFile::getInstance($model, 'file'))
            {
                $model->file->saveAs('../../common/file/product/' . $model->foto);
            }*/

            $imageName = $model->idUser . '_' . date("Y-m-d-h-i-sa") . '_' . $model->namaBarang;
			if($model->file = UploadedFile::getInstance($model, 'file'))
			{
				$model->file->saveAs('../../common/file/product/' . $imageName . '.' .$model->file->extension);
				$model->foto = $imageName . '.' . $model->file->extension;
			}

            if($model->validate() && $model->save())
            {
                Yii::$app->session->setFlash('success', 'Berhasil mengubah data (Updating Product is Successful)');
                if($warning != 'warning')
                {
                    Yii::$app->session->setFlash('warning', $warning);
                    $warning = 'warning';
                }
                return $this->redirect(['view', 'id' => $model->idProduct]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        //$this->findModel($id)->delete();
        $idUser = Yii::$app->user->identity->id;
        $model = $this->findModelEdit($id, $idUser)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelEdit($id, $idUser)
    {
        if (($model = Product::find()->where(['idUser' => $idUser, 'idProduct' => $id])->one()) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    
}
