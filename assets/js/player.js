document.addEventListener("DOMContentLoaded", function() {

    console.log("¡DOMContentLoaded se ha disparado!");
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

    //Inicializar el reproductor de audio
    const audioPlayer = document.getElementById('audio');
    let currentSongInfo = {
        title: "",
        artist: "",
        artwork: "",
        duration: 0
    };

    //Añadir manejadores de eventos para las tarjetas de canciones
    initializeSongCards();

    // Funcionalidad para los carruseles
    initializeCarousels();
    initVolumeControl();
    initProgressControl();



    function initializeSongCards() {
        const songCards = document.querySelectorAll('.player-page_song_card');

        songCards.forEach((card) => {
            card.addEventListener('click', () => {
                //Obtener la informacion de la cancion
                const songPath = this.getAttribute('data-song-path');
                if(!songPath) {
                    console.error('No song path found in data attribute');
                    return;
                }

                const songTitle = card.querySelector('.player-page_song_card_info h4').textContent;
                const artistName = card.querySelector('.player-page_song_card_info span').textContent;
                const albumArtwork = card.querySelector('.player-page_song_card_img').src;

                currentSongInfo = {
                    title: songTitle,
                    artist: artistName,
                    artwork: albumArtwork,
                    duration: 0 // Inicializar duración en 0
                };

                //Actualizar la interfaz de usuario
                updatePlayerUI();

                //Reproducir la canción
                playSong(songPath);

            });
        });
    }

    function playSong(songPath) {
        //Detener cualquier reproduccion actual
        audioPlayer.pause();

        //Establecer la nueva fuente de audio
        audioPlayer.src = songPath; 

        //Reproducir la nueva canción
        audioPlayer.load();
        audioPlayer.play()
            .then(()=>{
                console.log('Reproduccion iniciada');
            })
            .catch((error) => {
                console.error('Error al reproducir la canción:', error);
            });

        audioPlayer.addEventListener('loadedmetadata', function() {
            currentSongInfo.duration = audioPlayer.duration;
            updateTimeDisplay();
        });

        //Actualizar la barra de progreso durante la reproduccion
        audioPlayer.addEventListener('timeupdate', updateTimeDisplay)
    }

    function updatePlayerUI() {
        // Actualizar la información visible en la interfaz
        const songTitleElement = document.querySelector('.player-controller_song_info h3');
        const artistNameElement = document.querySelector('.player-controller_song_info span');
        const albumArtworkElement = document.querySelector('.player-controller_song_artwork');
        
        if (songTitleElement) songTitleElement.textContent = currentSongInfo.title;
        if (artistNameElement) artistNameElement.textContent = currentSongInfo.artist;
        if (albumArtworkElement) albumArtworkElement.src = currentSongInfo.artwork;
    }

    function updateTimeDisplay() {
        const currentTimeDisplay = document.querySelector('.player-controller_time:first-of-type');
        const totalTimeDisplay = document.querySelector('.player-controller_time:last-of-type');
        const progressBar = document.querySelector('.player-controller_progress_bar');
        const progressHandle = document.querySelector('.player-controller_progress_handle');
        
        if (currentTimeDisplay) {
            currentTimeDisplay.textContent = formatTime(audioPlayer.currentTime);
        }
        
        if (totalTimeDisplay) {
            totalTimeDisplay.textContent = formatTime(audioPlayer.duration);
        }
        
        const progressPercentage = (audioPlayer.currentTime / audioPlayer.duration) * 100 || 0;
        
        if (progressBar) {
            progressBar.style.width = `${progressPercentage}%`;
        }
        
        if (progressHandle) {
            progressHandle.style.left = `${progressPercentage}%`;
        }
    }

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

    function initVolumeControl() { // O pon este código donde configuras el volumen
        const volumeSlider = document.querySelector('.player-controller_volume_slider'); // Contenedor clickeable/arrastrable
        const volumeBar = document.querySelector('.player-controller_volume_bar');    // Barra de color
        const volumeHandle = document.querySelector('.player-controller_volume_handle'); // Círculo/Handle

        if (!volumeSlider || !volumeBar || !volumeHandle || !audioPlayer) {
            console.error("Error: Faltan elementos para el control de volumen o el audio player.");
            return; // Salir si falta algo
        }

        let isDraggingVolume = false;

        // Función para actualizar TODO (UI y audio) basado en el evento
        const setVolumeFromEvent = (e) => {
            const rect = volumeSlider.getBoundingClientRect();
            // Calcula la posición X del clic/arrastre relativo al inicio de la barra
            let relativeX = e.clientX - rect.left;
            let percentage = relativeX / rect.width;

            // Asegura que el porcentaje esté entre 0 y 1
            percentage = Math.max(0, Math.min(1, percentage));

            // Actualiza la UI (Barra y Handle)
            volumeBar.style.width = `${percentage * 100}%`;
            volumeHandle.style.left = `${percentage * 100}%`;

            audioPlayer.volume = percentage;
        };

        // Eventos del Mouse
        volumeSlider.addEventListener('mousedown', (e) => {
            isDraggingVolume = true;
            setVolumeFromEvent(e); // Aplica volumen al empezar a arrastrar
            e.preventDefault(); // Evita seleccionar texto mientras arrastras
        });

        document.addEventListener('mousemove', (e) => {
            if (isDraggingVolume) {
                setVolumeFromEvent(e); // Aplica volumen mientras se arrastra
            }
        });

        document.addEventListener('mouseup', () => {
            // Siempre detiene el arrastre cuando se suelta el botón en cualquier lugar
            isDraggingVolume = false;
        });

        // Evento para clics directos sobre la barra (sin arrastrar)
        volumeSlider.addEventListener('click', setVolumeFromEvent);

        // --- Inicialización del Volumen al cargar la página ---
        const initialVolume = 0.5; // 50%
        audioPlayer.volume = initialVolume;
        volumeBar.style.width = `${initialVolume * 100}%`;
        volumeHandle.style.left = `${initialVolume * 100}%`;

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