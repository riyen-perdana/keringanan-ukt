<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Keringanan UKT - Universitas Islam Negeri Sultan Syarif Kasim Riau</title>
    <link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=clash-display@600&display=swap">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F1F4F5] font-['Poppins']">
    <nav class="flex flex-row items-center justify-between max-w-6xl px-5 mx-auto mt-5 mb-20">
        <div class="flex flex-row items-center gap-x-3">
            <img src="{{asset('assets/images/logo.png')}}" alt="" class="h-[60px]">
            <div class="flex flex-col gap-y-1">
                <h3 class="text-base font-semibold leading-none md:block lg:block text-indigo-950">Sistem Informasi Keringanan UKT</h3>
                <h4 class="text-sm font-semibold leading-none md:block lg:block text-indigo-950">Universitas Islam Negeri Sultan Syarif Kasim Riau</h4>
            </div>
        </div>
        <div class="flex flex-row items-center justify-between gap-x-7">
            <ul class="flex-row lg:flex gap-x-7 md:hidden">
                <li>
                    <a href="#" class="text-sm font-semibold text-indigo-950 hover:text-green-700">Website</a>
                </li>
                <li>
                    <a href="#" class="text-sm font-semibold text-indigo-950 hover:text-green-700">Pendaftaran</a>
                </li>
                <li>
                    <a href="#" class="text-sm font-semibold text-indigo-950 hover:text-green-700">Daftar Ulang</a>
                </li>
                <li>
                    <a href="#" class="text-sm font-semibold text-indigo-950 hover:text-green-700">FAQ</a>
                </li>
                <li>
                    <a href="#" class="text-sm font-semibold text-indigo-950 hover:text-green-700">Kontak</a>
                </li>
            </ul>
            <a href="#" class="py-2 text-sm font-semibold text-white bg-indigo-950 px-7 rounded-xl hover:bg-green-700">Sign In</a>
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer lg:hidden"></ion-icon>
        </div>
    </nav>
    <section class="max-w-6xl py-5 mx-auto hero">
        <div class="flex flex-row items-center justify-between px-5">
            <div class="flex flex-col gap-y-10">
                <div class="flex flex-col gap-y-3">
                    <h1 class="text-indigo-950 font-['Clash_Display'] text-3xl leading-nomal">
                        Menjadikan Universitas Islam Negeri<br>
                        Sultan Syarif Kasim Riau<br>
                        Gemilang dan Terbilang
                    </h1>
                    <p class="text-sm leading-normal text-gray-500">
                        Surat Keputusan Rektor Tentang Pemberian Keringanan UKT<br>
                        TA. 2024/2025, Silahkan klik link di bawah
                    </p>
                </div>
                <div class="flex flex-row gap-x-5">
                    <a href="#" class="py-2 text-sm font-semibold text-white rounded-full bg-violet-950 px-7 hover:bg-indigo-700">Surat Keputusan Rektor UIN SUSKA Riau</a>
                </div>
            </div>
            <div class="flex flex-row items-center">
                <img src="{{asset('assets/images/rektor.jpeg')}}" class="h-[550px] rounded-2xl"/>
            </div>
        </div>
    </section>
    <section class="max-w-6xl py-12 mx-auto pendaftaran">
        <div>
            <h3 class="text-indigo-950 font-['Clash_Display'] text-5xl text-center">
                Pendaftaran
            </h3>
            <div class="flex flex-row items-center py-12 gap-x-24">
                <div class="flex flex-row items-center">
                    <img src="../Mahad/images/mahad.png" class="h-[400px] rounded-xl"/>
                </div>
                <div class="flex flex-col gap-y-10">
                    <div class="flex flex-col gap-y-3">
                        <h1 class="text-indigo-950 font-['Clash_Display'] text-3xl leading-none">
                            Jadilah Bagian Dari Kami,<br>Lakukan Pendaftaran Sekarang Juga
                        </h1>
                        <p class="text-sm leading-normal text-gray-500">
                            Silahkan Pilih Jenis Pendaftaran Mahasantri<br>
                            Universitas Islam Negeri Sultan Syarif Kasim Riau
                        </p>
                    </div>
                    <div class="flex flex-col gap-y-5">
                        <div class="flex flex-row items-center p-5 bg-white rounded-2xl gap-x-4">
                            <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.6925 42.1667H29.1925C38.7758 42.1667 42.6092 38.3334 42.6092 28.75V17.25C42.6092 7.66671 38.7758 3.83337 29.1925 3.83337H17.6925C8.10918 3.83337 4.27585 7.66671 4.27585 17.25V28.75C4.27585 38.3334 8.10918 42.1667 17.6925 42.1667Z" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.27585 24.3417L15.7758 24.3034C17.2133 24.3034 18.8233 25.3959 19.36 26.7375L21.545 32.2575C22.0433 33.5034 22.8292 33.5034 23.3275 32.2575L27.7167 21.1217C28.1383 20.0484 28.9242 20.01 29.4608 21.0259L31.4542 24.8017C32.0483 25.9325 33.5817 26.8525 34.8467 26.8525H42.6284" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="flex flex-col">
                                <h3 class="text-xl font-bold">
                                    Pendaftaran Mahasantri Baru
                                </h3>
                                <p class="text-sm leading-none text-gray-500">
                                    Untuk Menjadi Mahasantri Baru Silahkan Klik Disini
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center p-5 bg-white rounded-2xl gap-x-4">
                            <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.9 38.3333H28.1C35.7667 38.3333 38.8334 35.2666 38.8334 27.6V18.4C38.8334 10.7333 35.7667 7.66663 28.1 7.66663H18.9C11.2334 7.66663 8.16669 10.7333 8.16669 18.4V27.6C8.16669 35.2666 11.2334 38.3333 18.9 38.3333Z" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.625 32.5833H26.375C31.1667 32.5833 33.0834 30.6666 33.0834 25.875V20.125C33.0834 15.3333 31.1667 13.4166 26.375 13.4166H20.625C15.8334 13.4166 13.9167 15.3333 13.9167 20.125V25.875C13.9167 30.6666 15.8334 32.5833 20.625 32.5833Z" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.8525 7.66671V3.83337" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23.5 7.66671V3.83337" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M31.1667 7.66671V3.83337" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M38.8333 15.3334H42.6666" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M38.8333 23H42.6666" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M38.8333 30.6666H42.6666" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M31.1667 38.3334V42.1667" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23.5192 38.3334V42.1667" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.8525 38.3334V42.1667" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.33334 15.3334H8.16668" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.33334 23H8.16668" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.33334 30.6666H8.16668" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23.5 18.5917L21.6983 21.735C21.2958 22.425 21.6216 23 22.4266 23H24.5733C25.3783 23 25.7041 23.575 25.3016 24.265L23.5 27.4083" stroke="#640EF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="flex flex-col">
                                <h3 class="text-xl font-bold">
                                    Pendaftaran Musrif/Musrifah
                                </h3>
                                <p class="text-sm leading-none text-gray-500">
                                    Untuk Menjadi Musrif/Musrifah Silahkan Klik Disini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flex flex-col max-w-6xl mx-auto faq gap-y-5">
        <h3 class="text-indigo-950 font-['Clash_Display'] text-5xl text-center">
            Daftar Ulang
        </h3>
        <p class="text-sm leading-normal text-center text-indigo-950">Daftar Ulang Diperlukan Untuk Membantu Administrator Sistem Informasi Mahad Al-Jami'ah Dalam Melakukan Proses Her-Registrasi Mahasantri Lama dan Proses Untuk Melakukan Pengolahan Billing Pembayaran, Untuk Melakukan Daftar Ulang Mahasantri Lama Silahkan Klik Tombol <span class="text-sm font-bold text-violet-700">Sign In</span> Pada Pojok Kanan Atas</p>
    </section>
    <section class="max-w-6xl mx-auto mt-20 faq">
        <h3 class="text-indigo-950 font-['Clash_Display'] text-5xl text-center">
            FAQ
        </h3>
        <h3 class="py-5 text-2xl font-semibold text-center">Frequently Asked Questions</h3>
        <div class="grid grid-cols-2 py-8 gap-x-8">
            <div class="flex flex-col gap-y-8">
                <div class="flex flex-row p-5 bg-white rounded-2xl gap-x-6">
                    <div class="flex flex-col gap-y-4">
                        <h3 class="text-base font-semibold text-indigo-950">
                            Bagaimana Mendaftar Menjadi Mahasantri?
                        </h3>
                        <p class="text-sm leading-normal text-gray-500">
                            Aliquam venenatis ex ligula, ut euismod nunc rutrum in. Mauris quis fringilla sem. Pellentesque eu justo id enim vehicula sodales ut sit amet magna. Nam vulputate nibh et massa imperdiet porttitor. Mauris fringilla lobortis sem, sed lobortis justo tincidunt ut. Mauris accumsan dolor orci, varius viverra odio fermentum non. Vivamus cursus tortor non viverra molestie.
                        </p>
                        <a href="#" class="text-sm font-semibold text-violet-700">Selengkapnya</a>
                    </div>
                    <a href="">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="30.5" y="30" width="30" height="30" rx="15" transform="rotate(-180 30.5 30)" fill="#080C2E"/>
                            <path d="M9.56 17.2876L14.45 12.3976C15.0275 11.8201 15.9725 11.8201 16.55 12.3976L21.44 17.2876" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="flex flex-row justify-between p-5 bg-white rounded-2xl gap-x-6">
                    <div class="flex flex-col gap-y-4">
                        <h3 class="text-base font-semibold text-indigo-950">
                            Apakah Pembayaran Mahad Al-Jami'ah Boleh Dicicil?
                        </h3>
                    </div>
                    <a href="">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" width="30" height="30" rx="15" fill="white"/>
                            <path d="M21.44 12.7124L16.55 17.6024C15.9725 18.1799 15.0275 18.1799 14.45 17.6024L9.56 12.7124" stroke="#080C2E" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-col gap-y-8">
                <div class="flex flex-row p-5 bg-white rounded-2xl gap-x-6">
                    <div class="flex flex-col gap-y-4">
                        <h3 class="text-base font-semibold text-indigo-950">
                            Bagaimana Menjadi Musrif/Musrifah?
                        </h3>
                        <p class="text-sm leading-normal text-gray-500">
                            Aliquam venenatis ex ligula, ut euismod nunc rutrum in. Mauris quis fringilla sem. Pellentesque eu justo id enim vehicula sodales ut sit amet magna. Nam vulputate nibh et massa imperdiet porttitor. Mauris fringilla lobortis sem, sed lobortis justo tincidunt ut. Mauris accumsan dolor orci, varius viverra odio fermentum non. Vivamus cursus tortor non viverra molestie.
                        </p>
                        <a href="#" class="text-sm font-semibold text-violet-700">Learn More</a>
                    </div>
                    <a href="">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="30.5" y="30" width="30" height="30" rx="15" transform="rotate(-180 30.5 30)" fill="#080C2E"/>
                            <path d="M9.56 17.2876L14.45 12.3976C15.0275 11.8201 15.9725 11.8201 16.55 12.3976L21.44 17.2876" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="flex flex-row bg-[#080C2E] rounded-2xl p-5 gap-x-6 justify-between">
                    <div class="flex flex-row items-center gap-x-2">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.5 12.2V13.9C20.5 17.05 18.7 18.4 16 18.4H7C4.3 18.4 2.5 17.05 2.5 13.9V8.5C2.5 5.35 4.3 4 7 4H9.7C9.57 4.38 9.5 4.8 9.5 5.25V9.15002C9.5 10.12 9.82 10.94 10.39 11.51C10.96 12.08 11.78 12.4 12.75 12.4V13.79C12.75 14.3 13.33 14.61 13.76 14.33L16.65 12.4H19.25C19.7 12.4 20.12 12.33 20.5 12.2Z" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.5 5.25V9.15002C22.5 10.64 21.74 11.76 20.5 12.2C20.12 12.33 19.7 12.4 19.25 12.4H16.65L13.76 14.33C13.33 14.61 12.75 14.3 12.75 13.79V12.4C11.78 12.4 10.96 12.08 10.39 11.51C9.82 10.94 9.5 10.12 9.5 9.15002V5.25C9.5 4.8 9.57 4.38 9.7 4C10.14 2.76 11.26 2 12.75 2H19.25C21.2 2 22.5 3.3 22.5 5.25Z" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.90002 22H15.1" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5 18.3999V21.9999" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.9955 7.25H19.0045" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.1957 7.25H16.2047" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.3954 7.25H13.4044" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="flex flex-col gap-y-4">
                            <h3 class="text-base font-semibold text-white">
                                Kirim Email Untuk Pertanyaan Lainnya
                            </h3>
                        </div>
                    </div>
                    <a href="">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="30" width="30" height="30" rx="15" transform="rotate(-90 0.5 30)" fill="white"/>
                            <path d="M13.2125 9.05994L18.1025 13.9499C18.68 14.5274 18.68 15.4724 18.1025 16.0499L13.2125 20.9399" stroke="#080C2E" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="relative z-0 max-w-6xl p-12 mx-auto mt-20 bg-green-700 closing rounded-2xl">
        <div class="grid items-center grid-cols-2 gap-x-10">
            <div class="flex flex-col gap-y-10">
                <div class="flex flex-row px-3 py-2 bg-white rounded-full w-fit small-badge gap-x-2">
                    <p class="text-base font-semibold text-indigo-950">
                        Apalagi Yang Ditunggu Kawans
                    </p>
                </div>
                <div class="flex flex-col gap-y-3">
                    <h1 class="text-white font-['Clash_Display'] text-5xl leading-none">
                        Start Growing Today
                    </h1>
                    <p class="text-sm leading-normal text-white">
                        Yuks..Gabung Bersama Kami Di<br>
                        <span class="text-3xl text-white text-bold font-['Clash_Display']">Mahad Al-Jami'ah</span><br>Universitas Islam Negeri Sultan Syarif Kasim Riau
                    </p>
                </div>
                <div class="flex flex-row gap-x-5">
                    <a href="#" class="text-sm bg-[#FFD15A] text-indigo-950 py-2 px-7 rounded-full font-semibold">Website Resmi Mahad Al-Jami'ah</a>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-x-5 gap-y-5">
                <div class="group closing-card">
                    <img src="images/mahad_1.jpeg" class="flex flex-col items-center justify-center px-1 py-1 transition-all duration-500 ease-in-out hover:bg-yellow-500 rounded-2xl gap-y-5">
                </div>
                <div class="group closing-card">
                    <img src="images/mahad_2.jpeg" class="flex flex-col items-center justify-center px-1 py-1 transition-all duration-500 ease-in-out hover:bg-yellow-500 rounded-2xl gap-y-5">
                </div>
                <div class="group closing-card">
                    <img src="images/mahad_3.jpeg" class="flex flex-col items-center justify-center px-1 py-1 transition-all duration-500 ease-in-out hover:bg-yellow-500 rounded-2xl gap-y-5">
                </div>
                <div class="group closing-card">
                    <img src="images/mahad_8.jpg" class="flex flex-col items-center justify-center px-1 py-1 transition-all duration-500 ease-in-out hover:bg-yellow-500 rounded-2xl gap-y-5">
                </div>
                <div class="group closing-card">
                    <img src="images/mahad_5.jpeg" class="flex flex-col items-center justify-center px-1 py-1 transition-all duration-500 ease-in-out hover:bg-yellow-500 rounded-2xl gap-y-5">
                </div>
                <div class="group closing-card">
                    <img src="images/mahad_6.jpg" class="flex flex-col items-center justify-center px-1 py-1 transition-all duration-500 ease-in-out hover:bg-yellow-500 rounded-2xl gap-y-5">
                </div>
            </div>
        </div>
    </section>
    <section class="footer w-screen -mt-[230px] bg-[#080C2E] -z-[999]">
        <div class="max-w-6xl mx-auto py-6 grid grid-cols-5 pt-[330px]">
            <div class="flex flex-col col-span-2 company-logo gap-y-7">
                <div class="flex flex-row items-center gap-x-3">
                    <img src="images/logo.png" alt="" class="h-[60px]">
                    <div class="flex flex-col gap-y-1">
                        <h3 class="text-2xl leading-none text-white">Mahad Al-Jami'ah</h3>
                        <h4 class="text-sm leading-none text-white">Universitas Islam Negeri Sultan Syarif Kasim Riau</h4>
                    </div>
                </div>
                <p class="text-sm leading-normal text-gray-500" break>
                    Menjadikan Universitas Islam Negeri Sultan Syarif Kasim Riau Gemilang dan Terbilang
                </p>
                <div class="flex flex-row items-center gap-x-3">
                    <div class="bg-white rounded-full flex items-center p-[7px]">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z" stroke="#640EF1" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#640EF1" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="bg-white rounded-full flex items-center p-[7px]">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#640EF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3H9C7.05 8.84 7.05 15.16 9 21H8" stroke="#640EF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 3C16.95 8.84 16.95 15.16 15 21" stroke="#640EF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3 16V15C8.84 16.95 15.16 16.95 21 15V16" stroke="#640EF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3 9.0001C8.84 7.0501 15.16 7.0501 21 9.0001" stroke="#640EF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="bg-white rounded-full flex items-center p-[7px]">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#640EF1" stroke-width="2" stroke-miterlimit="10"/>
                            </svg>
                        </a>
                    </div>
                    <div class="bg-white rounded-full flex items-center p-[7px]">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15Z" stroke="#640EF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.52 7.11011H21.48" stroke="#640EF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.52 2.11011V6.97011" stroke="#640EF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.48 2.11011V6.52011" stroke="#640EF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.75 14.4501V13.2501C9.75 11.7101 10.84 11.0801 12.17 11.8501L13.21 12.4501L14.25 13.0501C15.58 13.8201 15.58 15.0801 14.25 15.8501L13.21 16.4501L12.17 17.0501C10.84 17.8201 9.75 17.1901 9.75 15.6501V14.4501V14.4501Z" stroke="#640EF1" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col products gap-y-7">
                <h3 class="text-lg font-bold text-white">
                    Aplikasi
                </h3>
                <ul class="flex flex-col gap-y-4">
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:text-violet-700">Sisfo Mahad</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:text-violet-700">Pendaftaran Mahasantri</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:text-violet-700">Mobile Mahasantri</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col resources gap-y-7">
                <h3 class="text-lg font-bold text-white">
                    Layanan
                </h3>
                <ul class="flex flex-col gap-y-4">
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:text-violet-700">Layanan Kesehatan</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:text-violet-700">Layanan Wifi</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:text-violet-700">Sarana Olahraga</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col company gap-y-7">
                <h3 class="text-lg font-bold text-white">
                    Unduhan
                </h3>
                <ul class="flex flex-col gap-y-4">
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:text-violet-700">Al-Qur'an</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:text-violet-700">Sofware Islami</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="max-w-6xl mx-auto text-center text-[#8D90A8] text-sm pt-6 pb-10">
            All Rights Reserved • Copyright by Mahad Aljami'ah Universitas Islam Negeri Sultan Syarif Kasim Riau
        </div>
    </section>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

            <div class="p-6 mx-auto max-w-7xl lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-auto h-16 bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-50 dark:bg-red-800/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center w-6 h-6 mx-6 shrink-0 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-50 dark:bg-red-800/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center w-6 h-6 mx-6 shrink-0 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-50 dark:bg-red-800/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center w-6 h-6 mx-6 shrink-0 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-red-50 dark:bg-red-800/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center px-0 mt-16 sm:items-center sm:justify-between">
                    <div class="text-sm text-center sm:text-start">
                        &nbsp;
                    </div>

                    <div class="text-sm text-center text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
