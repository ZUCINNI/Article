<?php

namespace frontend\controllers;

use common\models\Article;
use yii\web\Controller;
use frontend\models\CommentForm;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

   public function actionArticle(){
       $model = Article::find()->select('id, title, content, date')->all();
       return $this->render('article', ['articles'=>$model]);
   }

    public function actionItem($id)
    {
        $model = Article::findOne(['id' => $id]);
        $comments = $model->comments;   $commentForm = new CommentForm();

        return $this->render('item', ['article'=>$model]);
    }

}
