document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const faqItem = button.parentElement;
        
        // Toggle the active state
        button.classList.toggle('active');
        
        // Toggle the visibility of the answer
        const faqAnswer = faqItem.querySelector('.faq-answer');
        if (faqAnswer.style.display === 'block') {
            faqAnswer.style.display = 'none';
        } else {
            faqAnswer.style.display = 'block';
        }
    });
});
