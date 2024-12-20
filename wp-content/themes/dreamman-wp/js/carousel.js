document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("mailchimpModal");
    const btn = document.getElementById("openFormButton");
    const span = document.getElementById("closeModal");
    const text = document.getElementById("textDetails");
    const downloadLinkElement = document.getElementById("downloadLink");

    // Ensure downloadLinkElement exists
    if (!downloadLinkElement) {
        console.error('Download link element not found.');
        return;
    }

    // Get the download link URL from the element
    const downloadLink = downloadLinkElement.getAttribute("data-url") || downloadLinkElement.href;

    // Open Modal when button is clicked
    btn.onclick = function() {
        modal.style.display = "flex";
        text.style.display = "none";
    }

    // Close modal when <span> x is clicked
    span.onclick = function() {
        modal.style.display = "none";
        text.style.display = "flex";
    }

    // Close modal when anywhere outside modal is clicked
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            text.style.display = "flex";
        }
    }

    const form = modal.querySelector("form");
    if (form) {
        form.addEventListener("submit", function(event) {
            event.preventDefault();  // Prevent the default form submission

            // Perform the form submission via AJAX
            fetch(form.action, {
                method: form.method,
                body: new FormData(form)
            }).then(response => {
                if (response.ok) {
                    // Redirect the user to the download link after successful form submission
                    window.location.href = downloadLink;
                } else {
                    // Handle any errors here
                    console.error('Form submission failed.');
                }
            }).catch(error => {
                console.error('An error occurred:', error);
            });
        });
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const streamMusic = document.getElementById("streamMusic");
    const btn = document.getElementById("openStreamModal");
    const span = document.getElementById("closeStreamModal");
    const text = document.getElementById("textDetails");

    // Open Modal when button is clicked
    btn.onclick = function() {
        streamMusic.style.display = "flex";
        text.style.display = "none";
    }

    // Close Modal when <span> x is clicked
    span.onclick = function() {
        streamMusic.style.display = "none";
        text.style.display = "flex";
    }

    // Close Modal when anywhere outside modal is clicked
    window.onclick = function(event) {
        if (event.target == streamMusic) {
            modal.style.display = "none";
            text.style.display = "flex";
        }
    }

    console.log("hello");

});