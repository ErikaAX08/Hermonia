<?php
$additional_styles = "views/player.css";
include BASE_TEMPLATES . 'header.php';
?>

<body class="player-body">

<main class="player-main">
    <aside class="player-container player-sidebar">
        <div>
           <img src="<?php echo BASE_ASSETS; ?>img/logo_large.svg"  alt="Hermonia"/>
        </div>
        <form class="player-search_form">
            <img alt="Buscar" src="<?php echo BASE_ASSETS; ?>img/icons/search.svg">
            <input class="player-search_input" placeholder="Buscar">
        </form>
        <div class="player-list_container">
            <ul class="player-menu">
                <li class="player-menu_item player-menu_item_selected">
                    <div class="player-menu_item_icon_container">
                        <svg class="player-menu_item_icon_svg" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.333008 13.8332V6.33317C0.333008 6.06928 0.392174 5.81928 0.510508 5.58317C0.628841 5.34706 0.791897 5.15262 0.999675 4.99984L5.99967 1.24984C6.29134 1.02762 6.62467 0.916504 6.99967 0.916504C7.37467 0.916504 7.70801 1.02762 7.99967 1.24984L12.9997 4.99984C13.208 5.15262 13.3713 5.34706 13.4897 5.58317C13.608 5.81928 13.6669 6.06928 13.6663 6.33317V13.8332C13.6663 14.2915 13.503 14.684 13.1763 15.0107C12.8497 15.3373 12.4575 15.5004 11.9997 15.4998H9.49967C9.26356 15.4998 9.06579 15.4198 8.90634 15.2598C8.7469 15.0998 8.6669 14.9021 8.66634 14.6665V10.4998C8.66634 10.2637 8.58634 10.0659 8.42634 9.9065C8.26634 9.74706 8.06856 9.66706 7.83301 9.6665H6.16634C5.93023 9.6665 5.73245 9.7465 5.57301 9.9065C5.41356 10.0665 5.33356 10.2643 5.33301 10.4998V14.6665C5.33301 14.9026 5.25301 15.1007 5.09301 15.2607C4.93301 15.4207 4.73523 15.5004 4.49967 15.4998H1.99967C1.54134 15.4998 1.14912 15.3368 0.823008 15.0107C0.496897 14.6846 0.333563 14.2921 0.333008 13.8332Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Inicio</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg  class="player-menu_item_icon_svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.16" fill-rule="evenodd" clip-rule="evenodd" d="M9 16.5C9.98491 16.5 10.9602 16.306 11.8701 15.9291C12.7801 15.5522 13.6069 14.9997 14.3033 14.3033C14.9997 13.6069 15.5522 12.7801 15.9291 11.8701C16.306 10.9602 16.5 9.98491 16.5 9C16.5 8.01509 16.306 7.03982 15.9291 6.12987C15.5522 5.21993 14.9997 4.39314 14.3033 3.6967C13.6069 3.00026 12.7801 2.44781 11.8701 2.0709C10.9602 1.69399 9.98491 1.5 9 1.5C7.01088 1.5 5.10322 2.29018 3.6967 3.6967C2.29018 5.10322 1.5 7.01088 1.5 9C1.5 10.9891 2.29018 12.8968 3.6967 14.3033C5.10322 15.7098 7.01088 16.5 9 16.5ZM11.5 6.5L8.4225 7.11583C8.10009 7.18045 7.804 7.33898 7.57149 7.57149C7.33898 7.804 7.18045 8.10009 7.11583 8.4225L6.5 11.5L9.5775 10.8842C9.90006 10.8197 10.1963 10.6612 10.429 10.4287C10.6617 10.1962 10.8203 9.90002 10.885 9.5775L11.5 6.5Z" fill="#7653FF"/>
                            <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" stroke="#7653FF" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.4225 7.11583L11.5 6.5L10.8842 9.5775C10.8197 9.90006 10.6612 10.1963 10.4287 10.429C10.1962 10.6617 9.90002 10.8203 9.5775 10.885L6.5 11.5L7.11583 8.4225C7.18045 8.10009 7.33898 7.804 7.57149 7.57149C7.804 7.33898 8.10009 7.18045 8.4225 7.11583Z" stroke="#7653FF" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Descubrir</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg  class="player-menu_item_icon_svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.33366 17.3334C1.87533 17.3334 1.4831 17.1703 1.15699 16.8442C0.830881 16.5181 0.667548 16.1256 0.666992 15.6667V4.5417L11.5628 0.104196C11.7573 0.0347519 11.9484 0.038363 12.1362 0.11503C12.3239 0.191696 12.4523 0.326974 12.5212 0.520863C12.59 0.714752 12.5867 0.905863 12.5112 1.0942C12.4356 1.28253 12.3 1.41086 12.1045 1.4792L5.91699 4.00003H15.667C16.1253 4.00003 16.5178 4.16336 16.8445 4.49003C17.1712 4.8167 17.3342 5.20892 17.3337 5.6667V15.6667C17.3337 16.125 17.1706 16.5175 16.8445 16.8442C16.5184 17.1709 16.1259 17.3339 15.667 17.3334H2.33366ZM5.66699 14.8334C6.25033 14.8334 6.74338 14.632 7.14616 14.2292C7.54894 13.8264 7.75033 13.3334 7.75033 12.75C7.75033 12.1667 7.54894 11.6736 7.14616 11.2709C6.74338 10.8681 6.25033 10.6667 5.66699 10.6667C5.08366 10.6667 4.5906 10.8681 4.18783 11.2709C3.78505 11.6736 3.58366 12.1667 3.58366 12.75C3.58366 13.3334 3.78505 13.8264 4.18783 14.2292C4.5906 14.632 5.08366 14.8334 5.66699 14.8334ZM2.33366 8.1667H12.3337V7.33336C12.3337 7.09725 12.4137 6.89947 12.5737 6.74003C12.7337 6.58059 12.9314 6.50059 13.167 6.50003C13.4025 6.49947 13.6006 6.57947 13.7612 6.74003C13.9217 6.90059 14.0014 7.09836 14.0003 7.33336V8.1667H15.667V5.6667H2.33366V8.1667Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Radio</span>
                </li>
            </ul>
            <span class="player-menu_title">Biblioteca</span>
            <ul class="player-menu">
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5833 13.6668C12 13.6668 11.5069 13.4654 11.1042 13.0627C10.7014 12.6599 10.5 12.1668 10.5 11.5835C10.5 11.0002 10.7014 10.5071 11.1042 10.1043C11.5069 9.70155 12 9.50016 12.5833 9.50016C12.6944 9.50016 12.8194 9.51072 12.9583 9.53183C13.0972 9.55294 13.25 9.59794 13.4167 9.66683V6.16683C13.4167 5.93072 13.4967 5.73294 13.6567 5.5735C13.8167 5.41405 14.0144 5.33405 14.25 5.3335H15.5C15.7361 5.3335 15.9342 5.4135 16.0942 5.5735C16.2542 5.7335 16.3339 5.93127 16.3333 6.16683C16.3328 6.40238 16.2528 6.60044 16.0933 6.761C15.9339 6.92155 15.7361 7.00127 15.5 7.00016H14.6667V11.5835C14.6667 12.1668 14.4653 12.6599 14.0625 13.0627C13.6597 13.4654 13.1667 13.6668 12.5833 13.6668ZM7.16667 7.00016C6.25 7.00016 5.46528 6.67377 4.8125 6.021C4.15972 5.36822 3.83333 4.5835 3.83333 3.66683C3.83333 2.75016 4.15972 1.96544 4.8125 1.31266C5.46528 0.659885 6.25 0.333496 7.16667 0.333496C8.08333 0.333496 8.86806 0.659885 9.52083 1.31266C10.1736 1.96544 10.5 2.75016 10.5 3.66683C10.5 4.5835 10.1736 5.36822 9.52083 6.021C8.86806 6.67377 8.08333 7.00016 7.16667 7.00016ZM1.33333 13.6668C1.09722 13.6668 0.899445 13.5868 0.74 13.4268C0.580556 13.2668 0.500556 13.0691 0.5 12.8335V11.3335C0.5 10.8474 0.621667 10.4099 0.865 10.021C1.10833 9.63211 1.43111 9.3335 1.83333 9.12516C2.69444 8.69461 3.56944 8.37183 4.45833 8.15683C5.34722 7.94183 6.25 7.83405 7.16667 7.8335C7.55556 7.8335 7.94111 7.85433 8.32333 7.896C8.70556 7.93766 9.09083 8.00016 9.47917 8.0835C9.71528 8.13905 9.86444 8.28488 9.92667 8.521C9.98889 8.75711 9.92306 8.97239 9.72917 9.16683C9.4375 9.51405 9.21861 9.89266 9.0725 10.3027C8.92639 10.7127 8.85361 11.1396 8.85417 11.5835C8.85417 11.7641 8.86472 11.9413 8.88583 12.1152C8.90694 12.2891 8.945 12.466 9 12.646C9.06944 12.896 9.03833 13.1288 8.90667 13.3443C8.775 13.5599 8.59083 13.6674 8.35417 13.6668H1.33333Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Artistas</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.01613 1.29875C4.06613 0.587322 4.47648 0.21875 5.24648 0.21875H10.5786C11.3486 0.21875 11.7504 0.587322 11.8008 1.29875H4.01613ZM2.53434 3.61732C2.66006 2.85554 3.02006 2.43696 3.85684 2.43696H11.9011C12.7383 2.43696 13.0979 2.85554 13.2236 3.61732H2.53434ZM3.21256 19.7809C1.47148 19.7809 0.583984 18.9188 0.583984 17.1859V7.54304C0.583984 5.81875 1.47148 4.94839 3.21256 4.94839H12.7883C14.5379 4.94839 15.4168 5.81875 15.4168 7.54304V17.1859C15.4168 18.9102 14.5461 19.7809 13.0393 19.7809H3.21256ZM10.3004 10.9409C10.6643 10.8423 10.7779 10.7666 10.7779 10.327V8.84161C10.7779 8.55375 10.6793 8.42482 10.2779 8.52339L8.0572 9.07661C7.68577 9.16768 7.60256 9.24339 7.60256 9.69054V13.1084C7.60256 13.442 7.5722 13.5027 7.19327 13.6084L6.49613 13.7905C5.80648 13.9727 5.22291 14.3816 5.22291 15.1245C5.22291 15.7684 5.70791 16.2384 6.47327 16.2384C7.5572 16.2384 8.2922 15.4577 8.2922 14.3588V11.7595C8.2922 11.4791 8.35291 11.4034 8.5272 11.3652L10.3004 10.9409Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Álbumes</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.6483 1.54267C15.7658 1.53184 15.875 1.626 15.875 1.75517V9.3135C15.3753 8.95169 14.7736 8.75766 14.1567 8.75934C12.5092 8.75934 11.1875 10.1102 11.1875 11.7593C11.1875 13.4085 12.5092 14.7593 14.1567 14.7593C15.8033 14.7593 17.125 13.4077 17.125 11.7593V1.75517C17.125 0.897669 16.3917 0.219335 15.5333 0.297669L6.8875 1.09434C6.52478 1.12821 6.18781 1.29638 5.94268 1.56587C5.69755 1.83536 5.56196 2.18671 5.5625 2.551V10.2627C5.06265 9.90115 4.46105 9.70742 3.84417 9.70933C2.19667 9.70933 0.875 11.0602 0.875 12.7093C0.875 14.3577 2.19667 15.7085 3.84417 15.7085C5.49083 15.7085 6.8125 14.3585 6.8125 12.7085V2.55184C6.8125 2.43934 6.8975 2.34934 7.0025 2.34017L15.6483 1.54267Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Canciones</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.99967 7.00016C6.08301 7.00016 5.29829 6.67377 4.64551 6.021C3.99273 5.36822 3.66634 4.5835 3.66634 3.66683C3.66634 2.75016 3.99273 1.96544 4.64551 1.31266C5.29829 0.659885 6.08301 0.333496 6.99967 0.333496C7.91634 0.333496 8.70106 0.659885 9.35384 1.31266C10.0066 1.96544 10.333 2.75016 10.333 3.66683C10.333 4.5835 10.0066 5.36822 9.35384 6.021C8.70106 6.67377 7.91634 7.00016 6.99967 7.00016ZM0.333008 12.0002V11.3335C0.333008 10.8613 0.454675 10.4274 0.698008 10.0318C0.941341 9.63627 1.26412 9.33405 1.66634 9.12516C2.52745 8.69461 3.40245 8.37183 4.29134 8.15683C5.18023 7.94183 6.08301 7.83405 6.99967 7.8335C7.91634 7.83294 8.81912 7.94072 9.70801 8.15683C10.5969 8.37294 11.4719 8.69572 12.333 9.12516C12.7358 9.3335 13.0588 9.63572 13.3022 10.0318C13.5455 10.4279 13.6669 10.8618 13.6663 11.3335V12.0002C13.6663 12.4585 13.5033 12.851 13.1772 13.1777C12.8511 13.5043 12.4586 13.6674 11.9997 13.6668H1.99967C1.54134 13.6668 1.14912 13.5038 0.823008 13.1777C0.496897 12.8516 0.333563 12.4591 0.333008 12.0002Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Hechos para ti</span>
                </li>
            </ul>
            <span class="player-menu_title">Playlists</span>
            <ul class="player-menu">
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.83366 0.666504C2.25902 0.666504 1.70792 0.894777 1.30159 1.30111C0.895265 1.70743 0.666992 2.25853 0.666992 2.83317V5.99984C0.666992 6.57447 0.895265 7.12557 1.30159 7.5319C1.70792 7.93823 2.25902 8.1665 2.83366 8.1665H6.00033C6.57496 8.1665 7.12606 7.93823 7.53239 7.5319C7.93872 7.12557 8.16699 6.57447 8.16699 5.99984V2.83317C8.16699 2.25853 7.93872 1.70743 7.53239 1.30111C7.12606 0.894777 6.57496 0.666504 6.00033 0.666504H2.83366ZM12.0003 0.666504C11.4257 0.666504 10.8746 0.894777 10.4683 1.30111C10.0619 1.70743 9.83366 2.25853 9.83366 2.83317V5.99984C9.83366 6.57447 10.0619 7.12557 10.4683 7.5319C10.8746 7.93823 11.4257 8.1665 12.0003 8.1665H15.167C15.7416 8.1665 16.2927 7.93823 16.6991 7.5319C17.1054 7.12557 17.3337 6.57447 17.3337 5.99984V2.83317C17.3337 2.25853 17.1054 1.70743 16.6991 1.30111C16.2927 0.894777 15.7416 0.666504 15.167 0.666504H12.0003ZM2.83366 9.83317C2.25902 9.83317 1.70792 10.0614 1.30159 10.4678C0.895265 10.8741 0.666992 11.4252 0.666992 11.9998V15.1665C0.666992 15.7411 0.895265 16.2922 1.30159 16.6986C1.70792 17.1049 2.25902 17.3332 2.83366 17.3332H6.00033C6.57496 17.3332 7.12606 17.1049 7.53239 16.6986C7.93872 16.2922 8.16699 15.7411 8.16699 15.1665V11.9998C8.16699 11.4252 7.93872 10.8741 7.53239 10.4678C7.12606 10.0614 6.57496 9.83317 6.00033 9.83317H2.83366ZM12.0003 9.83317C11.4257 9.83317 10.8746 10.0614 10.4683 10.4678C10.0619 10.8741 9.83366 11.4252 9.83366 11.9998V15.1665C9.83366 15.7411 10.0619 16.2922 10.4683 16.6986C10.8746 17.1049 11.4257 17.3332 12.0003 17.3332H15.167C15.7416 17.3332 16.2927 17.1049 16.6991 16.6986C17.1054 16.2922 17.3337 15.7411 17.3337 15.1665V11.9998C17.3337 11.4252 17.1054 10.8741 16.6991 10.4678C16.2927 10.0614 15.7416 9.83317 15.167 9.83317H12.0003Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Todas las Playlist</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.00033 15.7917L7.79199 14.6917C3.50033 10.8 0.666992 8.23333 0.666992 5.08333C0.666992 2.51667 2.68366 0.5 5.25033 0.5C6.70033 0.5 8.09199 1.175 9.00033 2.24167C9.90866 1.175 11.3003 0.5 12.7503 0.5C15.317 0.5 17.3337 2.51667 17.3337 5.08333C17.3337 8.23333 14.5003 10.8 10.2087 14.7L9.00033 15.7917Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Canciones Favoritas</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8337 13.7443C10.8337 15.356 12.1445 16.6668 13.7562 16.6668C15.3678 16.6668 16.6787 15.356 16.6787 13.7443C16.6787 13.5968 16.6562 13.4552 16.6345 13.3135H16.667V5.00016H18.3337V3.3335H15.8337C15.6126 3.3335 15.4007 3.42129 15.2444 3.57757C15.0881 3.73385 15.0003 3.94582 15.0003 4.16683V11.111C14.612 10.9242 14.1871 10.8257 13.7562 10.8227C12.9814 10.8233 12.2386 11.1313 11.6907 11.6791C11.1428 12.2268 10.8345 12.9696 10.8337 13.7443ZM1.66699 4.16683H13.3337V5.8335H1.66699V4.16683Z" fill="#261551"/>
                            <path d="M1.66699 7.5H13.3337V9.16667H1.66699V7.5ZM1.66699 10.8333H9.16699V12.5H1.66699V10.8333ZM1.66699 14.1667H9.16699V15.8333H1.66699V14.1667Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Raw Alejandro</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8337 13.7443C10.8337 15.356 12.1445 16.6668 13.7562 16.6668C15.3678 16.6668 16.6787 15.356 16.6787 13.7443C16.6787 13.5968 16.6562 13.4552 16.6345 13.3135H16.667V5.00016H18.3337V3.3335H15.8337C15.6126 3.3335 15.4007 3.42129 15.2444 3.57757C15.0881 3.73385 15.0003 3.94582 15.0003 4.16683V11.111C14.612 10.9242 14.1871 10.8257 13.7562 10.8227C12.9814 10.8233 12.2386 11.1313 11.6907 11.6791C11.1428 12.2268 10.8345 12.9696 10.8337 13.7443ZM1.66699 4.16683H13.3337V5.8335H1.66699V4.16683Z" fill="#261551"/>
                            <path d="M1.66699 7.5H13.3337V9.16667H1.66699V7.5ZM1.66699 10.8333H9.16699V12.5H1.66699V10.8333ZM1.66699 14.1667H9.16699V15.8333H1.66699V14.1667Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Billie Eilish</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8337 13.7443C10.8337 15.356 12.1445 16.6668 13.7562 16.6668C15.3678 16.6668 16.6787 15.356 16.6787 13.7443C16.6787 13.5968 16.6562 13.4552 16.6345 13.3135H16.667V5.00016H18.3337V3.3335H15.8337C15.6126 3.3335 15.4007 3.42129 15.2444 3.57757C15.0881 3.73385 15.0003 3.94582 15.0003 4.16683V11.111C14.612 10.9242 14.1871 10.8257 13.7562 10.8227C12.9814 10.8233 12.2386 11.1313 11.6907 11.6791C11.1428 12.2268 10.8345 12.9696 10.8337 13.7443ZM1.66699 4.16683H13.3337V5.8335H1.66699V4.16683Z" fill="#261551"/>
                            <path d="M1.66699 7.5H13.3337V9.16667H1.66699V7.5ZM1.66699 10.8333H9.16699V12.5H1.66699V10.8333ZM1.66699 14.1667H9.16699V15.8333H1.66699V14.1667Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Happier Than Ever</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8337 13.7443C10.8337 15.356 12.1445 16.6668 13.7562 16.6668C15.3678 16.6668 16.6787 15.356 16.6787 13.7443C16.6787 13.5968 16.6562 13.4552 16.6345 13.3135H16.667V5.00016H18.3337V3.3335H15.8337C15.6126 3.3335 15.4007 3.42129 15.2444 3.57757C15.0881 3.73385 15.0003 3.94582 15.0003 4.16683V11.111C14.612 10.9242 14.1871 10.8257 13.7562 10.8227C12.9814 10.8233 12.2386 11.1313 11.6907 11.6791C11.1428 12.2268 10.8345 12.9696 10.8337 13.7443ZM1.66699 4.16683H13.3337V5.8335H1.66699V4.16683Z" fill="#261551"/>
                            <path d="M1.66699 7.5H13.3337V9.16667H1.66699V7.5ZM1.66699 10.8333H9.16699V12.5H1.66699V10.8333ZM1.66699 14.1667H9.16699V15.8333H1.66699V14.1667Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">When we all fall asleep, Where do we go?</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8337 13.7443C10.8337 15.356 12.1445 16.6668 13.7562 16.6668C15.3678 16.6668 16.6787 15.356 16.6787 13.7443C16.6787 13.5968 16.6562 13.4552 16.6345 13.3135H16.667V5.00016H18.3337V3.3335H15.8337C15.6126 3.3335 15.4007 3.42129 15.2444 3.57757C15.0881 3.73385 15.0003 3.94582 15.0003 4.16683V11.111C14.612 10.9242 14.1871 10.8257 13.7562 10.8227C12.9814 10.8233 12.2386 11.1313 11.6907 11.6791C11.1428 12.2268 10.8345 12.9696 10.8337 13.7443ZM1.66699 4.16683H13.3337V5.8335H1.66699V4.16683Z" fill="#261551"/>
                            <path d="M1.66699 7.5H13.3337V9.16667H1.66699V7.5ZM1.66699 10.8333H9.16699V12.5H1.66699V10.8333ZM1.66699 14.1667H9.16699V15.8333H1.66699V14.1667Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">Hit me hard and soft</span>
                </li>
                <li class="player-menu_item">
                    <div class="player-menu_item_icon_container">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8337 13.7443C10.8337 15.356 12.1445 16.6668 13.7562 16.6668C15.3678 16.6668 16.6787 15.356 16.6787 13.7443C16.6787 13.5968 16.6562 13.4552 16.6345 13.3135H16.667V5.00016H18.3337V3.3335H15.8337C15.6126 3.3335 15.4007 3.42129 15.2444 3.57757C15.0881 3.73385 15.0003 3.94582 15.0003 4.16683V11.111C14.612 10.9242 14.1871 10.8257 13.7562 10.8227C12.9814 10.8233 12.2386 11.1313 11.6907 11.6791C11.1428 12.2268 10.8345 12.9696 10.8337 13.7443ZM1.66699 4.16683H13.3337V5.8335H1.66699V4.16683Z" fill="#261551"/>
                            <path d="M1.66699 7.5H13.3337V9.16667H1.66699V7.5ZM1.66699 10.8333H9.16699V12.5H1.66699V10.8333ZM1.66699 14.1667H9.16699V15.8333H1.66699V14.1667Z" fill="#261551"/>
                        </svg>
                    </div>
                    <span class="player-menu_item_text">FINNEAS</span>
                </li>
            </ul>
        </div>
        <div class="player-profile_container">
            <div class="player-profile_info">
                <h3 class="player-profile_username">Ivan Torres</h3>
                <span class="player-search_subscription">Prueba Gratuita</span>
                <button class="button button-accent">Mejorar Plan</button>
            </div>
            <div class="player-profile_options">
                <div>
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.00021 0.5C3.89371 0.5 1.37521 3.0185 1.37521 6.125V9.30762L0.32371 11.6908C0.267069 11.8192 0.243358 11.9597 0.254725 12.0996C0.266092 12.2395 0.312178 12.3743 0.388809 12.4919C0.46544 12.6095 0.570195 12.7061 0.693585 12.773C0.816976 12.8399 0.955104 12.875 1.09546 12.875H12.905C13.0453 12.875 13.1834 12.8399 13.3068 12.773C13.4302 12.7061 13.535 12.6095 13.6116 12.4919C13.6882 12.3743 13.7343 12.2395 13.7457 12.0996C13.7571 11.9597 13.7334 11.8192 13.6767 11.6908L12.6252 9.30762V6.125C12.6252 3.0185 10.1067 0.5 7.00021 0.5ZM7.00021 15.5C6.46843 15.5001 5.95381 15.3118 5.54763 14.9686C5.14145 14.6253 4.86997 14.1493 4.78133 13.625H9.21908C9.13046 14.1493 8.85897 14.6253 8.45279 14.9686C8.04661 15.3118 7.53199 15.5001 7.00021 15.5Z" fill="#261551"/>
                    </svg>
                </div><?php
                $additional_styles = "views/player.css";
                include BASE_TEMPLATES . 'header.php';
                ?>

                <div class="player-profile_photo_container">
                    <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14.5C15.5899 14.5 18.5 11.5899 18.5 8C18.5 4.41015 15.5899 1.5 12 1.5C8.41015 1.5 5.5 4.41015 5.5 8C5.5 11.5899 8.41015 14.5 12 14.5Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.5 24.5C1.5 19.5 5.5 14.5 12 14.5C18.5 14.5 22.5 19.5 22.5 24.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </aside>
    <div class="player-container player-content">
        Descubrir
        <div class="player-controller">
            <div>

            </div>
            <div class="player-controller_photo">

            </div>
        </div>
    </div>
</main>

<script src="<?php echo BASE_ASSETS; ?>js/player.js"></script>

</body>