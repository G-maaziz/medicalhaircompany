<section class="bg-gray-mobile home_sec_13">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="color-blue d-inline"><?php the_field('title') ?><span class="subtitle"><?php the_field('subtitle') ?></span>
                </h2>
            </div>
        </div>
        <div class="row normal-list fw-bold">
            <?php $advantages = get_field('advantages');
            if ($advantages) {

                foreach ($advantages as $key => $value) {

                    if ($key % 3 == 0) {
                        if($key>0){
                            echo '</ul></div>';

                        }
                        echo '<div class="col-3"><ul>';
                    }
                 

                    ?>
                    <li><?= $value['advantage'] ?></li>

            <?php

                }
            } ?>
</ul></div>
        </div>
    </div>
</section>