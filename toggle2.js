document.getElementById('toggleButton2').addEventListener('click', function() {
    const galleryContainer = document.getElementById('Gallery'); // Ensure the ID matches the gallery container
    if (galleryContainer.style.display === 'none' || galleryContainer.style.display === '') {
        galleryContainer.style.display = 'grid'; // Change to 'grid' to show
    } else {
        galleryContainer.style.display = 'none'; // Hide if currently visible
    }
});
