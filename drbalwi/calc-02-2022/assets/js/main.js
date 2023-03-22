let usernameSelector = document.querySelector('.final-result h2 span')
let gender = "HERR"
let formData = {}
const FORM_ID = 5;
const UPLOAD_FORM_ID = 6;
let bartAktiv = false;
let done = false;


function mailControl(email) {
    var pattern = new RegExp(
        /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
    );
    return pattern.test(email);
}

function inputValidation(divName) {
    let errorCount = 0;
    let parentDiv = document.querySelector(divName);

    let requiredInput = new Array(...parentDiv.querySelectorAll("input:required:not([disabled]):not([type='checkbox'])"));


    for (var i = 0; i < requiredInput.length; i++) {
        if (requiredInput[i].value === "" || requiredInput[i].value === "0") {
            requiredInput[i].classList.add("error");
            errorCount++;
        } else if (requiredInput[i].getAttribute("minlength") && requiredInput[i].value.length < requiredInput[i].getAttribute("minlength")) {
            requiredInput[i].classList.add("error");
            errorCount++;
        } else if (requiredInput[i].getAttribute("type") == "email" && !mailControl(requiredInput[i].value)) {
            requiredInput[i].classList.add("error");
            errorCount++;
        } else {
            requiredInput[i].classList.remove("error");
            errorCount - 1;
        }
    }

    if (!parentDiv.querySelector('.checkbox input').checked) {
        errorCount++;
        parentDiv.querySelector('.checkbox').classList.add('error')
    } else {
        errorCount - 1;
        parentDiv.querySelector('.checkbox').classList.remove('error')
    }
   
    if (errorCount == 0) {
        return false;
    } else {
        return true;
    }
}

$('.calc-slide').slick({
    slidesToShow: 1,
    pauseOnHover:false,
    infinite: false,
    speed: 700,
    fade: true,
    arrows: false,
    swipe: false
});
$('.calc-slide').on('afterChange', function (event, slick, currentSlide, nextSlide) {
    if (currentSlide > 0 && !done) {
        document.querySelector('#prevButton').classList.add('swipe')
    } else {
        document.querySelector('#prevButton').classList.remove('swipe')
    }
    if (currentSlide == 11) {
        setTimeout(() => {
            document.querySelector('.load-box').classList.remove('loading')
        }, 2000);
    }
    
});

//$('input[type="tel"]').mask('+00 000 0000000');


function goNext() {
    $('.calc-slide').slick('slickNext');
}

function goPrev() {
    $('.calc-slide').slick('slickPrev');
}

//start button
document.querySelector('#startButton').addEventListener('click', e=> {
    goNext()
})
//prev button
document.querySelector('#prevButton').addEventListener('click', e=> {
    goPrev()
})

//gender choice listener
document.querySelectorAll('input[name="input1"]').forEach(item=> {
    item.addEventListener('change', e=> {
        $('.calc-slide').slick('slickUnfilter');
        if (e.target.dataset.value == 'man') {
            $('.calc-slide').slick('slickFilter','.for-man');
            gender = "HERR"
        } else {
            $('.calc-slide').slick('slickFilter','.for-woman');
            gender = "FRAU"
        }
        formData.input1 = e.target.value
        setTimeout(() => {
            goNext()
        }, 300);
    })
})

//all options listener
document.querySelectorAll('.one-choice-cb').forEach(item=> {
    item.addEventListener('change', e=> {
        formData[e.target.name] = e.target.value
        setTimeout(() => {
            if(e.target.hasAttribute("data-bart"))
            {
                document.getElementById("uploadStep").classList.add("bartSelected");
                bartAktiv = true;
            }
            goNext()
        }, 250);
    })
})


document.querySelector('#firstResultButton').addEventListener('click', e=> {
    goNext()
})
document.querySelector('#secondResultButton').addEventListener('click', e=> {
    goNext()
})
document.querySelector('#getTheForm').addEventListener('click', e=> {
    goNext()
})


//form submit button
document.querySelector('#mainformSubmit').addEventListener('click', e=> {
    if (inputValidation('#mainForm')) {
        return;
    }
    document.querySelector('#mainformSubmit').classList.add("sending");

    usernameSelector.innerHTML = gender+' '+document.querySelector('[name="name"]').value
    formData.name = document.querySelector('[name="name"]').value
    formData.phone = document.querySelector('[name="tel"]').value
    formData.mail = document.querySelector('[name="email"]').value
    

    data = {
        "input_1": formData["input1"],  // gender
        "input_2": formData["input2"],  // bereich
        "input_3": formData["input3"],  // farbe
        "input_38": formData["input4"], // alter
        "input_39": formData["input5"], // aussage
        "input_5": formData["input6"],  // seit wann
        "input_4": formData["input7"],  // bereits transpl.
        "input_7": formData["input8"],  // wann
        "input_8": formData["name"],    // name
        "input_9": formData["mail"],    // email
        "input_10": formData["phone"],  // phone
    };

    let source = getCookie('source');
    if (source) {
        source = source.split("|");
        source = source[0] + "|" + source[source.length - 1];
        data["input_15"] = source;      // source
    }
    let medium = getCookie('medium');
    if (getCookie('medium')) {
        medium = medium.split("|");
        medium = medium[0] + "|" + medium[medium.length - 1];
        data["input_16"] = medium;      // medium
    }
    let campaign = getCookie('campaign');
    if (campaign) {
        campaign = campaign.split("|");
        campaign = campaign[0] + "|" + campaign[campaign.length - 1];
        data["input_19"] = campaign;    // campaign
    }
    let term = getCookie('term');
    if (term) {
        term = term.split("|");
        term = term[0] + "|" + term[term.length - 1];
        data["input_18"] = term;        // term
    }
    let content = getCookie('content');
    if (content) {
        content = content.split("|");
        content = content[0] + "|" + content[content.length - 1];
        data["input_17"] = content;     // content
    }
    let gclid = getCookie("gclid"); 	// google client id
    if(gclid)
        data["input_21"] = gclid;

    fetch("/wp-json/gf/v2/forms/" + FORM_ID + "/submissions", {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data["is_valid"] == true) {
            setTimeout(() => {
                done = true;
                document.querySelector('#prevButton').classList.remove('swipe');
                if(bartAktiv)
                {
                    document.getElementById("hintenLabel").textContent = "Links";
                    document.getElementById("obenLabel").textContent = "Rechts";
                }
                goNext();
            }, 600);
        }
    })
    .catch((error) => {
        console.error('Error:', error);
    })
    .finally(() => {

    });
})



//upload file listener
document.querySelectorAll('.upload-box-list input').forEach(item=> {
    item.addEventListener("change", function (e) {
        const files = e.target.files[0];
        let imgPreview = e.target.nextElementSibling;
        if(bartAktiv)
            imgPreview = imgPreview.nextElementSibling;
        // console.log(imgPreview)
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
            imgPreview.src = this.result
        });    
        
    });
})

//upload file button
document.querySelectorAll('.uploadFormSubmit').forEach(item=> {
    item.addEventListener('click', e=> {
        
        $('.uploadFormSubmit').addClass("sending");
        
        const boxes = document.querySelectorAll(".upload-box_item input");
        const uploadFormData = new FormData();
        uploadFormData.append("input_12", boxes[0].files[0]);
        uploadFormData.append("input_13", boxes[1].files[0]);
        uploadFormData.append("input_14", boxes[2].files[0]);
        uploadFormData.append("input_8", formData["name"]);
        uploadFormData.append("input_9", formData["mail"]);
        uploadFormData.append("input_10", formData["phone"]);


        fetch("/wp-json/gf/v2/forms/" + UPLOAD_FORM_ID + "/submissions", {
            method: 'POST',
            body: uploadFormData
        })
        .then(response => response.json())
        .then(data => {
            if (data["is_valid"] == true) {
                
                setTimeout(() => {
                    goNext()
                }, 600);

            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
        
    })
})


function getCookie(s)
{
    return Cookies.get(s);
}