<div>
    <!-- Real-time Date and Scrolling Text -->
    <div class="bg-gradient-to-r from-orange-100 to-orange-200 text-orange-600 text-sm sm:text-base py-2 flex justify-between items-center fixed top-0 left-0 w-full z-50 shadow-md">
        <div id="current-date" class="ml-6 font-medium"></div>
        <div class="mr-6 text-sm sm:text-base font-medium">
            <span class="inline-block overflow-hidden whitespace-nowrap">
                <span class="animate-scroll">Selamat Datang di SMK Cibitung 1</span>
            </span>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-orange-400 to-orange-600 text-white p-4 fixed w-full top-10 shadow-lg z-40 transition-all duration-300">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Navbar Logo -->
            <div class="navbar-logo flex items-center">
                <img src="{{ asset('smkcibitung1.png') }}" alt="Logo SMK Cibitung 1" class="w-12 h-12 mr-3">
                <span class="text-xl font-bold tracking-wider">SMK Cibitung 1</span>
            </div>

            <!-- Hamburger Menu Icon (for mobile) -->
            <div class="lg:hidden">
                <button id="menu-btn" class="focus:outline-none">
                    <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>

            <div class="hidden lg:flex items-center space-x-6">
                
            
            
            <a href="/admin/siswa/halamansiswa" class="text-lg font-medium relative group transition duration-300">Menu sekolah 
                <span class="absolute left-0 -bottom-1 h-1 w-full bg-yellow-300 transform scale-x-0 group-hover:scale-x-100 origin-left transition duration-300 ease-out"></span>
            </a>
           

            <div class="relative group">
                <a href="#" class="text-lg font-medium relative group transition duration-300">Program Pendidikan
                    <span class="absolute left-0 -bottom-1 h-1 w-full bg-yellow-300 transform scale-x-0 group-hover:scale-x-100 origin-left transition duration-300 ease-out"></span>
                </a>
                <div class="absolute left-0 mt-2 opacity-0 transform scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300 ease-in-out bg-white text-black rounded-lg shadow-lg w-56 py-2 z-40">
                    <a href="#teknik-mekanik-industri" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Teknik Mekanik Industri</a>
                    <a href="#sistem-informasi-jaringan" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Sistem Informasi Jaringan dan Aplikasi</a>
                    <a href="#manajemen-logistik" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Manajemen Logistik</a>
                    <a href="#perbankan-syariah" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Perbankan Syariah</a>
                </div>
            </div>

            <a href="/logout" class="group flex items-center justify-start w-11 h-11 bg-red-600 rounded-full cursor-pointer relative overflow-hidden transition-all duration-200 shadow-lg hover:w-32 hover:rounded-lg active:translate-x-1 active:translate-y-1">
                <div class="flex items-center justify-center w-full transition-all duration-300 group-hover:justify-start group-hover:px-3">
                    <svg class="w-4 h-4" viewBox="0 0 512 512" fill="white">
                        <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                    </svg>
                </div>
                <div class="absolute right-5 transform translate-x-full opacity-0 text-white text-lg font-semibold transition-all duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                    Logout
                </div>
            </a>
            
            </div>
        </div>
    </nav>
</div>

<!-- JavaScript for Real-time Date -->
<script>
    // Real-time Date Display
    function updateDate() {
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const today = new Date();
        document.getElementById('current-date').textContent = today.toLocaleDateString('id-ID', options);
    }
    updateDate();
    setInterval(updateDate, 1000);
</script>

<!-- CSS for Scrolling Text Animation -->
<style>
    .animate-scroll {
        display: inline-block;
        white-space: nowrap;
        animation: scroll 8s linear infinite;
    }

    @keyframes scroll {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    nav {
        top: 56px; /* Adjusted to allow the real-time bar and scrolling text */
    }
</style>