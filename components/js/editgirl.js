function openEditModal(girlId) {
    var modal = document.getElementById('editgirl-modal');
    if (modal) {
        document.getElementById('girl_id').value = girlId;
        modal.classList.toggle('hidden');
    } else {
        console.error('Modal element not found.');
        return;
    }

    fetch(`../components/php/getgirldata.php?girl_id=${girlId}`)
    .then(response => response.json())
    .then(data => {
        // Check if data is not null or undefined
        if (data) {
            // Populate modal fields with data
            document.getElementById('fullnameKhmer').value = data.khmername;
            document.getElementById('fullnameEnglish').value = data.englishname;
            document.getElementById('phone').value = data.phone;
            document.getElementById('moneyRiel').value = data.moneyriel;
            document.getElementById('moneyDolar').value = data.moneydolar;
            document.getElementById('location').value = data.locaid;
            document.getElementById('command').value = data.commment;

            // Show the modal
            document.getElementById('editgirl-modal').classList.remove('hidden');
        } else {
            console.error('Received null or undefined data from the server.');
        }
    })
    .catch(error => console.error('Error fetching girl data:', error));
}
