<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Animations */
        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Button Hover Animation */
        .hover-button {
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.4s ease-in-out;
        }

        .hover-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 300%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            z-index: -1;
            transition: 0.4s ease-in-out;
        }

        .hover-button:hover::before {
            left: 100%;
        }

        .hover-button:hover {
            transform: scale(1.08);
            background: linear-gradient(90deg, #ffa726, #ff7043);
        }

        .hover-button:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(0, 112, 243, 0.4);
        }

        .hover-button {
            box-shadow: 0 4px 15px rgba(255, 126, 95, 0.5);
        }

        .hover-button:hover {
            box-shadow: 0 6px 20px rgba(255, 126, 95, 0.7);
        }

        .hover-button:active {
            transform: scale(1.02);
            transition: transform 0.2s ease-out;
        }

        /* Logo Animation */
        .logo-animation {
            animation: logoAnim 3s infinite ease-in-out;
        }

        @keyframes logoAnim {
            0% {
                transform: scale(1) rotate(0deg);
            }

            50% {
                transform: scale(1.1) rotate(10deg);
            }

            100% {
                transform: scale(1) rotate(0deg);
            }
        }

        /* Responsive Tweaks */
        @media (min-width: 1024px) {
            .container {
                padding: 2rem;
                flex-direction: row;
            }

            .form-section {
                width: 50%;
            }

            .logo-section {
                width: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .logo-animation {
                max-width: 200px; /* Adjust for desktop */
            }

            .form-wrapper {
                padding: 3rem;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.1);
            }

            h1 {
                font-size: 3rem;
            }

            button {
                font-size: 1.125rem;
            }
        }

        /* Mobile Responsive */
        @media (max-width: 1024px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .form-section,
            .logo-section {
                width: 100%;
                text-align: center;
                margin-bottom: 1rem; /* Add spacing between sections */
            }

            .form-wrapper {
                padding: 2rem; /* Adjust padding for mobile */
                background-color: white;
                border-radius: 10px;
                box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
            }

            h1 {
                font-size: 2.5rem;
            }

            button {
                font-size: 1rem;
            }
        }

        /* From Uiverse.io by Lealdos */ 
.Btn {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: 0.3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background-color: orange;
}

/* plus sign */
.sign {
  width: 100%;
  transition-duration: 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sign svg {
  width: 18px;
}

.sign svg path {
  fill: black;
}
/* text */
.text {
  position: absolute;
  right: 0%;
  width: 0%;
  opacity: 0;
  color: black;
  font-size: 1.2em;
  font-weight: 600;
  transition-duration: 0.3s;
}
/* hover effect on button width */
.Btn:hover {
  width: 125px;
  border-radius: 40px;
  transition-duration: 0.3s;
}

.Btn:hover .sign {
  width: 30%;
  transition-duration: 0.3s;
  padding-left: 20px;
}
/* hover effect button's text */
.Btn:hover .text {
  opacity: 1;
  width: 70%;
  transition-duration: 0.3s;
  padding-right: 10px;
}
/* button click effect*/
.Btn:active {
  transform: translate(2px, 2px);
}

    </style>
</head>

<body class="bg-gradient-to-r from-orange-400 to-orange-600 flex items-center justify-center min-h-screen">
    <div class="container mx-auto p-5 flex items-center justify-between">
        <!-- Form Section -->
        <div class="form-section fade-in max-w-lg w-full">
            <div class="form-wrapper">
                <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-8">Login</h1>
                @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 shake">
                    <ul>
                        @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-4 focus:ring-blue-400 focus:border-transparent transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                        <input type="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-4 focus:ring-blue-400 focus:border-transparent transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="hover-button w-full text-white font-bold py-3 px-6 rounded-md transition duration-500 ease-in-out transform">Login</button>
                    </div>
                   
<a href="/halaman" class="Btn">
  <div class="sign">
    <svg viewBox="0 0 512 512">
      <path
        d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
      ></path>
    </svg>
  </div>

  <div class="text">Masuk</div>
</a>

                </form>
            </div>
        </div>

        <!-- Logo Section -->
        <div class="logo-section">
            <img src="{{ asset('smkcibitung1.png') }}" alt="Logo SMK" class="logo-animation max-w-xs mx-auto">
        </div>
    </div>
</body>

</html>
