<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:beranda_admin.php');
}
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Administrator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style type="text/tailwindcss">
        @layer utilities {
            .bg-black-transparent-blur {
                background-color: rgba(34, 34, 34, 0.5);
                backdrop-filter: blur(8px);
                -webkit-backdrop-filter: blur(8px);
            }
        }

        /* Efek Animasi Gradient Text */
        .gradient-text {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(45deg,rgb(255, 255, 255), #7209b7,rgb(7, 131, 255));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            background-size: 200% auto;
            animation: gradientShift 3s ease-in-out infinite;
            margin-bottom: 3rem;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Efek Animasi Text Shadow */
        .shadow-text {
            font-size: 2.5rem;
            animation: textGlow 2s ease-in-out infinite alternate;
            margin-bottom: 3rem;
            text-shadow: 0 0 5px rgba(255,255,255,0.5);
        }
        
        @keyframes textGlow {
            from {
                text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #0073e6, 0 0 20px #0073e6;
            }
            to {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #3a86ff, 0 0 40px #3a86ff;
            }
        }
</style>

<body class=" h-screen w-screen bg-[url('../bg-img/bg-1.jpg')] bg-cover bg-center min-h-screen flex items-center justify-center">
    <div class="bg-black-transparent-blur shadow-lg rounded-lg p-8 w-full max-w-md">
        <h3 class="text-2xl gradient-text font-bold text-center text-white mb-6">LOGIN ADMINISTRATOR</h2>
        <form action="cek_login.php" method="post" class="space-y-5">
            <div>
                <label for="username" class="block text-sm font-medium text-white">Username</label>

                <input type="text" name="username" id="username" required
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>

                <label for="password" class="block text-sm font-medium text-white">Password</label>

                <input type="password" name="password" id="password" required
                    class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex justify-between items-center">
                <input type="submit" name="login" value="Login"
                    class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 cursor-pointer">
                <input type="reset" name="cancel" value="Cancel"

                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 cursor-pointer">
            </div>
        </form>
        <div class="text-center text-sm text-white mt-6">
            &copy; <?php echo date('Y'); ?> - Rendi Arpiana Putra
        </div>
    </div>
</body>

</html>