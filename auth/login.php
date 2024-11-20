<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: /index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <link rel="stylesheet" href="../CSS/3d.css">
    <!-- <link rel="stylesheet" href="../CSS/btn.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <title>Document</title>
</head>


<body class="font-sans text-gray-700">

    <div class="container mx-auto p-8 flex z-50 ">
        <div class="max-w-md w-full mx-auto">
            <div class="container flex flex-col justify-center items-center">
                <h1 class="text-4xl text-center mb-12 font-bold text-white ">Please Login!</h1>
            </div>

            <div class="backdrop-blur-sm rounded-lg overflow-hidden shadow-slate-950 shadow-2xl ">
                <div class="p-8">
                    <form method="POST" action="../utils/auth.php">
                        
                        <label for="username"
                            class="relative block overflow-hidden bg-white rounded-md border border-gray-200 px-3 pt-3 shadow-sm mb-5 focus-within:border-[#243757] focus-within:ring-1 focus-within:ring-[#243757]">
                            <input type="username" placeholder="username" name="username"
                                class="peer h-8 w-full border-none bg-transparent p-0  placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />

                            <span
                                class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-400 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs">
                                username
                            </span>
                        </label>

                        <label for="password"
                            class="relative block overflow-hidden bg-white rounded-md border border-gray-200 px-3 pt-3 shadow-sm mb-5 focus-within:border-[#243757] focus-within:ring-1 focus-within:ring-[#243757]">
                            <input type="password" placeholder="*********" name="password"
                                class="peer h-8 w-full border-none bg-transparent p-0  placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" />

                            <span
                                class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-400 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs">
                                password
                            </span>
                        </label>

                        <button type="submit" name="login" class="custom-btn btn-7  shadow-2xl shadow-blue-900"><span>Login</span></button>

                    </form>
                </div>

                <?php
                if (isset($_GET['notification'])) {
                    echo $_GET['notification'];
                }
                ?>
            </div>
        </div>
    </div>


    <div class="scene absolute">
        <div class="grid">
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
            <i><i></i><i></i></i>
        </div>
        <div class="ball">
            <i></i>
        </div>
    </div>

</body>

</html>