<nav>
    <ul>
        <?php
        foreach ($links as $link) {
            ?>
            <li class="<?php echo $link['active'] ? "current" : ""; ?>" 
            <?php echo isset($link['visible']) ? ($link['visible'] ? "" : "style=\"display:none\"") : "" ?>>
                <a href="<?php echo $link['url'] ?>"><?php echo $link['label'] ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
</nav>