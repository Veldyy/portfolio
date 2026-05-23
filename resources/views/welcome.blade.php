<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Portfolio Veldy</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</head>

<body class="bg-gray-950 text-white">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-gray-900/70 backdrop-blur-lg border-b border-gray-800">

        <div class="container mx-auto px-6">

            <div class="flex justify-between items-center h-16">

                <!-- Logo -->
                <div class="text-2xl font-bold tracking-wide">
                    Portfolio<span class="text-blue-500">.</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">

                    <a href="#home"
                       class="hover:text-blue-400 transition duration-300">
                        Home
                    </a>

                    <a href="#about"
                       class="hover:text-blue-400 transition duration-300">
                        About
                    </a>

                    <a href="#skills"
                       class="hover:text-blue-400 transition duration-300">
                        Skills
                    </a>

                    <a href="#projects"
                       class="hover:text-blue-400 transition duration-300">
                        Projects
                    </a>

                    <a href="#contact"
                       class="hover:text-blue-400 transition duration-300">
                        Contact
                    </a>

                </div>

                <!-- Mobile Button -->
                <button onclick="toggleMenu()"
                        class="md:hidden">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-8 w-8"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                </button>

            </div>

        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
             class="hidden md:hidden bg-gray-900 border-t border-gray-800">

            <div class="flex flex-col px-6 py-4 space-y-4">

                <a href="#home"
                   class="hover:text-blue-400 transition">
                    Home
                </a>

                <a href="#about"
                   class="hover:text-blue-400 transition">
                    About
                </a>

                <a href="#skills"
                   class="hover:text-blue-400 transition">
                    Skills
                </a>

                <a href="#projects"
                   class="hover:text-blue-400 transition">
                    Projects
                </a>

                <a href="#contact"
                   class="hover:text-blue-400 transition">
                    Contact
                </a>

            </div>

        </div>

    </nav>

    <!-- Hero Section -->
    <section id="home"
             class="min-h-screen flex items-center justify-center px-6">

        <div class="text-center"
             data-aos="fade-up">

            <h1 class="text-3xl md:text-5xl font-bold mb-6">
                Halo, Saya
                <span class="text-blue-500">
                    Veldy
                </span>
            </h1>

            <p class="text-gray-400 text-lg md:text-2xl mb-8">
                Web Developer | Android Developer
            </p>

            <a href="#projects"
               class="bg-blue-500 hover:bg-blue-600 px-8 py-4 rounded-xl text-lg font-semibold transition duration-300 shadow-lg shadow-blue-500/20">

                Lihat Project

            </a>

        </div>

    </section>

    <!-- About Section -->
    <section id="about"
         class="py-24 bg-gray-900 px-6">

        <div class="max-w-6xl mx-auto">

            <div class="text-center mb-16">

                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    About Me
                </h2>

            <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full"></div>

        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- Image -->
            <div class="flex justify-center"
                 data-aos="fade-right">

                <div class="w-80 h-80 rounded-3xl overflow-hidden border-4 border-blue-500 shadow-2xl shadow-blue-500/20">

                    <img src="{{ asset('img/fotosaya.jpg') }}"
                         class="w-full h-full object-cover hover:scale-110 transition duration-500">

                </div>

            </div>

            <!-- Text -->
            <div data-aos="fade-left">

                    <h3 class="text-3xl font-bold mb-6">
                        Web & Android Developer
                    </h3>

                    <p class="text-gray-400 leading-relaxed mb-6">
                        Saya adalah seorang developer yang fokus pada
                        pengembangan website dan aplikasi Android.
                        Memiliki pengalaman dalam Laravel, MySql,
                        Android Studio, dan UI modern.
                    </p>

                    <p class="text-gray-400 leading-relaxed mb-8">
                        Saya senang membangun sistem yang interaktif,
                        responsif, dan memberikan pengalaman pengguna
                        yang modern.
                    </p>

                    <a href="#contact"
                        class="bg-blue-500 hover:bg-blue-600 px-8 py-4 rounded-xl font-semibold transition duration-300">

                        Hubungi Saya

                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- Skill Section -->
    <section id="skills"
    class="py-24 bg-gray-950 px-6">

    <div class="container mx-auto">

        <!-- Title -->
        <div class="text-center mb-16">

            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                My Skills
            </h2>

            <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full"></div>

        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- CARD -->
            <div class="bg-gray-900 min-h-[420px] p-8 rounded-3xl border border-gray-800
                        hover:border-blue-500 hover:shadow-blue-500/20 hover:shadow-2xl
                        transition duration-300 hover:-translate-y-2
                        flex flex-col justify-between"
                data-aos="zoom-in">

                <div>

                    <div class="mb-6 flex justify-center">

                        <img src="{{ asset('img/laravel.png') }}"
                            class="w-16 h-16 object-contain">

                    </div>

                    <h3 class="text-2xl font-bold mb-4 text-center">
                        Laravel
                    </h3>

                    <p class="text-gray-400 leading-relaxed text-center">
                        Membangun website modern dan responsive menggunakan Laravel dan MySQL.
                    </p>

                </div>

                <!-- Progress -->
                <div class="mt-8">

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-400">
                            Skill
                        </span>

                        <span class="text-sm text-blue-400">
                            90%
                        </span>

                    </div>

                    <div class="w-full h-3 bg-gray-800 rounded-full overflow-hidden">

                        <div class="h-full bg-red-500 rounded-full skill-bar"
                            style="width: 90%">
                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="bg-gray-900 min-h-[420px] p-8 rounded-3xl border border-gray-800
                        hover:border-blue-500 hover:shadow-blue-500/20 hover:shadow-2xl
                        transition duration-300 hover:-translate-y-2
                        flex flex-col justify-between"
                data-aos="zoom-in"
                data-aos-delay="100">

                <div>

                    <div class="mb-6 flex justify-center">

                        <img src="{{ asset('img/python.png') }}"
                            class="w-16 h-16 object-contain">

                    </div>

                    <h3 class="text-2xl font-bold mb-4 text-center">
                        Python
                    </h3>

                    <p class="text-gray-400 leading-relaxed text-center">
                        Mengembangkan sistem machine learning dan OCR untuk pengenalan karakter.
                    </p>

                </div>

                <div class="mt-8">

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-400">
                            Skill
                        </span>

                        <span class="text-sm text-yellow-400">
                            85%
                        </span>

                    </div>

                    <div class="w-full h-3 bg-gray-800 rounded-full overflow-hidden">

                        <div class="h-full bg-yellow-400 rounded-full skill-bar"
                            style="width: 85%">
                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="bg-gray-900 min-h-[420px] p-8 rounded-3xl border border-gray-800
                        hover:border-blue-500 hover:shadow-blue-500/20 hover:shadow-2xl
                        transition duration-300 hover:-translate-y-2
                        flex flex-col justify-between"
                data-aos="zoom-in"
                data-aos-delay="200">

                <div>

                    <div class="mb-6 flex justify-center">

                        <img src="{{ asset('img/android.png') }}"
                            class="w-16 h-16 object-contain">

                    </div>

                    <h3 class="text-2xl font-bold mb-4 text-center">
                        Android
                    </h3>

                    <p class="text-gray-400 leading-relaxed text-center">
                        Mengembangkan aplikasi Android menggunakan Java, Kotlin, dan Flutter.
                    </p>

                </div>

                <div class="mt-8">

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-400">
                            Skill
                        </span>

                        <span class="text-sm text-green-400">
                            88%
                        </span>

                    </div>

                    <div class="w-full h-3 bg-gray-800 rounded-full overflow-hidden">

                        <div class="h-full bg-green-500 rounded-full skill-bar"
                            style="width: 88%">
                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="bg-gray-900 min-h-[420px] p-8 rounded-3xl border border-gray-800
                        hover:border-blue-500 hover:shadow-blue-500/20 hover:shadow-2xl
                        transition duration-300 hover:-translate-y-2
                        flex flex-col justify-between"
                data-aos="zoom-in"
                data-aos-delay="300">

                <div>

                    <div class="mb-6 flex justify-center">

                        <img src="{{ asset('img/firebase.png') }}"
                            class="w-16 h-16 object-contain">

                    </div>

                    <h3 class="text-2xl font-bold mb-4 text-center">
                        Firebase
                    </h3>

                    <p class="text-gray-400 leading-relaxed text-center">
                        Mengelola authentication, realtime database, dan cloud storage.
                    </p>

                </div>

                <div class="mt-8">

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-400">
                            Skill
                        </span>

                        <span class="text-sm text-orange-400">
                            80%
                        </span>

                    </div>

                    <div class="w-full h-3 bg-gray-800 rounded-full overflow-hidden">

                        <div class="h-full bg-orange-400 rounded-full skill-bar"
                            style="width: 80%">
                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="bg-gray-900 min-h-[420px] p-8 rounded-3xl border border-gray-800
                        hover:border-blue-500 hover:shadow-blue-500/20 hover:shadow-2xl
                        transition duration-300 hover:-translate-y-2
                        flex flex-col justify-between"
                data-aos="zoom-in"
                data-aos-delay="400">

                <div>

                    <div class="mb-6 flex justify-center">

                        <img src="{{ asset('img/mysql.png') }}"
                            class="w-16 h-16 object-contain">

                    </div>

                    <h3 class="text-2xl font-bold mb-4 text-center">
                        MySQL
                    </h3>

                    <p class="text-gray-400 leading-relaxed text-center">
                        Mengelola database relasional untuk aplikasi web dan mobile.
                    </p>

                </div>

                <div class="mt-8">

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-400">
                            Skill
                        </span>

                        <span class="text-sm text-blue-400">
                            82%
                        </span>

                    </div>

                    <div class="w-full h-3 bg-gray-800 rounded-full overflow-hidden">

                        <div class="h-full bg-blue-400 rounded-full skill-bar"
                            style="width: 82%">
                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="bg-gray-900 min-h-[420px] p-8 rounded-3xl border border-gray-800
                        hover:border-blue-500 hover:shadow-blue-500/20 hover:shadow-2xl
                        transition duration-300 hover:-translate-y-2
                        flex flex-col justify-between"
                data-aos="zoom-in"
                data-aos-delay="500">

                <div>

                    <div class="mb-6 flex justify-center">

                        <img src="{{ asset('img/ocr.png') }}"
                            class="w-16 h-16 object-contain">

                    </div>

                    <h3 class="text-2xl font-bold mb-4 text-center">
                        Computer Vision
                    </h3>

                    <p class="text-gray-400 leading-relaxed text-center">
                        Mengembangkan sistem OCR dan image processing menggunakan OpenCV.
                    </p>

                </div>

                <div class="mt-8">

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-400">
                            Skill
                        </span>

                        <span class="text-sm text-purple-400">
                            80%
                        </span>

                    </div>

                    <div class="w-full h-3 bg-gray-800 rounded-full overflow-hidden">

                        <div class="h-full bg-purple-500 rounded-full skill-bar"
                            style="width: 80%">
                        </div>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="bg-gray-900 min-h-[420px] p-8 rounded-3xl border border-gray-800
                        hover:border-blue-500 hover:shadow-blue-500/20 hover:shadow-2xl
                        transition duration-300 hover:-translate-y-2
                        flex flex-col justify-between"
                data-aos="zoom-in"
                data-aos-delay="600">

                <div>

                    <div class="mb-6 flex justify-center">

                        <img src="{{ asset('img/uidesain.png') }}"
                            class="w-16 h-16 object-contain">

                    </div>

                    <h3 class="text-2xl font-bold mb-4 text-center">
                        UI/UX
                    </h3>

                    <p class="text-gray-400 leading-relaxed text-center">
                        Merancang antarmuka modern dan responsive untuk mobile dan web.
                    </p>

                </div>

                <div class="mt-8">

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-400">
                            Skill
                        </span>

                        <span class="text-sm text-pink-400">
                            70%
                        </span>

                    </div>

                    <div class="w-full h-3 bg-gray-800 rounded-full overflow-hidden">

                        <div class="h-full bg-pink-500 rounded-full skill-bar"
                            style="width: 70%">
                        </div>

                    </div>

                </div>

            </div>

            <div class="bg-gray-900 min-h-[420px] p-8 rounded-3xl border border-gray-800
                        hover:border-blue-500 hover:shadow-blue-500/20 hover:shadow-2xl
                        transition duration-300 hover:-translate-y-2
                        flex flex-col justify-between"
                data-aos="zoom-in"
                data-aos-delay="700">

                <div>

                    <div class="mb-6 flex justify-center">

                        <img src="{{ asset('img/css.png') }}"
                            class="w-16 h-16 object-contain">

                    </div>

                    <h3 class="text-2xl font-bold mb-4 text-center">
                        CSS Framewok
                    </h3>

                    <p class="text-gray-400 leading-relaxed text-center">
                        Mengembangkan tampilan website modern dan responsive menggunakan Tailwind CSS dan Bootstrap.
                    </p>

                </div>

                <!-- Progress -->
                <div class="mt-8">

                    <div class="flex justify-between mb-2">

                        <span class="text-sm text-gray-400">
                            Skill
                        </span>

                        <span class="text-sm text-blue-400">
                            85%
                        </span>

                    </div>

                    <div class="w-full h-3 bg-gray-800 rounded-full overflow-hidden">

                        <div class="h-full bg-blue-500 rounded-full skill-bar"
                            style="width: 90%">
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

    </section>
        
    <!-- Project Section -->
    <section id="projects"
         class="py-24 bg-gray-900 px-6">

        <div class="max-w-6xl mx-auto">

            <div class="text-center mb-16">

                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    My Projects
                </h2>

            <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full"></div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Project Card -->
            <div class="bg-gray-950 rounded-3xl overflow-hidden border border-gray-800 hover:border-blue-500 transition duration-300" data-aos="fade-up"
                 data-aos-delay="200">

                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1170&auto=format&fit=crop"
                     class="w-full h-56 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        UI/UX
                    </h3>

                    <p class="text-gray-400 mb-6">
                        Desain antarmuka modern dan responsive untuk aplikasi mobile dan website.
                    </p>
                    
                    <a href="/projects/uiux">
                        <button class="bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-xl transition">
                            Detail
                        </button>
                    </a>

                
                </div>

            </div>

            <!-- Project Card -->
            <div class="bg-gray-950 rounded-3xl overflow-hidden border border-gray-800 hover:border-blue-500 transition duration-300" data-aos="fade-up"
                 data-aos-delay="300">

                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?q=80&w=1169&auto=format&fit=crop"
                     class="w-full h-56 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Laravel Website
                    </h3>

                    <p class="text-gray-400 mb-6">
                        Pengembangan sistem informasi modern menggunakan Laravel dan Tailwind & Bootrtrap.
                    </p>

                     <a href="/projects/laravel">
                        <button class="bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-xl transition">
                            Detail
                        </button>
                    </a>

                </div>

            </div>

            <!-- Project Card -->
            <div class="bg-gray-950 rounded-3xl overflow-hidden border border-gray-800 hover:border-blue-500 transition duration-300" data-aos="fade-up"
                 data-aos-delay="300">

                <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?q=80&w=1170&auto=format&fit=crop"
                     class="w-full h-56 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Android App
                    </h3>

                    <p class="text-gray-400 mb-6">
                        Aplikasi Android dengan integrasi realtime database.
                    </p>

                    <a href="/projects/android">
                        <button class="bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-xl transition">
                            Detail
                        </button>
                    </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Contact Section -->
    <section id="contact"
         class="py-24 bg-gray-950 px-6">

        <div class="max-w-4xl mx-auto">

            <!-- Title -->
            <div class="text-center mb-16">

                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    Contact Me
                </h2>

                <p class="text-gray-400 text-lg">
                    Silakan hubungi saya untuk kerja sama atau project.
                </p>

            <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full mt-6"></div>

        </div>

        <!-- Form -->
        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 md:p-12 shadow-2xl" data-aos="fade-up">

            @if(session('success'))

                <div class="bg-green-500 text-white p-4 rounded-2xl mb-6">
                        {{ session('success') }}
                </div>

            @endif

            @if($errors->any())

        <div class="bg-red-500 text-white p-4 rounded-2xl mb-6">

            <ul>
                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach
            </ul>

        </div>

        @endif
            <form action="{{ route ('contact.send')}}"
                  method="POST"
                  class="space-y-8">
                @csrf
                <!-- Name -->
                <div>

                    <label class="block mb-3 text-lg font-semibold">
                        Nama
                    </label>

                    <input type="text"
                           name="name"
                           placeholder="Masukkan nama..."
                           class="w-full bg-gray-950 border border-gray-700 rounded-2xl px-5 py-4 focus:outline-none focus:border-blue-500 transition duration-300">

                </div>

                <!-- Email -->
                <div>

                    <label class="block mb-3 text-lg font-semibold">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           placeholder="Masukkan email..."
                           class="w-full bg-gray-950 border border-gray-700 rounded-2xl px-5 py-4 focus:outline-none focus:border-blue-500 transition duration-300">

                </div>

                <!-- Message -->
                <div>

                    <label class="block mb-3 text-lg font-semibold">
                        Pesan
                    </label>

                    <textarea rows="6"
                              name="message"
                              placeholder="Tulis pesan..."
                              class="w-full bg-gray-950 border border-gray-700 rounded-2xl px-5 py-4 focus:outline-none focus:border-blue-500 transition duration-300 resize-none"></textarea>

                </div>
                
                <!-- Button -->
                <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 py-4 rounded-2xl text-lg font-semibold transition duration-300 shadow-lg shadow-blue-500/20 hover:scale-[1.02]">

                    Kirim Pesan

                </button>

                </form>

            </div>

        </div>

    </section>


    <!-- Footer -->
<footer class="bg-gray-900 border-t border-gray-800 py-8 px-6">

    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">

        <div class="text-gray-400">
            © 2026 Veldy Portfolio. All rights reserved.
        </div>

        <div class="flex gap-6">

            <a href="https://www.instagram.com/veldy_p?igsh=MnNuemdpOHB3bnJi"
               class="text-gray-400 hover:text-blue-500 transition duration-300">
                Instagram
            </a>

            <a href="https://github.com/Veldyy"
               class="text-gray-400 hover:text-blue-500 transition duration-300">
                Github
            </a>

            <a href="https://id.jobstreet.com/id/profiles/el-f0ljQPD76l"
               class="text-gray-400 hover:text-blue-500 transition duration-300">
                Jobstreet
            </a>

        </div>

    </div>

</footer>

 <!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>