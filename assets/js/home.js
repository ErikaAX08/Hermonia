document.addEventListener("DOMContentLoaded", function () {
    const home_container = document.getElementById("home-main");
    const home_login_modal = document.getElementById("home-modal_login");
    const home_login_button = document.getElementById("home-button_login");
    const home_register_button = document.getElementById("home-button_register");
    const home_register_modal = document.getElementById("home-modal_register");

    home_login_button.addEventListener("click", function (e) {
        openModal(home_login_modal);
        e.stopPropagation();
    });

    home_register_button.addEventListener("click", function (e) {
        openModal(home_register_modal);
        e.stopPropagation();
    });

    document.body.addEventListener("click", function (event) {
        if (
            !home_login_modal.contains(event.target) &&
            !home_register_modal.contains(event.target) &&
            !home_login_button.contains(event.target) &&
            !home_register_button.contains(event.target)
        ) {
            closeModal();
        }
    });

    function openModal (modal) {
        home_container.style.opacity = "0.2";
        modal.style.display = "flex";
    }

    function closeModal() {
        home_container.style.opacity = "1";
        home_login_modal.style.display = "none";
        home_register_modal.style.display = "none";
    }
})