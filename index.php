<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <title>Ресто в евро</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="assets/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg"/>
    <link rel="shortcut icon" href="assets/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png"/>
    <meta name="apple-mobile-web-app-title" content="Euro Converter"/>
    <link rel="manifest" href="assets/site.webmanifest"/>

    <link rel="stylesheet" href="styles/main.css?v=1.0">

</head>
<body>

<h1>Ресто в евро</h1>

<div class="field">
    <label for="price">Сметка (евро)</label>
    <input type="number" id="price" placeholder="напр. 12.45" step="0.01" inputmode="decimal" min="0.01">
</div>

<div class="field">
    <label for="paid">Платени (лв)</label>
    <input type="number" id="paid" placeholder="напр. 100" step="0.01" inputmode="decimal" min="0.01">

    <div class="banknote-buttons">
        <button type="button" onclick="setPaid(10)">10 лв</button>
        <button type="button" onclick="setPaid(20)">20 лв</button>
        <button type="button" onclick="setPaid(50)">50 лв</button>
        <button type="button" onclick="setPaid(100)">100 лв</button>
    </div>
</div>

<div id="result" class="result"></div>

<div class="actions">
    <button type="button" id="clearBtn" class="clear-btn">Изчисти</button>
</div>

<!--<button id="installBtn" hidden>Install App</button>-->
<!---->
<!--<script>-->
<!--    let deferredPrompt;-->
<!--    const installBtn = document.getElementById('installBtn');-->
<!---->
<!--    window.addEventListener('beforeinstallprompt', (e) => {-->
<!--        // Stop Chrome’s mini-infobar-->
<!--        e.preventDefault();-->
<!--        deferredPrompt = e;-->
<!--        installBtn.hidden = false;-->
<!--    });-->
<!---->
<!--    installBtn.addEventListener('click', async () => {-->
<!--        installBtn.hidden = true;-->
<!--        if (!deferredPrompt) return;-->
<!--        deferredPrompt.prompt(); // Show native install dialog-->
<!--        const { outcome } = await deferredPrompt.userChoice;-->
<!--        console.log(`User response: ${outcome}`);-->
<!--        deferredPrompt = null;-->
<!--    });-->
<!--</script>-->

<script src="scripts/main.js?v=1.0"></script>
</body>
</html>
