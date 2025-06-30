<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery | Personal Web </title>
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
            <a href="artikel.php" class="hover:text-blue-800  transition duration-300 ease-in-out">ARTIKEL</a>
            <a href="gallery.php" class="text-blue-600 hover:text-blue-800  transition duration-300 ease-in-out">GALLERY</a>

            <button
                onclick="window.location.href='admin/login.php'"
                class="px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-blue-800 to-blue-600 
         hover:from-blue-600 hover:to-blue-800 transition-all duration-500 ease-in-out shadow-lg"> LOGIN</button>
        </nav>
        <div class="md:hidden">
            <button class="text-xl">&#9776;</button>
        </div>
    </header>

    <!-- Gallery Grid -->
    <main class="max-w-6xl mx-auto p-6">
        <h2 class="text-xl font-bold mb-6 text-center">Galeri Foto</h2>
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
    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center py-4 mt-10">
        &copy; <?php echo date('Y'); ?> | Created by Rendi Arpiana Putra
    </footer>
</body>

</html>