function calculateNetAmount() {
    let totalAmount = parseFloat(document.getElementById("totalAmountInput").value) || 0;
    let cgstRate = parseFloat(document.getElementById("cgst").value) || 0;
    let sgstRate = parseFloat(document.getElementById("sgst").value) || 0;
    let igstRate = parseFloat(document.getElementById("igst").value) || 0;

    // Calculating tax amounts
    let cgstAmount = (totalAmount * cgstRate) / 100;
    let sgstAmount = (totalAmount * sgstRate) / 100;
    let igstAmount = (totalAmount * igstRate) / 100;

    let totalTax = cgstAmount + sgstAmount + igstAmount;
    let netAmount = totalAmount + totalTax;

    // Updating values in the DOM
    document.getElementById("cgstDisplay").innerText = cgstAmount.toFixed(2);
    document.getElementById("sgstDisplay").innerText = sgstAmount.toFixed(2);
    document.getElementById("igstDisplay").innerText = igstAmount.toFixed(2);
    
    document.getElementById("cgstAmount").value = cgstAmount.toFixed(2);
    document.getElementById("sgstAmount").value = sgstAmount.toFixed(2);
    document.getElementById("igstAmount").value = igstAmount.toFixed(2);

    document.getElementById("taxDisplay").innerText = totalTax.toFixed(2);
    document.getElementById("taxAmount").value = totalTax.toFixed(2);

    document.getElementById("netAmountDisplay").innerText = netAmount.toFixed(2);

    document.getElementById("netAmount").value = netAmount.toFixed(2);
}

// Ensure this function runs on page load in case of pre-filled values
document.addEventListener("DOMContentLoaded", calculateNetAmount);
