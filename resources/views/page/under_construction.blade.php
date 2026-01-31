<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CuanTrack - Segera Hadir</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        cuan: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#4CAF50',
                            600: '#388E3C',
                            900: '#14532d',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in-up': 'fadeInUp 1s ease-out forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-20px)'
                            },
                        },
                        fadeInUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Mencegah overflow horizontal saat animasi masuk dari samping */
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased">

    {{-- Header --}}
    <nav class="absolute top-0 w-full z-50 py-6" data-aos="fade-down" data-aos-duration="1000">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <img src="{{ asset('assets/logo.png') }}" alt="CuanTrack" class="h-10 md:h-12 drop-shadow-sm">
            <span class="px-4 py-1 bg-cuan-100 text-cuan-600 rounded-full text-xs font-bold tracking-wide uppercase">
                Coming Soon
            </span>
        </div>
    </nav>

    {{-- Section 1 --}}
    <section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">
            <div
                class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-cuan-500/10 rounded-full blur-3xl animate-float">
            </div>
            <div class="absolute bottom-[-10%] left-[-10%] w-[400px] h-[400px] bg-yellow-400/10 rounded-full blur-3xl animate-float"
                style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 text-center z-10">
            <div class="max-w-3xl mx-auto opacity-0 animate-fade-in-up">
                <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Kelola Keuangan <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cuan-500 to-cuan-600">
                        Tanpa Ribet Ketik
                    </span>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mb-8 leading-relaxed">
                    Aplikasi pencatat keuangan cerdas dengan teknologi AI Scan Struk.
                    Foto struk belanjaanmu, biar <strong>CuanTrack</strong> yang mencatatnya otomatis.
                </p>

                <div
                    class="inline-flex items-center gap-2 bg-white px-5 py-3 rounded-full shadow-lg border border-gray-100">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-orange-500"></span>
                    </span>
                    <span class="text-sm font-semibold text-gray-600">Aplikasi sedang dalam tahap pengembangan
                        akhir</span>
                </div>
            </div>

            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-cuan-500"
                 data-aos="fade-up" data-aos-delay="1000" data-aos-offset="0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
    </section>

    {{-- Section 2 --}}
    <section class="py-20 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Kenapa Harus CuanTrack?</h2>
                <p class="text-gray-500">Fitur canggih yang membuat pencatatan keuangan jadi menyenangkan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div data-aos="fade-up" data-aos-delay="0"
                    class="group p-8 rounded-3xl bg-gray-50 hover:bg-cuan-50 transition-colors duration-300 border border-gray-100 hover:border-cuan-200 text-center">
                    <div
                        class="w-16 h-16 bg-cuan-100 text-cuan-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Scan Struk Otomatis</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Lupakan input manual. Cukup foto struk belanja, AI kami akan membaca nama barang dan harga
                        secara instan.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200"
                    class="group p-8 rounded-3xl bg-gray-50 hover:bg-cuan-50 transition-colors duration-300 border border-gray-100 hover:border-cuan-200 text-center">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Laporan Keuangan</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Pantau arus kas (Cashflow) harian, mingguan, hingga bulanan dengan visualisasi grafik yang
                        detail.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="400"
                    class="group p-8 rounded-3xl bg-gray-50 hover:bg-cuan-50 transition-colors duration-300 border border-gray-100 hover:border-cuan-200 text-center">
                    <div
                        class="w-16 h-16 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Manajemen Simpel</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Kelola kategori dompet, pemasukan, dan pengeluaran sesuai kebutuhanmu. Simpel, cepat, dan
                        efisien.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Section 3 --}}
    <section class="py-24 overflow-hidden relative">
        <div
            class="absolute top-1/2 left-0 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-tr from-cuan-100/40 to-green-50/40 rounded-full blur-3xl -z-10 opacity-60">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-12 lg:gap-20">

                <div class="w-full md:w-1/2 text-left" data-aos="fade-right">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        Selalu dalam <br>
                        <span class="text-cuan-600">Genggamanmu</span>
                    </h2>
                    <p class="text-gray-500 text-lg mb-8 leading-relaxed">
                        CuanTrack dirancang untuk akses cepat dan mudah kapanpun kamu butuh mencatat pengeluaran.
                    </p>

                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-cuan-100 text-cuan-600 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Akses Instan</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span
                                class="w-6 h-6 rounded-full bg-cuan-100 text-cuan-600 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span>
                            <span class="text-gray-700 font-medium">Ringan & Responsif</span>
                        </li>
                    </ul>
                </div>

                <div class="w-full md:w-1/2 flex justify-center relative" data-aos="fade-left" data-aos-delay="200">

                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white rotate-3 hover:rotate-0 transition-transform duration-500">
                        <img 
                            src="https://images.unsplash.com/photo-1616348436168-de43ad0db179?q=80&w=1981&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="Aplikasi dalam Genggaman" 
                            class="w-[400px] md:w-[450px] object-cover"
                        >
                        <div class="absolute inset-0 bg-cuan-900/10 mix-blend-overlay"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Section 4 --}}
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="container mx-auto px-6">
            
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Perjalanan Pengembangan</h2>
                <p class="text-gray-500">Kami bekerja keras untuk memastikan CuanTrack siap membantu finansialmu.</p>
            </div>

            <div class="max-w-3xl mx-auto relative">
                <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-0.5 bg-gray-200 transform md:-translate-x-1/2"></div>

                <div class="relative flex flex-col md:flex-row items-center mb-12 md:justify-between">
                    <div class="w-full md:w-5/12 md:text-right pl-20 md:pl-0 md:pr-12 mb-4 md:mb-0 order-2 md:order-1" data-aos="fade-right">
                        <h3 class="text-lg font-bold text-gray-900">Perencanaan & Riset</h3>
                        <p class="text-sm text-gray-500 mt-1">Analisis kebutuhan pengguna dan desain sistem database.</p>
                        <span class="inline-block mt-2 px-3 py-1 bg-cuan-100 text-cuan-600 text-xs font-bold rounded-full">Selesai</span>
                    </div>
                    
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-8 h-8 bg-cuan-500 rounded-full border-4 border-white shadow-lg z-10 flex items-center justify-center order-1 md:order-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="white" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    </div>

                    <div class="hidden md:block w-5/12 order-3"></div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center mb-12 md:justify-between">
                    <div class="hidden md:block w-5/12 order-1"></div>
                    
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-8 h-8 bg-cuan-500 rounded-full border-4 border-white shadow-lg z-10 flex items-center justify-center order-1 md:order-2">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="white" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    </div>

                    <div class="w-full md:w-5/12 pl-20 md:pl-12 order-2 md:order-3" data-aos="fade-left">
                        <h3 class="text-lg font-bold text-gray-900">UI/UX Design</h3>
                        <p class="text-sm text-gray-500 mt-1">Merancang antarmuka modern dan pengalaman pengguna yang intuitif.</p>
                        <span class="inline-block mt-2 px-3 py-1 bg-cuan-100 text-cuan-600 text-xs font-bold rounded-full">Selesai</span>
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center mb-12 md:justify-between">
                    <div class="w-full md:w-5/12 md:text-right pl-20 md:pl-0 md:pr-12 mb-4 md:mb-0 order-2 md:order-1" data-aos="fade-right">
                        <h3 class="text-lg font-bold text-gray-900">Pengembangan Aplikasi</h3>
                        <p class="text-sm text-gray-500 mt-1">Integrasi fitur AI Scan Struk.</p>
                        <span class="inline-block mt-2 px-3 py-1 bg-orange-100 text-orange-600 text-xs font-bold rounded-full animate-pulse">Sedang Proses</span>
                    </div>
                    
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-8 h-8 bg-orange-500 rounded-full border-4 border-white shadow-lg z-10 flex items-center justify-center order-1 md:order-2">
                        <div class="w-2 h-2 bg-white rounded-full animate-ping"></div>
                    </div>

                    <div class="hidden md:block w-5/12 order-3"></div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center md:justify-between">
                    <div class="hidden md:block w-5/12 order-1"></div>
                    
                    <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 w-8 h-8 bg-gray-200 rounded-full border-4 border-white z-10 flex items-center justify-center order-1 md:order-2">
                        <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                    </div>

                    <div class="w-full md:w-5/12 pl-20 md:pl-12 order-2 md:order-3 opacity-60" data-aos="fade-left">
                        <h3 class="text-lg font-bold text-gray-900">Beta Launch</h3>
                        <p class="text-sm text-gray-500 mt-1">Rilis versi percobaan untuk pengguna terbatas.</p>
                        <span class="inline-block mt-2 px-3 py-1 bg-gray-100 text-gray-500 text-xs font-bold rounded-full">Segera</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- <section class="py-24 bg-white relative overflow-hidden">
        
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-[20%] left-[10%] w-72 h-72 bg-cuan-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-float"></div>
            <div class="absolute top-[20%] right-[10%] w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-float" style="animation-delay: 2s"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            
            <div class="max-w-3xl mx-auto" data-aos="zoom-in">
                
                <div class="flex items-center justify-center mb-6">
                    <div class="flex -space-x-4">
                        <img class="w-12 h-12 rounded-full border-4 border-white object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="User 1">
                        <img class="w-12 h-12 rounded-full border-4 border-white object-cover" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=100&q=80" alt="User 2">
                        <img class="w-12 h-12 rounded-full border-4 border-white object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80" alt="User 3">
                        <img class="w-12 h-12 rounded-full border-4 border-white object-cover" src="https://images.unsplash.com/photo-1521119989659-a83eee488058?auto=format&fit=crop&w=100&q=80" alt="User 4">
                        <div class="w-12 h-12 rounded-full border-4 border-white bg-gray-100 flex items-center justify-center text-xs font-bold text-gray-600">
                            +2K
                        </div>
                    </div>
                </div>

                <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                    Jadilah yang Pertama <br>
                    <span class="text-cuan-600">Merasakan Kemudahannya</span>
                </h2>
                
                <p class="text-gray-500 text-lg mb-10 leading-relaxed">
                    Bergabunglah dengan <strong>2,000+ orang</strong> yang sudah tidak sabar menunggu rilisnya CuanTrack. Dapatkan notifikasi eksklusif saat kami launching!
                </p>

                <div class="max-w-md mx-auto bg-white p-2 rounded-full shadow-xl border border-gray-200 flex items-center transition-all focus-within:ring-4 focus-within:ring-cuan-100 focus-within:border-cuan-500">
                    <div class="pl-4 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <input type="email" placeholder="Masukkan email kamu..." class="w-full px-4 py-3 bg-transparent outline-none text-gray-700 placeholder-gray-400" required>
                    <button class="bg-cuan-600 hover:bg-cuan-700 text-white px-6 py-3 rounded-full font-bold transition-colors shadow-md shrink-0">
                        Gabung Antrean
                    </button>
                </div>

                <p class="mt-6 text-sm text-gray-400 flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-green-500">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                    Bebas Spam. Unsubscribe kapan saja.
                </p>

            </div>
        </div>
    </section> --}}

    {{-- Section 5 Download --}}
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="bg-gradient-to-br from-cuan-900 to-cuan-600 rounded-[3rem] p-10 md:p-16 text-center text-white relative overflow-hidden shadow-2xl"
                 data-aos="zoom-in" data-aos-duration="1000">

                <div
                    class="absolute top-0 left-0 w-full h-full opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
                </div>

                <div class="relative z-10 max-w-2xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Mengatur Keuanganmu?</h2>
                    <p class="text-cuan-100 text-lg mb-8">
                        Aplikasi CuanTrack akan segera tersedia untuk perangkat Android.
                        Pastikan kamu jadi yang pertama mencobanya!
                    </p>

                    <button
                        class="bg-white text-cuan-600 font-bold py-4 px-8 rounded-full shadow-lg cursor-not-allowed opacity-90 hover:opacity-100 transition-opacity flex items-center justify-center gap-3 mx-auto">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z" />
                        </svg>
                        <span>Download di Play Store (Segera)</span>
                    </button>

                    <p class="mt-6 text-xs text-cuan-200">
                        *Estimasi Rilis: 2026
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-50 py-10 border-t border-gray-200" data-aos="fade-up" data-aos-offset="10">
        <div class="container mx-auto px-6 text-center">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo Footer"
                class="h-8 mx-auto mb-4 opacity-50 grayscale hover:grayscale-0 transition-all">
            <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} CuanTrack. Developed by Yusdi.</p>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
        });
    </script>
</body>

</html>