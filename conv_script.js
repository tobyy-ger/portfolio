const rates = {
    EUR: { USD: 1.1, CZK: 24.5, GBP: 0.88 },
    USD: { EUR: 0.91, CZK: 22.3, GBP: 0.8 },
    CZK: { EUR: 0.041, USD: 0.045, GBP: 0.036 },
    GBP: { EUR: 1.14, USD: 1.25, CZK: 28 }
};

document.getElementById('convertBtn').addEventListener('click', () => {
    const amount = parseFloat(document.getElementById('amount').value);
    const from = document.getElementById('fromCurrency').value;
    const to = document.getElementById('toCurrency').value;
    const resultDiv = document.getElementById('result');

    if (isNaN(amount) || amount <= 0) {
        resultDiv.textContent = "Zadej platnou částku větší než 0.";
        return;
    }

    if (from === to) {
        resultDiv.textContent = `Výsledek: ${amount.toFixed(2)} ${to}`;
        return;
    }

    if (rates[from] && rates[from][to]) {
        const convertedAmount = amount * rates[from][to];
        resultDiv.textContent = `Výsledek: ${convertedAmount.toFixed(2)} ${to}`;
    } else {
        resultDiv.textContent = "Kurz pro tuto měnovou kombinaci není dostupný.";
    }
});
