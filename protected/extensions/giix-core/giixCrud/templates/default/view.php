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
	GxHtml::valueEx(\$model),
);\n";
?>

$this->menu=array(
	array('label'=>Yii::t('app', 'List') , 'url'=>array('index'),'icon'=>'icon-tasks'),
	array('label'=>Yii::t('app', 'Create'), 'url'=>array('create'),'icon'=>'icon-plus-sign'),
	array('label'=>Yii::t('app', 'Update'), 'url'=>array('update', 'id' =>$model-><?php echo $this->tableSchema->primaryKey; ?>),'icon'=>'icon-edit'),
	array('label'=>Yii::t('app', 'Delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'Are you sure you want to delete this item?'),'icon'=>'icon-remove-sign'),
	array('label'=>Yii::t('app', 'Manage'), 'url'=>array('admin'),'icon'=>'icon-cogs'),
);

$this->widgetHeader = array(
    array('icon'=>'goIcon-sink','header'=>'<?php echo $this->pluralize($this->class2name($this->modelClass)); ?>'),
);
?>
<?php echo '<?php'; ?> $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
        'htmlOptions'=>array('class'=>'table table-bordered table-striped table-condensed'),
	'attributes' => array(
<?php
foreach ($this->tableSchema->columns as $column)
		echo $this->generateDetailViewAttribute($this->modelClass, $column) . ",\n";
?>
	),
)); ?>

<?php foreach (GxActiveRecord::model($this->modelClass)->relations() as $relationName => $relation): ?>
<?php if ($relation[0] == GxActiveRecord::HAS_MANY || $relation[0] == GxActiveRecord::MANY_MANY): ?>
<h2><?php echo '<?php'; ?> echo GxHtml::encode($model->getRelationLabel('<?php echo $relationName; ?>')); ?></h2>
<?php echo "<?php\n"; ?>
	echo GxHtml::openTag('ul');
	foreach($model-><?php echo $relationName; ?> as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('<?php echo strtolower($relation[1][0]) . substr($relation[1], 1); ?>/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
<?php echo '?>'; ?>
<?php endif; ?>
<?php endforeach; ?>