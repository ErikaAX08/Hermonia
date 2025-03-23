document.addEventListener("DOMContentLoaded", function() {
    // Manejo de los elementos del menú (código existente)
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

    // Funcionalidad para los carruseles
    initializeCarousels();
    initVolumeControl();
    initProgressControl();

    // Función para inicializar todos los carruseles
    function initializeCarousels() {
        const carouselSections = document.querySelectorAll('.player-page_slider_section');

        carouselSections.forEach((section) => {
            const slider = section.querySelector('.player-page_content_slider');
            const prevBtn = section.querySelector('.player-page_slider_nav_button_back');
            const nextBtn = section.querySelector('.player-page_slider_nav_button_next');

            if (!slider || !prevBtn || !nextBtn) return;

            const scrollStep = slider.clientWidth * 0.8; // Desplazarse el 80% del ancho visible

            // Configurar botón anterior
            prevBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: -scrollStep,
                    behavior: 'smooth'
                });
            });

            // Configurar botón siguiente
            nextBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: scrollStep,
                    behavior: 'smooth'
                });
            });

            // Escuchar eventos de desplazamiento para actualizar estados de botones
            slider.addEventListener('scroll', updateButtonStates);

            // Verificar inicialmente los estados
            updateButtonStates();

            function updateButtonStates() {
                // Comprobar si se puede desplazar hacia atrás
                if (slider.scrollLeft <= 0) {
                    prevBtn.classList.add('disabled');
                } else {
                    prevBtn.classList.remove('disabled');
                }

                // Comprobar si se puede desplazar hacia adelante
                // scrollWidth = ancho total del contenido, clientWidth = ancho visible
                const maxScrollLeft = slider.scrollWidth - slider.clientWidth;
                if (slider.scrollLeft >= maxScrollLeft - 5) { // 5px de margen para compensar errores de redondeo
                    nextBtn.classList.add('disabled');
                } else {
                    nextBtn.classList.remove('disabled');
                }
            }
        });
    }

    function initVolumeControl() {
        const volumeSlider = document.querySelector('.player-controller_volume_slider');
        const volumeBar = document.querySelector('.player-controller_volume_bar');
        const volumeHandle = document.querySelector('.player-controller_volume_handle');

        if (!volumeSlider || !volumeBar || !volumeHandle) return;

        let isDragging = false;

        volumeSlider.addEventListener('mousedown', startDrag);
        document.addEventListener('mousemove', drag);
        document.addEventListener('mouseup', endDrag);
        volumeSlider.addEventListener('click', setVolume);

        function startDrag(e) {
            isDragging = true;
            setVolumeFromEvent(e);
        }

        function drag(e) {
            if (isDragging) {
                setVolumeFromEvent(e);
            }
        }

        function endDrag() {
            isDragging = false;
        }

        function setVolume(e) {
            setVolumeFromEvent(e);
        }

        function setVolumeFromEvent(e) {
            const rect = volumeSlider.getBoundingClientRect();
            let percentage = (e.clientX - rect.left) / rect.width;
            percentage = Math.max(0, Math.min(1, percentage));

            volumeBar.style.width = `${percentage * 100}%`;
            volumeHandle.style.left = `${percentage * 100}%`;

            console.log(`Volume set to: ${Math.round(percentage * 100)}%`);
        }
    }

    function initProgressControl() {
        const progressContainer = document.querySelector('.player-controller_progress_container');
        const progressBar = document.querySelector('.player-controller_progress_bar');
        const progressHandle = document.querySelector('.player-controller_progress_handle');
        const currentTimeDisplay = document.querySelector('.player-controller_time:first-of-type');
        const totalTimeDisplay = document.querySelector('.player-controller_time:last-of-type');

        if (!progressContainer || !progressBar || !progressHandle) return;

        let isDragging = false;
        const totalDuration = 260; // 4:20 en segundos

        progressContainer.addEventListener('mousedown', startDrag);
        document.addEventListener('mousemove', drag);
        document.addEventListener('mouseup', endDrag);
        progressContainer.addEventListener('click', setProgress);

        function startDrag(e) {
            isDragging = true;
            setProgressFromEvent(e);
        }

        function drag(e) {
            if (isDragging) {
                setProgressFromEvent(e);
            }
        }

        function endDrag() {
            isDragging = false;
        }

        function setProgress(e) {
            setProgressFromEvent(e);
        }

        function setProgressFromEvent(e) {
            const rect = progressContainer.getBoundingClientRect();
            let percentage = (e.clientX - rect.left) / rect.width;
            percentage = Math.max(0, Math.min(1, percentage));

            progressBar.style.width = `${percentage * 100}%`;
            progressHandle.style.left = `${percentage * 100}%`;

            // Actualizar el tiempo mostrado
            const currentSeconds = Math.round(percentage * totalDuration);
            currentTimeDisplay.textContent = formatTime(currentSeconds);

            // Aquí puedes agregar lógica para controlar la posición de reproducción real
            console.log(`Progress set to: ${Math.round(percentage * 100)}%`);
        }

        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
        }
    }
});