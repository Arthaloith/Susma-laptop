function confirmDelete() {
    return confirm('Are you sure you want to delete your account? This action cannot be undone.');
}

function showSuccessMessage() {
    const urlParams = new URLSearchParams(window.location.search);
    const successParam = urlParams.get('success');

    if (successParam === 'true') {
        alert('Account deleted successfully!');
    }
}

window.addEventListener('load', showSuccessMessage);