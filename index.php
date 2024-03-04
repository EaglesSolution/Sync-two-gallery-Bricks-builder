<script>
document.addEventListener('DOMContentLoaded', function() {
    // Hide all images in the large gallery
    const largeImages = document.querySelectorAll('.large-gallery .bricks-layout-item');
    largeImages.forEach(image => image.style.display = 'none');

    // Display the first image from the small gallery in the large gallery
    const firstImage = largeImages[0];
    firstImage.style.display = 'block';

    // Set event listener on all images within the small gallery
    document.querySelectorAll('.mini-gallery-item .bricks-layout-item').forEach((item, index) => {
        item.addEventListener('mouseover', function() {
            // Hide all images
            largeImages.forEach(image => image.style.display = 'none');
            
            // Display the corresponding image
            const correspondingImage = largeImages[index];
            correspondingImage.style.display = 'block';
        });

        item.addEventListener('click', function() {
            // Hide all images
            largeImages.forEach(image => image.style.display = 'none');
            
            // Display the corresponding image
            const correspondingImage = largeImages[index];
            correspondingImage.style.display = 'block';
        });
    });
});
</script>
