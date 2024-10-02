<div>
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-orange-400 to-orange-600 text-white p-4 fixed w-full top-0 shadow-lg z-50">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Navbar Logo -->
            <div class="navbar-logo flex items-center">
                <img src="{{ asset('smkcibitung1.png') }}" alt="Logo SMK Cibitung 1" class="w-12 h-12 mr-3">
                <span class="text-xl font-bold tracking-wider">SMK Cibitung 1</span>
            </div>

            <!-- Hamburger Menu Icon -->
            <div class="lg:hidden">
                <button id="menu-btn" class="focus:outline-none">
                    <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>

            <!-- Navbar Links (Desktop) -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="#home" class="text-lg font-medium relative group transition duration-300">Home
                    <span class="absolute left-0 -bottom-1 h-1 w-full bg-yellow-300 transform scale-x-0 group-hover:scale-x-100 origin-left transition duration-300 ease-out"></span>
                </a>

                <!-- Dropdown Menu (Desktop) -->
                <div class="relative group">
                    <a href="#" class="text-lg font-medium relative group transition duration-300">Tentang Sekolah
                        <span class="absolute left-0 -bottom-1 h-1 w-full bg-yellow-300 transform scale-x-0 group-hover:scale-x-100 origin-left transition duration-300 ease-out"></span>
                    </a>
                    <div class="absolute left-0 mt-2 opacity-0 transform scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300 ease-in-out bg-white text-black rounded-lg shadow-lg w-56 py-2 z-40">
                        <a href="#about" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300 rounded-t-lg">Profil Sekolah</a>
                        <a href="#program-pendidikan" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Program Pendidikan</a>
                        <a href="#fasilitas" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Fasilitas</a>
                    <a href="#eskul" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Ekstrakurikuler</a>

                        <a href="#contact" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300 rounded-b-lg">Hubungi Kami</a>
                    </div>
                </div>

                <a href="/admin/guru/pembelajaran" class="text-lg font-medium relative group transition duration-300">Akses Materi
                    <span class="absolute left-0 -bottom-1 h-1 w-full bg-yellow-300 transform scale-x-0 group-hover:scale-x-100 origin-left transition duration-300 ease-out"></span>
                </a>

                <a href="/logout"
  class="group flex items-center justify-start w-11 h-11 bg-red-600 rounded-full cursor-pointer relative overflow-hidden transition-all duration-200 shadow-lg hover:w-32 hover:rounded-lg active:translate-x-1 active:translate-y-1"
>
  <div
    class="flex items-center justify-center w-full transition-all duration-300 group-hover:justify-start group-hover:px-3"
  >
    <svg class="w-4 h-4" viewBox="0 0 512 512" fill="white">
      <path
        d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
      ></path>
    </svg>
  </div>
  <div
    class="absolute right-5 transform translate-x-full opacity-0 text-white text-lg font-semibold transition-all duration-300 group-hover:translate-x-0 group-hover:opacity-100"
  >
    Logout
  </div>
</a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4 space-y-4">
            <a href="#home" class="block text-white bg-orange-500 hover:bg-orange-700 transition duration-300 p-2 rounded">Home</a>

            <div class="relative">
                <button id="mobile-dropdown-btn" class="block text-white bg-orange-500 hover:bg-orange-700 transition duration-300 p-2 rounded w-full text-left">Tentang Sekolah</button>
                <div id="mobile-dropdown" class="hidden mt-2 bg-white text-black rounded-lg shadow-lg py-2">
                    <a href="#about" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Profil Sekolah</a>
                    <a href="#program-pendidikan" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Program Pendidikan</a>
                    <a href="#fasilitas" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Fasilitas</a>
                    <a href="#eskul" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Ekstrakurikuler</a>

                    <a href="#contact" class="block px-4 py-3 hover:bg-yellow-200 transition duration-300">Hubungi Kami</a>
                </div>
            </div>

            <a href="/admin/guru/pembelajaran" class="block text-white bg-orange-500 hover:bg-orange-700 transition duration-300 p-2 rounded">Akses Materi</a>
            <a href="/logout" class="block text-white bg-red-500 hover:bg-red-700 transition duration-300 p-2 rounded">Logout</a>
        </div>
    </nav>
</div>

<!-- JavaScript -->
<script>
    // Toggle mobile menu
    document.getElementById('menu-btn').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Toggle mobile dropdown
    document.getElementById('mobile-dropdown-btn').addEventListener('click', function() {
        document.getElementById('mobile-dropdown').classList.toggle('hidden');
    });
</script>
