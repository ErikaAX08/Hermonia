document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll('.player-menu_item');

    menuItems.forEach(function(menuItem) {
        menuItem.addEventListener('click', function() {
            menuItems.forEach(function(item) {
                item.classList.remove('player-menu_item_selected');
            });

            this.classList.add('player-menu_item_selected');

            const selectedText = this.querySelector('.player-menu_item_text').textContent;
            console.log('Tab selected:', selectedText);
        });
    });
});