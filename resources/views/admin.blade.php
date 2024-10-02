<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    
</head>
<body class="bg-gradient-to-r from-orange-400 to-orange-600 flex items-center justify-center min-h-screen">
    <div class="container mx-auto p-5">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-8 bg-gradient-to-r from-orange-600 to-orange-400 text-white text-center">
                <h1 class="text-4xl font-extrabold">Selamat Datang {{ Auth::user()->name }}</h1>
                
            </div>

            <div class="px-6 py-6">
                <div class="flex justify-between items-center">
                    <div class="flex space-x-4">

                       
                        @if (Auth::user()->role == 'guru')
                            <a href="/admin/guru/halamanguru" class="bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-bold py-2 px-6 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">Menu Sekolah</a>
                            <a href="/admin/guru/pembelajaran" class="bg-gradient-to-r from-yellow-500 to-yellow-700 hover:from-yellow-600 hover:to-yellow-800 text-white font-bold py-2 px-6 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">Menu Pembelajaran</a>
                        @endif

                        @if (Auth::user()->role == 'siswa')
                            <a href="/admin/siswa/halamansiswa" class="bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white font-bold py-2 px-6 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">Menu Sekolah</a>
                            <a href="/admin/siswa/pembelajaran" class="bg-gradient-to-r from-yellow-500 to-yellow-700 hover:from-yellow-600 hover:to-yellow-800 text-white font-bold py-2 px-6 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">Menu Pembelajaran</a>
                        @endif
                    </div>

                    <a href="/logout" class="bg-gradient-to-r from-red-500 to-red-700 hover:from-red-600 hover:to-red-800 text-white font-bold py-2 px-6 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
