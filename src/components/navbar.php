<header class="header">
    <div>
        <a href="index.php"><img src="./assets/images/logo.png" alt="Logo" class="sitelogo"></a>
    </div>

    <!-- Theme Switcher -->
    <div class="theme-switcher flex flex-col">
        <button id="theme-toggle" class="theme-toggle-btn">
            <i class="fa-solid fa-moon darktheme-icon" id="theme-toggle-dark-icon"></i>
            <i class="fa-solid fa-sun hidden lightheme-icon" id="theme-toggle-light-icon"></i>
        </button>
    </div>

    <nav>
        <div class="link-wrapper">
            <a href="portfolio.php" class="text-zinc-600 mr-2">Entdecke weitere Projekte<i class="fa-solid fa-arrow-right-long arrow-symbol"></i></a>
        </div>
    </nav>
</header>


<script>
document.addEventListener("DOMContentLoaded", function() {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
    const heroVideo = document.querySelector('.video-bg source');

    themeToggleBtn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // Check if the dark mode is active and change the video accordingly
        if (document.body.classList.contains('dark-mode')) {
            heroVideo.setAttribute('src', './assets/videos/bg_white.mp4'); // Path to dark theme video
        } else {
            heroVideo.setAttribute('src', './assets/videos/bg2.mp4'); // Path to light theme video
        }

        // Reload the video to apply the new source
        heroVideo.parentElement.load();
    });
});
</script>