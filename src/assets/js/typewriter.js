const messages = [
    "Willkommen in meinem Portfolio!",
    "Schauen Sie sich meine Projekte an.",
    "Erfahren Sie mehr über mich."
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