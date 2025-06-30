<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About | Personal Web </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body class="bg-white-100 text-gray-800  min-h-screen bg-[url('bg-img/bg-5.jpg')] w-full h-full">
    <!-- Header -->
    <header class="flex justify-between items-center p-6 border-b bg-gray-100">
        <div class=" font-bold gradient-text-index">Rendi Arpiana Putra | D1A241007</div>
        <nav class="hidden md:flex space-x-8 text-md font-bold items-center ">
            <a href="index.php" class=" hover:text-blue-800  transition duration-300 ease-in-out">BERANDA</a>
            <a href="about.php" class=" text-blue-600 hover:text-blue-800  transition duration-300 ease-in-out">ABOUT ME</a>
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
    <!-- About Content -->
    <h2 class="text-3xl font-bold text-center mb-12 text-blue-800 pt-9">About Me</h2>
    <main class="max-w-4xl mx-auto p-6 bg-gray-100 rounded shadow mt-8 ">
        <div class="space-y-6 ">
            <?php
            $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC";
            $query = mysqli_query($db, $sql);
            while ($data = mysqli_fetch_array($query)) {
                echo "<div>";
                echo "<p class='text-gray-700'>" . htmlspecialchars($data['about'])
                    . "</p>";
                echo "</div>";
            }
            ?>
        </div>

    </main>

    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-800">Keahlian Teknologi</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Skill 1 -->
                <div class="skill-card bg-gray-100 p-6 rounded-xl shadow-sm transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold mb-2">HTML</h3>
                    <div class="flex flex-col gap-2">
                        <div class="w-full flex justify-between font-semibold">
                            <span>90 %</span>
                        </div>
                        <!-- Progress bar -->
                        <div class="w-full bg-gray-300 rounded-full">
                            <div class="w-[90%] h-2 bg-blue-700 rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Skill 2 -->
                <div class="skill-card bg-gray-100 p-6 rounded-xl shadow-sm transition duration-300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>
                    </div>
                    <h3 class="font-bold mb-2">CSS</h3>
                    <div class="flex flex-col gap-2">
                        <div class="w-full flex justify-between font-semibold">
                            <span>79 %</span>
                        </div>
                        <!-- Progress bar -->
                        <div class="w-full bg-gray-300 rounded-full">
                            <div class="w-[79%] h-2 bg-blue-700 rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Skill 3 -->
                <div class="skill-card bg-gray-100 p-6 rounded-xl shadow-sm transition duration-300">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold mb-2">JavaScript</h3>
                    <div class="flex flex-col gap-2">
                        <div class="w-full flex justify-between font-semibold">
                            <span>66 %</span>
                        </div>
                        <!-- Progress bar -->
                        <div class="w-full bg-gray-300 rounded-full">
                            <div class="w-[66%] h-2 bg-blue-700 rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Skill 4 -->
                <div class="skill-card bg-gray-100 p-6 rounded-xl shadow-sm transition duration-300">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold mb-2">Pemrograman PHP</h3>
                    <div class="flex flex-col gap-2">
                        <div class="w-full flex justify-between font-semibold">
                            <span>60 %</span>
                        </div>
                        <!-- Progress bar -->
                        <div class="w-full bg-gray-300 rounded-full">
                            <div class="w-[60%] h-2 bg-blue-700 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center py-4 mt-10">
        &copy; <?php echo date('Y'); ?> | Created by Rendi Arpiana Putra
    </footer>
</body>

</html>