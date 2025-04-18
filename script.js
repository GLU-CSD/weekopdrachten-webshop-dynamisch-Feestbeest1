document.addEventListener("DOMContentLoaded", () => {

    const hamMenu = document.querySelector(".ham-menu");
    const offScreenMenu = document.querySelector(".offscreen-menu");

    if (hamMenu && offScreenMenu) {
        hamMenu.addEventListener("click", () => {
            hamMenu.classList.toggle("active");
            offScreenMenu.classList.toggle("active");
        });
    }


    const sidebarToggle = document.getElementById("sidebar-toggle");
    const sidebar = document.getElementById("sidebar");

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("hidden");
        });
    }


    const categoryFilter = document.getElementById("category");
    const minPriceFilter = document.getElementById("min_price");
    const maxPriceFilter = document.getElementById("max_price");
    const products = document.querySelectorAll(".product");
    const noResults = document.getElementById("noResults"); 

    const filterProducts = () => {
        const selectedCategory = categoryFilter?.value || "all";
        const minPrice = parseFloat(minPriceFilter?.value) || 0;
        const maxPrice = parseFloat(maxPriceFilter?.value) || Infinity;

        let visibleCount = 0;

        products.forEach(product => {
            const productCategory = product.getAttribute("data-category");
            const productPrice = parseFloat(product.getAttribute("data-price"));

            const categoryMatch = selectedCategory === "all" || productCategory === selectedCategory;
            const priceMatch = productPrice >= minPrice && productPrice <= maxPrice;

            if (categoryMatch && priceMatch) {
                product.style.display = "block";
                visibleCount++;
            } else {
                product.style.display = "none";
            }
        });

        const categorySections = document.querySelectorAll(".productSection");
        categorySections.forEach(section => {
            const sectionCategory = section.id;
            section.style.display = (selectedCategory === "all" || sectionCategory === selectedCategory)
                ? "block"
                : "none";
        });

        if (noResults) {
            noResults.style.display = visibleCount === 0 ? "block" : "none";
        }
    };

    if (categoryFilter) categoryFilter.addEventListener("change", filterProducts);
    if (minPriceFilter) minPriceFilter.addEventListener("input", filterProducts);
    if (maxPriceFilter) maxPriceFilter.addEventListener("input", filterProducts);

    const resetButton = document.getElementById("resetFilters");
    if (resetButton) {
        resetButton.addEventListener("click", () => {
            if (categoryFilter) categoryFilter.value = "all";
            if (minPriceFilter) minPriceFilter.value = "";
            if (maxPriceFilter) maxPriceFilter.value = "";
            filterProducts();
        });
    }

    filterProducts();
});

