<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>UI/UX Project</title>

</head>

<body class="bg-gray-950 text-white overflow-x-hidden">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full bg-gray-950/80 backdrop-blur-lg border-b border-gray-800 z-50">

        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <a href="/"
               class="text-2xl font-bold text-blue-500">
                Project UI/UX
            </a>

            <a href="/#projects"
               class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-xl transition text-sm md:text-base">
                Back
            </a>

        </div>

    </nav>

    <!-- Hero -->
    <section class="pt-36 pb-20 px-6">

        <div class="max-w-5xl mx-auto text-center">

            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight" data-aos="fade-up">

                UI/UX Design Project

            </h1>

            <p class="text-gray-400 text-base md:text-lg leading-relaxed max-w-3xl mx-auto" data-aos="fade-in" data-aos-delay="200">

                Kumpulan desain antarmuka modern dan responsive untuk aplikasi mobile dan website dengan fokus pada user experience dan visual design.

            </p>

        </div>

    </section>

    <!-- Featured Image -->
    <section class="px-6 pb-20">

        <div class="max-w-6xl mx-auto">

            <div class="rounded-3xl overflow-hidden border border-gray-800 shadow-2xl" data-aos="fade-in" data-aos-delay="300">

                <img src="{{ asset('img/projectuiux.png') }}"
                     class="w-full h-[250px] md:h-[500px] object-cover hover:scale-105 transition duration-500">

            </div>

        </div>

    </section>

    <!-- Project Info -->
    <section class="px-6 pb-24">

        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12" data-aos="fade-up">

            <!-- Description -->
            <div>

                <h2 class="text-3xl font-bold mb-6">
                    Project Overview
                </h2>

                <p class="text-gray-400 leading-relaxed mb-6">

                    Desain UI/UX modern yang dibuat untuk meningkatkan pengalaman pengguna pada aplikasi mobile dan website dengan pendekatan clean design dan responsive layout.

                </p>

                <p class="text-gray-400 leading-relaxed">

                    Fokus utama project ini adalah menciptakan tampilan yang modern, mudah digunakan, dan nyaman di berbagai ukuran device.

                </p>

            </div>

            <!-- Tech Stack -->
            <div>

                <h2 class="text-3xl font-bold mb-6">
                    Tools & Technology
                </h2>

                <div class="flex flex-wrap gap-4" data-aos="fade-up">

                    <span class="bg-blue-900 border border-blue-800 px-5 py-3 rounded-2xl hover:scale-105 transition duration-500">
                        Figma
                    </span>

                    <span class="bg-blue-900 border border-blue-800 px-5 py-3 rounded-2xl hover:scale-105 transition duration-500">
                        Tailwind CSS
                    </span>

                    <span class="bg-blue-900 border border-blue-800 px-5 py-3 rounded-2xl hover:scale-105 transition duration-500">
                        Responsive Design
                    </span>

                    <span class="bg-blue-900 border border-blue-800 px-5 py-3 rounded-2xl hover:scale-105 transition duration-500">
                        UI Prototype
                    </span>

                </div>

            </div>

        </div>

    </section>

    <!-- Project List -->
    <section class="pb-24 px-6">

        <div class="max-w-6xl mx-auto grid md:grid-cols-1 lg:grid-cols-2 gap-8" data-aos="fade-up">

            <!-- Card -->
            <div class="bg-gray-900 rounded-3xl overflow-hidden border border-gray-800 hover:border-blue-500 transition">

                 <a href="https://www.figma.com/design/eiN0FaFIzoCLnQoM1eLbZ5/V-ARTech?node-id=0-1&t=Iu0b9EN9kgbYSET0-1">
                        <img src="{{ asset('img/projectuiux.png') }}"
                         class="w-full h-72 object-cover hover:scale-105 transition duration-500" >
                    </a> 

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        V-ARTech
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Desain ini dibuat sebagai inovasi teknologi mengenai pemilu online.
                    </p>

                </div>

            </div>

            <!-- Card -->
            <div class="bg-gray-900 rounded-3xl overflow-hidden border border-gray-800 hover:border-blue-500 transition" data-aos="fade-up" data-aos-delay="200">

                 <a href="https://www.figma.com/design/9Y8pDFpvxVP99UZseXKEBN/IMK?node-id=2-22&t=zgAmNLrkaHWkxiRx-1">
                        <img src="{{ asset('img/projectuiux2.png') }}"
                         class="w-full h-72 object-cover hover:scale-105 transition duration-500">
                </a>

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Fillist
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Desain aplikasi untuk menonton film dengan tampilan yang fresh.
                    </p>

                </div>

            </div>
            
        </div>

    </section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>