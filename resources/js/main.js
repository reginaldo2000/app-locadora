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

let modalCategoria = document.querySelector("#modal-save-categoria");
modalCategoria.addEventListener('shown.bs.modal', function () {
    document.getElementById("categoria-nome").focus();
});

document.querySelector("#btn-nova-categoria").addEventListener("click", function () {
    document.querySelectorAll("#form-categoria input").forEach(function (element) {
        element.value = "";
    });
    openModal("modal-save-categoria");
});

let editCategoria = document.querySelectorAll("a[data-edit]");
editCategoria.forEach(function (element) {
    element.addEventListener("click", function () {
        let id = element.getAttribute("data-edit");
        fetch("http://localhost/locadora/categoria/get/" + id)
            .then(function (response) {
                return response.json();
            })
            .then(function (result) {
                document.getElementById("categoria-id").value = result.id;
                document.getElementById("categoria-nome").value = result.nome;
                openModal("modal-save-categoria");
                console.log(result);
            });
    });
});


const openModal = function(identificacao) {
    let modal = new bootstrap.Modal(document.getElementById(identificacao));
    modal.toggle();
};

