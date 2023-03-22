/* Main elements */
const title = document.getElementById("dynamic_title");
const topTitle = document.getElementById("top_title");
const containers = [].concat(Array.from(document.getElementsByClassName("selections"))); // to get a real array
const buttons = document.getElementById("buttons");
const prevBtn = document.getElementById("prevBtn");
const sendBtn = document.getElementById("sendBtn");
const uploadBtn = document.getElementById("uploadBtn");
const progressContainer = document.getElementById("progress");
const progressBar = document.getElementById("progressBar");
const form = document.getElementById("form");
const uploadForm = document.getElementById("upload_form");
const thankyou = document.getElementById("thank_you");
const uBoxes = document.getElementsByClassName("uBox");
const uInputs = document.querySelectorAll(".uBox input");

/* Form validation elements */
const inp_name = document.getElementById("inp_name");
const icon_inp_name = document.getElementById("icon_inp_name");
let firstValidName = false;

const inp_email = document.getElementById("inp_email");
const icon_inp_email = document.getElementById("icon_inp_email");
let firstValidEmail = false;

const select_telefon = document.getElementById("select_telefon");
const alleVorwahlen = document.getElementById("vorwahlen");
const inp_telefon = document.getElementById("inp_telefon");
const icon_inp_telefon = document.getElementById("icon_inp_telefon");
let firstValidPhone = false;
let firstFocus = true;
let selectedCountry = "DE"; // deafult

const privacy = document.getElementById("privacy_check");
const icon_privacy = document.getElementById("icon_privacy");

/* Functional */
let step = 0;
const stepLen = containers.length + 2; // containers + contact form + upload form
const formStep = containers.length;
const uploadStep = containers.length + 1;
const stepHistory = []; // stores index numbers
let gender = "";
let isSending = false;
let uploadCounter = 0;
const uploadFormData = new FormData();

const CONTACT_FORM_ID = form.getAttribute("data-form-id");
const UPLOAD_FORM_ID = uploadForm.getAttribute("data-form-id");


init();


/*********************************************************************/


function init() {
    prevBtn.addEventListener("click", prev);
    sendBtn.addEventListener("click", send);
    uploadBtn.addEventListener("click", upload);

    containers.push(form, uploadForm);

    /* init the selections boxes */
    for (let i = 0; i < containers.length; i++) {
        if (i != 0) // start from the second
            containers[i].classList.add("right", "hidden", "unclickable");

        const selections = containers[i].querySelectorAll(".sel");
        for (let sel of selections) {
            sel.addEventListener("click", (e) => {
                selected(e.currentTarget);
            });
        }
    }
    thankyou.classList.add("right", "hidden", "unclickable");

    populateCountries();

    /* init upload form */
    for (let i = 0; i < uBoxes.length; i++) {
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(e => {
            uBoxes[i].addEventListener(e, (e2) => {
                e2.preventDefault();
                e2.stopPropagation();
            });
        });

        uBoxes[i].addEventListener("click", () => {
            uInputs[i].click();
        });
        uBoxes[i].addEventListener("dragenter", () => {
            uBoxes[i].classList.add("dragged");
        });
        uBoxes[i].addEventListener("dragleave", () => {
            uBoxes[i].classList.remove("dragged");
        });
        uBoxes[i].addEventListener("drop", (e) => {
            uInputs[i].files = e.dataTransfer.files;
            uBoxes[i].classList.remove("dragged");
            uInputs[i].dispatchEvent(new Event("change"));
        });
    }
    for (let i = 0; i < uInputs.length; i++) {
        uInputs[i].addEventListener("change", () => {
            const file = uInputs[i].files[0];
            if (file) {
                uBoxes[i].classList.remove("error");
                uBoxes[i].classList.add("uploaded");
                uBoxes[i].style.backgroundImage = "url(" + URL.createObjectURL(file) + ")";
            }
        });
    }

    /* Form validation setup */
    inp_name.addEventListener("focusout", () => {
        firstValidName = true;
        if (inp_name.value.length > 2) {
            icon_inp_name.classList.remove("error");
            icon_inp_name.classList.add("success");
            inp_name.classList.remove("error");
            inp_name.classList.add("success");
        } else {
            icon_inp_name.classList.add("error");
            icon_inp_name.classList.remove("success");
            inp_name.classList.add("error");
            inp_name.classList.remove("success");
        }
    });
    inp_name.addEventListener("input", () => {
        if (firstValidName) {
            if (inp_name.value.length > 2) {
                icon_inp_name.classList.remove("error");
                icon_inp_name.classList.add("success");
                inp_name.classList.remove("error");
                inp_name.classList.add("success");
                firstValidName = true;
            } else {
                icon_inp_name.classList.add("error");
                icon_inp_name.classList.remove("success");
                inp_name.classList.add("error");
                inp_name.classList.remove("success");
            }
        }
    });

    inp_email.addEventListener("input", () => {
        if (validEmail(inp_email.value)) {
            icon_inp_email.classList.remove("error");
            icon_inp_email.classList.add("success");
            inp_email.classList.remove("error");
            inp_email.classList.add("success");
            firstValidEmail = true;
        } else if (firstValidEmail) {
            icon_inp_email.classList.add("error");
            icon_inp_email.classList.remove("success");
            inp_email.classList.add("error");
            inp_email.classList.remove("success");
        }
    });
    inp_email.addEventListener("focusout", () => {
        firstValidEmail = true;
        if (validEmail(inp_email.value)) {
            icon_inp_email.classList.remove("error");
            icon_inp_email.classList.add("success");
            inp_email.classList.remove("error");
            inp_email.classList.add("success");
        } else {
            icon_inp_email.classList.add("error");
            icon_inp_email.classList.remove("success");
            inp_email.classList.add("error");
            inp_email.classList.remove("success");
        }
    });

    select_telefon.addEventListener("change", () => {
        inp_telefon.value = select_telefon.value + " ";
        inp_telefon.focus();

        selectedCountry = libphonenumber.getCountryCallingCode(select_telefon.options[select_telefon.selectedIndex].text.substring(0, 2));

        icon_inp_telefon.classList.remove("error");
        icon_inp_telefon.classList.remove("success");
        inp_telefon.classList.remove("error");
        inp_telefon.classList.remove("success");

        firstValidPhone = false;
    });
    inp_telefon.addEventListener("focus", () => {
        if (firstFocus) {
            inp_telefon.value = select_telefon.value + " ";
        }
        firstFocus = false;
    });
    inp_telefon.addEventListener("input", () => {
        let len = inp_telefon.value.length;
        if (len < (select_telefon.value + " ").length || inp_telefon.value.charAt(0) != "+") {
            inp_telefon.value = select_telefon.value + " ";
        }

        if (libphonenumber.isValidPhoneNumber(inp_telefon.value, selectedCountry)) {
            firstValidPhone = true;
            icon_inp_telefon.classList.remove("error");
            icon_inp_telefon.classList.add("success");
            inp_telefon.classList.remove("error");
            inp_telefon.classList.add("success");
        } else if (firstValidPhone) {
            icon_inp_telefon.classList.add("error");
            icon_inp_telefon.classList.remove("success");
            inp_telefon.classList.add("error");
            inp_telefon.classList.remove("success");
        }
    });
    inp_telefon.addEventListener("focusout", () => {
        firstValidPhone = true;
        if (libphonenumber.isValidPhoneNumber(inp_telefon.value, selectedCountry)) {
            icon_inp_telefon.classList.remove("error");
            icon_inp_telefon.classList.add("success");
            inp_telefon.classList.remove("error");
            inp_telefon.classList.add("success");
        } else {
            icon_inp_telefon.classList.add("error");
            icon_inp_telefon.classList.remove("success");
            inp_telefon.classList.add("error");
            inp_telefon.classList.remove("success");
        }
    });

    privacy.addEventListener('change', () => {
        if (privacy.checked) {
            icon_privacy.classList.remove("error");
            icon_privacy.classList.add("success");
        } else {
            icon_privacy.classList.add("error");
            icon_privacy.classList.remove("success");
        }
    });
}


function selected(sel) {
    const oldSelected = containers[step].querySelector(".active");
    if (oldSelected)
        oldSelected.classList.remove("active");
    sel.classList.add("active");

    // small delay
    setTimeout(() => {
        next(sel);
    }, 120);
}

function send() {
    // validate the inputs first
    if (inp_name.value.length <= 2) {
        inp_name.focus();
        icon_inp_name.classList.add("error");
        icon_inp_name.classList.remove("success");
        inp_name.classList.add("error");
        inp_name.classList.remove("success");
        firstValidName = true;
    } else if (!validEmail(inp_email.value)) {
        inp_email.focus();
        icon_inp_email.classList.add("error");
        icon_inp_email.classList.remove("success");
        inp_email.classList.add("error");
        inp_email.classList.remove("success");
        firstValidEmail = true;
    } else if (!libphonenumber.isValidPhoneNumber(inp_telefon.value, selectedCountry)) {
        inp_telefon.focus();
        icon_inp_telefon.classList.add("error");
        icon_inp_telefon.classList.remove("success");
        inp_telefon.classList.add("error");
        inp_telefon.classList.remove("success");
        firstValidPhone = true;
    } else if (!privacy.checked) {
        icon_privacy.classList.add("error");
        icon_privacy.classList.remove("success");
    } else {
        sendBtn.classList.add("sending");

        // post the form (with small delay for the beautiful loading animation)
        setTimeout(() => {
            if (gender == "Woman")
                containers[uploadStep].classList.add("show_woman");


            const data = {};
            for (let i = 0; i < containers.length; i++) {
                if (containers[i].hasAttribute("data-show-for") && containers[i].getAttribute("data-show-for").indexOf(gender) === -1)
                    continue;

                if (containers[i].hasAttribute("data-input-id")) {
                    generateData(containers[i], data);
                } else if (containers[i].id == "form") {
                    const elements = containers[i].getElementsByTagName("input");

                    for (el of elements) {
                        if (!el.hasAttribute("data-input-id"))
                            continue;

                        generateData(el, data);
                    }
                }
            }


            let source = getCookie('source');
            if (source) {
                source = source.split("|");
                source = source[0] + "|" + source[source.length - 1];
                data["input_15"] = source; // source
            }
            let medium = getCookie('medium');
            if (getCookie('medium')) {
                medium = medium.split("|");
                medium = medium[0] + "|" + medium[medium.length - 1];
                data["input_16"] = medium; // medium
            }
            let campaign = getCookie('campaign');
            if (campaign) {
                campaign = campaign.split("|");
                campaign = campaign[0] + "|" + campaign[campaign.length - 1];
                data["input_19"] = campaign; // campaign
            }
            let term = getCookie('term');
            if (term) {
                term = term.split("|");
                term = term[0] + "|" + term[term.length - 1];
                data["input_18"] = term; // term
            }
            let content = getCookie('content');
            if (content) {
                content = content.split("|");
                content = content[0] + "|" + content[content.length - 1];
                data["input_17"] = content; // content
            }
            let ref = getCookie('affiliate_id');
            if (ref)
                data["input_20"] = ref; // affiliate ref

            let gclid = getCookie("gclid"); // google client id
            if (gclid)
                data["input_22"] = gclid;




            // Post it!
            fetch("/wp-json/gf/v2/forms/" + CONTACT_FORM_ID + "/submissions", {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data["is_valid"] == true) {
                        let data_layer = document.querySelector('[name="data_layer"]').value;
                        dataLayer.push({
                            'event': data_layer
                        });
                        next(null);
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                })
                .finally(() => {
                    setTimeout(() => {
                        sendBtn.classList.remove("sending");
                    }, 400);
                });

            inp_name

        }, 1200);
    }
}

function upload() {
    let canUpload = true;

    for (let i = 0; i < uBoxes.length; i++) {
        if (uInputs[i].files.length == 0) {
            uBoxes[i].classList.add("error");
            canUpload = false;
        } else if (!uInputs[i].hasAttribute("data-input-id") || !UPLOAD_FORM_ID) {
            canUpload = false;
            console.error("Invalid form / input ID<br>Input: " + uInputs[i].getAttribute("data-input-id") + "<br>FORM: " + UPLOAD_FORM_ID);
        }
        // maybe file validation later...
    }

    // get hidden input values (name / email / phone)
    const upload_name = document.getElementById("upload_name").getAttribute("data-input-id").split("-")[1];
    const upload_email = document.getElementById("upload_email").getAttribute("data-input-id").split("-")[1];
    const upload_phone = document.getElementById("upload_phone").getAttribute("data-input-id").split("-")[1];
    if (!upload_name || !upload_email || !upload_phone) {
        canUpload = false;
    }

    if (canUpload) {
        uploadBtn.classList.add("sending");

        uploadFormData.append("input_" + upload_name, inp_name.value);
        uploadFormData.append("input_" + upload_email, inp_email.value);
        uploadFormData.append("input_" + upload_phone, inp_telefon.value.replaceAll(" ", "").replaceAll("-", "").replaceAll(".", ""));

        uploadCounter = uBoxes.length;

        for (let i = 0; i < uBoxes.length; i++) {
            const inp_id = uInputs[i].getAttribute("data-input-id").split("-")[1];

            // image compression
            const MAX_WIDTH = 1800;
            const MAX_HEIGHT = 1800;
            const MIME_TYPE = "image/jpeg";
            const QUALITY = 0.8;

            const bloburl = URL.createObjectURL(uInputs[i].files[0]);
            const img = new Image();
            img.src = bloburl;
            img.onerror = () => {
                URL.revokeObjectURL(img.src);
                console.error("Can't load image");
            };
            img.onload = () => {
                //compress & resize it!
                URL.revokeObjectURL(img.src);
                const [newWidth, newHeight] = calcSize(img, MAX_WIDTH, MAX_HEIGHT);
                const canvas = document.createElement("canvas");
                canvas.width = newWidth;
                canvas.height = newHeight;
                const ctx = canvas.getContext("2d");
                ctx.drawImage(img, 0, 0, newWidth, newHeight);
                canvas.toBlob(
                    (blob) => {
                        uploadCounter--;

                        uploadFormData.append("input_" + inp_id, new File([blob], "photo.jpg"));

                        if (uploadCounter == 0) {
                            uploadTheForm();
                        }
                    },
                    MIME_TYPE,
                    QUALITY
                );


            }

        }


    }
}

function uploadTheForm() {
    // small delay for visual reasons
    setTimeout(() => {
        fetch("/wp-json/gf/v2/forms/" + UPLOAD_FORM_ID + "/submissions", {
                method: 'POST',
                body: uploadFormData
            })
            .then(response => response.json())
            .then(data => {
                if (data["is_valid"] == true) {
                    let upload_layer = document.getElementById('data_layer').value;
                            window.dataLayer = window.dataLayer || [];
                            dataLayer.push({'event': upload_layer});
                    next(null);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            })
            .finally(() => {
                setTimeout(() => {
                    uploadBtn.classList.remove("sending");
                }, 400);
            });
    }, 700);
}

function generateData(element, data) {
    const splitted = element.getAttribute("data-input-id").split("-");

    if (splitted[0] != CONTACT_FORM_ID)
        console.warn("INPUT ID " + splitted[0] + " not found in the CONTACT FORM ID " + CONTACT_FORM_ID);

    const inp_id = splitted[1];
    let inp_val = element.tagName == "INPUT" ? element.value : element.getAttribute("data-value");

    if (element.tagName == "INPUT" && element.getAttribute("type") == "tel") {
        inp_val = inp_val.replaceAll(" ", "").replaceAll("-", "").replaceAll(".", "");
    }

    data["input_" + inp_id] = inp_val;
}

function next(sel) {
    if (step == uploadStep) {
        setVisible(-1, -1); // Thank you step
        return;
    }
    let last = step;
    stepHistory.push(step);

    updateData(sel, step);
    step = getNextStep();
    setVisible(last, step);
    updateNav(step);
}

function prev() {
    if (step == 0) {
        window.history.back();
        return;
    }

    let last = step;

    step = stepHistory[stepHistory.length - 1];
    setVisible(last, step);
    stepHistory.pop();

    updateNav(step);
}

/**
 * Inserts data-value attribute into the step-container of the selection
 * 
 * @param {HTMLElement} sel sel: Which selection
 * @param {Number} selectedStep selectedStep: Which step
 */
function updateData(sel, selectedStep) {
    if (sel) {
        // gender step check
        if (containers[selectedStep].hasAttribute("data-gender-step") && sel.hasAttribute("data-gender")) {
            gender = sel.getAttribute("data-gender");
            containers[selectedStep].setAttribute("data-value", sel.getAttribute("data-value"));
        } else {
            containers[selectedStep].setAttribute("data-value", sel.getAttribute("data-value"));
        }
    }
}


function getNextStep() {
    let next = -1;

    if (gender == "")
        return -1;

    let i = step + 1; // start from the next container

    while (1) {
        if (containers[i]) {
            if (containers[i].hasAttribute("data-show-for") && containers[i].getAttribute("data-show-for").indexOf(gender) === -1) {
                i++;
            } else {
                next = i;
                break;
            }
        } else {
            break;
        }
    }

    return next;
}


/**
 * Makes a step-container visible and others unvisible
 * 
 * @param {*} last last: Last step 
 * @param {*} now  now: Current step
 */
function setVisible(last, now) {
    title.classList.add("hidden");

    // Thank you step
    if (last == -1 || now == -1) {
        containers[uploadStep].classList.add("hidden");
        prevBtn.classList.add("hidden");
        progressContainer.classList.add("hidden");
        topTitle.classList.add("hidden");

        setTimeout(() => {
            progressContainer.style.display = "none";
            topTitle.style.display = "none";
            containers[uploadStep].style.display = "none";
            title.innerHTML = thankyou.getAttribute("data-title");
            thankyou.style.display = "block";

            setTimeout(() => {
                title.classList.remove("hidden");
                thankyou.classList.remove("hidden", "unclickable", "right")
            }, 100);
        }, 300);
        return;
    }

    containers[last].classList.add("hidden");

    if (now > last) {
        containers[last].classList.add("left");
    } else {
        containers[last].classList.add("right");
    }

    setTimeout(() => // 300 ms
        {
            containers[last].style.display = "none";
            containers[last].classList.add("unclickable");

            containers[now].style.display = "flex";
            title.innerHTML = containers[now].getAttribute("data-title");


            setTimeout(() => // 100 ms
                {
                    containers[now].classList.remove("hidden", "unclickable");
                    if (now > last) {
                        containers[now].classList.remove("right");
                    } else {
                        containers[now].classList.remove("left");
                        prevBtn.blur();
                    }
                    title.classList.remove("hidden");
                }, 100);
        }, 300);

}


/**
 * Updates the navigation buttons and the prgoress bar
 * depending on the step.
 * 
 * @param {Number} now now: the current step
 */
function updateNav(now) {
    let percent = 100;

    // count further steps
    if (gender != "") {
        let i = now + 1; // start from the next container
        let count = 0;

        while (1) {
            if (containers[i]) {
                if (!containers[i].hasAttribute("data-show-for") || containers[i].getAttribute("data-show-for").indexOf(gender) !== -1) {
                    count++;
                }

                i++;
            } else {
                break;
            }
        }

        percent = Math.round(stepHistory.length / (stepHistory.length + count) * 100);
    }

    progressBar.style.width = (percent == 0 ? 4 : percent) + "%";
}


function populateCountries() {
    const vw = libphonenumber.getCountries();

    for (let c of vw) {
        const el = document.createElement("option");
        const nr = "+" + libphonenumber.getCountryCallingCode(c);
        el.value = nr;
        el.textContent = c + " (" + nr + ")";

        alleVorwahlen.appendChild(el);
    }
}


/**
 * Checks the E-Mail
 * 
 * @param {String} email 
 * @returns Boolean
 */
function validEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
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
let data_layer = document.querySelector('[name="data_layer"]').value;
dataLayer.push({
    'event': data_layer
});