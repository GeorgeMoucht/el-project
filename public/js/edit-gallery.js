// Execute JS after hole content of page is loaded.
document.addEventListener('DOMContentLoaded', function() {


    const thumbnails = document.querySelectorAll('.open-modl');
  
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', () => {
            console.log('Thumbnail clicked'); // Check if this logs on click
            const modalId = thumbnail.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
  
            if (modal) {
                modal.style.display = 'block';
  
                const closeButton = modal.querySelector('.btn-close');
                closeButton.addEventListener('click', () => {
                    modal.style.display = 'none';
                });

                const closeButtonDown = modal.querySelector('.close-modal-btn');
                closeButtonDown.addEventListener('click', () => {
                    modal.style.display = 'none';
                });
  
                modal.addEventListener('click', event => {
                  if(event.target === modal) {
                    modal.style.display = 'none';
                  }
                });
            }
        });
    });


    // Mini images modal
    
    // Select all elements with the class img-thumbnail and store them to NodeList
    var galleryImages = document.querySelectorAll(".img-thumbnail");
    var modalImage = document.querySelector("#miniModalImage");

    // Loop through each gallery image using forEach
    galleryImages.forEach(function(image) {
        //Attach a "click" event listener to each gallery image
        image.addEventListener("click", function() {
            // When a gallery image is clicked, tihs function is executed
            console.log("Thumbnail clicked");
            // Get the "src" attribute value of the clicked thumbnail image
            var imageUrl = image.getAttribute('src');

            // Set the "src" attribute of the modal image to the clicked image's URL 
            modalImage.setAttribute('src',imageUrl);

            const modalId = document.querySelector('#imageModal');
            
            if (modalId) {
                modalId.style.display = 'block';

                const closeButton = modalId.querySelector('.close');
                closeButton.addEventListener('click', () => {
                    modalId.style.display = 'none';
                });
            
                modalId.addEventListener('click', event => {
                    if(event.target === modalId) {
                        modalId.style.display = 'none';
                    }
                });
            }
        });
    });
});