document.addEventListener("DOMContentLoaded", function () {
    const buttonNavigateToPlayer = document.getElementById("navigate_to_player");

    if (buttonNavigateToPlayer) {
        buttonNavigateToPlayer.addEventListener("click", function() {
            const currentOrigin = window.location.origin; // http://localhost
            const pathParts = window.location.pathname.split('/');
            const projectFolder = pathParts[1];

            window.location.href = `${currentOrigin}/${projectFolder}/player`;
        });
    }
});