<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMK Cibitung 1</title>
    <!-- Link ke Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        html {
    scroll-behavior: smooth;
}

        @keyframes slideInDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        .animate-slide-down {
            animation: slideInDown 1s ease-out;
        }

        
    </style>
</head>
<body class="bg-gray-100" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0">

    <x-navhalaman></x-navhalaman>


    


    <x-about></x-about>

    
    <x-pendidikanhalaman></x-pendidikanhalaman>

    <x-fasilitas></x-fasilitas>
    
    <x-contact></x-contact>
    
    <x-eskul></x-ekskul>

    <x-footer></x-footer>

    

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
