<?php
    $additional_class = $block['className'];
    $sec_id = $block['anchor'];
    $back_color = get_field('background_color');

    $title = get_field('video_slider_title');
    $sub_title = get_field('video_slider_subtitle');
    $content = get_field('video_slider_text');

    $place_medien = get_field('place_of_media_slider');
    $slider = get_field('video');
    // $video_poster = $slider['video_poster'];
    // $video_link = $slider['video_link'];
    $button_label = get_field('button_lablel');
    $button_link= get_field('button_link');
?>
<section <?php if($additional_class) { ?>class="video_slider <?= $additional_class ?>"<?php }else { ?>class="video_slider"<?php } if($sec_id) { ?> id="<?= $sec_id ?>"<?php } if ($back_color) { ?> style="background-color: <?= $back_color ?>;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="title_subtitle">
                    <?php if($title) { ?><h2><?= $title ?></h2><?php } ?>
                    <?php if ($sub_title) : ?><p class="subtitle"><?= $sub_title ?></p><?php endif; ?>
                    <?= $content ? $content : '' ?>
                </div>
                <div class="media">
                    <div class="embla">
                        <div class="embla__viewport">
                            <div class="embla__container">
                            <?php if ($slider) {
                                foreach ($slider as $key => $value) { ?>
                                    <div class="embla__slide">
                                        <div class="embla__slide__inner">
                                            <video src="<?= $value['video_link'] ?>" width="512" height="388" 
                                                poster="<?= $value['video_poster'] ?>" controls preload="none">
                                            </video>
                                        </div>
                                    </div>
                                <?php } } ?>
                            </div>
                        </div>
                        <button class="embla__button embla__button--prev" type="button">❮</button>
                        <button class="embla__button embla__button--next" type="button">❯</button>
                    </div>

                        <div class="embla__dots"></div>
                        <script type="text/template" id="embla-dot-template">
                            <button class="embla__dot" type="button" aria-label="DotButton"></button>
                        </script>
                </div>
                <?php if ($button_label) { ?>
                    <a href="<?= $button_label ?>" class="btn btn-tertiary"><?= $button_link ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<style>
    .video_slider .col-9 {
        margin: auto;
    }
    .embla {
    position: relative;
    max-width: 100%;
    margin-left: auto;
    margin-right: auto
}

.embla__viewport {
    overflow: hidden;
    width: 100%
}

.embla__viewport.is-draggable {
    cursor: move;
    cursor: grab
}

.embla__viewport.is-dragging {
    cursor: grabbing
}

.embla__container {
    display: flex;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -webkit-tap-highlight-color: transparent;
}

.embla__slide {
    position: relative;
    min-width: 100%;
}

.embla__slide__inner {
    position: relative;
    overflow: hidden;
}

.embla__slide__img {
    position: absolute;
    display: block;
    top: 50%;
    left: 50%;
    width: auto;
    min-height: 100%;
    min-width: 100%;
    transform: translate(-50%, -50%)
}

.embla__button {
    cursor: pointer;
    background-color: transparent;
    position: absolute;
    z-index: 1;
    top: 50%;
    transform: translateY(-50%);
    border: 0;
    width: 40px;
    height: 40px;
    padding: 0;
    font-size: 40px;
    color: #123a66
}

.embla__button:disabled {
    cursor: default;
    opacity: .3
}

.embla__button--prev {
    left: 0
}

.embla__button--next {
    right: 0
}

.embla__button:disabled {
    cursor: default;
    opacity: .3
}

.embla__dots {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    align-items: center;
}

.embla__dot {
    display: flex;
    width: 16px;
    height: 16px;
    padding: 0;
    margin: 0 3px;
    border-radius: 50%;
    background: 0 0;
    justify-content: center;
    align-items: center;
    border: none;
    background: #123a669c
}
button.embla__dot.is-selected {
    background: #123a66;
    width: 20px;
    height: 20px;
}
@media (max-width: 768px) {
    .embla__container {
        width: 100%;
    }
    .embla__slide {
        padding-left: 0;
    }
}
</style>
<script>
    window.addEventListener("load", function()
{
    const wrap = document.querySelector(".embla");
    const viewPort = wrap.querySelector(".embla__viewport");
    const embla = EmblaCarousel(viewPort,
    {
        containScroll: "keepSnaps",
        loop: true,
        skipSnaps: false
    });
    const prevBtn = wrap.querySelector(".embla__button--prev");
    const nextBtn = wrap.querySelector(".embla__button--next");
    const disablePrevAndNextBtns = () =>
    {
        if (embla.canScrollPrev()) prevBtn.removeAttribute("disabled");
        else prevBtn.setAttribute("disabled", "disabled");
        if (embla.canScrollNext()) nextBtn.removeAttribute("disabled");
        else nextBtn.setAttribute("disabled", "disabled");
    };
    const dots = document.querySelector(".embla__dots");
    const dotsArray = (() =>
    {
        const template = document.getElementById("embla-dot-template").innerHTML;
        dots.innerHTML = embla.scrollSnapList().reduce(acc => acc + template, "");
        return [].slice.call(dots.querySelectorAll(".embla__dot"));
    })();
    const setSelectedDotBtn = (a, b) =>
    {
        const previous = embla.previousScrollSnap();
        const selected = embla.selectedScrollSnap();
        dotsArray[previous].classList.remove("is-selected");
        dotsArray[selected].classList.add("is-selected");
    }
    dotsArray.forEach((dotNode, i) =>
    {
        dotNode.addEventListener("click", () => embla.scrollTo(i), false);
    });
    prevBtn.addEventListener("click", embla.scrollPrev, false);
    nextBtn.addEventListener("click", embla.scrollNext, false);
    embla.on("select", setSelectedDotBtn);
    embla.on("select", disablePrevAndNextBtns);
    embla.on("init", setSelectedDotBtn);
    embla.on("init", disablePrevAndNextBtns);
});
</script>
<script>
  const loadmore = document.querySelector('#loadmore');
      let currentItems = 4;
      loadmore.addEventListener('click', (e) => {
          const elementList = [...document.querySelectorAll('.patient_list .patient_list-element')];
          for (let i = currentItems; i < currentItems + 4; i++) {
              if (elementList[i]) {
                  elementList[i].style.display = 'block';
              }
          }
          currentItems += 4;
  
          // Load more button will be hidden after list fully loaded
          if (currentItems >= elementList.length) {
              event.target.style.display = 'none';
          }
      })
  </script>