document.addEventListener("DOMContentLoaded", function () {
    // ✅ Hamburger Menu Toggle
    const hamMenu = document.querySelector(".ham-menu");
    const offScreenMenu = document.querySelector(".offscreen-menu");

    if (hamMenu && offScreenMenu) {
        hamMenu.addEventListener("click", function () {
            hamMenu.classList.toggle("active");
            offScreenMenu.classList.toggle("active");
        });
    }

    // ✅ Sidebar Toggle (optioneel, als je sidebar-toggle gebruikt)
    const sidebarToggle = document.getElementById("sidebar-toggle");
    const sidebar = document.getElementById("sidebar");

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener("click", function () {
            sidebar.classList.toggle("hidden");
        });
    }

    // ✅ Filters
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

        const categorySections = document.querySelectorAll(".productSection");
        categorySections.forEach(section => {
            let category = section.id;
            section.style.display = (category === selectedCategory || selectedCategory === "all") ? "block" : "none";
        });
    }

    if (categoryFilter) categoryFilter.addEventListener("change", filterProducts);
    if (minPriceFilter) minPriceFilter.addEventListener("input", filterProducts);
    if (maxPriceFilter) maxPriceFilter.addEventListener("input", filterProducts);
});
