<style>

    .embla
    {
        width: 100%;
        overflow: hidden;
    }
    .embla__viewport
    {
        position: relative;
    }
    .embla__container
    {
        display: flex;
    }
    .embla__slide
    {
        position: relative;
        flex: 0 0 100%;
        padding: 25px;
        text-align: center;
    }
    .embla__prev,
    .embla__next
    {
        display: none;
    }
        .embla__prev
        {
            position: absolute;
            width: 20px;
            height: 20px;
            display: inline-block;
            transform: rotate(135deg);
            margin-bottom: 1px;
            margin-left: 7px;
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 0;
            margin: 0;
            background: none;
            border-radius: 0;
            left: 20px;
            top: 45%;
        }
        .embla__next
        {
            position: absolute;
            width: 20px;
            height: 20px;
            display: inline-block;
            transform: rotate(-45deg);
            margin-bottom: 1px;
            margin-left: 7px;
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 0;
            margin: 0;
            background: none;
            border-radius: 0;
            right: 20px;
            top: 45%;
        }


    @media (max-width: 768px)
    {
        .embla__slide
        {
            flex: 0 0 100%;
            padding: 0;
        }
    }

</style>

<section class="sec_before_after">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= the_field('slider_title') ?></h2>
            </div>
            <div class="embla">
                <div class="embla__viewport">
                    <div class="embla__container">
                        <?php
                            $slides = get_field("images");
                            foreach($slides as $slide)
                            { ?>
                                <div class="embla__slide">
                                    <?php 
                                        if (!empty($slide['image'])) {
                                            echo wp_get_attachment_image($slide['image']['id'], 'wp_image_size', false, array('class' => "slide_image"));
                                        }
                                    ?>
                                </div>
                                <?php
                            } ?>
                    </div>
                    <button class="embla__prev"></button>
                    <button class="embla__next"></button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function()
    {
        const rootNode = document.querySelector('.embla')
        const viewportNode = rootNode.querySelector('.embla__viewport')

        // Grab button nodes
        const prevButtonNode = rootNode.querySelector('.embla__prev')
        const nextButtonNode = rootNode.querySelector('.embla__next')
        
        var options =
        {
            loop: false,
            skipSnaps: true,
            containScroll: "trimSnaps"
        }

        var embla = EmblaCarousel(viewportNode, options)

        prevButtonNode.addEventListener('click', embla.scrollPrev, false)
        nextButtonNode.addEventListener('click', embla.scrollNext, false)
    });
</script>