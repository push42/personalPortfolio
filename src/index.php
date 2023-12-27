<?php

namespace Privnote\Zuauzsuzfadda;

require '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Mein Portfolio</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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





    <!-- ========= Visit Count Banner ========= -->
    <div id="siteVisiters" class="flex-row absolute top-40 right-16 z-40" data-aos="fade-left" data-aos-duration="1000">
        <div class="flex flex-row m-auto bg-gradient-to-r from-zinc-800 via-zinc-900 to-zinc-950 p-1.5 gap-1 rounded-lg border-2 border-zinc-500">
            <div class="my-auto">
                <div class="text-sm text-zinc-300">Seitenaufrufe</div>
                <div class="text-xl text-red-300">
                    <span id="visitCount" class="font-bold text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">0</span>
                </div>
            </div>
            <div class="text-zinc-400 my-auto bg-gradient-to-l from-zinc-800 via-zinc-900 to-zinc-950 rounded-full p-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 576 512" fill="currentColor">
                    <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                </svg>
            </div>
        </div>
    </div><!-- ========= Visit Count End ========= -->



    <!-- ========= Informational Banner (Top) ========= -->
    <div class="fixed w-full isolate flex items-center gap-x-6 overflow-hidden bg-gray-800 px-6 py-2.5 sm:px-3.5 sm:before:flex-1 z-40 top-0" id="notifyBanner" data-aos="fade-down" data-aos-duration="1000">
        <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
            </div>
        </div>
        <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
            </div>
        </div>
        <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
            <p class="text-sm leading-6 text-gray-100">
                <strong class="font-semibold">Auf der Suche nach meinem Shop?</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                </svg>Die Website wurde auf eine andere Domaine verschoben & ist nun erreichbar unter:
                <strong>shop.push42.de</strong>
            </p>
            <a href="https://shop.push42.de/" class="flex-none rounded-full bg-gray-300 px-3.5 py-1 text-sm font-semibold text-black shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Gelange
                zum Shop <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="flex flex-1 justify-end">
            <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]" id="closeBanner">
                <span class="sr-only">Schließen</span>
                <svg class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
            </button>
        </div>
    </div><!-- ========= Informational Banner End ========= -->



    <!-- ========= Navbar ========= -->
    <?php include 'components/navbar.php'; ?>
    <div id="particles-js" style="position:fixed; top:0; left:0; width:100%; height:100%; z-index:-1;"></div>
    <div class="relative overflow-hidden text-white">
        <video autoplay loop muted playsinline class="video-bg" id="video-bg">
            <source src="./assets/videos/bg2.mp4" type="video/mp4">
        </video>
        <div class="content">
            <div class="relative p-10">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-6xl font-extrabold mb-2 tracking-widest animate-pulse"><span class="welcomeP42"><span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Hi</span>,
                            ich bin <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Thies</span></span>
                    </h1>
                    <p class="text-3xl mb-6 font-light">Entdecken Sie meine fertigen Grafiken & Projekte!</p>
                    <div id="clockContainer" class="clock-container mx-auto my-8 p-4 rounded-full bg-zinc-800 shadow-xl inline-flex items-center justify-center" data-aos="fade-left" data-aos-duration="1000">
                        <span id="current-time" class="text-2xl font-medium"></span>
                    </div>
                    <div id="toggleSnowContainer" class="toggle-snow-container mx-auto mt-8 p-0.5 py-1.5 px-2.5 rounded-full border-2 border-gray-500 shadow-xl inline-flex items-center justify-center absolute top-0 left-4" data-aos="fade-right" data-aos-duration="1000">
                        <button id="toggle-snow" class="text-xs font-semibold">Lassen Sie es <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Schneien</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ========= Navbar End ========= -->




    <!-- Main content -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 p-4 mx-auto max-w-7xl">
        <div class="main-box p-4 rounded-lg shadow-lg" data-aos="fade-down" data-aos-duration="1000">
            <div class="avatar-container mb-4 text-center">
                <span class="animate-ping absolute w-16 h-16 inline-flex border-2 rounded-full border-purple-400 opacity-75 right-5 top-4"></span>
                <img src="./assets/images/p42_normal.png" alt="Logo" class="aboutImg rounded-full mx-auto">
                <p class="text-xl font-semibold">Thies</p>
            </div>
            <div class="welcomeMessage text-center text-transparent bg-clip-text bg-gradient-to-tr from-[#cecece] to-[#3d3d3d] text-lg font-semibold">
            </div>
            <div class="welcomeInnerWrapper mt-4 text-center text-gray-700">
                <div class="aboutSection">
                    <div class="flex items-center justify-center space-x-2">
                        <img src="./assets/images/p42_normal.png" alt="avatar" class="w-12 h-12 rounded-full">
                        <p>Hallo, ich bin <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] font-semibold">Thies Bergenthal
                            </span>,
                            <span class="font-semibold">23 Jahre</span> und komme aus <span class="font-semibold">Detern</span>.
                            📍
                        </p>
                    </div>
                    <p class="mt-4">Ich habe eine Leidenschaft für die Erstellung innovativer und benutzerfreundlicher Webanwendungen, mit einer soliden Grundlage in <span class="text-zinc-400 font-semibold">HTML, PHP</span>, <span class="text-zinc-400 font-semibold">CSS</span> und <span class="text-zinc-400 font-semibold">JavaScript</span>. Neben dem Programmieren gestalte ich Grafiken darunter Avatare, Banner & mehr.</p>
                </div>
            </div>
        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000">
            <div class="middle-box">
                <h1 class="text-lg font-semibold text-center mb-4"><i class="fa-solid fa-share-from-square mr-2"></i>Meine Profile</h1>
                <div class="profile-links">
                    <a href="https://github.com/push42" class="profile-button github">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100069705253684" class="profile-button facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://discord.com/users/265908049707925504" class="profile-button discord">
                        <i class="fab fa-discord"></i>
                    </a>
                </div>
            </div>


            <div class="box mt-4">
                <h1 class="text-lg font-semibold text-center mb-2"><i class="fa-solid fa-location-dot mr-2"></i>Standort
                </h1>
                <div class="map-container">
                    <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=Friesenstraße+2,Detern+Niedersachsen"></iframe>
                </div>
                <div class="text-gray-400 text-xs mt-4">
                    <p>Mein Standort.</p>
                </div>
            </div>
        </div>

        <div class="summarybox" data-aos="fade-down" data-aos-duration="1000">
            <div class="summary-list">
                <h2 class="text-center"><i class="fa-solid fa-file mr-2 text-lg"></i>Lebenslauf</h2>
                <ul>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/vhs.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        Volkshochschule Leer
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2022-2023
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Realschulabschluss an der VHS in Leer
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/bbs2.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        BBS2 Leer
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2021-2022
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Berufsfachschule Elektro- & Informationstechnik
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/ill.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        Krankheitsbedingte Auszeit
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2018-2021
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Krankheitsbedingte Auszeit und vollständige Genesung.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/vhs.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        Volkshochschule Leer
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2017-2018
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Besuch der Volkshochschule in Leer, jedoch frühzeitig abgebrochen aufgrund von Krankheit.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/obsu.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        Oberschule Uplengen
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2015-2016
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Hauptschule Klasse 10 an der Oberschule Uplengen in Remels.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/obsk.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        Oberschule Kloster Barthe
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2015
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Hauptschulabschluss an der Oberschule Kloster Barthe in Hesel.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/igsa.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        IGS Augustfehn
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2012-2015
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Besuch der Klasse 6-9 an der IGS in Augustfehn.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/tgg.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        TGG Leer
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2012-2015
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Besuch der Klasse 5-6 am Taletta-Groß-Gymnasium.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/gsd.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        Grundschule Detern
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2006-2010
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Besuch der Klasse 1-4 an der Grundschule in Detern.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <div class="aboutMeBox drop-shadow-[0_35px_35px_rgba(189,122,188,0.25)]" data-aos="fade-down" data-aos-duration="1000">
            <div class="container px-6 py-10 mx-auto">
                <div class="lg:flex lg:items-center">
                    <div class="w-full space-y-12 lg:w-1/2 ">
                        <div>
                            <h1 class="text-3xl font-semibold lg:text-4xl">Erfahren Sie mehr</br> über <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">meine Person.</span></h1>
                            <div class="mt-2">
                                <span class="inline-block w-40 h-1 rounded-full bg-gradient-to-tr from-[#8088f8] to-[#e67194]"></span>
                                <span class="inline-block w-3 h-1 ml-1 rounded-full bg-gradient-to-tr from-[#8088f8] to-[#e67194]"></span>
                                <span class="inline-block w-1 h-1 ml-1 rounded-full bg-gradient-to-tr from-[#8088f8] to-[#e67194] "></span>
                            </div>
                        </div>
                        <div class="md:flex md:items-start md:-mx-4">
                            <div class="mt-4 md:mx-4 md:mt-0">
                                <p class="mt-3">
                                    Schon seit meinem 13. Lebensjahr hege ich eine tiefe Leidenschaft für Mediengestaltung, mit einem besonderen Interesse an Programmierung sowie Web- und Grafikdesign. Mein Weg ist geprägt durch Eigeninitiative und stetige Selbstverbesserung. Mediengestaltung als mein Traumberuf entfacht in mir ein starkes Feuer für kreative und innovative Arbeit. Ich bin fest davon überzeugt, dass meine berufliche Zukunft in der Mediengestaltung nicht nur zu persönlichen Erfolgen führen, sondern auch meine Fertigkeiten bereichern wird.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:flex lg:items-center lg:w-1/2 lg:justify-center">
                        <img class="w-[28rem] h-[28rem] object-cover xl:w-[34rem] xl:h-[34rem] rounded-full" src="./assets/images/push42_avatar_puppy.png" alt="">
                    </div>
                </div>
            </div>
            </section>
        </div>


        <div class="yikesbox" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="yikesbox-header font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Meine</span>
                Fähigkeiten<span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">.</span>
            </h2>
            <p class="yikesbox-description">Eine Präsentation meiner Fähigkeiten in verschiedenen Technologien und Tools:</p>

            <div class="yikesbox-skills">
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">HTML</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 97.85052%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">CSS</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 83.5%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">Tailwind CSS</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 88.5%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">PHP</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 43.5%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">LUA</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 54.93%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">MySQL <span class="text-xs">(MariaDB)</span></div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 67.5%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">JavaScript</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 65%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">jQuery</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 38.85%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">Wordpress</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 75%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">XenForo</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 55%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">Adobe Photoshop</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 100%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">Adobe After Effects</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 97.5%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">Adobe Illustrator</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 72.5%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">Cinema4D</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 71.5%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">Figma</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 61.5%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">composer</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 48.85%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">npm</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 68.25%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">GitHub</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 88.85%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">GoogleAPI <span class="text-xs">(reCaptcha, Maps)</span></div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 96.85%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">HeidiSQL</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 92.25%;"></div>
                    </div>
                </div>

            </div>
        </div>


        <div class="sliderbox radioSlider" data-aos="fade-up" data-aos-duration="1000" id="radioSlider">
            <div class="sliderbox-header">
                <h2><span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Entdecken</span>
                    Sie meine Welt der digitalen Kunst<span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">.</span>
                </h2>
                <p>Werfen Sie ein Blick auf meine Designs, Websites und andere Projekte</p>
            </div>
            <button class="text-gray-400 bg-transparent border border-solid border-purple-800 hover:bg-purple-800 hover:text-white active:bg-purple-900 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="window.location.href='portfolio.php'">
                <i class="text-purple-500 fa-solid fa-angles-right mr-1"></i>Mehr Entdecken
            </button>
            <div class="sliderwrapper">
                <div class="containerSlider mb-4">
                    <input type="radio" name="slide" id="slide1" checked />
                    <label for="slide1" class="slidercard">
                        <div class="sliderrow">
                            <div class="slidericon">1</div>
                            <div class="sliderdescription">
                                <h4>Web Design & Development</h4>
                                <p>Entdecken Sie Websites und Interfaces.</p>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="slide2" />
                    <label for="slide2" class="slidercard">
                        <div class="sliderrow">
                            <div class="slidericon">2</div>
                            <div class="sliderdescription">
                                <h4>Custom Banner</h4>
                                <p>Animierte Banner für verschiedene Foren.</p>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="slide3" />
                    <label for="slide3" class="slidercard">
                        <div class="sliderrow">
                            <div class="slidericon">3</div>
                            <div class="sliderdescription">
                                <h4>Ansprechende Forum Threads</h4>
                                <p>Visuell ansprechende Forum Threads.</p>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="slide4" />
                    <label for="slide4" class="slidercard">
                        <div class="sliderrow">
                            <div class="slidericon">4</div>
                            <div class="sliderdescription">
                                <h4>Custom Avatare</h4>
                                <p>Entdecken Sie meine erstellten Avatare.</p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>



        <div class="matrix-background worklink-box py-auto" data-aos="fade-up" data-aos-duration="1000">
            <canvas id="matrixCanvas"></canvas>
            <div class="content">
                <div class="space-y-8 z-10 relative">
                    <div class="profile-card max-w-lg mx-6 flex flex-col items-center px-4 py-20">
                        <div class="avatar-container">
                            <img class="profile-pic rounded-full shadow-lg transition duration-500 hover:scale-105" src="./assets/images/p42_normal.png" alt="profile pic" />
                        </div>

                        <div class="tagline font-mono text-sm font-medium text-white rounded-xl relative mb-5">
                            <pre><code class="language-javascript">while (!success) { try(); }</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-okaidia.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-javascript.min.js"></script>
        <style>
        pre {
            overflow: auto;
            /* Prism Okaidia theme background color */
        }

        code {
            display: block;
            color: #f8f8f2;
            /* Prism Okaidia theme default text color */
        }
        </style>








        <div id="currentProjectsbox" class="currentProjectsbox drop-shadow-[0_35px_35px_rgba(189,122,188,0.25)]" data-aos="fade-up" data-aos-duration="1000">
            <div class="Projectbox-wrapper">
                <div class="flex items-center justify-center absolute left-12 top-1/3">
                    <section class="w-full p-8 rounded-lg max-w-xl">
                        <section class="py-2 grid grid-cols-1 gap-x-2">
                            <div class="items-center py-2 codePercent">
                                <span class="w-8 h-8 shrink-0 mr-4 flex items-center justify-center">
                                    <image class="javascriptpic" src="./assets/images/html.png"></image>
                                </span>
                                <div class="space-y-2 flex-1">
                                    <div class="flex items-center">
                                        <h4 class="font-medium text-sm languageHeader mr-auto text-white flex items-center">
                                            HTML
                                        </h4>
                                        <span class="px-2 py-1 rounded-lg bg-zinc-800 text-orange-600 font-bold text-xs ml-1">
                                            66.3%
                                        </span>
                                    </div>
                                    <div class="overflow-hidden bg-zinc-50 progressBar2 h-1.5 rounded-full w-full">
                                        <span class="h-full bg-orange-600 w-full block rounded-full" style="width: 66.3%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="items-center py-2 codePercent">
                                <span class="w-8 h-8 shrink-0 mr-4 flex items-center justify-center">
                                    <image class="javascriptpic" src="./assets/images/css.png"></image>
                                </span>
                                <div class="space-y-2 flex-1">
                                    <div class="flex items-center">
                                        <h4 class="font-medium text-sm languageHeader mr-auto text-white flex items-center">
                                            CSS
                                        </h4>
                                        <span class="px-2 py-1 rounded-lg bg-zinc-800 text-blue-400 font-bold text-xs ml-1">
                                            18.6%
                                        </span>
                                    </div>
                                    <div class="overflow-hidden bg-zinc-50 progressBar2 h-1.5 rounded-full w-full">
                                        <span class="h-full bg-blue-400 w-full block rounded-full" style="width: 18.6%"></span>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
                <div class="flex items-center justify-center absolute right-12 top-1/3">
                    <section class="w-full p-8 rounded-lg max-w-xl">
                        <section class="py-2 grid grid-cols-1 gap-x-2">
                            <!-- Mirrored Lua Section -->
                            <div class="items-center py-2 codePercent justify-between">
                                <div class="space-y-2 flex-1">
                                    <div class="flex items-center justify-end">
                                        <span class="px-2 py-1 rounded-lg bg-zinc-800 text-blue-700 font-bold text-xs mr-4">
                                            12.2%
                                        </span>
                                        <h4 class="font-medium text-sm languageHeader text-white flex ml-auto items-center">
                                            LUA
                                        </h4>
                                    </div>
                                    <div class="overflow-hidden bg-zinc-50 progressBar2 h-1.5 rounded-full w-full">
                                        <span class="h-full bg-blue-700 w-full block rounded-full" style="width: 12.2%"></span>
                                    </div>
                                </div>
                                <span class="w-8 h-8 shrink-0 ml-4 flex items-center justify-center">
                                    <image class="javascriptpic" src="./assets/images/lua.png"></image>
                                </span>
                            </div>

                            <!-- Mirrored JS Section -->
                            <div class="items-center py-2 codePercent justify-between">
                                <div class="space-y-2 flex-1">
                                    <div class="flex items-center justify-end">
                                        <span class="px-2 py-1 rounded-lg bg-zinc-800 text-yellow-500 font-bold text-xs mr-4">
                                            2.9%
                                        </span>
                                        <h4 class="font-medium text-sm languageHeader text-white flex items-center ml-auto">
                                            JS
                                        </h4>
                                    </div>
                                    <div class="overflow-hidden bg-zinc-50 progressBar2 h-1.5 rounded-full w-full">
                                        <span class="h-full bg-yellow-500 w-full block rounded-full" style="width: 2.9%"></span>
                                    </div>
                                </div>
                                <span class="w-8 h-8 shrink-0 ml-4 flex items-center justify-center">
                                    <image class="javascriptpic" src="./assets/images/js.png"></image>
                                </span>
                            </div>
                        </section>
                    </section>
                </div>
                <div class="sliderbox-header">
                    <h2>Werfen Sie einen Blick auf mein <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">neuestes</span> Projekt<span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">.</span>
                    </h2>
                    <p>Responsiv, multifunktionales, eigenständiges Pausen-Menü-Skript für FiveM</p>
                </div>
                <div class="videoplayer relative shadow-lg shadow-zinc-600">
                    <img id="videoThumbnail" src="./assets/images/test.png" class="w-full h-auto cursor-pointer" alt="Video Thumbnail">
                    <video id="videoPlayer" controls class="w-full h-auto hidden">
                        <source src="./assets/videos/p42_pausemenu.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>


        <div class="myWorkBox" data-aos="fade-up" data-aos-duration="1000">
            <section class="myWorkPortfolio">
                <div class="container px-6 py-10 mx-auto">
                    <h1 class="text-2xl font-semibold text-center text-gray-800 lg:text-3xl dark:text-white myWorkDescription">
                        Einige meiner <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Arbeiten.</span></h1>

                    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                        <div class="lg:flex">
                            <div class="portImage relative">
                                <a href="#none">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                    <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/websites/partyservice.png" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col py-6 lg:mx-6">
                                <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Schmidt</span>
                                    Partyservice
                                </a>
                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Catering Service Website</span>
                                <!-- component -->
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Sprachen
                                </div>
                                <div class="flex">
                                    <!-- <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-yellow-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button> -->
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:orange-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/html.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-300/20 transition-all hover:shadow-lg hover:blue-pink-300/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/css.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/php.png" alt="" class="w-6 h-6">
                                    </button>
                                </div>
                                <div class="rounded-lg mt-2 flex-col col-span-1 space-x-0">
                                    <button class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                        <i class="fa fa-github text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Source Code ist privat
                                    </button>
                                    <button onclick="window.location.href = 'https://schmidt-partyservice.de';" class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                        <i class="fas fa-home text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Live Preview Website
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="lg:flex">
                            <div class="portImage relative">
                                <a href="#none">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                    <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/websites/partyservice_dashboard.png" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col py-6 lg:mx-6">
                                <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Schmidt</span>
                                    Partyservice
                                </a>
                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Administrations Dashboard</span>
                                <!-- component -->
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Sprachen
                                </div>
                                <div class="flex">
                                    <!-- <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-yellow-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button> -->
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:orange-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/html.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-300/20 transition-all hover:shadow-lg hover:blue-pink-300/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/css.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/php.png" alt="" class="w-6 h-6">
                                    </button>
                                </div>
                                <div class="rounded-lg mt-2 flex-col col-span-1 space-x-0">
                                    <button class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                        <i class="fa fa-github text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Source Code ist privat
                                    </button>
                                    <button onclick="window.location.href = 'https://schmidt-partyservice.de';" class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                        <i class="fas fa-home text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Live Preview Website
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="lg:flex">
                            <div class="portImage relative">
                                <a href="#none">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                    <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/websites/lora-pw.webp" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col py-6 lg:mx-6">
                                <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW</span>
                                    Website
                                </a>
                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Graphic
                                    Design Service</span>
                                <!-- component -->
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Sprachen
                                </div>
                                <div class="flex">
                                    <!-- <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-yellow-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button> -->
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:orange-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/html.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-300/20 transition-all hover:shadow-lg hover:blue-pink-300/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/css.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button>
                                </div>
                                <div class="rounded-lg mt-2 flex-col col-span-1 space-x-0">
                                    <button class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                        <i class="fa fa-github text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Source Code
                                    </button>
                                    <button onclick="window.location.href = 'https://trap-life.de';" class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                        <i class="fas fa-home text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Live Preview Website
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="lg:flex">
                            <div class="portImage relative">
                                <a href="#none">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                    <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/scripts/p42_pausemenu.png" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col py-6 lg:mx-6">
                                <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">PAUSEMENU</span>
                                    Script
                                </a>
                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">
                                    FiveM Standalone Script</span>
                                <!-- component -->
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Sprachen
                                </div>
                                <div class="flex">
                                    <!-- <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-yellow-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button> -->
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:orange-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/html.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-300/20 transition-all hover:shadow-lg hover:blue-pink-300/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/css.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/lua.png" alt="" class="w-6 h-6">
                                    </button>
                                </div>
                                <div class="rounded-lg mt-2 flex-col col-span-1 space-x-0">
                                    <button class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                        <i class="fa fa-github text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Source Code ist Privat
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
                                    Gaming Banner
                                </a>
                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Ryze4G |
                                    Discord Profile Banner</span>
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Tools
                                </div>
                                <!-- component -->
                                <div class="flex">
                                    <!-- <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-yellow-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button> -->
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
                                    <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/websites/script-shop.png" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col py-6 lg:mx-6">
                                <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">FiveM
                                        Scripts</span>
                                    Website
                                </a>
                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">
                                    FiveM Scripts | Personal Shop</span>
                                <!-- component -->
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Sprachen
                                </div>
                                <div class="flex">
                                    <!-- <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-yellow-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button> -->
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:orange-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/html.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-300/20 transition-all hover:shadow-lg hover:blue-pink-300/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/css.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/js.png" alt="" class="w-6 h-6">
                                    </button>
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-500 to-zinc-800 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-yellow-500/20 transition-all hover:shadow-lg hover:yellow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/php.png" alt="" class="w-6 h-6">
                                    </button>
                                </div>
                                <div class="rounded-lg mt-2 flex-col col-span-1 space-x-0">
                                    <button class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button" onclick="window.location.href = 'https://github.com/push42/scriptshop_5m';">
                                        <i class="fa fa-github text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Source Code
                                    </button>
                                    <button class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button" onclick="window.location.href = 'https://thiesbergenthal.de';">
                                        <i class="fas fa-home text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Live Preview Website
                                    </button>
                                </div>
                            </div>
                        </div>



                        <div class="lg:flex">
                            <div class="portImage relative">
                                <a href="#none">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center absolute top-4 right-4 z-50"></i>
                                    <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/avatar/pxrp.webp" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col py-6 lg:mx-6">
                                <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">PXRP
                                    </span>
                                    Purple Reaper
                                </a>
                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">PXRP |
                                    Gaming Avatar</span>
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Tools
                                </div>
                                <div class="flex">
                                    <button class="middle none center mr-4 flex items-center justify-center rounded-lg bg-gradient-to-tr from-zinc-900 to-blue-400 p-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:blue-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                        <img src="./assets/images/photoshop.png" alt="" class="w-6 h-6">
                                    </button>
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
                                    <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/banner/lorapw_service.webp" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col py-6 lg:mx-6">
                                <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW
                                    </span>
                                    Design Service
                                </a>

                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">LORA.PW |
                                    Advertisement Banner</span>
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Tools
                                </div>
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
                                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">YAKUJI2
                                    </span>
                                    Metin2
                                </a>

                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">Yakuji2 |
                                    Metin2 Gameserver</span>
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Tools
                                </div>
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
                                    <img class="object-cover w-full h-56 rounded-lg lg:w-64 workIMG" src="./assets/work/thread/thread1.webp" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col py-6 lg:mx-6">
                                <a href="#" class="text-xl font-semibold text-gray-800 dark:text-white ">
                                    <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">LORA.PW
                                    </span>
                                    Design
                                </a>

                                <span class="text-sm text-gray-500 dark:text-gray-300 mb-2 myWorkDescription">LORA.PW |
                                    Forum Thread Banner</span>
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Verwendete Tools
                                </div>
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
            </section>
            <div class="explore-more mt-2">
                <p class="text-center text-gray-400 font-medium">Möchten Sie mehr sehen?</p>
                <a href="portfolio.php" class="explore-more-button text-center align-middle text-lg font-bold animate-pulse"><i class="fa-solid fa-circle-chevron-down mr-2 text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]"></i>Erkunden Sie<span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">
                        mehr.</span></a>
            </div>
        </div>



    </div>


    <script>
    // Initialize AOS Library
    window.onload = function() {
        AOS.init({
            once: true, // This option will prevent the animation from replaying upon scrolling.
        });
    };

    // Event Listener for the Button to make it Snow!
    document.addEventListener('DOMContentLoaded', function() {
        const toggleSnowButton = document.getElementById('toggle-snow');
        if (toggleSnowButton) {
            toggleSnowButton.addEventListener('click', toggleSnow);
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        fetch('./components/visitCount.php')
            .then(response => response.text())
            .then(data => {
                let visitCount = parseInt(data);
                if (visitCount >= 1000) {
                    visitCount = visitCount.toLocaleString('en-US');
                }
                document.getElementById('visitCount').innerText = visitCount;
            })
            .catch(error => console.error('Error fetching visit count:', error));
    });

    // Function to toggle the preview Image for the Video
    document.getElementById('videoThumbnail').addEventListener('click', function() {
        var video = document.getElementById('videoPlayer');
        this.style.display = 'none'; // Hide the thumbnail
        video.style.display = 'block'; // Show the video
        video.play(); // Play the video
    });


    // Function to close the modal
    function closeNotifyModal() {
        var modal = document.querySelector('#notifyBanner'); // Select the modal element
        modal.style.display = 'none'; // Hide the modal
    }

    // Add a click event listener to the close button
    document.getElementById('closeBanner').addEventListener('click', closeNotifyModal);

    // Count up the Site visits
    $('.counter').counterUp();
    </script>
    <script src='./assets/js/snow.js'></script>
    <script src='./assets/js/matrix.js'></script>
    <script src='./assets/js/typewriter.js'></script>
    <script src='./assets/js/clock.js'></script>
    <script src='./assets/js/imagepreview.js'></script>
    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
</body>

<?php
include_once './components/footer_de.php';
?>


</html>