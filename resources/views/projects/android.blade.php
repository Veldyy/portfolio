<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>Android Project</title>
</head>

<body class="bg-gray-950 text-white overflow-x-hidden">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full bg-gray-950/80 backdrop-blur-lg border-b border-gray-800 z-50">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <a href="/"
               class="text-2xl font-bold text-blue-400">
                Portfolio
            </a>

            <a href="/#projects"
               class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-xl transition">
                Back
            </a>

        </div>

    </nav>

    <!-- Header -->
    <section class="pt-36 pb-20 px-6 text-center">

        <div class="max-w-4xl mx-auto" data-aos="fade-up">

            <span class="bg-blue-500/20 text-blue-400 px-5 py-2 rounded-full text-sm">
                Android Development
            </span>

            <h1 class="text-5xl md:text-7xl font-bold mt-8 leading-tight">

                Android Mobile Application

            </h1>

            <p class="text-gray-400 text-lg leading-relaxed mt-8">

                Pengembangan aplikasi Android modern menggunakan Java, Kotlin, Flutter, Firebase, MySQL dan OCR integration untuk kebutuhan mobile application.

            </p>

        </div>

    </section>

    <!-- Featured -->
    <section class="px-6 pb-24">

        <div class="max-w-6xl mx-auto">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Mobile Preview -->
                <div class="bg-gray-900 border border-gray-800 rounded-[40px] p-4" data-aos="fade-right" data-aos-delay="300">

                    <img src="{{ asset('img/projectandroid.png') }}"
                         class="rounded-[30px] h-[600px] object-cover w-full hover:scale-105 transition duration-500">

                </div>

                <!-- Info -->
                <div class="lg:col-span-2 flex flex-col justify-center" data-aos="fade-up">

                    <h2 class="text-4xl font-bold mb-8">
                        Project Features
                    </h2>

                    <div class="grid sm:grid-cols-2 gap-6">

                        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-6 hover:scale-105 transition duration-500">

                            <h3 class="text-xl font-semibold mb-4 text-blue-400 ">
                                Firebase Integration
                            </h3>

                            <p class="text-gray-400 leading-relaxed">
                                Authentication dan realtime database untuk sistem mobile application.
                            </p>

                        </div>

                        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-6 hover:scale-105 transition duration-500">

                            <h3 class="text-xl font-semibold mb-4 text-blue-400">
                                OCR System
                            </h3>

                            <p class="text-gray-400 leading-relaxed">
                                Implementasi OCR KTP menggunakan image processing dan OpenCV.
                            </p>

                        </div>

                        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-6 hover:scale-105 transition duration-500">

                            <h3 class="text-xl font-semibold mb-4 text-blue-400">
                                Responsive UI
                            </h3>

                            <p class="text-gray-400 leading-relaxed">
                                Tampilan modern dan user friendly untuk pengalaman pengguna lebih baik.
                            </p>

                        </div>

                        <div class="bg-gray-900 border border-gray-800 rounded-3xl p-6 hover:scale-105 transition duration-500">

                            <h3 class="text-xl font-semibold mb-4 text-blue-400">
                                Camera Integration
                            </h3>

                            <p class="text-gray-400 leading-relaxed">
                                Pengambilan gambar dan proses scanning secara realtime.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Gallery -->
    <section class="px-6 pb-24">

        <div class="bg-gray-900 rounded-3xl overflow-hidden
                        border border-gray-800
                        hover:border-blue-500
                        transition duration-300
                        p-4 hover:scale-105 transition duration-500" data-aos="fade-up">
                <div class="p-6">

                    <img src="{{ asset('img\projectandorid1.png') }}"
                     class="w-full object-contain rounded-2xl ">

                    <h3 class="text-2xl font-bold mb-4">
                        Buku Tamu Sistem OCR
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Aplikasi buku tamu berbasis OCR untuk memindai identitas secara otomatis dan menyimpan data tamu secara digital.
                    </p>

                </div>

        </div>

        <div class="bg-gray-900 rounded-3xl overflow-hidden
                        border border-gray-800
                        hover:border-blue-500
                        transition duration-300
                        p-4 hover:scale-105 transition duration-500" data-aos="fade-up" data-aos-delay="200">
                        
                <div class="p-6">
                    
                    <img src="{{ asset('img/projectandroid2.png') }}"
                         class="w-full object-contain rounded-2xl">

                    <h3 class="text-2xl font-bold mb-4">
                        Buku Tamu Barcode
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                         Aplikasi buku tamu berbasis barcode untuk pengelolaan jadwal dan pendataan tamu secara cepat dan efisien.
                    </p>

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