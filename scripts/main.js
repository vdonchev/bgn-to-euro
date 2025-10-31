const rate = 1.95583;
const priceInput = document.getElementById("price");
const paidInput = document.getElementById("paid");
const resultOutput = document.getElementById("result");
const clearBtn = document.getElementById("clearBtn");

function updateChange() {
    const priceEuro = parseFloat(priceInput.value);
    const paidLev = parseFloat(paidInput.value);

    // показва бутона само ако има въведено нещо
    if (priceInput.value || paidInput.value) {
        clearBtn.style.display = "inline-block";
    } else {
        clearBtn.style.display = "none";
    }

    if (isNaN(priceEuro) || isNaN(paidLev)) {
        resultOutput.style.display = "none";
        return;
    }

    if (priceEuro <= 0) {
        showWarning("Сметката трябва да е положително число.");
        return;
    }

    if (paidLev <= 0) {
        showWarning("Платената сума трябва да е положително число.");
        return;
    }

    const priceLev = priceEuro * rate;

    if (paidLev < priceLev) {
        showWarning("Платената сума трябва да е по-голяма от сметката.");
        return;
    }

    const euroPaid = paidLev / rate;
    const euroChange = euroPaid - priceEuro;

    const roundedEuro = euroChange.toFixed(2);
    const roundedLev = (roundedEuro * rate).toFixed(2);

    resultOutput.className = "result";
    resultOutput.innerHTML = `Ресто: ${roundedEuro} €<small>(${roundedLev} лв)</small>`;
    resultOutput.style.display = "block";
}

function showWarning(message) {
    resultOutput.className = "result warning";
    resultOutput.textContent = message;
    resultOutput.style.display = "block";
}

function setPaid(amount) {
    paidInput.value = amount.toFixed(2);
    updateChange();
}

function clearFields() {
    priceInput.value = "";
    paidInput.value = "";
    resultOutput.style.display = "none";
    clearBtn.style.display = "none";
}

clearBtn.addEventListener("click", clearFields);
priceInput.addEventListener("input", updateChange);
paidInput.addEventListener("input", updateChange);
