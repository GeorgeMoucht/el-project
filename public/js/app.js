// $(document).ready(function() {
//     // Animation for the first paragraph
//     $('#homepageParAnimation').addClass('animate__animated animate__fadeInUp');
// });

document.addEventListener('DOMContentLoaded', function() {
    const modalBtn = document.getElementById('navbarDropdown');
    const modalContent = document.getElementById('dropdownContent');


   // Function to open the modal
    function openModal() {
        modalContent.style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        modalContent.style.display = 'none';
    }

    // Event listener to open the modal when modalBtn is clicked
    modalBtn.addEventListener('click', event => {
        if (modalContent.style.display === 'none') {
            openModal();
        } else {
            closeModal();
        }
    });

    // Event listener to close the modal when clicking outside of it
    document.addEventListener('click', event => {
        if (event.target !== modalBtn && event.target !== modalContent) {
            closeModal();
        }
    });

    // Prevent the click event on modalContent from propagating to the document
    modalContent.addEventListener('click', event => {
        event.stopPropagation();
    });

});
