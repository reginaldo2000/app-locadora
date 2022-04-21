(function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

let buttonMenu = document.querySelector(".button-sl-menu");
buttonMenu.addEventListener("click", function () {
    let navbar = document.querySelector(".navbar-sl-main");
    if (!buttonMenu.classList.contains("active-button-sl-menu")) {
        navbar.classList.add("active-navbar-sl-main");
        buttonMenu.classList.add("active-button-sl-menu");
    } else {
        navbar.classList.remove("active-navbar-sl-main");
        buttonMenu.classList.remove("active-button-sl-menu");
    }
});

const openModal = function (identificacao) {
    let modal = new bootstrap.Modal(document.getElementById(identificacao));
    modal.toggle();
};


