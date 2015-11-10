<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n
\$this->breadcrumbs = array(
	{$this->modelClass}::label(2),
	Yii::t('app', 'Index'),
);\n";
?>

$this->menu=array(
	array('label'=>Yii::t('app', 'Create'), 'url' => array('create'),'icon'=>'icon-plus-sign'),
	array('label'=>Yii::t('app', 'Manage'), 'url' => array('admin'),'icon'=>'icon-cogs'),
);

$this->widgetHeader = array(
    array('icon'=>'goIcon-sink','header'=>'<?php echo $this->pluralize($this->class2name($this->modelClass)); ?>'),
);
?>

<?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); <?php '?>'; ?>