document.addEventListener('DOMContentLoaded', function () {
    const modalButton = document.querySelector('[data-modal-toggle="authentication-modal"]');
    const modal = document.getElementById('authentication-modal');
    const modalHideButtons = document.querySelectorAll('[data-modal-hide="authentication-modal"]');

    modalButton.addEventListener('click', function () {
        modal.classList.toggle('hidden');
    });

    modalHideButtons.forEach(function (button) {
        button.addEventListener('click', function () {
        modal.classList.add('hidden');
        });
    });

    // Close modal if user clicks outside the modal
    window.addEventListener('click', function (event) {
    if (event.target === modal) {
        modal.classList.add('hidden');
    }
    });

    // Prevent modal from closing if user clicks inside the modal content
    modal.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    document.getElementById('MobileMenuButton').addEventListener('click', function (event) {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

});
