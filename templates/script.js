const openPopup = document.getElementById('openPopup');
const closePopup = document.getElementById('closePopup');
const popupOverlay = document.getElementById('popupOverlay');

// Open popup when button is clicked
openPopup.addEventListener('click', () => {
    popupOverlay.style.display = 'flex';
});

// Close popup when close button is clicked
closePopup.addEventListener('click', () => {
    popupOverlay.style.display = 'none';
});

// Close popup when clicking outside the form
popupOverlay.addEventListener('click', (e) => {
    if (e.target === popupOverlay) {
        popupOverlay.style.display = 'none';
    }
});