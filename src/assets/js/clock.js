    // Function for the Clock to update the time
    function updateTime() {
        const now = new Date();
        document.getElementById('current-time').innerText = now.toLocaleTimeString('de-DE', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        setTimeout(updateTime, 1000);
    }

    updateTime();