<div class="fixed w-full h-16 bg-primary z-10 flex items-center justify-between md:justify-end lg:justify-between">
    <div class="md:ml-4 ml-2 md:hidden flex items-center">
        <button onclick="return showMenu();">
            <!-- ... SVG code ... -->
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffff" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
    </div>
    <div class="ml-80 font-bold text-lg text-white hidden lg:block">
        <!-- ... Header Title ... -->
        <h3 class="ml-5">PEMBELAJARAN ONLINE SMKN 6 SURAKARTA</h3>
    </div>
    <div class="flex items-center">
        <button class="font-bold text-white mr-5 flex items-center" onclick="return showPopProfil();">
            <!-- ... Button content ... -->
            <h3 class="mr-2 text-white font-semibold md:text-base text-sm" href="">Siswa</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
            </svg>
        </button>
    </div>
</div>

<!-- Profil dan Logout -->
<div id="profil_log" class="absolute flex items-center justify-end right-0 -top-20 z-[1]">
    <ul class="mr-3 bg-primary w-20 rounded-b-md overflow-hidden">
        <li>
            <a class=" shadow-sm text-white h-8 flex items-center hover:bg-indigo-700" href="/profil">
                <!-- ... Profil link ... -->
                <div class="flec items-center">
                    <span class="ml-2 text-sm" href="">Profil</span>
                </div>
            </a>
        </li>
        <li>
            <a class="shadow-sm text-white h-8 flex items-center hover:bg-indigo-700" href="">
                <!-- ... Logout link ... -->
                <div class=" flex items-center">
                    <span class="ml-2 text-sm" href="">Logout</span>
                </div>
            </a>
        </li>
    </ul>
</div>

<!-- Navbar -->
<div id="navbar_utama" class="overflow-y-auto overflow-x-hidden z-20 w-60 md:w-72 h-full max-h-[100vh - 16px] shadow-xl md:block fixed -left-80 md:left-0 transition-all duration-200 bg-white">
    <!-- ... Navbar Header ... -->

    <div class="absolute z-30 top-0 right-8 m-2 md:hidden">
        <div class="fixed">
            <button onclick="return hideMenu();">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffff" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
        </div>
    </div>
    <div class="sticky top-0 z-20 pl-3 pt-5 pb-5 pr-5 bg-primary rounded-bl-[3.5rem] rounded-br-lg flex justify-between">
        <div class="w-20 h-20 md:h-[6rem] md:w-[6rem] flex items-center justify-center rounded-full bg-white border-4 border-indigo-800">
            <img src="/img/astravio.png" alt="">
        </div>
        <div class="flex items-center ml-4 mt-6 w-auto">
            <ul class="font-semibold text-white">
                <li class="text-[0.65rem] md:text-sm uppercase"><span>Abdullah As Syafi'i</span></li>
                <li class="text-[0.65rem] md:text-sm">XII-RPL</li>
            </ul>
        </div>
    </div>
    <!-- ... Navigasi Links ... -->
    <div class="mt-4 max-h-max z-20">
        <ul class="">
            <li class="w-auto md:h-11 h-9 font-semibold hover:bg-indigo-200 shadow-sm">
                <a href="/guru" class="flex items-center w-full h-full">
                    <div class="ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4f46e5" class="bi bi-microsoft-teams" viewBox="0 0 16 16">
                            <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682v.766Zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0Zm-2.238 9.488c-.04 0-.08 0-.12-.002a5.19 5.19 0 0 0 .381-2.07V6.306a1.692 1.692 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.598 2.598 0 0 1-2.598 2.598h-.013Z" />
                            <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.682.682 0 0 1-.682.682H.682A.682.682 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945h1.363Z" />
                        </svg>
                    </div>
                    <span class="ml-5 md:text-sm text-[0.80rem] text-slate-700">Data Guru</span>
                </a>
            </li>
            <li class="w-auto md:h-11 h-9 font-semibold hover:bg-indigo-200 shadow-sm">
                <a href="/murid" class="flex items-center w-full h-full">
                    <div class="ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4f46e5" class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z" />
                        </svg>
                    </div>
                    <span class="ml-5 md:text-sm text-[0.80rem] text-slate-700">Data Murid</span>
                </a>
            </li>
            <li class="w-auto md:h-11 h-9 font-semibold hover:bg-indigo-200 shadow-sm">
                <a href="/beranda" class="flex items-center w-full h-full">
                    <div class="ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4f46e5" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                        </svg>
                    </div>
                    <span class="ml-5 md:text-sm text-[0.80rem] text-slate-700">Home</span>
                </a>
            </li>
            <li class="w-auto md:h-11 h-9 font-semibold hover:bg-indigo-200 shadow-sm">
                <a href="" class="flex items-center w-full h-full">
                    <div class="ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4f46e5" class="bi bi-book-half" viewBox="0 0 16 16">
                            <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                    </div>
                    <span class="ml-5 md:text-sm text-[0.80rem] text-slate-700">Materi</span>
                </a>
            </li>
            <li class="w-auto md:h-11 h-9 font-semibold hover:bg-indigo-200 shadow-sm">
                <a href="" class="flex items-center w-full h-full">
                    <div class="ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4f46e5" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                        </svg>
                    </div>
                    <span class="ml-5 md:text-sm text-[0.80rem] text-slate-700">Tugas</span>
                </a>
            </li>
            <li class="w-auto md:h-11 h-9 font-semibold hover:bg-indigo-200 shadow-sm">
                <a href="" class="flex items-center w-full h-full">
                    <div class="ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4f46e5" class="bi bi-journal-text" viewBox="0 0 16 16">
                            <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        </svg>
                    </div>
                    <span class="ml-5 md:text-sm text-[0.80rem] text-slate-700">Ujian</span>
                </a>
            </li>
            <li class="w-auto md:h-11 h-9 font-semibold hover:bg-indigo-200 shadow-sm">
                <a href="" class="flex items-center w-full h-full">
                    <div class="ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4f46e5" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                            <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg>
                    </div>
                    <span class="ml-5 md:text-sm text-[0.80rem] text-slate-700">Absen</span>
                </a>
            </li>
            <li class="w-auto md:h-11 h-9 font-semibold hover:bg-indigo-200 shadow-sm">
                <a href="" class="flex items-center w-full h-full">
                    <div class="ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4f46e5" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                            <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg>
                    </div>
                    <span class="ml-5 md:text-sm text-[0.80rem] text-slate-700">Absen</span>
                </a>
            </li>
            <li class="w-auto md:h-11 h-9 font-semibold hover:bg-indigo-200 shadow-sm">
                <a href="" class="flex items-center w-full h-full">
                    <div class="ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4f46e5" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                            <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg>
                    </div>
                    <span class="ml-5 md:text-sm text-[0.80rem] text-slate-700">Absen</span>
                </a>
            </li>
        </ul>
        <br><br>
    </div>
</div>

<script>
    const navbar = document.querySelector('#navbar_utama');
    const profil_log = document.querySelector('#profil_log');

    function showMenu() {
        navbar.classList.toggle('animasi_navbar');
    }

    function hideMenu() {
        navbar.classList.remove('animasi_navbar');
    }

    function showPopProfil() {
        profil_log.classList.toggle('popup_profil');
    }
</script>