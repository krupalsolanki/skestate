<?php

class PropertyController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $property_type;
    public $status;
    public $location;
    public $possession;
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'gallery', 'deleteImage'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $property = $this->loadModel($id);
        Yii::app()->clientScript->registerMetaTag($this->createAbsoluteUrl('/property/view', array('id' => $id)), 'og:url');
        Yii::app()->clientScript->registerMetaTag('website', 'og:type');
        Yii::app()->clientScript->registerMetaTag(Yii::app()->name, 'og:title');
        Yii::app()->clientScript->registerMetaTag($property->description, 'og:description');
        Yii::app()->clientScript->registerMetaTag($this->createAbsoluteUrl($property->image_path), 'og:description');

        $this->render('view', array(
            'model' => $property,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Property;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Property'])) {
            $model->attributes = $_POST['Property'];
            $error = '';
            if ($model->validate()) {
                $db = Yii::app()->db->beginTransaction();
                try {
                    $photos = CUploadedFile::getInstancesByName('Property[images]');

                    if (!$model->save())
                        throw new CException(CHtml::errorSummary($model));

                    if (!mkdir(Yii::getPathOfAlias('webroot') . '/images/property/' . $model->id, 0777, true)) {
                        die('Failed to create folders...');
                    } else {
                        if (isset($photos) && count($photos) > 0) {

                            // go through each uploaded image
                            foreach ($photos as $image => $pic) {
                                echo $pic->name . '<br />';
                                if ($pic->saveAs(Yii::getPathOfAlias('webroot') . '/images/property/' . $model->id . '/' . $pic->name)) {
                                    
                                } else {
                                    echo 'Cannot upload!';
                                }
                            }
                        }
                    }
                    // proceed if the images have been set
                    $db->commit();
                } catch (Exception $exc) {
                    echo $exc->getTraceAsString();
                    $error = $exc->getMessage();
                    $db->rollback();
                    die(var_dump($error));
                }
                $this->redirect(array('gallery', 'id' => $model->id));
            }
        }
        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Property'])) {
            $model->attributes = $_POST['Property'];
            if ($model->save()) {
                $photos = CUploadedFile::getInstancesByName('Property[images]');
                if (isset($photos) && count($photos) > 0) {

                    // go through each uploaded image
                    foreach ($photos as $image => $pic) {
                        echo $pic->name . '<br />';
                        if ($pic->saveAs(Yii::getPathOfAlias('webroot') . '/images/property/' . $model->id . '/' . $pic->name)) {
                            
                        } else {
                            echo 'Cannot upload!';
                        }
                    }
                }
            } else {
                die(var_dump($model->errors));
            }
            $this->redirect(array('gallery', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $this->layout = "//layouts/theme_page";
        $range = isset($_GET['range']) ? $_GET['range'] : '';
        $this->property_type = isset($_GET['Property']['type_of_property']) ? $_GET['Property']['type_of_property'] : '';
        $this->status = isset($_GET['Property']['type']) ? $_GET['Property']['type'] : '';
        $this->location = isset($_GET['Property']['location']) ? $_GET['Property']['location'] : '';
        $this->possession = isset($_GET['Property']['possession']) ? $_GET['Property']['possession'] : '';
        $models = new Property('search');
        $models->unsetAttributes();  // clear any default values
        if (isset($_GET['Property'])) {
            $models->attributes = $_GET['Property'];
        }
        $data_provider = $models->search();
        $criteria = $data_provider->getCriteria();
        $count = Property::model()->count($criteria);
        $pages = $data_provider->getPagination();
        $pages->setItemCount($count);
        $pages->applyLimit($criteria);
        $Properties = Property::model()->findAll($criteria);
        $this->render('index', array(
            'models' => $Properties,
            'pages' => $pages,
            'range' => $range,
            'property_type' => $this->property_type,
            'status' => $this->status,
            'location' => $this->location,
            'possession' => $this->possession
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Property('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Property']))
            $model->attributes = $_GET['Property'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Property the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $this->layout = "//layouts/theme_page";
        $model = Property::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Property $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'property-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGallery($id) {
        $property = Property::model()->findByPk($id);
        $this->render('gallery', array('model' => $property));
    }

    public function actionDeleteImage() {
        $folder = Yii::getPathOfAlias('webroot') . '/images/property/'; // folder for uploaded files
        $imageName = $_POST['image'];
        $target = $folder . $imageName;
        if (file_exists($target)) {
            unlink($target); // Delete now
        }
    }

}
