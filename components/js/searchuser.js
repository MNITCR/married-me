function searchTable() {
    var input, filter, table, tr, tdKhmerName, tdEnglishName, tdVillage, i, txtValueKhmerName, txtValueEnglishName, txtValueVillage, noResultsMessage;
    input = document.getElementById("pro-search");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");
    noResultsMessage = document.getElementById("messageUser");

    var anyResultsFound = false;

    for (i = 0; i < tr.length; i++) {
        tdKhmerName = tr[i].getElementsByTagName("td")[0];
        tdEnglishName = tr[i].getElementsByTagName("td")[1];
        tdVillage = tr[i].getElementsByTagName("td")[5];

        if (tdKhmerName && tdEnglishName && tdVillage) {
            txtValueKhmerName = tdKhmerName.textContent || tdKhmerName.innerText;
            txtValueEnglishName = tdEnglishName.textContent || tdEnglishName.innerText;
            txtValueVillage = tdVillage.textContent || tdVillage.innerText;

            if (txtValueKhmerName.toUpperCase().indexOf(filter) > -1 ||
                txtValueEnglishName.toUpperCase().indexOf(filter) > -1 ||
                txtValueVillage.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                anyResultsFound = true;
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    // Toggle the visibility of the noResultsMessage row based on anyResultsFound
    noResultsMessage.style.display = anyResultsFound ? "none" : "table-row";
}
