document.addEventListener("DOMContentLoaded", function() {
    const exportButton = document.getElementById('btn-export');

    const table = document.getElementById('printTable');

    exportButton.addEventListener('click', () => {
        if(confirm('Are you sure you want to export this file?')) {
            /* Create worksheet from HTML DOM TABLE */
            const wb = XLSX.utils.table_to_book(table, {sheet: 'sheet-1'});

            /* Export to file (start a download) */
            XLSX.writeFile(wb, 'MyTable.xlsx');
        }
    });
});
