<?php

namespace app\controllers;

use app\models\Post;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->redirect(['dashboard/1']);

    }
    public function actionDashboard($page)
    {
        return $this->render('index');
    }
    public function actionCatalog($page)
    {
        return $this->render('catalog');
    }
    public function actionTheme($page)
    {
        return $this->render('theme');
    }
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['dashboard/1']);
    }

    public function actionRegister()
    {
        $login = Yii::$app->request->post()["login"];
        $email = Yii::$app->request->post()["email"];
        $password = Yii::$app->request->post()["password"];
        $exist = User::find()->where(['email' => $email])->exists();
        if (!$exist) {
            $_password = \Yii::$app->security->generatePasswordHash($password);
            $user = new User();
            $user->name = $login;
            $user->email = $email;
            $user->password = $_password;
            $user->save();
        }

        $user = User::findOne(['email' => $email]);
        $check = Yii::$app->security->validatePassword($password, $user->password);
        if (!$check) {
            return $this->redirect(['login']);
        }
        Yii::$app->user->login($user, 1337 * 100);
        return $this->redirect(['dashboard/1']);

    }
}