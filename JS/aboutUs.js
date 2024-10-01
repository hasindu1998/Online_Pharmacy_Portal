// Get references to the button and the hidden content
const learnMoreBtn = document.getElementById('learnMoreBtn');
const hiddenContent = document.getElementById('hidden-content');

// Initially, ensure the hidden content is not visible
hiddenContent.style.display = "none";

// Add a click event listener to the Learn More button
learnMoreBtn.addEventListener('click', function() {
    // Check if the content is currently hidden
    if (hiddenContent.style.display === "none") {
        // Show the hidden content
        hiddenContent.style.display = "block";
        // Change the button text to "Show Less"
        learnMoreBtn.textContent = "Show Less";
    } else {
        // Hide the content again
        hiddenContent.style.display = "none";
        // Change the button text back to "Learn More"
        learnMoreBtn.textContent = "Learn More";
    }
});
