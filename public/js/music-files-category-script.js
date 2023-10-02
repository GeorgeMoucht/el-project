// document.addEventListener('DOMContentLoaded', function () {
//     const fileLinks = document.querySelectorAll('.t-js');


//     fileLinks.forEach(function (link) {
//         link.addEventListener('click', function () {
//             const fileUrl = this.parentElement.parentElement.dataset.fileUrl;
//             const pdfViewer = document.getElementById('pdfViewer');
            
//             // Set the PDF URL in the iframe source
//             pdfViewer.src = fileUrl;

//             // Open the modal
//             const modal = new bootstrap.Modal(document.getElementById('fileModal'));
//             modal.show();
//         });
//     });

// });



document.addEventListener('DOMContentLoaded', function () {
    const fileLinks = document.querySelectorAll('.t-js');

    fileLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            const fileUrl = this.parentElement.parentElement.dataset.fileUrl;
            const pdfViewer = document.getElementById('pdfViewer');

            // Set the PDF URL in the iframe source
            pdfViewer.src = fileUrl;

            // Wait for the iframe to load
            pdfViewer.onload = function () {
                // Access the iframe's content document
                const iframeDocument = pdfViewer.contentDocument;

                // Check if the iframeDocument exists
                if (iframeDocument) {
                    // Find the toolbarView element (you may need to inspect the PDF.js structure)
                    const toolbarView = iframeDocument.querySelector('.toolbarView');
                    // Check if the toolbarView element exists
                    if (toolbarView) {
                        // Add your CSS rule to toolbarView
                        toolbarView.style.display = 'none'; // Replace with your CSS rule
                    }
                }
            };

            // Open the modal
            const modal = new bootstrap.Modal(document.getElementById('fileModal'));
            modal.show();
        });
    });
});


