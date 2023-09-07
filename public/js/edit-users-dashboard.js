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


    // Generate password event listener
    const generatePasswordBtn = document.getElementById("generatePasswordBtn");
    
    generatePasswordBtn.addEventListener("click", function () {
        const generatedPassword = generateRandomPassword(8);
        passwordInput.value = generatedPassword;
    });
});

// By giving the length of the password we want. 
// This function will generate passwords for the users.
function generateRandomPassword(length) {
    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    let password = "";
    
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        password += charset.charAt(randomIndex);
    }
    
    return password.substring(0, length); // Limit the password to the desired length
}