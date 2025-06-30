<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Web | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>



<body class="bg-white-100 text-gray-800  min-h-screen bg-[url('bg-img/bg-5.jpg')] w-full h-full">

    <!-- Header -->
    <header class="flex justify-between items-center p-6 border-b bg-gray-100">
        <div class=" font-bold gradient-text-index">Rendi Arpiana Putra | D1A241007</div>
        <nav class="hidden md:flex space-x-8 text-md font-bold items-center ">
            <a href="index.php" class=" hover:text-blue-800  transition duration-300 ease-in-out">BERANDA</a>
            <a href="about.php" class=" hover:text-blue-800  transition duration-300 ease-in-out">ABOUT ME</a>
            <a href="artikel.php" class=" text-blue-600 hover:text-blue-800  transition duration-300 ease-in-out">ARTIKEL</a>
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

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

        <!-- Artikel Utama -->
        <section class="md:col-span-2 bg-sky-100 p-6 rounded shadow ">
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
        <aside class="bg-sky-100 p-6 rounded shadow">
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

    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center py-4 mt-10">
        &copy; <?php echo date('Y'); ?> | Created by Rendi Arpiana Putra
    </footer>

</body>

</html>