function confirmDelete(girlId) {
    if (confirm("Are you sure you want to delete this entry?")) {
        deleteBoy(girlId);
    }
}

function deleteBoy(girlId) {
    window.location.href = `../components/php/deletegirl.php?girl_id=${girlId}`;
}
