// Function to toggle the snow effect
function toggleSnow() {
  const particlesElement = document.getElementById("particles-js");
  particlesElement.style.display =
    particlesElement.style.display === "none" ? "block" : "none";
}

// Initial call to particlesJS to start the snow effect
particlesJS("particles-js", {
  particles: {
    number: {
      value: 200,
      density: {
        enable: true,
        value_area: 800,
      },
    },
    color: {
      value: "#ffffff",
    },
    opacity: {
      value: 0.7,
      random: false,
      anim: {
        enable: false,
      },
    },
    size: {
      value: 3,
      random: true,
      anim: {
        enable: false,
      },
    },
    line_linked: {
      enable: false,
    },
    move: {
      enable: true,
      speed: 2,
      direction: "bottom",
      straight: false,
    },
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: {
        enable: false,
      },
      onclick: {
        enable: false,
      },
      resize: true,
    },
  },
  retina_detect: true,
});

// Initialize the snow effect as hidden
document.getElementById("particles-js").style.display = "none";
