<?php

class SubscribeListController extends Controller {

    public function actionSubscribe() {
        $this->layout = '//layouts/theme';
        $model = new SubscribeList;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SubscribeList'])) {
            $model->attributes = $_POST['SubscribeList'];
            if ($model->save())
                $this->render('subscribe', array('email_id' => $model->email_id));
        }
        $this->render('subscribe');
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
