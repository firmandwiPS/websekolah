<div>
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-orange-400 to-orange-600 text-white p-4 fixed w-full top-0 shadow-lg z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="navbar-logo flex items-center">
                <img src="{{ asset('smkcibitung1.png') }}" alt="Logo SMK Cibitung 1" class="w-12 h-12 mr-3">
                <span class="text-xl font-bold">SMK Cibitung 1</span>
            </div>
            <div class="navbar-links space-x-6">
                
                <a href="/admin/guru/halamanguru" class="relative group transition duration-300">Menu Sekolah 
                    <span class="absolute left-0 -bottom-1 h-1 w-full bg-yellow-300 scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                </a>
            
           
                
                <a href="/logout" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded transition duration-300 transform hover:scale-105 hover:shadow-lg">
                    Logout
                </a>
            </div>
        </div>
    </nav>
</div>
