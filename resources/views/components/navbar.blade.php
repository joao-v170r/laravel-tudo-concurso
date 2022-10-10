<nav class="navbar p-2 navbar-expand-lg nav-background-color">
    <div class="container-fluid ">
        <a class="navbar-brand" href="">
            <span class="rounded float-start">
                <svg width="150" height="90" viewBox="0 0 202 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="13" width="202" height="115" rx="5" fill="#F57B0A"/>
                    <g filter="url(#filter0_i_52_37)">
                        <path d="M20.6 105V100.6L28.8 99.1V45.8H14.5L12.4 56.6H7.5V40.2H58.6V56.6H53.7L51.7 45.8H37.4V99.1L45.6 100.6V105H20.6ZM94.2016 106.1C84.1349 106.1 76.7016 103.3 71.9016 97.7C67.1016 92.1 64.7016 84 64.7016 73.4C64.7016 68.8667 65.4016 64.5333 66.8016 60.4C68.2682 56.2667 70.3682 52.6 73.1016 49.4C75.8349 46.2 79.1682 43.6667 83.1016 41.8C87.0349 39.9333 91.5016 39 96.5016 39C100.168 39 103.668 39.2667 107.002 39.8C110.402 40.2667 113.235 40.9667 115.502 41.9V57.6H110.502L108.402 46.6C106.802 46.1333 104.802 45.7667 102.402 45.5C100.068 45.1667 97.7349 45 95.4016 45C90.8016 45 86.9682 46.0667 83.9016 48.2C80.8349 50.2667 78.5349 53.4 77.0016 57.6C75.4682 61.8 74.7016 67.1 74.7016 73.5C74.7016 78.1 75.1682 82.1 76.1016 85.5C77.0349 88.9 78.3682 91.7333 80.1016 94C81.8349 96.2 83.9682 97.8333 86.5016 98.9C89.1016 99.9667 92.0682 100.5 95.4016 100.5C98.0682 100.5 100.302 100.3 102.102 99.9C103.968 99.4333 105.435 98.9 106.502 98.3C107.635 97.7 108.468 97.2333 109.002 96.9L111.002 86.6H115.902V101.8C114.635 102.333 113.068 102.967 111.202 103.7C109.335 104.367 107.035 104.933 104.302 105.4C101.568 105.867 98.2016 106.1 94.2016 106.1ZM126.93 105V100.8L133.73 99.2V46L127.43 44.6V40.2H142.03L174.53 89.9L176.03 92.9H176.43V46L169.63 44.4V40.2H189.43V44.4L182.73 46V105H174.43L141.73 55L140.43 52.3H140.03V99.2L147.03 100.8V105H126.93Z" fill="white"/>
                    </g>
                    <defs>
                        <filter id="filter0_i_52_37" x="7.5" y="39" width="181.93" height="68.1" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="10"/>
                                    <feGaussianBlur stdDeviation="0.5"/>
                                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_52_37"/>
                        </filter>
                    </defs>
                </svg>                    
            </span>  
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Tudo Concurso Noticias</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="fechar"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    <li class="nav-item display-6">
                        <a class="nav-link  d-flex" aria-current="page" href="{{ route('noticias.index') }}">
                            Minhas Noticias
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>