<?php
namespace frontend\controllers;

use common\models\Product;
use common\models\ProductAttr;
use common\models\Promotion;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;

use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends CommonController
{


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
     * @return mixed
     */
    public function actionIndex()
    {
        $data['bn_main'] = Promotion::find()->joinWith('adLoc')->where('ad_loc.code=1')->orderBy('created_at desc')->limit(2)->all();
        $data['bn_bottom'] = Promotion::find()->joinWith('adLoc')->where('ad_loc.code=11')->orderBy('created_at desc')->limit(2)->all();
        $data['bn_right'] = Promotion::find()->joinWith('adLoc')->where('ad_loc.code=12')->orderBy('created_at desc')->limit(2)->all();

        $data['hot_sale'] = Product::find()->joinWith('refPromotionProducts')->where('ref_promotion_product.promotion_id=7')->orderBy('created_at desc')->limit(8)->all();
        foreach ($data['hot_sale'] as $index => $hot_sale){
            $min_price = ProductAttr::find()->where(['product_id'=>$hot_sale['id']])->min('price');
            $max_price = ProductAttr::find()->where(['product_id'=>$hot_sale['id']])->max('price');
            $attr = [];
            if($min_price != $max_price){
                $attr['price'] = $min_price.'~'.$max_price;
            }else{
                $attr['price'] = $min_price;
            }
            $array = json_decode(ProductAttr::findOne(['product_id'=>$hot_sale['id']])->pictures);
            $attr['image'] = IMG_PRODUCT_SAVE_PATH.$array[0];
            $data['hot_sale_attr'][$index] = $attr;
        }

        $data['recommend'] = Product::find()->joinWith('refPromotionProducts')->where('ref_promotion_product.promotion_id=8')->orderBy('created_at desc')->limit(6)->all();
        foreach ($data['recommend'] as $index => $hot_sale){
            $min_price = ProductAttr::find()->where(['product_id'=>$hot_sale['id']])->min('price');
            $max_price = ProductAttr::find()->where(['product_id'=>$hot_sale['id']])->max('price');
            $attr = [];
            if($min_price != $max_price){
                $attr['price'] = $min_price.'~'.$max_price;
            }else{
                $attr['price'] = $min_price;
            }
            $array = json_decode(ProductAttr::findOne(['product_id'=>$hot_sale['id']])->pictures);
            $attr['image'] = IMG_PRODUCT_SAVE_PATH.$array[0];
            $data['recommend_attr'][$index] = $attr;
        }

//        Recommend
        return $this->render('index',[
            'data'=>$data,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
