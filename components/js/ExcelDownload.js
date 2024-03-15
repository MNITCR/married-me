document.addEventListener("DOMContentLoaded", function () {
const exportButton = document.getElementById("btn_export_excel");

  exportButton.addEventListener("click", () => {
    if (confirm("Are you sure you want to export this file?")) {
      document
        .getElementById("btn_export_excel")
        .addEventListener("click", function () {
          // Create a new workbook
          var wb = XLSX.utils.book_new();

          // Create a new worksheet
          var ws = XLSX.utils.table_to_sheet(
            document.getElementById("printTable")
          );

          // Add the worksheet to the workbook
          XLSX.utils.book_append_sheet(wb, ws, "Sheet 1");

          // Save the workbook as an Excel file
          XLSX.writeFile(wb, "exported_data.xlsx");
        });
    }
  });
});
