document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("filterForm");

    if (!form) {
        console.error("Filterformulier niet gevonden!");
        return;
    }

    const categorySelect = document.getElementById("category");
    const minPriceInput = document.getElementById("min_price");
    const maxPriceInput = document.getElementById("max_price");

    if (categorySelect) {
        categorySelect.addEventListener("change", function() {
            form.submit();
        });
    }

    let timeout = null;
    function delayedSubmit() {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            form.submit();
        }, 500); 
    }

    if (minPriceInput) minPriceInput.addEventListener("input", delayedSubmit);
    if (maxPriceInput) maxPriceInput.addEventListener("input", delayedSubmit);
});
