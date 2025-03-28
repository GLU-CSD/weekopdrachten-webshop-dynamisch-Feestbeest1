document.addEventListener("DOMContentLoaded", function() {
    const categoryFilter = document.getElementById("category");
    const minPriceFilter = document.getElementById("min_price");
    const maxPriceFilter = document.getElementById("max_price");
    const products = document.querySelectorAll(".product");
    
    function filterProducts() {
        let selectedCategory = categoryFilter.value;
        let minPrice = parseFloat(minPriceFilter.value) || 0;
        let maxPrice = parseFloat(maxPriceFilter.value) || Infinity;

        products.forEach(product => {
            let productCategory = product.getAttribute("data-category");
            let productPrice = parseFloat(product.getAttribute("data-price"));

            let categoryMatch = (selectedCategory === "all" || productCategory === selectedCategory);
            let priceMatch = (productPrice >= minPrice && productPrice <= maxPrice);

            if (categoryMatch && priceMatch) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });

        console.log(selectedCategory);

        const categorySections = document.querySelectorAll(".productSection");
        categorySections.forEach(section => {
            let category = section.id;
            if (category === selectedCategory || selectedCategory === "all") {
                section.style.display = "block";
            } else {
                section.style.display = "none";
            }
        });
    }

    // Event Listeners voor filteren
    categoryFilter.addEventListener("change", filterProducts);
    minPriceFilter.addEventListener("input", filterProducts);
    maxPriceFilter.addEventListener("input", filterProducts);
});
