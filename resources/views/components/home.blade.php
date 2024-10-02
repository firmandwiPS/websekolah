<div>
    <!-- Hero Section -->
    <section id="home" class="pt-20 min-h-screen bg-gradient-to-r from-orange-100 to-orange-200 flex flex-col justify-center items-center">
        <img src="{{ asset('smkcibitung1.png') }}" alt="Logo SMK Cibitung 1" class="w-32 mb-4 animate-bounce">
        <h1 class="text-4xl font-bold text-gray-800 mb-2 animate__animated animate__fadeInDown">Selamat Datang di SMK Cibitung 1</h1>
        <p class="text-lg text-gray-700">Masuk sebagai: <span class="font-semibold text-gray-900">{{ Auth::user()->name }}</span></p>
    </section>

    {{-- <!-- Homepage Content -->
    <section class="mt-10 px-4">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Beranda</h2>
        <p class="text-lg text-gray-700 mb-6">Menyajikan informasi utama dan terkini tentang sekolah, seperti berita, pengumuman, dan event penting.</p>

        <!-- Image/Video Slider -->
        <div class="relative">
            <div class="slider">
                <img src="{{ asset('image1.jpg') }}" alt="Kegiatan Sekolah 1" class="w-full h-64 object-cover rounded-lg mb-4">
                <img src="{{ asset('image2.jpg') }}" alt="Kegiatan Sekolah 2" class="w-full h-64 object-cover rounded-lg mb-4 hidden">
                <img src="{{ asset('image3.jpg') }}" alt="Kegiatan Sekolah 3" class="w-full h-64 object-cover rounded-lg mb-4 hidden">
                <!-- Add more images as needed -->
            </div>
            <!-- Navigation Buttons -->
            <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg" onclick="prevSlide()">❮</button>
            <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg" onclick="nextSlide()">❯</button>
        </div> --}}
    </section>
</div>

{{-- <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slider img');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('hidden', i !== index);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    // Automatically show the first slide
    showSlide(currentSlide);
</script>

<style>
    .slider {
        position: relative;
    }
    .slider img {
        transition: opacity 0.5s ease-in-out;
    }
</style> --}}
