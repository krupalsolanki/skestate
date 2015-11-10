<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n
\$this->breadcrumbs = array(
	\$model->label(2) => array('index'),
	GxHtml::valueEx(\$model) => array('view', 'id' => GxActiveRecord::extractPkValue(\$model, true)),
	Yii::t('app', 'Update'),
);\n";
?>

$this->menu=array(
	array('label' => Yii::t('app', 'List') , 'url'=>array('index'),'icon'=>'icon-tasks'),
	array('label' => Yii::t('app', 'Create'), 'url'=>array('create'),'icon'=>'icon-plus-sign'),
	array('label'=> Yii::t('app', 'View'), 'url'=>array('view', 'id'=> GxActiveRecord::extractPkValue($model, true)), 'icon'=>'icon-eye-open'),
	array('label' => Yii::t('app', 'Manage'), 'url'=>array('admin'),'icon'=>'icon-cogs'),
);

$this->widgetHeader = array(
    array('icon'=>'goIcon-sink','header'=>'<?php echo $this->class2name($this->modelClass); ?>'),
);
?>

<?php echo "<?php\n"; ?>
$this->renderPartial('_form', array(
		'model' => $model));
?>