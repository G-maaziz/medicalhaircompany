const hamburger = document.getElementById("hamburger");
const nav = document.querySelector("nav");
const menu = document.getElementById("menu-main-nav");

const dropdowns = document.getElementsByClassName("menu-item"); // "li" elements with "ul" .sub-menu childs
const opens = [];

const overlay = document.getElementById("nav_overlay");


if (hamburger && nav && menu && dropdowns && overlay) {
    hamburger.addEventListener("click", () => {
        nav.classList.toggle("opened");
    });

    for (let i = 0; i < dropdowns.length; i++) {
        opens[i] = false;
        dropdowns[i].addEventListener("click", () => {
            const mediaQuery = window.matchMedia('(max-width: 992px)')
            if (!mediaQuery.matches) {
                return;
            }

            dropdowns[i].classList.toggle("opened");

            opens[i] = !opens[i];

            const sub = dropdowns[i].querySelector(".sub-menu");
            if (opens[i]) {
                sub.style.maxHeight = sub.scrollHeight + "px";
            } else {
                sub.style.maxHeight = 0;
            }
        });
    }


    /*************************************************
     * capture swipe-left (to close the mobile nav)
     ************************************************/

    let startX,
        startY,
        dist,
        threshold = -50, //required min distance traveled to be considered swipe
        allowedTime = 280, // maximum time allowed to travel that distance
        elapsedTime,
        startTime;
    let oldTransition = "";

    overlay.addEventListener('touchstart', function(e) {
        let touchobj = e.changedTouches[0];

        dist = 0;
        startX = touchobj.pageX;
        startY = touchobj.pageY;
        startTime = new Date().getTime();

        oldTransition = getComputedStyle(menu).transitionDuration;
        menu.style.transitionDuration = "0s";

        e.preventDefault();
    }, false);

    overlay.addEventListener('touchmove', function(e) {
        let touchobj = e.changedTouches[0];
        dist = touchobj.pageX - startX;

        if (dist < 0) {
            menu.style.left = "" + dist + "px";
        }

        e.preventDefault();
    }, false);

    overlay.addEventListener('touchend', function(e) {
        let touchobj = e.changedTouches[0];
        dist = touchobj.pageX - startX;
        elapsedTime = new Date().getTime() - startTime;

        let swipedLeft = (elapsedTime <= allowedTime && dist <= threshold && Math.abs(touchobj.pageY - startY) <= 150)

        menu.style.transitionDuration = oldTransition;

        if (swipedLeft || dist < (-1 * (menu.offsetWidth - 100))) {
            menu.style.left = "";
            nav.classList.toggle("opened");
        }
        menu.style.left = "";

        e.preventDefault();
    }, false);
}

/****************** */


var video = document.getElementsByTagName("video");
for (i = 0; i < video.length; i++) {
    video[i].onplay = function() {
        var currentIndex = index("video", this);
        for (k = 0; k < video.length; k++) {
            if (k == currentIndex) {
                continue
            }
            video[k].pause();
        }
    }
}


function index(className, id) {
    nodes = document.getElementsByTagName(className);
    return [].indexOf.call(nodes, id);
}