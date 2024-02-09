const NotSuccessAlert = document.getElementById('formNotSuccessAlert');

function showNotSuccessAlert() {
    NotSuccessAlert.classList.remove('-translate-y-[10rem]');
    setTimeout(() => {
        NotSuccessAlert.classList.add('-translate-y-[10rem]');
    }, 2000);
}
