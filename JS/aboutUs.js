document.getElementById('learnMoreBtn').addEventListener('click', function() {
    var hiddenContent = document.getElementById('hidden-content');
    if (hiddenContent.style.display === 'none') {
        hiddenContent.style.display = 'block';
        this.textContent = 'Show Less';
        
    } else {
        hiddenContent.style.display = 'none';
        this.textContent = 'Learn More';
    }
  });