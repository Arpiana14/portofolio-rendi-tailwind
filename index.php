<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PERSONAL WEL | BERANDA</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="bg-white-100 text-gray-800  min-h-screen">

  <!-- Header Navbar -->
  <header class="flex justify-between items-center p-6 border-b bg-gray-100">
    <div class=" font-bold gradient-text-index">Rendi Arpiana Putra </div>
    <nav class="hidden md:flex space-x-8 text-md font-bold items-center ">
      <a href="index.php" class="text-blue-600 hover:text-blue-800  transition duration-300 ease-in-out">BERANDA</a>
      <a href="about.php" class="hover:text-blue-800  transition duration-300 ease-in-out">ABOUT ME</a>
      <a href="artikel.php" class="hover:text-blue-800  transition duration-300 ease-in-out">ARTIKEL</a>
      <a href="gallery.php" class="hover:text-blue-800  transition duration-300 ease-in-out">GALLERY</a>

      <button
        onclick="window.location.href='admin/login.php'"
        class="px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-blue-800 to-blue-600 
         hover:from-blue-600 hover:to-blue-800 transition-all duration-500 ease-in-out shadow-lg"> LOGIN</button>
    </nav>
    <div class="md:hidden">
      <button class="text-xl">&#9776;</button>
    </div>
  </header>

  <!-- Main Section index-->
  <main class=" grid grid-cols-1 md:grid-cols-3 items-center  md:px-20  gap-6 bg-[url('bg-img/bg-5.jpg')] w-full" style="height: 70vh;">
    <!-- Text Left -->
    <div>
      <h2 class="xl:text-5xl lg:text-5xl md:text-5xl text-4xl font-semibold mb-3">Hallo 👋, Saya</h2>
      <h2 class="xl:text-5xl lg:text-5xl md:text-5xl text-4xl font-semibold text-blue-600 mb-3">Rendi Arpiana Putra!</h2>
      <p class="text-sm mb-4">seorang mahasiswa Jurusan Sistem Informasi di
        Universitas Subang. Saya percaya pada kekuatan pembelajaran berkelanjutan dan penerapan praktis.<br class="mb-4">
        Lihat bagaimana saya menggabungkan kreativitas dengan keterampilan teknis untuk menciptakan solusi efektif.</p>
      <button
        onclick="window.location.href='about.php'"
        class="px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-blue-800 to-blue-600 
         hover:from-blue-600 hover:to-blue-800 transition-all duration-500 ease-in-out shadow-lg">Read More</button>

    </div>

    <!-- Image Center -->
    <div class="flex justify-center relative">
      <div class=" circle-bg pt-8"></div>
      <div class=" portrait z-10 flex items-center justify-center text-sm text-gray-500">
        <img src="bg-img/bg-4.png" alt="Deskripsi gambar">
      </div>
    </div>

    <!-- Slogan Right -->
    <div class="text-right md:text-left">
      <h2 class="text-4xl font-bold leading-tight">
        <span class="text-5xl font-bold text-blue-700">SIMPLICITY</span><br>
        <span class="text-black">Is The Ultimate Sophistication. 🏆</span>
      </h2>
    </div>
  </main>

  <!-- Main Content about -->
  <main class="max-w-full mx-auto  rounded p-8 mt-8">
    <section class="bg-gray-100">
      <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
          <div class="max-w-lg">
            <h2 class="text-3xl font-extrabold  sm:text-4xl mb-1 text-blue-700">About Me</h2>
            <div class="h-1 w-20 bg-gradient-to-r from-indigo-600 to-purple-600  mb-6 rounded-full"></div>
            <div class="space-y-6">
              Saya seorang mahasiswa Jurusan Sistem Informasi di Universitas Subang. Saya percaya pada kekuatan pembelajaran berkelanjutan dan penerapan praktis.
              Di luar perkuliahan dan pekerjaan, saya menikmati berkumpul dengan teman-teman, membaca buku,
              dan menjelajahi teknologi baru. Saya selalu terbuka untuk kolaborasi dan kesempatan baru, jadi jangan ragu untuk menghubungi saya!
            </div>

            <div class="w-full flex flex-col gap-2 mt-8 mb-8">
              <!-- Progress bar 1 -->
              <div class="flex flex-col gap-2">
                <div class="w-full flex justify-between font-semibold">
                  <span>HTML</span>
                  <span>90 %</span>
                </div>
                <!-- Progress bar -->
                <div class="w-full bg-gray-300 rounded-full">
                  <div class="w-[90%] h-2 bg-blue-700 rounded-full"></div>
                </div>
              </div>
              <!-- Progress bar 1 -->
              <div class="flex flex-col gap-2">
                <div class="w-full flex justify-between font-semibold">
                  <span>CSS</span>
                  <span>79 %</span>
                </div>
                <!-- Progress bar -->
                <div class="w-full bg-gray-300 rounded-full">
                  <div class="w-[79%] h-2 bg-blue-700 rounded-full"></div>
                </div>
              </div>
              <!-- Progress bar 1 -->
              <div class="flex flex-col gap-2">
                <div class="w-full flex justify-between font-semibold">
                  <span>Javascript</span>
                  <span>66 %</span>
                </div>
                <!-- Progress bar -->
                <div class="w-full bg-gray-300 rounded-full">
                  <div class="w-[66%] h-2 bg-blue-700 rounded-full"></div>
                </div>
              </div>

              <!-- Progress bar 1 -->
              <div class="flex flex-col gap-2">
                <div class="w-full flex justify-between font-semibold">
                  <span>PHP</span>
                  <span>60 %</span>
                </div>
                <!-- Progress bar -->
                <div class="w-full bg-gray-300 rounded-full">
                  <div class="w-[60%] h-2 bg-blue-700 rounded-full"></div>
                </div>
              </div>
            </div>

          </div>
          <div class="mt-12 md:mt-0">
            <img src="bg-img/bg-6.jpg" alt="About Us Image" class="object-cover rounded-lg shadow-md">
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Main Content artikel -->
  <h2 class="text-3xl font-extrabold sm:text-4xl mb-1 text-blue-700 text-center mt-8">ARTIKEL</h2>
  <main class="max-w-8xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 bg-blue-800">

    <!-- Artikel Utama -->
    <section class="md:col-span-2 bg-white p-6 rounded shadow">
      <h2 class="text-xl font-bold mb-4">Artikel Terbaru</h2>
      <div class="space-y-4">
        <?php
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<div class='border-b pb-4'>";
          echo "<h3 class='text-lg font-semibold text-blue-700'>" .
            htmlspecialchars($data['nama_artikel']) . "</h3>";
          echo "<p>" . htmlspecialchars($data['isi_artikel']) . "</p>";
          echo "</div>";
        }
        ?>
      </div>
    </section>

    <!-- Sidebar -->
    <aside class="bg-white p-6 rounded shadow">
      <h2 class="text-lg font-bold mb-4">Daftar Artikel</h2>
      <ul class="space-y-2 list-disc list-inside text-gray-700">
        <?php
        $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<li>" . htmlspecialchars($data['nama_artikel']) . "</li>";
        }
        ?>
      </ul>
    </aside>
  </main>

  <!-- Main Content gallery -->
  <main class="max-w-7xl mx-auto p-6 mb-10">

    <h2 class="text-3xl font-extrabold sm:text-4xl mb-1 text-blue-700 text-center mt-8 text-center mb-8">GALLERY</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php
      $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
      $query = mysqli_query($db, $sql);
      while ($data = mysqli_fetch_array($query)) {
        echo "<div class='bg-white border rounded shadow overflow-hidden'>";

        echo "<img src='images/{$data['foto']}' class='w-full h-48 object-cover' alt='Gambar'>";

        echo "<div class='p-4'>";
        echo "<h3 class='text-lg font-semibold text-blue-700'>" .
          htmlspecialchars($data['judul']) . "</h3>";
        echo "</div></div>";
      }
      ?>
    </div>
  </main>

  <h2 class="text-3xl font-extrabold sm:text-4xl mb-1 text-blue-700 text-center  mt-8 pb-8">CONTACT US</h2>
  <main class="max-w-8xl mx-auto bg-index p-6 relative mb-8 ">
    <div class="flex flex-col md:flex-row gap-12">

      <div class="md:w-1/2  p-5">
        <h3 class="text-xl font-semibold mb-4 text-blue-600">Informasi Kontak</h3>
        <div class="space-y-4">
          <div class="flex items-start space-x-4">
            <div class="mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium">Email </h4>
              <p class="text-gray-600">rendiarpiana@gmail.com</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <div class="mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium">Telepon</h4>
              <p class="text-gray-600">+62 823-1958-9877</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <div class="mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium">Kampus</h4>
              <p class="text-gray-600">Fakultas Ilmu Komputer, Universitas Subang, Subang, Jawa Barat</p>
            </div>
          </div>

          <h2 class="text-md font-bold mb-1 text-blue-700 pt-4 mb-2">Follow Me </h2>
          <div class="flex space-x-4">
            <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center hover:bg-blue-200 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
              </svg>
            </a>
            <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center hover:bg-blue-200 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
              </svg>
            </a>
            <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center hover:bg-blue-200 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="md:w-1/2 ">
        <div class="p-6 space-y-6 bg-gray-200" style="border-radius: 20px;">
          <form action="admin/proses_add_pesan.php" method="post">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="" class="text-sm font-medium text-gray-900 block mb-2">Nama Lengkap</label>
                <input type="hidden" name="id_pesan" id="id_pesan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="">
                <input type="text" name="nama" id="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Nama" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="" class="text-sm font-medium text-gray-900 block mb-2">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="" class="text-sm font-medium text-gray-900 block mb-2">E-mail</label>
                <input type="text" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="E-mail" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="" class="text-sm font-medium text-gray-900 block mb-2">No.Hp</label>
                <input type="text" name="no_hp" id="no_hp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="No.HP" required="">
              </div>
              <div class="col-span-full mb-8">
                <label for="" class="text-sm font-medium text-gray-900 block mb-2">Pesan</label>
                <textarea name="pesan" id="pesan" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="Masukan pesan disini...."></textarea>
              </div>
            </div>
            <div class=" border-t border-gray-200 rounded-b aligen-center text-right">
              <button class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Kirim</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-blue-800 text-white text-center py-4 mt-4">
    &copy; <?php echo date('Y'); ?> | Created by Rendi Arpiana Putra
  </footer>
</body>

</html>