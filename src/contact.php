<?php

namespace Privnote\Zuauzsuzfadda;

require '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/9d1f4cdd15.js" crossorigin="anonymous"></script>
    <title>Kontaktformular</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
</head>

<div class="flex items-center min-h-screen bg-zinc-50 dark:bg-zinc-950">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white dark:bg-zinc-900 p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-zinc-700 dark:text-zinc-200">Kontaktformular</h1>
                <p class="text-zinc-400 dark:text-zinc-400">Füllen Sie das Formular unten aus, um mir eine Nachricht zu senden.</p>
            </div>
            <div class="m-7">
                <form action="https://api.web3forms.com/submit" method="POST" id="form">

                    <input type="hidden" name="apikey" value="ca9e5aa1-f9c6-4831-bb50-7694c29df664">
                    <input type="hidden" name="subject" value="Neue Einsendung von Web3Forms">
                    <input type="checkbox" name="botcheck" id="" style="display: none;">


                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm text-zinc-600 dark:text-zinc-400">Ansprechpartner</label>
                        <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-zinc-300 border border-zinc-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-500 dark:border-zinc-600 dark:focus:ring-zinc-900 dark:focus:border-zinc-500" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-zinc-600 dark:text-zinc-400">E-Mail-Adresse</label>
                        <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 placeholder-zinc-300 border border-zinc-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-500 dark:border-zinc-600 dark:focus:ring-zinc-900 dark:focus:border-zinc-500" />
                    </div>
                    <div class="mb-6">

                        <label for="phone" class="text-sm text-zinc-600 dark:text-zinc-400">Telefonnummer</label>
                        <input type="text" name="phone" id="phone" placeholder="+1 (555) 1234-567" required class="w-full px-3 py-2 placeholder-zinc-300 border border-zinc-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-500 dark:border-zinc-600 dark:focus:ring-zinc-900 dark:focus:border-zinc-500" />
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm text-zinc-600 dark:text-zinc-400">Ihre Nachricht</label>

                        <textarea rows="5" name="message" id="message" placeholder="Ihre Nachricht" class="w-full px-3 py-2 placeholder-zinc-300 border border-zinc-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-500 dark:border-zinc-600 dark:focus:ring-zinc-900 dark:focus:border-zinc-500" required></textarea>
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full px-3 py-4 text-white bg-purple-500 rounded-md focus:bg-purple-600 focus:outline-none">Nachricht senden</button>
                    </div>
                    <p class="text-base text-center text-zinc-400" id="result">
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
const form = document.getElementById('form');
const result = document.getElementById('result');

form.addEventListener('submit', function(e) {
    const formData = new FormData(form);
    e.preventDefault();
    var object = {};
    formData.forEach((value, key) => {
        object[key] = value
    });
    var json = JSON.stringify(object);
    result.innerHTML = "Einen Moment..."

    fetch('https://api.web3forms.com/submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: json
        })
        .then(async (response) => {
            let json = await response.json();
            if (response.status == 200) {
                result.innerHTML = json.message;
                result.classList.remove('text-zinc-500');
                result.classList.add('text-green-500');
            } else {
                console.log(response);
                result.innerHTML = json.message;
                result.classList.remove('text-zinc-500');
                result.classList.add('text-red-500');
            }
        })
        .catch(error => {
            console.log(error);
            result.innerHTML = "Something went wrong!";
        })
        .then(function() {
            form.reset();
            setTimeout(() => {
                result.style.display = "none";
            }, 5000);
        });
})
</script>

</html>