document.addEventListener('DOMContentLoaded', () => {
    // Handle delete form submission with confirmation
    const deleteForms = document.querySelectorAll('form.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', event => {
            if (!confirm('Are you sure you want to delete this item?')) {
                event.preventDefault();
            }
        });
    });

    // Optionally, you could add a confirmation for save/update actions
    const saveForms = document.querySelectorAll('form.save-form');
    saveForms.forEach(form => {
        form.addEventListener('submit', event => {
            if (!confirm('Are you sure you want to save this item?')) {
                event.preventDefault();
            }
        });
    });
});
