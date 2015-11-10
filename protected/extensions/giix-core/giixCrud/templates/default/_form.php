<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<div class="form">

    <?php $ajax = ($this->enable_ajax_validation) ? 'true' : 'false'; ?>

    <?php echo '<?php '; ?>
    $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
    'id' => '<?php echo $this->class2id($this->modelClass); ?>-form',
    'enableAjaxValidation' => <?php echo $ajax; ?>,
    'type'=>'vertical'
    ));
    <?php echo '?>'; ?>
    <?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>
    <?php $count = 0; ?>
    <?php foreach ($this->tableSchema->columns as $column): ?>
        <?php if (!$column->autoIncrement): ?>
            <?php echo ++$count % 2 != 0 ? "<div class=\"row\">" : "" ?><!-- row -->
            <div class="span3 <?php echo $count % 2 == 0 ? "offset1" : "" ?>" >
                <?php echo "<?php echo " . $this->generateActiveLabel($this->modelClass, $column) . "; ?>\n"; ?>
                <?php echo "<?php " . $this->generateActiveField($this->modelClass, $column) . "; ?>\n"; ?>
                <?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
            </div>
            <?php echo $count % 2 == 0 ? "</div>" : "" ?><!-- row -->
        <?php endif; ?>
    <?php endforeach; ?>

    <?php foreach ($this->getRelations($this->modelClass) as $relation): ?>
        <?php if ($relation[1] == GxActiveRecord::HAS_MANY || $relation[1] == GxActiveRecord::MANY_MANY): ?>
            <label><?php echo '<?php'; ?> echo GxHtml::encode($model->getRelationLabel('<?php echo $relation[0]; ?>')); ?></label>
            <?php echo '<?php ' . $this->generateActiveRelationField($this->modelClass, $relation) . "; ?>\n"; ?>
        <?php endif; ?>
    <?php endforeach; ?>

    <div class="form-actions">
        <?php echo "<?php \$this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'icon'=>'icon-ok', 'label'=>\$model->isNewRecord?'Create':'Save','htmlOptions'=>array('class'=>'button btn btn-warning '))); ?> \n"; ?>
        &nbsp;&nbsp;
        <?php echo "<?php \$this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'reset', 'icon'=>'icon-remove', 'label'=>'Reset','htmlOptions'=>array('class'=>'button btn btn-inverse '))); ?> \n";
        ?>
    </div>
    <?php echo "<?php \$this->endWidget(); ?>\n"; ?>
</div><!-- form -->