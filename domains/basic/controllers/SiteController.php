<?php

namespace app\controllers;

use app\models\Companies;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Reviews;
use app\models\Create;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $companies = Companies::find()->all();
        return $this->render('index', compact('companies'));
    }

    public function actionCompany($id)
    {
        $companies = Companies::find()->all();
        $company = Companies::findOne($id);
        return $this->render('company', compact('companies', 'company'));

//        return $this->render('company', compact('companies'));
    }

    public function actionReview($companyId)
    {
        $company = Companies::findOne($companyId);
        $query = Reviews::find()->where(['company_id' => $companyId, 'verification' => 1]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4]);
        $reviews = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('review', compact('company', 'reviews', 'pages'));
    }

    public function actionFull($id)
    {
        $review = Reviews::findOne($id);

        if (!$review) {
            throw new NotFoundHttpException('Отзыв не найден.');
        }

        return $this->render('full', compact( 'review'));
    }


    public function actionCreate()
    {
        $model = new Reviews();
        $companies = Companies::getCompanyList();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->photo = UploadedFile::getInstance($model, 'photo');
            $model->photo->saveAs("img/photos/{$model->photo->baseName}.{$model->photo->getExtension()}");
            $model->save(false);
            Yii::$app->session->setFlash('success', 'Ваш отзыв скоро будет опубликован!');
            return $this->refresh();
        } else {
            return $this->render('create', compact('model', 'companies')
            );
        }
    }



    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }





}
