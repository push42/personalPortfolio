<?php

namespace Privnote\Zuauzsuzfadda;

require '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/9d1f4cdd15.js" crossorigin="anonymous"></script>
    <title>Push42 | Development</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="./assets/js/jquery.waypoints.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
</head>



<body class="antialiased">



    <div id="myModal" class="ImageModal hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-60 backdrop-blur">
        <div class="modal-content mx-auto p-6 bg-gardient-to-r from-white via-gray-100 to-zinc-300 bg-opacity-80 rounded-2xl shadow-lg max-w-4xl">
            <span class="close absolute top-3 right-3 text-gray-200 text-3xl font-semibold cursor-pointer hover:text-gray-400">&times;</span>

            <div class="text-xl font-semibold text-white mb-2 text-center">Preview</div>
            <img id="img01" class="mx-auto my-4 max-w-full h-auto rounded-lg shadow-sm">
        </div>
    </div>



    <div class="flex-row absolute top-40 right-16 z-50" data-aos="fade-left" data-aos-duration="1000">
        <div class="flex flex-row m-auto bg-gradient-to-r from-zinc-800 via-zinc-900 to-zinc-950 p-1.5 gap-1 rounded-lg border-2 border-zinc-500">
            <div class="my-auto">
                <div class="text-sm text-zinc-300">Site Visits</div>
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
    </div>


    <div class="fixed w-full isolate flex items-center gap-x-6 overflow-hidden bg-gray-800 px-6 py-2.5 sm:px-3.5 sm:before:flex-1 z-50 top-0" id="notifyBanner" data-aos="fade-down" data-aos-duration="1000">
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
                <strong class="font-semibold">Looking for my Script Shop?</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                </svg>I've moved the Website onto a different Domaine. The Script-Shop is now available under
                <strong>shop.push42.de</strong>
            </p>
            <a href="#" class="flex-none rounded-full bg-gray-300 px-3.5 py-1 text-sm font-semibold text-black shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Get
                to the Shop <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="flex flex-1 justify-end">
            <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]" id="closeBanner">
                <span class="sr-only">Dismiss</span>
                <svg class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
            </button>
        </div>
    </div>




    <!-- Navbar -->
    <?php include 'components/navbar.php'; ?>
    <div id="particles-js" style="position:fixed; top:0; left:0; width:100%; height:100%; z-index:-1;"></div>
    <div class="relative overflow-hidden text-white">
        <video autoplay loop muted playsinline class="video-bg" id="video-bg">
            <source src="./assets/videos/bg2.mp4" type="video/mp4">
        </video>
        <!-- <div class="parallax-bg"></div> -->
        <div class="content">
            <div class="relative p-10">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-6xl font-extrabold mb-2 tracking-widest animate-pulse"><span class="welcomeP42"><span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Hi</span>,
                            im <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Thies</span></span>
                    </h1>
                    <p class="text-3xl mb-6 font-light">Explore my work and projects!</p>
                    <div class="clock-container mx-auto my-8 p-4 rounded-full bg-zinc-800 shadow-xl inline-flex items-center justify-center">
                        <span id="current-time" class="text-2xl font-medium"></span>
                    </div>
                    <div class="toggle-snow-container mx-auto mt-8 p-0.5 py-1.5 px-2.5 rounded-full border-2 border-gray-500 shadow-xl inline-flex items-center justify-center absolute top-0 left-4">
                        <button id="toggle-snow" class="text-xs font-semibold">Make it <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Snow</span></button>
                    </div>
                    <div class="mt-2 text-xl font-medium">Discover &amp; Connect</div>
                </div>
            </div>
        </div>
    </div>



    <!-- Main content -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 p-4 mx-auto max-w-7xl">
        <div class="main-box p-4 rounded-lg shadow-lg" data-aos="fade-down" data-aos-duration="1000">
            <div class="avatar-container mb-4 text-center">
                <!-- <span class="animate-ping absolute w-24 h-24 inline-flex border-2 rounded-full border-purple-400 opacity-75 right-1 top-1"></span> -->
                <span class="animate-ping absolute w-16 h-16 inline-flex border-2 rounded-full border-purple-400 opacity-75 right-5 top-4"></span>
                <img src="./assets/images/lora.gif" alt="Logo" class="aboutImg rounded-full mx-auto">
                <p class="text-xl font-semibold">Push42</p>
                <p class="text-sm">Development</p>
                <!-- <svg class="verify-badge w-5 h-5 mx-auto mt-2 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"></svg>
                </svg> -->
            </div>
            <div class="welcomeMessage text-center text-transparent bg-clip-text bg-gradient-to-tr from-[#cecece] to-[#3d3d3d] text-lg font-semibold">
            </div>
            <div class="welcomeInnerWrapper mt-4 text-center text-gray-700">
                <div class="aboutSection">
                    <div class="flex items-center justify-center space-x-2">
                        <img src="./assets/work/avatar/lorapw_emblem.webp" alt="avatar" class="w-12 h-12 rounded-full">
                        <p>Hello, I'm <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] font-semibold">Thies
                            </span>.
                            I'm a self-taught <span class="font-semibold">Front- and Backend
                                Developer</span> based in <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] font-semibold">Germany</span>.
                            📍</p>
                    </div>
                    <p class="mt-4">I have a passion for creating innovative and user-friendly web applications. With a
                        strong foundation in <span class="text-zinc-400 font-semibold">HTML, PHP</span>, <span class="text-zinc-400 font-semibold">CSS</span> and <span class="text-zinc-400 font-semibold">JavaScript</span>.</p>
                </div>
            </div>
        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000">
            <div class="middle-box">
                <h1 class="text-lg font-semibold text-center mb-4"><i class="fa-solid fa-share-from-square mr-2"></i>Social Media</h1>
                <div class="profile-links">
                    <a href="https://github.com/yourusername" class="profile-button github">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com/yourusername" class="profile-button facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.facebook.com/yourusername" class="profile-button steam">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a href="https://www.facebook.com/yourusername" class="profile-button discord">
                        <i class="fab fa-discord"></i>
                    </a>
                    <!-- Add more social media links here -->
                </div>
            </div>


            <div class="box mt-4">
                <h1 class="text-lg font-semibold text-center mb-2"><i class="fa-solid fa-location-dot mr-2"></i>Location
                </h1>
                <div class="map-container">
                    <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAhMf10Xqq_-xHwBHsfMTH7bZ05yGDa5YE&q=Friesenstraße+2,Detern+Niedersachsen"></iframe>
                </div>
                <div class="text-gray-400 text-xs mt-4">
                    <p>My current location in Germany.</p>
                </div>
            </div>
        </div>

        <div class="summarybox" data-aos="fade-down" data-aos-duration="1000">
            <div class="summary-list">
                <h2 class="text-center"><i class="fa-solid fa-file mr-2 text-lg"></i>My bigger Projects</h2>
                <ul>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/fivem.gif" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        FiveM Scripts
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        Currently
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    I am currently developing FiveM Scripts in my free time.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/fivem_logo.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        FiveM Server
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2022 - 2023
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Developed & managed a FiveM Server + Discord Community.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/design.png" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        Design Service
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2018 - 2020
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Creating custom designs & websites for various clients.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="animated-item">
                        <div class="px-3 flex items-center bg-grey-light cursor-pointer">
                            <div>
                                <img class="h-12 w-12 resumeIMG" src="./assets/images/minecraft.gif" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-grey-darkest font-semibold">
                                        Minecraft Server
                                    </p>
                                    <p class="text-xs text-grey-darkest">
                                        2016 - 2017
                                    </p>
                                </div>
                                <p class="text-grey-dark mt-1 text-sm">
                                    Developing and managing a Minecraft Server with over 200+ Members.
                                </p>
                            </div>
                        </div>
                    </li>
                    <!-- Add more list items for other details -->
                </ul>
            </div>
        </div>



        <div class="yikesbox" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="yikesbox-header font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">My</span>
                Skills<span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">.</span>
            </h2>
            <p class="yikesbox-description">A showcase of my proficiency in various technologies and tools:</p>

            <div class="yikesbox-skills">
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">HTML</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 93.5%;"></div>
                    </div>
                </div>
                <div class="skill" data-aos="fade-right" data-aos-delay="100">
                    <div class="skill-name">PHP</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 43.5%;"></div>
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
                    <div class="skill-name">JavaScript</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 65%;"></div>
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
                    <div class="skill-name">MySQL</div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="--skill-level: 67.5%;"></div>
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
                        <div class="skill-fill" style="--skill-level: 87.5%;"></div>
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
                        <div class="skill-fill" style="--skill-level: 61.5%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sliderbox" data-aos="fade-up" data-aos-duration="1000">
            <div class="sliderbox-header">
                <h2><span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Discover</span>
                    my World of Digital Artistry<span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">.</span>
                </h2>
                <p>Step into an immersive experience of unique designs and digital craftsmanship.</p>
            </div>
            <div class="sliderwrapper">
                <div class="containerSlider">
                    <input type="radio" name="slide" id="slide1" checked />
                    <label for="slide1" class="slidercard">
                        <div class="sliderrow">
                            <div class="slidericon">1</div>
                            <div class="sliderdescription">
                                <h4>Web Design & Development</h4>
                                <p>Discover websites and interfaces.</p>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="slide2" />
                    <label for="slide2" class="slidercard">
                        <div class="sliderrow">
                            <div class="slidericon">2</div>
                            <div class="sliderdescription">
                                <h4>Custom Banner Creations</h4>
                                <p>Animated Banner for any Forum.</p>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="slide3" />
                    <label for="slide3" class="slidercard">
                        <div class="sliderrow">
                            <div class="slidericon">3</div>
                            <div class="sliderdescription">
                                <h4>Engaging Forum Threads</h4>
                                <p>Visually appealing forum threads.</p>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="slide4" />
                    <label for="slide4" class="slidercard">
                        <div class="sliderrow">
                            <div class="slidericon">4</div>
                            <div class="sliderdescription">
                                <h4>Innovative Logo Concepts</h4>
                                <p>Explore logos and brand identities.</p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>



        <div class="worklink-box space-y-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="mb-5 max-w-sm flex-col px-4 py-6 shadow-2xl">
                <div class="text-center">
                    <img class="rounded-full" alt="profile pic" src="./assets/images/carti.gif" />

                    <p class="pt-2 text-lg font-medium">@<span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">Push42</span>
                    </p>
                    <p class="text-sm font-medium">🫡 My stummy hurt</p>
                </div>
                <div class="my-3 grid grid-cols-5 items-center gap-4 px-4">

                    <a href="#">
                        <button class="fixed sticky h-12 w-12 transform rounded-full bg-transparent text-2xl duration-500 hover:-translate-y-3">
                            <img class="w-8" alt="profile pic" src="./assets/images/github.png" />
                        </button>
                    </a>

                    <a href="#">
                        <button class="fixed sticky h-12 w-12 transform rounded-full bg-transparent text-2xl duration-500 hover:-translate-y-3">
                            <img class="w-8" alt="profile pic" src="./assets/images/telegram.png" />
                        </button>
                    </a>

                    <a href="#">
                        <button class="fixed sticky h-12 w-12 transform rounded-full bg-transparent text-2xl duration-500 hover:-translate-y-3">
                            <img class="w-8" alt="profile pic" src="./assets/images/facebook.png" />
                        </button>
                    </a>

                    <a href="#">
                        <button class="fixed sticky h-12 w-12 transform rounded-full bg-transparent text-2xl duration-500 hover:-translate-y-3">
                            <img class="w-8" alt="profile pic" src="./assets/images/behance.png" />
                        </button>
                    </a>

                    <a href="#">
                        <button class="fixed sticky h-12 w-12 transform rounded-full bg-transparent text-2xl duration-500 hover:-translate-y-3">
                            <img class="w-8" alt="profile pic" src="./assets/images/linkedin.png" />
                        </button>
                    </a>
                </div>

                <a href="#">
                    <div class="my-2 flex h-16 items-center justify-between rounded-lg border-2 border-b-4 border-l-4 border-zinc-700 px-4 shadow-xl kofidonation">
                        <div class="flex items-center">
                            <img alt="photo" class="w-10" src="./assets/images/kofi.png" />
                            <div class="ml-2">
                                <div class="text-xs font-semibold">Fuel my Coffee addiction</div>
                                <div class="flex text-xs font-light text-gray-600">
                                    Ko-Fi.com<svg class="h-3 w-3 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                                        </path>
                                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </a>




            </div>
        </div>


        <div class="currentProjectsbox" data-aos="fade-up" data-aos-duration="1000">
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
                    <h2>Take a peek at my <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">most
                            recent</span> Project<span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">.</span>
                    </h2>
                    <p>Responsive, multi-functional, standalone Pause-Menu script for FiveM <span class="text-xs">*In
                            Progress</span></p>
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
                        Some of <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">my
                            work.</span></h1>

                    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
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
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Languages used
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
                                        View Source Code
                                    </button>
                                    <button class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                        <i class="fas fa-home text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Visit Live Website
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
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Languages used
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
                                        Source Code Private
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
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Tools used
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
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Languages used
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
                                        View Source Code
                                    </button>
                                    <button class="flex background-transparent font-medium uppercase py-2 text-xs outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button" onclick="window.location.href = 'https://thiesbergenthal.de';">
                                        <i class="fas fa-home text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194] mr-1"></i>
                                        Visit Live Website
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
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Tools used
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
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Tools used
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
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Tools used
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
                                <div class="buttonSpacerText mb-2 mt-1 text-sm font-medium text-gray-300">Tools used
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
                <p class="text-center text-gray-400 font-medium">Want to see more?</p>
                <a href="#" class="explore-more-button text-center align-middle text-lg font-bold animate-pulse"><i class="fa-solid fa-circle-chevron-down mr-2 text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]"></i>Explore<span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#8088f8] to-[#e67194]">
                        more.</span></a>
            </div>
        </div>



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



    const messages = [
        "Welcome to my portfolio!",
        "Check out my projects.",
        "Learn more about me."
    ];
    let messageIndex = 0;
    const welcomeMessage = document.querySelector('.welcomeMessage');

    function typeMessage(message, index = 0) {
        if (index < message.length) {
            welcomeMessage.textContent += message.charAt(index);
            setTimeout(() => typeMessage(message, index + 1), 100); // Adjust speed as needed
        } else {
            // After a message is complete, wait and start the next one
            setTimeout(nextMessage, 2000); // Adjust pause duration as needed
        }
    }

    function nextMessage() {
        messageIndex = (messageIndex + 1) % messages.length;
        welcomeMessage.textContent = ''; // Clear current message
        typeMessage(messages[messageIndex]); // Start typing next message
    }

    // Start the first message
    typeMessage(messages[messageIndex]);



    document.querySelectorAll('.skill-progress-bar').forEach(bar => {
        bar.style.setProperty('--skill-level', bar.getAttribute('data-skill-level'));
    });


    // Function for the Clock to update the time
    function updateTime() {
        const now = new Date();
        document.getElementById('current-time').innerText = now.toLocaleTimeString('en-US', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        setTimeout(updateTime, 1000);
    }

    updateTime();


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

    document.getElementById('videoThumbnail').addEventListener('click', function() {
        var video = document.getElementById('videoPlayer');
        this.style.display = 'none'; // Hide the thumbnail
        video.style.display = 'block'; // Show the video
        video.play(); // Play the video
    });

    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 8,
            autoplay: {
                delay: 8000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                },
                1024: {
                    slidesPerView: 1,
                },
            },
        })
    });

    // Function to close the modal
    function closeModal() {
        var modal = document.querySelector('#notifyBanner'); // Select the modal element
        modal.style.display = 'none'; // Hide the modal
    }

    // Add a click event listener to the close button
    document.getElementById('closeBanner').addEventListener('click', closeModal);

    $('.counter').counterUp();
    </script>
    <script src='./assets/js/snow.js'></script>
    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
</body>

<?php
include_once './components/footer.php';
?>


</html>