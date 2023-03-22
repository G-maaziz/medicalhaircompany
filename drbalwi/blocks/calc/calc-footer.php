        </div>
    </div>
</section>

<div class="footer">
    <div class="container">
        <?php
            $links = get_field('footer_links');
            foreach ($links as $key => $value)
            {
        ?>
                <a href="<?php echo($value['link']) ?>"><?php echo($value['label']) ?></a>
        <?php
            }
        ?>
    </div>
</div>