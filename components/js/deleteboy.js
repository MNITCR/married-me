function confirmDelete(boyId) {
    if (confirm("Are you sure you want to delete this entry?")) {
        deleteBoy(boyId);
    }
}

function deleteBoy(boyId) {
    window.location.href = `../components/php/deleteboy.php?boy_id=${boyId}`;
}
