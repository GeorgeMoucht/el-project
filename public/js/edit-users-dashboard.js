// Execute JS after hole content of page is loaded.
document.addEventListener('DOMContentLoaded', function() {

    // Mini images modal for delete gallery image

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

    // Insert new user modal functionality.

    const insertUserBtn = document.getElementById("insertUserBtn");

    insertUserBtn.addEventListener('click', () => {
        const modalId = insertUserBtn.getAttribute('data-modal');
        const modal = document.getElementById(modalId);
        const modalForm = document.getElementById('isertUserForm');

        if (modal) {
            modal.style.display = 'block';

            const closeButton = modal.querySelector('.btn-close');
            closeButton.addEventListener('click', () => {
                modal.style.display = 'none';
                modalForm.reset();
            });

            const closeButtonDown = modal.querySelector('.close-modal-btn');
            closeButtonDown.addEventListener('click', () => {
                modal.style.display = 'none';
                modalForm.reset();
            });

            modal.addEventListener('click', event => {
                if(event.target === modal) {
                    modal.style.display = 'none';
                    modalForm.reset();
                }
            });
        }
    });


    // Make password field as type=text if user click the button.
    const passwordInput = document.getElementById("passwordField");
    const togglePasswordBtn = document.getElementById("passwordFieldToggle");
    const showPasswordSvg = document.getElementById('passwordSvg');

    togglePasswordBtn.addEventListener("click", function () {

        if(passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordSvg.src = assetBaseUrl + "img/svg/eye-slash-fill.svg";
        } else {
            passwordInput.type = "password";
            showPasswordSvg.src = assetBaseUrl + "img/svg/eye-fill.svg";
        }
    });
});