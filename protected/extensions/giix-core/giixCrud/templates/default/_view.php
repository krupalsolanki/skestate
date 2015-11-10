<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<div class="view">
    <table class="detail-view table table-bordered table-striped table-condensed">
        <tbody>
            <tr>
                <th><?php echo '<?php'; ?> echo GxHtml::encode($data->getAttributeLabel('<?php echo $this->tableSchema->primaryKey; ?>')); <?php echo '?>'; ?>:</th>
                <td><?php echo '<?php'; ?> echo GxHtml::link(GxHtml::encode($data-><?php echo $this->tableSchema->primaryKey; ?>), array('view', 'id' => $data-><?php echo $this->tableSchema->primaryKey; ?>)); <?php echo "?>"; ?></td>
            </tr>

            <?php
            $count = 0;
            foreach ($this->tableSchema->columns as $column):
                if ($column->isPrimaryKey)
                    continue;
                if (++$count == 7)
                    echo "\t<?php /*\n";
                ?>  
                <tr>
                    <th><?php echo '<?php'; ?> echo GxHtml::encode($data->getAttributeLabel('<?php echo $column->name; ?>')); <?php echo '?>'; ?>:</th>
                    <?php if (!$column->isForeignKey): ?>
                    <td><?php echo '<?php'; ?> echo GxHtml::encode($data-><?php echo $column->name; ?>); <?php echo "?>"; ?></td>
                    <?php else: ?>
                        <?php
                        $relations = $this->findRelation($this->modelClass, $column);
                        $relationName = $relations[0];
                        ?>
                    <td><?php echo '<?php'; ?> echo GxHtml::encode(GxHtml::valueEx($data-><?php echo $relationName; ?>)); <?php echo "?>"; ?></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
            <?php
            if ($count >= 7)
                echo "\t*/ ?>\n";
            ?>
        </tbody>
    </table>
</div>