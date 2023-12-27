document.addEventListener("DOMContentLoaded", function() {
    var c = document.getElementById("matrixCanvas");
    var ctx = c.getContext("2d");

    c.height = window.innerHeight;
    c.width = window.innerWidth;

    var matrix = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$%^&*()*&^%/|~[]{}=+-_";
    matrix = matrix.split("");

    var font_size = 13;
    var columns = c.width / font_size;
    var drops = new Array(Math.floor(columns)).fill(1);

    function isLightMode() {
        return document.body.classList.contains('dark-mode');
    }

    function draw() {
        ctx.fillStyle = isLightMode() ? "rgba(255, 255, 255, 0.15)" : "rgba(0, 0, 0, 0.10)";
        ctx.fillRect(0, 0, c.width, c.height);

        ctx.fillStyle = isLightMode() ? "#000000" : "#974ff6";
        ctx.font = isLightMode() ? "bold " + font_size + "px arial" : font_size + "px arial";

        for (var i = 0; i < drops.length; i++) {
            var text = matrix[Math.floor(Math.random() * matrix.length)];
            ctx.fillText(text, i * font_size, drops[i] * font_size);

            if (drops[i] * font_size > c.height && Math.random() > 0.975) {
                drops[i] = 0;
            }

            drops[i]++;
        }
    }

    setInterval(draw, 35);
});
