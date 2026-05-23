<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>Laravel Project</title>
</head>

<body class="bg-gray-950 text-white overflow-x-hidden">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full bg-black/70 backdrop-blur-xl border-b border-gray-900 z-50">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <a href="/"
               class="text-2xl font-bold text-blue-500">
                Portfolio
            </a>

            <a href="/#projects"
               class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-xl transition">
                Back
            </a>

        </div>

    </nav>

    <!-- Hero -->
    <section class="pt-36 pb-20 px-6">

        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center" data-aos="fade-right">

            <!-- Left -->
            <div>

                <span class="bg-blue-500/20 text-blue-400 px-4 py-2 rounded-full text-sm">
                    Laravel Web Development
                </span>

                <h1 class="text-5xl md:text-7xl font-bold mt-6 leading-tight">

                    Modern Laravel Website

                </h1>

                <p class="text-gray-400 text-lg leading-relaxed mt-8">

                    Pengembangan website modern menggunakan Laravel, Tailwind CSS / Bootstrap, dan MySQL dengan tampilan responsive serta sistem authentication.

                </p>

                <div class="flex flex-wrap gap-4 mt-5">

                   <span class="px-4 py-2 bg-blue-500/20 text-blue-400 rounded-xl text-sm hover:scale-105 transition duration-500">
                        Laravel
                    </span>

                    <span class="px-4 py-2 bg-blue-500/20 text-blue-400 rounded-xl text-sm hover:scale-105 transition duration-500">
                        Tailwind CSS
                    </span>

                    <span class="px-4 py-2 bg-blue-500/20 text-blue-400 rounded-xl text-sm hover:scale-105 transition duration-500">
                        Bootrtrap
                    </span>
                    
                    <span class="px-4 py-2 bg-blue-500/20 text-blue-400 rounded-xl text-sm hover:scale-105 transition duration-500">
                        MySQL
                    </span>

                    <span class="px-4 py-2 bg-blue-500/20 text-blue-400 rounded-xl text-sm hover:scale-105 transition duration-500">
                        Authentication
                    </span>

                </div>

            </div>

            <!-- Right -->
            <div>

                <div class="rounded-3xl overflow-hidden border border-gray-800 shadow-2xl" data-aos="fade-up">

                    <img src="{{ asset('img/projectweb.png') }}"
                         class="w-full h-[300px] md:h-[550px] object-cover hover:scale-105 transition duration-500">

                </div>

            </div>

        </div>

    </section>

    <!-- Gallery -->
    <section class="pb-24 px-6">

        <div class="max-w-7xl mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="p-6" data-aos="fade-up" data-aos-delay="200">

                    <img src="{{ asset('img/projectweb.png') }}"
                         class="rounded-3xl border border-gray-800 h-[250px] md:h-[400px] w-full object-cover hover:scale-105 transition duration-500"">
                    
                   <h3 class="text-2xl font-bold mb-4">
                        VCARS
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Website penjualan mobil sport dengan tampilan modern, responsive, dan interaktif untuk meningkatkan pengalaman pengguna.
                    </p>

                </div>

                <div class="p-6" data-aos="fade-up" data-aos-delay="300">

                    <img src="{{ asset('img/projectweb2.png') }}"
                     class="rounded-3xl border border-gray-800 h-[250px] md:h-[400px] w-full object-cover hover:scale-105 transition duration-500">

                    <h3 class="text-2xl font-bold mb-4">
                        PMB (Website Penerimaan mahasiswa baru)
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Sistem penerimaan mahasiswa baru berbasis web dengan fitur informasi kampus, pendaftaran online, dan dashboard pengguna.
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