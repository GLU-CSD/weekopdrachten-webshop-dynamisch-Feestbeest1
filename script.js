document.addEventListener("DOMContentLoaded", function () {
    const categorySelect = document.getElementById("category");
    const minPriceInput = document.getElementById("min_price");
    const maxPriceInput = document.getElementById("max_price");
    const products = document.querySelectorAll(".product");

    function filterProducts() {
        const selectedCategory = categorySelect ? categorySelect.value : "all";
        const minPrice = minPriceInput ? parseFloat(minPriceInput.value) || 0 : 0;
        const maxPrice = maxPriceInput ? parseFloat(maxPriceInput.value) || Infinity : Infinity;

        products.forEach(product => {
            const productCategory = product.getAttribute("data-category");
            const productPrice = parseFloat(product.getAttribute("data-price")) || 0;
            
            const categoryMatch = (selectedCategory === "all" || productCategory === selectedCategory);
            const priceMatch = (productPrice >= minPrice && productPrice <= maxPrice);
            
            if (categoryMatch && priceMatch) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });
    }

    if (categorySelect) categorySelect.addEventListener("change", filterProducts);
    if (minPriceInput) minPriceInput.addEventListener("input", filterProducts);
    if (maxPriceInput) maxPriceInput.addEventListener("input", filterProducts);
});
