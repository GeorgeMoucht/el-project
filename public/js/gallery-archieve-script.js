// Execute JS after hole content of page is loaded.
document.addEventListener('DOMContentLoaded', function() {


  const thumbnails = document.querySelectorAll('.gallery-itm');

  thumbnails.forEach(thumbnail => {
      thumbnail.addEventListener('click', () => {
          console.log('Thumbnail clicked'); // Check if this logs on click
          const modalId = thumbnail.getAttribute('data-modal');
          const modal = document.getElementById(modalId);

          if (modal) {
              modal.style.display = 'block';

              const closeButton = modal.querySelector('.close');
              closeButton.addEventListener('click', () => {
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

});