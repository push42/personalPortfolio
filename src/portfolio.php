<?php

namespace Privnote\Zuauzsuzfadda;

require '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Portfolio | Thies Bergenthal</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ein Portfolio, das meine Arbeit im Bereich Grafikdesign und Webentwicklung präsentiert. Erfahren Sie mehr über meine Projekte und Fähigkeiten.">
    <meta name="keywords" content="portfolio, website, design, webdevelopment, web, html, css, javascript, php, graphic design, graphic, html5, tailwindcss, personal portfolio, thies bergenthal, thies, bergenthal, bergenthal thies, development, devops, dev, fivem, project, github, push42, push42dev">
    <meta name="author" content="Thies Bergenthal">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://thiesbergenthal.de">
    <meta property="og:title" content="Portfolio | Thies Bergenthal">
    <meta property="og:description" content="Ein Portfolio, das meine Arbeit im Bereich Grafikdesign und Webentwicklung präsentiert. Erfahren Sie mehr über meine Projekte und Fähigkeiten.">
    <meta property="og:image" content="https://i.ibb.co/f9xvChF/push42-avatar-puppy2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://thiesbergenthal.de">
    <meta property="twitter:title" content="Portfolio | Thies Bergenthal">
    <meta property="twitter:description" content="Ein Portfolio, das meine Arbeit im Bereich Grafikdesign und Webentwicklung präsentiert. Erfahren Sie mehr über meine Projekte und Fähigkeiten.">
    <meta property="twitter:image" content="https://i.ibb.co/f9xvChF/push42-avatar-puppy2.png">

    <!-- Schema.org markup for Google -->
    <meta itemprop="name" content="Portfolio | Thies Bergenthal">
    <meta itemprop="description" content="Ein Portfolio, das meine Arbeit im Bereich Grafikdesign und Webentwicklung präsentiert. Erfahren Sie mehr über meine Projekte und Fähigkeiten.">
    <meta itemprop="image" content="https://i.ibb.co/f9xvChF/push42-avatar-puppy2.png">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/portfolio.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9d1f4cdd15.js" crossorigin="anonymous"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- jQuery CounterUp -->
    <script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!-- Waypoints -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="./assets/js/jquery.waypoints.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>

    <!-- Swiper -->
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css" rel="stylesheet" />

    <!-- Alpine.js Collapse -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine.js -->
    <script src="https://unpkg.com/alpinejs" defer></script>

    <!-- Alpine.js (v2) -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Horizon Tailwind React CSS -->
    <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />

    <!-- Material Tailwind CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Material Tailwind Ripple Effect -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
</head>

<?php

include_once './components/navbar.php';

?>

<body class="text-white">
    <div class="container mx-auto p-10">
        <div class="text-center my-20">
            <h1 class="text-4xl font-bold">Meine <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Grafiken</span> & <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Projekte</span></h1>
            <p class="text-xl mt-4">
                Entdecken Sie meine Grafiken und Projekte, die ich in den letzten Jahren erstellt habe.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Portfolio Item -->
            <div class="portfolio-item bg-zinc-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out flex flex-col justify-between">
                <div class="grid grid-cols-2 gap-2">
                    <img src="./assets/work/avatar/pxrp.webp" alt="Avatar 1" class="object-cover">
                    <img src="./assets/work/avatar/avatar_ak.gif" alt="Avatar 2" class="object-cover">
                    <img src="./assets/work/avatar/virtual_life.webp" alt="Avatar 3" class="object-cover">
                    <img src="./assets/work/avatar/lorapw_emblem.webp" alt="Avatar 4" class="object-cover">
                </div>
                <div class="p-5 mt-auto">
                    <h2 class="text-2xl font-semibold">Avatare & Logos</h2>
                    <p class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mt-2">32 Grafiken</p>
                    <a href="avatar.php" class="mt-4 inline-block bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-md px-4 py-2 transition duration-300">Ansehen</a>
                </div>
            </div>

            <div class="portfolio-item bg-zinc-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out flex flex-col justify-between">
                <div class="flex flex-col">
                    <img src="./assets/work/banner/ryze4g.webp" alt="Banner 1" class="object-cover mb-2">
                    <img src="./assets/work/banner/lorapw_service.webp" alt="Banner 2" class="object-cover mb-2">
                    <img src="./assets/work/banner/lp_repborn_banner_ani(1).gif" alt="Banner 3" class="object-cover">
                </div>
                <div class="p-5 mt-auto">
                    <h2 class="text-2xl font-semibold">Banner</h2>
                    <p class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mt-2">40 Grafiken</p>
                    <a href="banner.php" class="mt-4 inline-block bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-md px-4 py-2 transition duration-300">Ansehen</a>
                </div>
            </div>

            <div class="portfolio-item bg-zinc-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out flex flex-col justify-between">
                <div class="flex flex-col">
                    <img src="./assets/work/thread/thread1.webp" alt="Banner 1" class="object-cover mb-2">
                    <img src="./assets/work/thread/shop_preview.png" alt="Banner 2" class="object-cover mb-2">
                </div>
                <div class="p-5 mt-auto">
                    <h2 class="text-2xl font-semibold">Thread's</h2>
                    <p class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mt-2">7 Grafiken</p>
                    <a href="threads.php" class="mt-4 inline-block bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-md px-4 py-2 transition duration-300">Ansehen</a>
                </div>
            </div>

            <div class="portfolio-item bg-zinc-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out flex flex-col justify-between">
                <div class="flex flex-col">
                    <img src="./assets/work/websites/portfolio_v1.png" alt="Banner 1" class="object-cover mb-2">
                    <img src="./assets/work/websites/lora-pw.webp" alt="Banner 2" class="object-cover mb-2">
                </div>
                <div class="p-5 mt-auto">
                    <h2 class="text-2xl font-semibold">Webentwicklung</h2>
                    <p class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mt-2">12 Projekte</p>
                    <a href="threads.php" class="mt-4 inline-block bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-md px-4 py-2 transition duration-300">Ansehen</a>
                </div>
            </div>


        </div>
    </div>
</body>

<?php

include_once './components/footer_de.php';

?>

</html>