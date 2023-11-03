function updateDigitalClock() {
    const digitalClock = document.getElementById('digital-clock');
    const currentTime = new Date();
    const hours = currentTime.getHours().toString().padStart(2, '0');
    const minutes = currentTime.getMinutes().toString().padStart(2, '0');
    const seconds = currentTime.getSeconds().toString().padStart(2, '0');
    const timeString = `${hours}:${minutes}:${seconds}`;
    digitalClock.textContent = timeString;
  }

  // Update the digital clock every second
  setInterval(updateDigitalClock, 1000);

  // Synchronize the clock when the page loads
  updateDigitalClock();

function updateCurrentDate() {
    const currentDateElement = document.getElementById('current-date');
    const currentDate = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = currentDate.toLocaleDateString(undefined, options);
    currentDateElement.textContent = formattedDate;
  }

  // Call updateCurrentDate initially to show the current date immediately
  updateCurrentDate();