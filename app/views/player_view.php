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
                <?php if(isset($user)) : ?>
                    <h3 class="player-profile_username"><?php echo htmlspecialchars($user['nombre'] ?? ''); ?></h3>
                    <span class="player-search_subscription"><?php echo htmlspecialchars($user['suscripcion'] ?? ''); ?></span>
                    <button class="button button-accent">Mejorar Plan</button>
                <?php else : ?>
                    <p>No se pudieron cargar los datos del usuario.</p>
                <?php endif; ?>
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
        <!-- Page -->
        <div class="player-page">
            <h2 class="player-page_title">Descubrir</h2>
            <div class="player-page_slider_section">
                <div class="player-page_slider_nav_container">
                    <div class="player-page_slider_nav_button player-page_slider_nav_button_back">
                        <img src="<?php echo BASE_ASSETS; ?>img/icons/slider_arrow_back.svg" alt="">
                    </div>
                    <div class="player-page_slider_nav_button player-page_slider_nav_button_next">
                        <img src="<?php echo BASE_ASSETS; ?>img/icons/slider_arrow_next.svg" alt="">
                    </div>
                </div>
                <div class="player-page_content_slider">
                    <!-- Playlist slider -->
                    <div class="player-page_playlist_card">
                        <div class="player-page_playlist_card_info_container">
                            <p class="player-page_playlist_card_info">Playlist Actualizada</p>
                            <h3 class="player-page_playlist_card_title">De Antro</h3>
                            <span class="player-page_playlist_card_category">RIEV Hermonia Dance</span>
                        </div>
                        <img class="player-page_playlist_card_img" src="<?php echo BASE_ASSETS; ?>img/playlist/de_antro.png" alt="De Antro">
                    </div>
                    <div class="player-page_playlist_card">
                        <div class="player-page_playlist_card_info_container">
                            <p class="player-page_playlist_card_info">Playlist Actualizada</p>
                            <h3 class="player-page_playlist_card_title">El Nuevo Orden</h3>
                            <span class="player-page_playlist_card_category">RIEV Hermonia Latinoamérica</span>
                        </div>
                        <img class="player-page_playlist_card_img" src="<?php echo BASE_ASSETS; ?>img/playlist/nuevo_orden.png" alt="De Antro">
                    </div>
                    <div class="player-page_playlist_card">
                        <div class="player-page_playlist_card_info_container">
                            <p class="player-page_playlist_card_info">Playlist Actualizada</p>
                            <h3 class="player-page_playlist_card_title">Viral</h3>
                            <span class="player-page_playlist_card_category">RIEV Hermonia</span>
                        </div>
                        <img class="player-page_playlist_card_img" src="<?php echo BASE_ASSETS; ?>img/playlist/viral.png" alt="De Antro">
                    </div>
                    <div class="player-page_playlist_card">
                        <div class="player-page_playlist_card_info_container">
                            <p class="player-page_playlist_card_info">Playlist Actualizada</p>
                            <h3 class="player-page_playlist_card_title">¡Dale Play!</h3>
                            <span class="player-page_playlist_card_category">RIEV Hermonia Latinoamérica</span>
                        </div>
                        <img class="player-page_playlist_card_img" src="<?php echo BASE_ASSETS; ?>img/playlist/dale_play.png" alt="De Antro">
                    </div>
                </div>
            </div>
            <h3 class="player-page_playlist_card_title">Canciones Nuevas</h3>
            <div class="player-page_slider_section">
                <div class="player-page_slider_nav_container">
                    <div class="player-page_slider_nav_button player-page_slider_nav_button_back">
                        <img src="<?php echo BASE_ASSETS; ?>img/icons/slider_arrow_back.svg" alt="">
                    </div>
                    <div class="player-page_slider_nav_button player-page_slider_nav_button_next">
                        <img src="<?php echo BASE_ASSETS; ?>img/icons/slider_arrow_next.svg" alt="">
                    </div>
                </div>
                <div class="player-page_content_slider">
                    <!-- Song card -->
                    <div class="player-page_songs_container">
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                    </div>
                    <div class="player-page_songs_container">
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                    </div>
                    <div class="player-page_songs_container">
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                    </div>
                    <div class="player-page_songs_container">
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                        <div class="player-page_song_card">
                            <img class="player-page_song_card_img" src="<?php echo BASE_ASSETS; ?>img/songs/eme.jpeg" alt="">
                            <div class="player-page_song_card_info">
                                <h4>EME</h4>
                                <span>Nsqk</span>
                            </div>
                            <img class="player-page_song_card_menu" src="<?php echo BASE_ASSETS; ?>img/icons/menu_points.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controller -->
        <div class="player-controller">
            <div class="player-controller_controls">
                <div class="player-controller_wrapper">
                    <!-- Like and expand -->
                    <div class="player-controller_like_container">
                        <button class="player-controller_button">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.1 15.55L10 15.65L9.89 15.55C5.14 11.24 2 8.39 2 5.5C2 3.5 3.5 2 5.5 2C7.04 2 8.54 3 9.07 4.36H10.93C11.46 3 12.96 2 14.5 2C16.5 2 18 3.5 18 5.5C18 8.39 14.86 11.24 10.1 15.55ZM14.5 0C12.76 0 11.09 0.81 10 2.08C8.91 0.81 7.24 0 5.5 0C2.42 0 0 2.41 0 5.5C0 9.27 3.4 12.36 8.55 17.03L10 18.35L11.45 17.03C16.6 12.36 20 9.27 20 5.5C20 2.41 17.58 0 14.5 0Z" fill="#261551"/>
                            </svg>
                        </button>
                        <button class="player-controller_button">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6V4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H6M16 2H18C18.5304 2 19.0391 2.21071 19.4142 2.58579C19.7893 2.96086 20 3.46957 20 4V6M20 16V18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H16M6 20H4C3.46957 20 2.96086 19.7893 2.58579 19.4142C2.21071 19.0391 2 18.5304 2 18V16" stroke="#261551" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 7H7C6.44772 7 6 7.44772 6 8V14C6 14.5523 6.44772 15 7 15H15C15.5523 15 16 14.5523 16 14V8C16 7.44772 15.5523 7 15 7Z" stroke="#261551" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Songs button controller -->
                    <div class="player-controller_controls_main">
                        <button class="player-controller_button player-controller_button-shuffle">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5 6.50017C17.8729 6.50019 18.2324 6.63909 18.5084 6.88979C18.7844 7.14049 18.9572 7.48501 18.993 7.85617L19 8.00017V12.0002C19 13.1569 18.5545 14.2693 17.7561 15.1063C16.9576 15.9433 15.8675 16.4407 14.712 16.4952L14.5 16.5002H6.06L6.04 16.8122L6.029 16.9522C5.973 17.6712 5.28 18.1222 4.698 17.8172L4.384 17.6492L4.016 17.4402L3.813 17.3212L3.374 17.0522C3.06129 16.8547 2.75385 16.6489 2.452 16.4352L2.067 16.1552L1.744 15.9102L1.607 15.8032C1.118 15.4132 1.137 14.6082 1.657 14.1972L1.793 14.0902L2.113 13.8482L2.493 13.5732L2.931 13.2722C3.16604 13.1153 3.40409 12.9629 3.645 12.8152L4.071 12.5602L4.446 12.3492L4.762 12.1792C5.339 11.8792 5.969 12.2642 6.024 12.9352L6.062 13.5002H14.5C14.8729 13.5002 15.2324 13.3613 15.5084 13.1106C15.7844 12.8599 15.9572 12.5153 15.993 12.1442L16 12.0002V8.00017C16 7.60234 16.158 7.22081 16.4393 6.93951C16.7206 6.6582 17.1022 6.50017 17.5 6.50017ZM14.302 0.18317L14.616 0.351169L14.984 0.560169C15.0507 0.597503 15.1183 0.637169 15.187 0.679169L15.626 0.948169C15.9387 1.14568 16.2462 1.35142 16.548 1.56517L16.933 1.84517L17.256 2.09017L17.393 2.19717C17.882 2.58717 17.863 3.39217 17.343 3.80317L17.207 3.91017L16.887 4.15217L16.507 4.42717C16.131 4.69181 15.7468 4.9446 15.355 5.18517L14.929 5.44017L14.554 5.65117L14.238 5.82117C13.661 6.12117 13.031 5.73617 12.977 5.06517L12.937 4.50017H4.5C4.10218 4.50017 3.72064 4.6582 3.43934 4.93951C3.15804 5.22081 3 5.60234 3 6.00017V10.0002C3 10.398 2.84196 10.7795 2.56066 11.0608C2.27936 11.3421 1.89782 11.5002 1.5 11.5002C1.10218 11.5002 0.720644 11.3421 0.43934 11.0608C0.158035 10.7795 0 10.398 0 10.0002V6.00017C0 4.80669 0.474106 3.6621 1.31802 2.81819C2.16193 1.97428 3.30653 1.50017 4.5 1.50017H12.94L12.971 1.04817C13.027 0.329169 13.72 -0.12183 14.302 0.18317Z" fill="#261551"/>
                            </svg>
                        </button>
                        <button class="player-controller_button player-controller_button-prev">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.70627 0.375C1.97149 0.375 2.22584 0.477064 2.41338 0.658741C2.60091 0.840416 2.70627 1.08682 2.70627 1.34375L2.70627 22.6562C2.70627 22.9132 2.60091 23.1596 2.41338 23.3413C2.22584 23.5229 1.97149 23.625 1.70627 23.625C1.44106 23.625 1.1867 23.5229 0.999165 23.3413C0.811628 23.1596 0.706272 22.9132 0.706272 22.6563L0.706272 1.34375C0.704479 1.21605 0.72912 1.0893 0.77874 0.97098C0.82836 0.852661 0.901949 0.745174 0.995167 0.654869C1.08839 0.564564 1.19934 0.493271 1.32148 0.445202C1.44361 0.397133 1.57446 0.373262 1.70627 0.375ZM6.23961 12.7608C6.22762 12.3107 6.32376 11.864 6.52044 11.4561C6.71712 11.0481 7.00896 10.69 7.37294 10.41L19.5196 1.25204C19.9543 0.933002 20.4703 0.735376 21.0129 0.68371H21.3196C21.7812 0.672516 22.2388 0.770029 22.6529 0.967875C23.1461 1.20103 23.5618 1.56351 23.8529 2.01412C24.1428 2.46326 24.2954 2.98277 24.2929 3.51246V20.4979C24.2915 21.0073 24.1487 21.5069 23.8796 21.9445C23.6022 22.3796 23.2113 22.736 22.7463 22.9779C22.2831 23.2204 21.7605 23.3365 21.2345 23.3138C20.7084 23.291 20.1987 23.1303 19.7596 22.8487L7.59961 14.9954C7.21294 14.7487 6.89294 14.4167 6.66627 14.0266C6.42701 13.6414 6.28113 13.2086 6.23961 12.7608Z" fill="#261551"/>
                            </svg>
                        </button>
                        <button class="player-controller_button player-controller_button-play">
                            <!--
                            <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0V24L20 12L0 0Z" fill="white"/>
                            </svg> -->
                            <svg class="pause-icon" width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="6" height="20" fill="white"/>
                                <rect x="12" y="2" width="6" height="20" fill="white"/>
                            </svg>
                        </button>
                        <button class="player-controller_button player-controller_button-next">
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.1304 24C23.8569 24 23.5946 23.8946 23.4012 23.7071C23.2078 23.5196 23.0992 23.2652 23.0992 23V1C23.0992 0.734784 23.2078 0.480429 23.4012 0.292893C23.5946 0.105357 23.8569 0 24.1304 0C24.4039 0 24.6662 0.105357 24.8596 0.292893C25.053 0.480429 25.1617 0.734784 25.1617 1V23C25.1635 23.1318 25.1381 23.2627 25.0869 23.3848C25.0358 23.5069 24.9599 23.6179 24.8637 23.7111C24.7676 23.8043 24.6532 23.8779 24.5272 23.9275C24.4013 23.9772 24.2664 24.0018 24.1304 24ZM19.4554 11.2147C19.4678 11.6793 19.3686 12.1404 19.1658 12.5615C18.963 12.9826 18.662 13.3523 18.2867 13.6413L5.76042 23.0947C5.31217 23.424 4.78004 23.628 4.22042 23.6813H3.90417C3.42811 23.6929 2.95627 23.5922 2.52917 23.388C2.02062 23.1473 1.59188 22.7732 1.29167 22.308C0.992747 21.8444 0.835421 21.3081 0.83792 20.7613V3.228C0.839405 2.70217 0.986625 2.1864 1.26417 1.73467C1.5502 1.2856 1.95335 0.917666 2.43292 0.668C2.91061 0.417614 3.44948 0.297762 3.99195 0.321246C4.53443 0.34473 5.06013 0.510667 5.51292 0.801333L18.0529 8.908C18.4517 9.16267 18.7817 9.50533 19.0154 9.908C19.2622 10.3057 19.4126 10.7524 19.4554 11.2147Z" fill="#261551"/>
                            </svg>
                        </button>
                        <button class="player-controller_button player-controller_button-repeat">
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93389 5.05125C7.48759 5.74125 6.97806 6.765 6.4053 8.1225C6.24166 7.785 6.10405 7.51313 5.99247 7.30688C5.88089 7.10063 5.73027 6.8625 5.54059 6.5925C5.35091 6.3225 5.16123 6.11063 4.97155 5.95688C4.78187 5.80313 4.54756 5.67188 4.26862 5.56313C3.98968 5.45438 3.68657 5.4 3.35928 5.4H0.859973C0.755835 5.4 0.670294 5.36625 0.603348 5.29875C0.536402 5.23125 0.50293 5.145 0.50293 5.04V2.88C0.50293 2.775 0.536402 2.68875 0.603348 2.62125C0.670294 2.55375 0.755835 2.52 0.859973 2.52H3.35928C5.21888 2.52 6.74375 3.36375 7.93389 5.05125ZM20.4974 14.04C20.4974 14.145 20.4639 14.2313 20.3969 14.2988L16.8265 17.8988C16.7596 17.9663 16.674 18 16.5699 18C16.4732 18 16.3895 17.9644 16.3188 17.8931C16.2482 17.8219 16.2128 17.7375 16.2128 17.64V15.48C15.9748 15.48 15.6587 15.4819 15.2644 15.4856C14.8702 15.4894 14.5689 15.4931 14.3607 15.4969C14.1524 15.5006 13.8809 15.4969 13.5462 15.4856C13.2114 15.4744 12.9474 15.4556 12.754 15.4294C12.5606 15.4031 12.3225 15.3638 12.0399 15.3113C11.7572 15.2588 11.5229 15.1894 11.337 15.1031C11.151 15.0169 10.9353 14.91 10.6898 14.7825C10.4444 14.655 10.2249 14.505 10.0315 14.3325C9.83812 14.16 9.63357 13.9594 9.41785 13.7306C9.20214 13.5019 8.99386 13.2413 8.79303 12.9488C9.23189 12.2513 9.7377 11.2275 10.3105 9.8775C10.4741 10.215 10.6117 10.4869 10.7233 10.6931C10.8349 10.8994 10.9855 11.1375 11.1752 11.4075C11.3649 11.6775 11.5545 11.8894 11.7442 12.0431C11.9339 12.1969 12.1682 12.3281 12.4471 12.4369C12.7261 12.5456 13.0292 12.6 13.3565 12.6H16.2128V10.44C16.2128 10.335 16.2463 10.2488 16.3133 10.1813C16.3802 10.1138 16.4657 10.08 16.5699 10.08C16.6591 10.08 16.7484 10.1175 16.8377 10.1925L20.3969 13.7813C20.4639 13.8488 20.4974 13.935 20.4974 14.04ZM20.4974 3.96C20.4974 4.065 20.4639 4.15125 20.3969 4.21875L16.8265 7.81875C16.7596 7.88625 16.674 7.92 16.5699 7.92C16.4732 7.92 16.3895 7.88438 16.3188 7.81313C16.2482 7.74188 16.2128 7.6575 16.2128 7.56V5.4H13.3565C12.9994 5.4 12.6759 5.45625 12.3858 5.56875C12.0957 5.68125 11.8391 5.85 11.6159 6.075C11.3927 6.3 11.2031 6.53063 11.0469 6.76688C10.8907 7.00313 10.7233 7.29375 10.5448 7.63875C10.3067 8.10375 10.0166 8.745 9.67448 9.5625C9.45876 10.0575 9.27466 10.4738 9.12218 10.8113C8.96969 11.1488 8.76885 11.5425 8.51967 11.9925C8.27048 12.4425 8.03245 12.8175 7.80558 13.1175C7.57871 13.4175 7.30349 13.7288 6.97992 14.0513C6.65635 14.3738 6.32162 14.6306 5.97573 14.8219C5.62985 15.0131 5.23375 15.1706 4.78745 15.2944C4.34114 15.4181 3.86509 15.48 3.35928 15.48H0.859973C0.755835 15.48 0.670294 15.4463 0.603348 15.3788C0.536402 15.3113 0.50293 15.225 0.50293 15.12V12.96C0.50293 12.855 0.536402 12.7688 0.603348 12.7013C0.670294 12.6338 0.755835 12.6 0.859973 12.6H3.35928C3.71632 12.6 4.03989 12.5438 4.32999 12.4313C4.62008 12.3188 4.87671 12.15 5.09986 11.925C5.32301 11.7 5.51269 11.4694 5.6689 11.2331C5.82511 10.9969 5.99247 10.7063 6.17099 10.3613C6.40902 9.89625 6.69912 9.255 7.04128 8.4375C7.257 7.9425 7.4411 7.52625 7.59359 7.18875C7.74607 6.85125 7.94691 6.4575 8.1961 6.0075C8.44528 5.5575 8.68331 5.1825 8.91018 4.8825C9.13705 4.5825 9.41227 4.27125 9.73584 3.94875C10.0594 3.62625 10.3941 3.36938 10.74 3.17813C11.0859 2.98688 11.482 2.82938 11.9283 2.70563C12.3746 2.58188 12.8507 2.52 13.3565 2.52H16.2128V0.36C16.2128 0.255 16.2463 0.16875 16.3133 0.10125C16.3802 0.03375 16.4657 0 16.5699 0C16.6591 0 16.7484 0.0375 16.8377 0.1125L20.3969 3.70125C20.4639 3.76875 20.4974 3.855 20.4974 3.96Z" fill="#261551"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Volume slider -->
                    <div class="player-controller_volume_container">
                        <button class="player-controller_button player-controller_button-volume">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0451 0.443789C12.2136 0.668768 12.3063 0.954743 12.3063 1.25072V16.7513C12.3063 16.9898 12.2462 17.2233 12.1329 17.4242C12.0197 17.6252 11.858 17.7853 11.6671 17.8855C11.4761 17.9858 11.2638 18.0221 11.0553 17.9902C10.8467 17.9582 10.6506 17.8594 10.49 17.7052L6.10631 13.4996H2.81877C2.29211 13.4996 1.78703 13.2626 1.41462 12.8407C1.04222 12.4187 0.833008 11.8465 0.833008 11.2498V6.75022C0.833008 6.15354 1.04222 5.58129 1.41462 5.15938C1.78703 4.73746 2.29211 4.50042 2.81877 4.50042H6.10631L10.4909 0.296802C10.7142 0.082907 11.0034 -0.0217622 11.2948 0.00580006C11.5863 0.0333624 11.8561 0.190901 12.0451 0.443789ZM14.1632 5.64032C14.313 5.53704 14.4929 5.50535 14.6634 5.55222C14.8338 5.59909 14.9809 5.72069 15.0722 5.8903C15.5788 6.83022 15.833 7.88212 15.833 9.03002C15.833 10.1779 15.5788 11.2308 15.0722 12.1707C15.0282 12.2576 14.9693 12.3337 14.8989 12.3943C14.8286 12.455 14.7482 12.4991 14.6625 12.524C14.5769 12.5489 14.4877 12.5541 14.4002 12.5392C14.3128 12.5244 14.2288 12.4899 14.1533 12.4377C14.0778 12.3855 14.0124 12.3168 13.9607 12.2354C13.9091 12.1541 13.8724 12.0618 13.8527 11.9642C13.8331 11.8665 13.8309 11.7653 13.8463 11.6667C13.8618 11.568 13.8945 11.4739 13.9426 11.3898C14.3203 10.6879 14.5092 9.90694 14.5092 9.03002C14.5092 8.1531 14.3203 7.37317 13.9426 6.67123C13.8514 6.50147 13.8234 6.29766 13.8648 6.10456C13.9062 5.91145 14.0135 5.74385 14.1632 5.64032Z" fill="#261551"/>
                            </svg>
                        </button>
                        <div class="player-controller_volume_slider">
                            <div class="player-controller_volume_bar"></div>
                            <div class="player-controller_volume_handle"></div>
                        </div>
                        <button class="player-controller_button player-controller_button-volume">
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.05 1.25008V16.746C11.05 17.825 9.96709 18.397 9.28199 17.68L5.4638 13.686C5.34711 13.5642 5.1965 13.497 5.0405 13.497H1.9125C1.66135 13.497 1.41265 13.4388 1.18062 13.3258C0.948582 13.2127 0.73775 13.047 0.560158 12.838C0.382566 12.6291 0.241692 12.3811 0.14558 12.1081C0.0494683 11.8351 0 11.5425 0 11.247V6.74906C0.000225368 6.1525 0.20182 5.58046 0.560458 5.15872C0.919097 4.73698 1.40542 4.50007 1.9125 4.50007H5.0405C5.19661 4.49985 5.34723 4.43224 5.4638 4.31007L9.28114 0.317086C9.96709 -0.399911 11.05 0.172087 11.05 1.25008ZM14.4432 2.89807C14.579 2.77968 14.7493 2.7296 14.9165 2.75886C15.0837 2.78811 15.2342 2.8943 15.3348 3.05407C16.4189 4.77427 17.0028 6.85968 17 9.00105C17.0023 11.1422 16.4181 13.2272 15.334 14.947C15.2323 15.1034 15.0824 15.2065 14.9166 15.234C14.7509 15.2614 14.5826 15.2111 14.4481 15.0939C14.3136 14.9766 14.2237 14.8019 14.1978 14.6073C14.172 14.4127 14.2121 14.214 14.3097 14.054C15.2311 12.5926 15.7274 10.8206 15.725 9.00105C15.7276 7.18116 15.2313 5.40879 14.3097 3.94707C14.2598 3.86785 14.2237 3.77783 14.2034 3.68216C14.1831 3.58649 14.179 3.48704 14.1914 3.38951C14.2038 3.29199 14.2324 3.19829 14.2756 3.11379C14.3188 3.02929 14.3758 2.95665 14.4432 2.89807ZM12.8715 5.37006C12.9452 5.3231 13.0259 5.29365 13.1092 5.28341C13.1925 5.27316 13.2767 5.28233 13.3569 5.31037C13.4372 5.33842 13.512 5.38479 13.5771 5.44685C13.6421 5.50891 13.6961 5.58544 13.736 5.67206C14.1916 6.66206 14.45 7.79706 14.45 9.00105C14.4504 10.1629 14.2051 11.3066 13.736 12.329C13.6961 12.4157 13.6422 12.4923 13.5772 12.5544C13.5122 12.6166 13.4374 12.663 13.3571 12.6912C13.2768 12.7193 13.1926 12.7286 13.1093 12.7184C13.026 12.7083 12.9452 12.6789 12.8715 12.632C12.7979 12.5852 12.7328 12.5217 12.68 12.4452C12.6271 12.3687 12.5876 12.2807 12.5637 12.1863C12.5398 12.0919 12.5319 11.9928 12.5406 11.8948C12.5492 11.7968 12.5741 11.7017 12.614 11.615C12.9824 10.812 13.1752 9.91364 13.175 9.00105C13.175 8.05305 12.971 7.16306 12.614 6.38606C12.5337 6.21113 12.5157 6.00586 12.564 5.81535C12.6123 5.62483 12.7229 5.46467 12.8715 5.37006Z" fill="#261551"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Time progress -->
                <div class="player-controller_time_progress">
                    <span class="player-controller_time">1:16</span>
                    <div class="player-controller_progress_container">
                        <div class="player-controller_progress_bar" style="width: 25%;"></div>
                        <div class="player-controller_progress_handle" style="left: 25%;"></div>
                    </div>
                    <span class="player-controller_time">4:20</span>
                </div>
            </div>

            <!-- Album Info -->
            <div class="player-controller_info">
                <div class="player-controller_cover">
                    <img src="<?php echo BASE_ASSETS; ?>img/albums/happier_than_ever.jpg" alt="Happier Than Ever">
                </div>
                <div class="player-controller_details">
                    <div class="player-controller_song">Happier Than Ever</div>
                    <div class="player-controller_artist">Billie Eilish</div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="<?php echo BASE_ASSETS; ?>js/player.js"></script>

</body>