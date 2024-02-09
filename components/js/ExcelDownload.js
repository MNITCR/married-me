document.addEventListener("DOMContentLoaded", function () {
  const exportButton = document.getElementById("btn-export");

  const table = document.getElementById("printTable");

  exportButton.addEventListener("click", () => {
    if (confirm("Are you sure you want to export this file?")) {
        /* Create worksheet from HTML DOM TABLE */
        // const wb = XLSX.utils.table_to_book(table, {sheet: 'sheet-1'});

        /* Export to file (start a download) */
        //   XLSX.writeFile(wb, "MyTable.xlsx");


        // var btnXlsx = document.querySelectorAll('.action button')[0]
        // var btnXls = document.querySelectorAll('.action button')[1]
        // var btnCsv = document.querySelectorAll('.action button')[2]

        table.onclick = () => exportData('xlsx')
        // btnXls.onclick = () => exportData('xls')
        // btnCsv.onclick = () => exportData('csv')

        function exportData(type){
            const fileName = 'exported-sheet.' + type
            const table = document.getElementById("table")
            const wb = XLSX.utils.table_to_book(table)
            XLSX.writeFile(wb, fileName)
        }
    }
  });
});
