
/* window.addEventListener('load', function() {
     var form = document.getElementById('registrationForm');
     form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
     }, false);
}, false);

 */

const rules = {
    fname: {
        minlength: 2,
        maxlength: 50
    },
    lname: {
        minlength: 2,
        maxlength: 50
    },
    email: {
        email: true,
        regex: "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$"
    },
    pass: {
        minlength: 8,
        maxlength: 50
    },
    cpass: {
        minlength: 8,
        maxlength: 50,
        equalTo: "pass"
    },
    phone: {
        minlength: 5,
        maxlength: 20,
        regex: "^[0-9]{5,20}$"
    },
};

function validateForm() {
    let valid = true;
    for (let id in rules) {
        if (!validate(id)) {
            valid = false;
        }
    }
    console.log(valid)
    let element = document.getElementById("registrationForm")
    if(!valid) {
        element.classList.remove('novalidate');
        element.classList.add('was-validated');
    }else {
        element.classList.remove('was-validated');
        element.classList.add('novalidate');
    }
    return valid;
}

function validate(id) {
    let element = document.getElementById(id);
    let value = element.value;
    let ruleset = rules[id];
    let valid = true;
    let error = "";
    if (ruleset.minlength && value.length < ruleset.minlength) {
        valid = false;
        error = "Too short, minimum length is " + ruleset.minlength;
    }
    if (ruleset.maxlength && value.length > ruleset.maxlength) {
        valid = false;
        error = "Too long, maximum length is " + ruleset.maxlength;
    }
    if (ruleset.email && !value.match(ruleset.regex)) {
        valid = false;
        error = "Invalid email address";
    }
    if (ruleset.equalTo && value !== document.getElementById(ruleset.equalTo).value) {
        valid = false;
        error = "Passwords do not match";
    }
    if (valid) {
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
    } else {
        element.classList.remove("is-valid");
        element.classList.add("is-invalid");
        document.getElementById(id + "_error_field").textContent = error;
    }
    return valid;
}