function exchangeMoney() {
    // Get the value of the Riel input
    let rielInput = document.getElementById('moneyRiel').value;

    // Convert Riel to Dollars (1 Riel = 4000 Dollars)
    let dollars = rielInput / 4000;

    // Update the Dollar input field
    document.getElementById('moneyDolar').value = dollars.toFixed(2);
}
