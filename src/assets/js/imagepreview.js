var modal = document.getElementById('myModal');
var images = document.querySelectorAll('.workIMG');
var modalImg = document.getElementById('img01');
var closeModal = document.querySelector('.close');

// Function to open the modal with Animate.css
function openModal(imageSrc) {
    modal.classList.remove('hidden', 'animate__animated', 'animate__fadeOut');
    modal.classList.add('active', 'animate__animated', 'animate__fadeIn');
    modalImg.src = imageSrc;
}

// Function to close the modal with Animate.css
function closeModalFunction() {
    modal.classList.add('animate__fadeOut');
    setTimeout(() => {
        modal.classList.remove('active', 'animate__animated', 'animate__fadeIn', 'animate__fadeOut');
        modal.classList.add('hidden');
    }, 800); // Duration of the fade out animation
}

images.forEach(img => {
    img.onclick = function() {
        openModal(this.src);
    };
});

closeModal.onclick = closeModalFunction;

window.onclick = function(event) {
    if (event.target === modal) {
        closeModalFunction();
    }
};