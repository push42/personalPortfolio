<?php

namespace Privnote\Zuauzsuzfadda;

require '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Banner | Thies Bergenthal</title>

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



<body class="antialiased">



    <!-- ========= Image Preview Modal (Clicked on Image) ========= -->
    <div id="myModal" class="ImageModal hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-70 backdrop-blur-md">
        <div class="modal-content mx-auto p-6 bg-gradient-to-bl from-zinc-900 to-black rounded-3xl shadow-2xl max-w-6xl flex items-center justify-center relative">
            <span class="close absolute top-1 right-2 text-white text-3xl font-semibold cursor-pointer hover:text-gray-500">&times;</span>
            <img id="img01" class="mx-auto my-4 max-w-full h-auto rounded-lg shadow-lg transition-all duration-300 ease-in-out">
        </div>
    </div>
    <!-- ========= Image Preview Modal End ========= -->




    <!-- Navbar -->
    <?php include 'components/navbar.php'; ?>
    <div id="particles-js" style="position:fixed; top:0; left:0; width:100%; height:100%; z-index:-1;"></div>
    <div class="relative overflow-hidden text-white">
        <video autoplay loop muted playsinline class="video-bg" id="video-bg">
            <source src="./assets/videos/bg2.mp4" type="video/mp4">
        </video>
        <div class="content">
            <div class="relative p-10">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-6xl font-extrabold mb-2 tracking-widest animate-pulse">Meine <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Banner</span></span></h1>
                    <!-- <p class="text-3xl mb-6 font-light">Fully functional & responsive on all devices</p> -->
                    <!-- <div class="mt-2 text-xl font-medium">Take a look into my Avatar &amp; Logo creations</div> -->
                </div>
            </div>
        </div>
    </div>


    <!-- Main content -->
    <div class="teteeteete" data-aos="fade-up" data-aos-duration="1000">
        <section class="teteteetete">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-2xl font-semibold text-center text-gray-800 lg:text-3xl dark:text-white myWorkDescription">
                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Statisch
                    </span>& <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Animiert.
                    </span>
                </h1>
                <div class="w-full text-left mt-10">
                    <nav aria-label="breadcrumb" class="block w-full">
                        <ol class="flex w-full flex-wrap items-center rounded-md bg-zinc-800 bg-opacity-60 py-2 px-4">

                            <li class="flex cursor-pointer items-center text-sm font-normal leading-normal text-gray-300 antialiased transition-colors duration-300 hover:text-purple-500">
                                <a class="opacity-60" href="avatar.php">
                                    <span><i class="fa-solid fa-bars mr-2 text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]"></i>Avatare & Logos</span>
                                </a>
                                <span class="pointer-events-none mx-2 select-none text-sm font-normal leading-normal text-gray-300 antialiased">
                                    /
                                </span>
                            </li>
                            <li class="flex cursor-pointer items-center text-sm font-normal leading-normal text-gray-300 antialiased transition-colors duration-300 hover:text-purple-500">
                                <a class="font-medium text-gray-100 transition-colors hover:text-purple-500" href="banner.php">
                                    <i class="fa-solid fa-bars mr-2 text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]"></i>Banner
                                </a>

                                <span class="pointer-events-none mx-2 select-none text-sm font-normal leading-normal text-gray-300 antialiased">
                                    /
                                </span>
                            </li>
                            <li class="flex cursor-pointer items-center text-sm font-normal leading-normal text-gray-300 antialiased transition-colors duration-300 hover:text-purple-500">
                                <a class="opacity-60" href="threads.php">
                                    <span><i class="fa-solid fa-bars mr-2 text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]"></i>Forum
                                        Threads</span>
                                </a>
                                <span class="pointer-events-none mx-2 select-none text-sm font-normal leading-normal text-gray-300 antialiased">
                                    /
                                </span>
                            </li>
                            <li class="flex cursor-pointer items-center text-sm font-normal leading-normal text-gray-300 antialiased transition-colors duration-300 hover:text-purple-500">
                                <a class="opacity-60" href="websites.php">
                                    <span>
                                        <i class="fa-solid fa-bars mr-2 text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]"></i>Websites
                                    </span>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/-_-PlowKing-_-.gif" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">PLOWKING</span>
                                Kings Skygen
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Gaming Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/-_-PlowKing-_-.png" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">PLOWKING</span>
                                Kings Skygen
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Gaming Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/akb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">AK</span>
                                Exotic Trade Center
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Trading Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-orange-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:orange-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/illustrator.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/empress_o.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">EMPRESS</span>
                                Network
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/empresss_purple.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">EMPRESS</span>
                                Network
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/fahrzeuge.png" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">ROGUEV</span>
                                FiveM Gameserver
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Trading Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/giveawaycars.png" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">ROGUEV</span>
                                FiveM Gameserver
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Trading Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/giveaways.gif" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW</span>
                                GIVEAWAYS
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Graphic
                                Design Service</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/how-to-buy.gif" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW</span>
                                HOW TO BUY
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Graphic
                                Design Service</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/inviteevent.png" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">ROGUEV</span>
                                FiveM Gameserver
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Trading Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/ipro72b.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">IPRO72</span>
                                Embrace the Pain
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Banner</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/klamotten.png" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">ROGUEV</span>
                                FiveM Gameserver
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Trading Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/lorapw_design.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW</span>
                                INFO BANNER
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Graphic
                                Design Service</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/lorapw_service.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW</span>
                                Advertisement
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Graphic
                                Design Service</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/lp_reborn.png" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LPREBORN</span>
                                Dominate the Game
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Gaming
                                Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/lp_repborn_banner_ani(1).gif" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LPREBORN</span>
                                Dominate the Game
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Gaming
                                Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/lpreborn_blue.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LPREBORN</span>
                                Dominate the Game
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Gaming
                                Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/luca_ilx.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LX</span>
                                Soundcloud
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Soundcloud Banner</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/paradise_1.gif" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">PARADISE NETWORK</span>
                                Community
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/partner_lorapw.gif" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW</span>
                                PARTNER UP
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Graphic
                                Design Service</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/roguev_small.gif" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">ROGUEV</span>
                                FiveM Gameserver
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Trading Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/roguev_ts.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">ROGUEV</span>
                                FiveM Gameserver
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Trading Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/ryze4g.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">RYZE4G</span>
                                Fortnite Themed
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Banner</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/selfroles.gif" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW</span>
                                PARTNER UP
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Graphic
                                Design Service</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/spielwelt.png" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">ROGUEV</span>
                                FiveM Gameserver
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Trading Community</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/taja.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">TAJA</span>
                                Demon Unchained
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Banner</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/utopia_highres.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">UTOPIA</span>
                                Survive the Jungle
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">DayZ Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/zombie.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">ZOMBIE</span>
                                CANT CHEAT THE DEVIL
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Discord
                                Banner</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/virutal_life2.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">VIRTUAL LIFE</span>
                                Nightlife
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Fivem Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/vote-for-us.gif" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW</span>
                                Vote 4 US
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Graphic Design Service</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/waserwartetdich.png" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">ROGUEV</span>
                                FiveM
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">FiveM Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/y2_blackb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2</span>
                                Metin2
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Metin2
                                Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/y2_blueb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2</span>
                                Metin2
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Metin2
                                Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/y2_greenb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2</span>
                                Metin2
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Metin2
                                Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/y2_lightblueb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2</span>
                                Metin2
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Metin2
                                Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/y2_orangeb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2</span>
                                Metin2
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Metin2
                                Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/y2_pinkb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2</span>
                                Metin2
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Metin2
                                Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/y2_purpleb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2</span>
                                Metin2
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Metin2
                                Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/y2_redb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2</span>
                                Metin2
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Metin2
                                Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="portImage relative">
                            <a href="#none">
                                <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/y2_yellowb.webp" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col py-6 lg:mx-6">
                            <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2</span>
                                Metin2
                            </a>
                            <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Metin2
                                Gameserver</span>
                            <div class="buttonSpacerText mb-2 mt-1 text-sm font-semibold text-gray-300">Verwendete Tools
                            </div>
                            <!-- component -->
                            <div class="flex">
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                </button>
                                <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-purple-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-purple-500/20 transition-all hover:shadow-lg hover:purple-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                    <img src="./assets/images/after-effects.png" alt="" class="w-6 h-6">
                                </button>
                            </div>
                        </div>
                    </div>







                </div>




            </div>
    </div>
    </section>
    </div>






    <script>
    var modal = document.getElementById('myModal');
    var images = document.querySelectorAll('.workIMG');
    var modalImg = document.getElementById('img01');
    var captionText = document.getElementById('caption');

    images.forEach(img => {
        img.onclick = function() {
            modal.classList.remove('hidden');
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
    });

    document.querySelector('.close').onclick = function() {
        modal.classList.add('hidden');
    }


    // Initialize AOS Library
    window.onload = function() {
        AOS.init({
            once: true, // This option will prevent the animation from replaying upon scrolling.
        });
    };
    </script>
    <script src='./assets/js/snow.js'></script>
    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
</body>

<?php
include_once './components/footer_de.php';
?>


</html>