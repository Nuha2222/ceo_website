//FAQ Section

document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const answer = button.nextElementSibling;
        const isVisible = answer.style.display === 'block';

        // Close all answers
        document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');

        if (!isVisible) {
            answer.style.display = 'block';
        }
    });
});

//FAQ Section Toggle Feature
function toggleFAQ(faqId, button) {
    const faqContent = document.getElementById(faqId);
    const iconExpand = button.querySelector('svg:nth-child(1)'); // Collapsed Icon
    const iconCollapse = button.querySelector('svg:nth-child(2)'); // Expanded Icon

    // Toggle the display of the answer
    const isExpanded = faqContent.style.display === "block";
    faqContent.style.display = isExpanded ? "none" : "block";

    // Toggle the visibility of the icons
    iconExpand.classList.toggle("hidden", !isExpanded);
    iconCollapse.classList.toggle("hidden", isExpanded);

    // Toggle the aria-expanded attribute
    button.setAttribute("aria-expanded", !isExpanded);
}
