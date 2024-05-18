<?php
$con = mysqli_connect("127.0.0.1", "root", "root", "smkpnb_PPDB_2024");

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$sql = "SELECT no, nama_siswa, jurusan, keterangan FROM 13_mei";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hasil PPDB 2024</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
<!-- NAVBAR -->
        <nav data-theme-bg="" class="sticky top-0 bg-white shadow-lg" style="backdrop-filter: blur(1.75px); z-index: 999;">
            <div class=" mx-auto px-2">
                <div class="flex justify-between">
                    <div class="flex justify-between space-x-6">
                        <!-- logo -->
                        <div class="flex">
                            <h1 href="#"class="flex items-center text-gray-700">
                            <img id="logoSekolah" class="w-16 sm:w-12 mt-2 ml-0 lg:w-16 lg:h-16 xl:w-20 xl:h-20" src="./public/logo-penus.png" alt="">
                            <span data-theme-toggle="text" class="hidden-mobile xs:hidden sm:hidden md:hidden font-bold text-black text-2xl transition duration-100 delay-50 drop-shadow-lg">SMK <span id="span_NamaSekolah" class="text-red-600/100 drop-shadow-lg">PLUS</span> PELITA NUSANTARA</span>
                            <span data-theme-toggle="text" class="font-bold text-black text-xl transition duration-100 delay-50 drop-shadow-lg">SMK <span id="span_NamaSekolah" class="text-red-600/100 drop-shadow-lg">PLUS</span> PELITA NUSANTARA</span>
                            </h1>
                        </div>
                        <!-- primary nav -->
                        <div class="hidden md:flex flex justify-end items-center space-x-1">
                            <a data-scroll="scroll" data-theme-toggle="text" href="#home" class="py-4 px-3 hover:text-red-600 font-medium">Beranda</a>
                            <a data-theme-toggle="text" href="https://ppdb.smkpluspnb.sch.id/" class="py-4 px-3 hover:text-red-600 font-medium">PPDB 2024</a>
                            <a data-scroll="scroll" data-theme-toggle="text" href="#berita" class="py-4 px-3 hover:text-red-600 font-medium">Berita</a>
                            <a data-scroll="scroll" data-theme-toggle="text" href="#sosmed" class="py-4 px-3 hover:text-red-600 font-medium">Sosial Media</a>
                            <a data-scroll="scroll" data-theme-toggle="text" href="./PPDB/2024/index.html" class="py-4 px-3 hover:text-red-600 font-medium">Hasil PPDB 2024</a>
                        </div>
                    </div>
                    <!-- mobile button goes here-->
                    <div class="mr-2 md:hidden flex">
                        <button class="mobile-menu-button ml-auto">
                            <svg id="svg" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                 <path fill-rule="evenodd" d="M3 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 5.25zm0 4.5A.75.75 0 013.75 9h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 9.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="mobile-menu hidden md:hidden flex justify-center relative z-10 animate__animated animate__fadeIn ">
                <a data-scroll="scroll" data-theme-toggle="text" href="#home" class=" py-2 px-4 text-sm hover:bg-gray-200 hover:text-red-600 font-medium">Home</a>
                <a data-theme-toggle="text" href="https://ppdb.smkpluspnb.sch.id/" class=" py-2 px-4 text-sm hover:bg-gray-200 hover:text-red-600 font-medium">PPBD 2024</a>
                <a data-scroll="scroll" data-theme-toggle="text" href="#berita" class=" py-2 px-4 text-sm hover:bg-gray-200 hover:text-red-600 font-medium">News</a>
                <a data-scroll="scroll" data-theme-toggle="text" href="#sosmed" class=" py-2 px-4 text-sm hover:bg-gray-200 hover:text-red-600 font-medium">Social Media</a>
            </div>
        </nav>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg" id="table">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Jurusan
                </th>
                <th scope="col" class="px-6 py-3">
                    Keterangan
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $rows['no']; ?>
                </th>
                <td class="px-6 py-4">
                    <?php echo $rows['nama_siswa']; ?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $rows['jurusan']; ?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $rows['keterangan']; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Lorem ipsum dolor sit amet</p>

<!-- FOOTER -->
    <footer class="relative w-full bg-gray-900">
        <div class="w-full px-8 mx-auto max-w-7xl">
          <div class="grid justify-between grid-cols-1 gap-4 md:grid-cols-2">
            <div class="block mb-6 mt-5 text-white leading-snug tracking-normal text-inherit">
              <div class="text-xl font-semibold flex">
                <img src="public\location-sign-svgrepo-com.svg" type="svg" class="h-8">
                <h5 class="text-white">Lokasi Kami</h5>
              </div>
              <p class="text-balance mt-5 text-gray-300">Jl. Golf Rt06/08, Gg. Olahraga No.20, Ciriung, <br> Kecamatan Cibinong, Kabupaten Bogor, Prov. <br> Jawa Barat.</p>
            </div>
            <div class="grid justify-between grid-cols-3 gap-4">
              <ul>
                <p
                  class="block mb-3 mt-5 text-white font-semibold leading-normal">
                  Kontak Kami
                </p>
                <li>
                  <a href="http://wa.me/6281210868958"
                    class="block py-1.5 text-sm font-normal leading-relaxed text-gray-300 antialiased transition-colors hover:text-blue-gray-900">
                    +6281210868958
                  </a>
                </li>
                <!-- <li>
                  <a href="#"
                    class="block py-1.5 text-white text-base font-normal leading-relaxed text-gray-700 antialiased transition-colors hover:text-blue-gray-900">
                    Solutions
                  </a>
                </li>
                <li>
                  <a href="#"
                    class="block py-1.5 text-white text-base font-normal leading-relaxed text-gray-700 antialiased transition-colors hover:text-blue-gray-900">
                    Tutorials
                  </a>
                </li> -->
              </ul>
              <ul>
                <p
                  class="block mb-3 text-white font-semibold antialiased font-medium leading-normal mt-5">
                  Navigasi
                </p>
                <li>
                  <a href="#home"
                    class="block py-1.5 text-sm font-normal leading-relaxed text-gray-300 antialiased transition-colors hover:text-blue-gray-900">
                    Beranda
                  </a>
                </li>
                <li>
                  <a href="https://ppdb.smkpluspnb.sch.id/"
                    class="block py-1.5 text-sm font-normal leading-relaxed text-gray-300 antialiased transition-colors hover:text-blue-gray-900">
                    PPDB 2024
                  </a>
                </li>
                <li>
                  <a href="#berita"
                    class="block py-1.5 text-sm font-normal leading-relaxed text-gray-300 antialiased transition-colors hover:text-blue-gray-900">
                    Berita
                  </a>
                </li>
                <li>
                  <a href="#Galeri"
                    class="block py-1.5 text-sm font-normal leading-relaxed text-gray-300 antialiased transition-colors hover:text-blue-gray-900">
                    Galeri
                  </a>
                </li>
              </ul>
              <ul>
                <p
                  class="block mb-3 mt-5 text-white font-semibold antialiased leading-normal">
                  Legal
                </p>
                <li>
                  <a href="#"
                    class="block py-1.5 text-sm font-normal leading-relaxed text-gray-300 antialiased transition-colors hover:text-blue-gray-900">
                    Privacy Police
                  </a>
                </li>
                <li>
                  <a href="#"
                    class="block py-1.5 text-sm font-normal leading-relaxed text-gray-300 antialiased transition-colors hover:text-blue-gray-900">
                    Terms & Conditions
                  </a>
                </li>
                <li>
                  <a href="#"
                    class="block py-1.5 text-sm font-normal leading-relaxed text-gray-300 antialiased transition-colors hover:text-blue-gray-900">
                    Returns Policy
                  </a>
                </li>
                <li>
                  <a href="#"
                    class="block py-1.5 text-sm font-normal leading-relaxed text-gray-300 antialiased transition-colors hover:text-blue-gray-900">
                    Accessibility
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div
            class="flex flex-col items-center justify-center w-full py-4 mt-12 border-t border-blue-gray-50 md:flex-row md:justify-between">
            <p
              class="block mb-4 text-white text-sm antialiased font-normal leading-normal text-center text-blue-gray-900 md:mb-0">
              © 2024 SMK PLUS PELITA NUSANTARA. All Rights Reserved.
            </p>
            <div class="flex gap-4 text-blue-gray-900 sm:justify-center">
              <a href="#"
                class="block text-white text-base antialiased font-light leading-relaxed transition-opacity text-inherit opacity-80 hover:opacity-100">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
              <a href="#"
                class="block text-white text-base antialiased font-light leading-relaxed transition-opacity text-inherit opacity-80 hover:opacity-100">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
              <a href="#"
                class="block text-white text-base antialiased font-light leading-relaxed transition-opacity text-inherit opacity-80 hover:opacity-100">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                  </path>
                </svg>
              </a>
              <a href="#"
                class="block text-white text-base antialiased font-light leading-relaxed transition-opacity text-inherit opacity-80 hover:opacity-100">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
              <a href="#"
                class="block text-white text-base antialiased font-light leading-relaxed transition-opacity text-inherit opacity-80 hover:opacity-100">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </footer>  





<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>

<?php
// Menutup koneksi database
$con->close();
?>

