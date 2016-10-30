<?php

namespace frontend\controllers;

use frontend\models\UserEducations;
use frontend\models\UserExperiences;
use frontend\models\UserSkills;
use Yii;
use frontend\models\Userprofile;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * UserprofileController implements the CRUD actions for Userprofile model.
 */
class UserprofileController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index','create','update','view'],
                'rules' => [
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                            // everything else is denied
                ],
            ],            
        ];
    }

    /**
     * Lists all Userprofile models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->redirect(['site/index']);
    }

    /**
     * Displays a single Userprofile model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $user_exp = UserExperiences::findOne(['user_id' => Yii::$app->user->id]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'user_exp' => $user_exp,
        ]);
    }

    /**
     * Creates a new Userprofile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $check_user = Userprofile::findOne(['user_id' => Yii::$app->user->id]);
        if ($check_user == true) {
           return $this->redirect(['view', 'id' => $check_user->id]);
        }

        $model = new Userprofile();
        $user_exp = new UserExperiences();
        $user_edu = new UserEducations();
        $user_skill = new UserSkills();


        if ($model->load(Yii::$app->request->post()) && 
            $user_exp->load(Yii::$app->request->post()) &&
            $user_edu->load(Yii::$app->request->post()) &&
            $user_skill->load(Yii::$app->request->post())
            ) {
            $isValid = $model->validate();
            $isValid = $user_exp->validate() &&  $isValid;
            $isValid = $user_edu->validate() &&  $isValid;
            $isValid = $user_skill->validate() &&  $isValid;
            
            if ($isValid) {
                $model->save();
                $user_exp->save();
                $user_edu->save();
                $user_skill->save();
                return $this->redirect(['view', 'id' => $id]);
            }
        } 
        return $this->render('create', [
            'model' => $model,
            'user_exp' => $user_exp,
            'user_edu' => $user_edu,
            'user_skill' => $user_skill,
        ]);    
        
    }

    /**
     * Updates an existing Userprofile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $user_exp = UserExperiences::findOne(['user_id' => Yii::$app->user->id]);
        $user_edu = UserEducations::findOne(['user_id' => Yii::$app->user->id]);
        $user_skill = UserSkills::findOne(['user_id' => Yii::$app->user->id]);

        if ($user_exp === null || $model === null) {
           return $this->redirect(['create']);
        }


        if ($model->load(Yii::$app->request->post()) && 
            $user_exp->load(Yii::$app->request->post()) &&
            $user_edu->load(Yii::$app->request->post()) &&
            $user_skill->load(Yii::$app->request->post())
            ) {
            $isValid = $model->validate();
            $isValid = $user_exp->validate() &&  $isValid;
            $isValid = $user_edu->validate() &&  $isValid;
            $isValid = $user_skill->validate() &&  $isValid;
            if ($isValid) {
                $model->save();
                $user_exp->save();
                $user_edu->save();
                $user_skill->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'user_exp' => $user_exp,
                'user_edu' => $user_edu,
                'user_skill' => $user_skill,
            ]);
        }
    }

    /**
     * Deletes an existing Userprofile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        // $this->findModel($id)->delete();

        // return $this->redirect(['index']);
        return $this->redirect(['site/index']);
    }

    /**
     * Finds the Userprofile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Userprofile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Userprofile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
