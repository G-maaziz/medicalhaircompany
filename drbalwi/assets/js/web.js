const FORM_ID = 1;
let nameInput = document.querySelector('input[name=name]')
let firstValidName = false;
let telInput = document.querySelector('input[name=phone]')
let commentInput = document.querySelector('.input-container textarea')
let firstValidPhone = false;
let select_telefon = document.getElementById("select_telefon");
let alleVorwahlen = document.getElementById("vorwahlen");
let selectedCountry = "DE"; // deafult
let mailInput = document.querySelector('input[name=email]')
let firstValidEmail = false;
const datalayer_list = ['s0'];
let policyCb = document.querySelector('input[name=policy]');
let icon_telInput = document.getElementById("icon_telInput");
let icon_mailInput = document.getElementById("icon_mailInput");
let icon_nameInput = document.getElementById("icon_nameInput");
let policy = document.querySelector('.policy');
const stickyNav = document.querySelector('.sticky-nav');


let formData = {

}
const Name = {
    upload: "input_1",
}
const Email = {

    upload: "input_2",
}
const Phone = {

    upload: "input_4",
}


const images = [
    "input_14",
    "input_12",
    "input_13",
]


const uploadPics = document.querySelector('#uploadPics');

if (nameInput) {

    nameInput.addEventListener("input", (e) => {
        if (nameInput.value.length > 2) {
            e.target.closest('.input-box').classList.remove("error")
            e.target.closest('.input-box').classList.add("success")
            firstValidName = true;
        } else {
            e.target.closest('.input-box').classList.add("error")
            e.target.closest('.input-box').classList.remove("success")
            firstValidName = false;
        }
    });
    mailInput.addEventListener("input", (e) => {
        if (mailControl(mailInput.value)) {
            e.target.closest('.input-box').classList.remove("error")
            e.target.closest('.input-box').classList.add("success")
            firstValidEmail = true;
        } else {
            e.target.closest('.input-box').classList.add("error")
            e.target.closest('.input-box').classList.remove("success")
            firstValidEmail = false;
        }
    });
    telInput.addEventListener("input", (e) => {
        let len = telInput.value.length;
        if (len < (select_telefon.value + " ").length) {
            telInput.value = select_telefon.value + " ";
        }

        if (libphonenumber.isValidPhoneNumber(telInput.value, selectedCountry)) {
            e.target.closest('.input-box').classList.remove("error")
            e.target.closest('.input-box').classList.add("success")
            firstValidPhone = true;
        } else {
            e.target.closest('.input-box').classList.add("error")
            e.target.closest('.input-box').classList.remove("success")
            firstValidPhone = false;
        }
    });
    telInput.addEventListener("focus", () => {
        if (telInput.value == " ") {
            telInput.value = select_telefon.value + " ";
        }
    });
    select_telefon.addEventListener("change", () => {
        telInput.value = select_telefon.value + " ";
        telInput.focus();

        selectedCountry = libphonenumber.getCountryCallingCode(select_telefon.options[select_telefon.selectedIndex].text.substring(0, 2));

        telInput.closest('.input-box').classList.remove('error')
        telInput.closest('.input-box').classList.remove('success')

    });


    policyCb.addEventListener("change", () => {
        if (policyCb.checked) {
            policy.classList.remove("error");
            policy.classList.add("success");
        } else {
            policy.classList.add("error");
            policy.classList.remove("success");
        }
    });

    (function() {
        const vw = libphonenumber.getCountries();

        for (let c of vw) {
            const el = document.createElement("option");
            const nr = "+" + libphonenumber.getCountryCallingCode(c);
            el.value = nr;
            el.textContent = c + " (" + nr + ")";
            alleVorwahlen.appendChild(el);
        }
    })();
}

let sliderSetting = {
    centeredSlides: false,
    loop: false,
    speed: 600,
    slidesPerView: 1,
    init: true,
    direction: 'horizontal',
    allowTouchMove: false,
    shortSwipes: false,
    simulateTouch: false
}


let mainSlider = new Swiper(".main-swiper", {
    ...sliderSetting,
    autoHeight: true
});

function goNext() {
    mainSlider.slideNext();
}

function goPrev() {
    mainSlider.slidePrev();
}

function mailControl(email) {
    var pattern = new RegExp(
        /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
    );
    return pattern.test(email);
}






const completeForm = document.querySelector('#completeForm');
if (completeForm) {
    completeForm.addEventListener('click', e => {
        if (!firstValidName) {
            nameInput.closest('.input-box').classList.add('error')
            return;
        }
        if (!firstValidEmail) {
            mailInput.closest('.input-box').classList.add('error')
            return;
        }
        if (!firstValidPhone) {
            telInput.closest('.input-box').classList.add('error')
            return;
        }
        if (!policyCb.checked) {
            document.querySelector('.policy').classList.add('error')
            return;
        }


        e.target.classList.add('loading')


        data = {
            "input_6": nameInput.value, // name
            "input_2": mailInput.value, // email
            "input_3": commentInput.value, // comment
            "input_4": telInput.value, // phone
            "input_5": policyCb.checked // check
        };

        // let source = getCookie('source');
        // if (source) {
        //     source = source.split("|");
        //     source = source[0] + "|" + source[source.length - 1];
        //     data["input_51"] = source; // source
        // }
        // let medium = getCookie('medium');
        // if (getCookie('medium')) {
        //     medium = medium.split("|");
        //     medium = medium[0] + "|" + medium[medium.length - 1];
        //     data["input_6"] = medium; // medium
        // }
        // let campaign = getCookie('campaign');
        // if (campaign) {
        //     campaign = campaign.split("|");
        //     campaign = campaign[0] + "|" + campaign[campaign.length - 1];
        //     data["input_7"] = campaign; // campaign
        // }
        // let term = getCookie('term');
        // if (term) {
        //     term = term.split("|");
        //     term = term[0] + "|" + term[term.length - 1];
        //     data["input_8"] = term; // term
        // }
        // let content = getCookie('content');
        // if (content) {
        //     content = content.split("|");
        //     content = content[0] + "|" + content[content.length - 1];
        //     data["input_9"] = content; // content
        // }
        // let ref = getCookie('affiliate_id');
        // if (ref)
        //     data["input_10"] = ref; // affiliate ref
        // let gclid = getCookie("gclid"); // google client id
        // if (gclid)
        //     data["input_11"] = gclid;
            

        fetch("/wp-json/gf/v2/forms/" + FORM_ID + "/submissions", {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data["is_valid"] == true) {
                    setTimeout(() => {
                        sent = true;
                        window.location.href = data['confirmation_redirect'];
                        var data_options = document.getElementById('data_layer_data').dataset;
                        if (data_options) {
                            var event = data_options.event
                            var step_order = data_options.step_order
                            var stepaction = data_options.stepaction
                        }
                        datalayer_list[step_order - 1] = stepaction

                        push_datalayer(event, mailInput.value, telInput.value, gender.value);
                    }, 400);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            })
            .finally(() => {

            });


    })
}
//file upload btn

const uploadFormData = new FormData();


const boxes = document.querySelectorAll('[type="file"]');

for (let i = 0; i < boxes.length; i++) {
    boxes[i].addEventListener("change", () => {
        const file = boxes[i].files[0];

        if (file) {

            const MAX_WIDTH = 1200;
            const MAX_HEIGHT = 1200;
            const MIME_TYPE = "image/jpeg";
            const QUALITY = 0.6;

            const bloburl = URL.createObjectURL(boxes[i].files[0]);
            const img = new Image();
            img.src = bloburl;
            img.onerror = () => {
                URL.revokeObjectURL(img.src);
                console.error("Can't load image");
            };

            img.onload = () => {

                URL.revokeObjectURL(img.src);
                const [newWidth, newHeight] = calcSize(img, MAX_WIDTH, MAX_HEIGHT);
                const canvas = document.createElement("canvas");
                canvas.width = newWidth;
                canvas.height = newHeight;
                const ctx = canvas.getContext("2d");
                ctx.drawImage(img, 0, 0, newWidth, newHeight);
                canvas.toBlob(
                    (blob) => {
                        uploadFormData.append(images[i], new File([blob], "photo.jpg"));
                    },
                    MIME_TYPE,
                    QUALITY
                );
            }

        }
    });
}



function calcSize(img, maxWidth, maxHeight) {
    let width = img.width;
    let height = img.height;

    // calculate the width and height, constraining the proportions
    if (width > height) {
        if (width > maxWidth) {
            height = Math.round((height * maxWidth) / width);
            width = maxWidth;
        }
    } else {
        if (height > maxHeight) {
            width = Math.round((width * maxHeight) / height);
            height = maxHeight;
        }
    }
    return [width, height];
}



if (uploadPics) {
    uploadPics.addEventListener('click', e => {
        let errorCount = 0;
        let requiredInput = new Array(...document.querySelectorAll(".swiper-slide-active input"));

        for (var i = 0; i < requiredInput.length; i++) {
            if (requiredInput[i].value === "" || requiredInput[i].value === "0") {
                requiredInput[i].parentElement.classList.add("error");
                errorCount++;
            } else {
                requiredInput[i].parentElement.classList.remove("error");
                errorCount - 1;
            }
        }

        if (errorCount == 0) {
            //upload funct
            e.target.classList.add('loading')



            let user_name = '';
            if (GetURLParameter("user_name")) {
                user_name = GetURLParameter("user_name").replaceAll('+', ' ')
            }

            let email = GetURLParameter("email");
            let phone = '';

            if (GetURLParameter("phone")) {
                phone = '+' + GetURLParameter("phone").replaceAll('+', '');
            }
            let gend = '';

            if (GetURLParameter("gender")) {
                gend = GetURLParameter("gender");
            }


            uploadFormData.append(Name.upload, user_name);
            uploadFormData.append(Email.upload, email);
            uploadFormData.append(Phone.upload, phone);



            fetch("/wp-json/gf/v2/forms/3/submissions", {
                    method: 'POST',
                    body: uploadFormData
                })
                .then(response => response.json())
                .then(data => {
                    if (data["is_valid"] === true) {
                        window.location.href = data['confirmation_redirect'];

                        var data_options = document.getElementById('data_layer_data').dataset;
                        if (data_options) {
                            var event = data_options.event
                            var step_order = data_options.step_order
                            var stepaction = data_options.stepaction
                        }
                        datalayer_list[step_order - 1] = stepaction
                        push_datalayer(event, email, phone, gend);
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                });

        } else {
            return
        }


    });
    document.querySelectorAll('.upload-box-list input').forEach(item => {
        item.addEventListener("change", function(e) {
            const files = e.target.files[0];
            let parent = e.target.parentElement
            parent.classList.remove('error')
            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);

            fileReader.addEventListener("load", function() {
                parent.querySelectorAll('img').forEach(img => {
                    img.src = this.result
                })
            });
        });
    })
}




const resultBtn = document.querySelector('#resultBtn');
if (resultBtn) {
    resultBtn.addEventListener('click', e => {
        goNext()
    });

}

function push_datalayer(event, email = '', phone = '', gender = '') {

    if (gender == 'women' || gender == 'Frau') {
        gender = 'f';
    } else {
        gender = 'm';
    }

    window.dataLayer = window.dataLayer || [];

    dataLayer.push({
        'event': event,
        'useremail': email,
        'userphone': phone,
        'gender': gender
    });
}


function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function GetURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return decodeURIComponent(sParameterName[1]);
        }
    }
}

(function() {

    function isCalendlyEvent(e) {
        return e.origin === "https://calendly.com" && e.data.event && e.data.event.indexOf("calendly.") === 0;
    };

    window.addEventListener("message", function(e) {
        if (isCalendlyEvent(e)) {
            console.log("Calendly event type", e.data.event);

            if (Object.keys(e.data.payload).length) {

                console.log("Calendly event details", e.data.payload);


            } else {
                /* ignore, this Calendly event type has no details */
            }
        } else {

        }
    });

})();


// navbar show/hide
const noScrollMenu = document.querySelector('.no-scroll-menu');
window.addEventListener("scroll", (e) => {
    let scroll = this.scrollY;

    if(scroll >= 80){
        stickyNav.classList.add("show");
        noScrollMenu.style.display = 'none';
    }
    else{
        stickyNav.classList.remove("show");
        noScrollMenu.style.display = 'flex';
        nav.classList.remove("opened");
    }
});

